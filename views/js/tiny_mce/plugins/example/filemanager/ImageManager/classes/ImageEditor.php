<?php
/**
 * Image Editor. Editing tools, crop, rotate, scale and save.
 * @author $Author: ray $
 * @version $Id: ImageEditor.php 709 2007-01-30 23:22:04Z ray $
 * @package ImageManager
 */

require_once('../ImageManager/classes/Transform.php');

/**
 * Handles the basic image editing capbabilities.
 * @author $Author: ray $
 * @version $Id: ImageEditor.php 709 2007-01-30 23:22:04Z ray $
 * @package ImageManager
 * @subpackage Editor
 */
class ImageEditor 
{
	/**
	 * ImageManager instance.
	 */
	var $manager;

	/**
	 * user based on IP address
	 */
	var $_uid;

	/**
	 * tmp file storage time.
	 */
	var $lapse_time =900; //15 mins

	var $filesaved = 0;

	/**
	 * Create a new ImageEditor instance. Editing requires a 
	 * tmp file, which is saved in the current directory where the
	 * image is edited. The tmp file is assigned by md5 hash of the
	 * user IP address. This hashed is used as an ID for cleaning up
	 * the tmp files. In addition, any tmp files older than the
	 * the specified period will be deleted.
	 * @param ImageManager $manager the image manager, we need this
	 * for some file and path handling functions.
	 */
	function ImageEditor($manager) 
	{
		$this->manager = $manager;
		$this->_uid = md5($_SERVER['REMOTE_ADDR']);
	}
	
	/**
	 * Did we save a file?
	 * @return int 1 if the file was saved sucessfully, 
	 * 0 no save operation, -1 file save error.
	 */
	function isFileSaved() 
	{
		return $this->filesaved;
	}

	/**
	 * Process the image, if not action, just display the image.
	 * @return array with image information, empty array if not an image.
	 * <code>array('src'=>'url of the image', 'dimensions'=>'width="xx" height="yy"',
	 * 'file'=>'image file, relative', 'fullpath'=>'full path to the image');</code>
	 */
	function processImage() 
	{
		if(isset($_GET['img']))
			$relative = rawurldecode($_GET['img']);
		else
			return array();
		
		//$relative = '/Series2004NoteFront.jpg';

		$imgURL = $this->manager->getFileURL($relative);
		$fullpath = $this->manager->getFullPath($relative);
		
		//$imgInfo = @getImageSize($fullpath);
		$imgInfo = @getimagesize($fullpath);
		if(!is_array($imgInfo))
			return array();

		$action = $this->getAction();

		if(!is_null($action)) {
			$image = $this->processAction($action, $relative, $fullpath);
		}
		else
		{
			$image['src'] = $imgURL;
			$image['dimensions'] = $imgInfo[3];
			$image['file'] = $relative;
			$image['fullpath'] = $fullpath;
		}

		return $image;
	}

	/**
	 * Process the actions, crop, scale(resize), rotate, flip, and save.
	 * When ever an action is performed, the result is save into a
	 * temporary image file, see createUnique on the filename specs.
	 * It does not return the saved file, alway returning the tmp file.
	 * @param string $action, should be 'crop', 'scale', 'rotate','flip', or 'save'
	 * @param string $relative the relative image filename
	 * @param string $fullpath the fullpath to the image file
	 * @return array with image information
	 * <code>array('src'=>'url of the image', 'dimensions'=>'width="xx" height="yy"',
	 * 'file'=>'image file, relative', 'fullpath'=>'full path to the image');</code>
	 */
	function processAction($action, $relative, $fullpath) 
	{
		$params = '';
		if(isset($_GET['params']))
			$params = $_GET['params'];

		$values =  explode(',',$params,4);
		$saveFile = $this->getSaveFileName($values[0]);

		$img = Image_Transform::factory(IMAGE_CLASS);
		$img->load($fullpath);

		switch ($action) 
		{
			case 'crop':
				$img->crop(intval($values[0]),intval($values[1]),
							intval($values[2]),intval($values[3]));
			break;
			case 'scale':
				$img->resize(intval($values[0]),intval($values[1]));
				break;
			case 'rotate':
				$img->rotate(floatval($values[0]));
				break;
			case 'flip':
				if ($values[0] == 'hoz')
					$img->flip(true);
				else if($values[0] == 'ver') 
					$img->flip(false);
				break;
			case 'save':
				if(!is_null($saveFile))
				{
					$quality = intval($values[1]);
		            if($quality <0) $quality = 85;
					$newSaveFile = $this->makeRelative($relative, $saveFile);
					$newSaveFile = $this->getUniqueFilename($newSaveFile);
					
					//get unique filename just returns the filename, so
					//we need to make the relative path once more.
					$newSaveFile = $this->makeRelative($relative, $newSaveFile);
				    $image['saveFile'] = $newSaveFile;
					$newSaveFullpath = $this->manager->getFullPath($newSaveFile);
					$img->save($newSaveFullpath, $values[0], $quality);
					if(is_file($newSaveFullpath)) {
						$this->filesaved = 1;
					}else
						$this->filesaved = -1;
				}
				break;
		}
		
		//create the tmp image file
		$filename = $this->createUnique($fullpath);
		$newRelative = $this->makeRelative($relative, $filename);
		$newFullpath = $this->manager->getFullPath($newRelative);
		$newURL = $this->manager->getFileURL($newRelative);

		//save the file.
		$img->save($newFullpath);
		$img->free();

		//get the image information
		$imgInfo = @getimagesize($newFullpath);

		$image['src'] = $newURL;
		$image['width'] = $imgInfo[0];
		$image['height'] = $imgInfo[1];
		$image['dimensions'] = $imgInfo[3];
		$image['file'] = $newRelative;
		$image['fullpath'] = $newFullpath;
		
		echo "<script>
			if('save' != '".$action."') {
				var action_div = parent.document.getElementById('tools_".$action."'); 
				if(action_div) 
					action_div.style.display='none';
			}
		</script>";
		
		return $image;
	
	}

	/**
	 * Get the file name base on the save name
	 * and the save type.
	 * @param string $type image type, 'jpeg', 'png', or 'gif'
	 * @return string the filename according to save type
	 */
	function getSaveFileName($type) 
	{
		if(!isset($_GET['file']))
			return null;

		$filename = ImageManager::escape(rawurldecode($_GET['file']));
		$index = strrpos($filename,'.');
		$base = substr($filename,0,$index);
		$ext = strtolower(substr($filename,$index+1,strlen($filename)));

		if($type == 'jpeg' && !($ext=='jpeg' || $ext=='jpg'))
		{
			return $base.'.jpeg';
		}
		if($type=='png' && $ext != 'png')
			return $base.'.png';
		if($type=='gif' && $ext != 'gif')
			return $base.'.gif';

		return $filename;
	}

	/**
	 * Get the default save file name, used by editor.php.
	 * @return string a suggestive filename, this should be unique
	 */
	function getDefaultSaveFile() 
	{
		if(isset($_GET['img']))
			$relative = rawurldecode($_GET['img']);
		else
			return null;

		//return $this->getUniqueFilename($relative);
		return basename($relative);
	}
	
	/**
	 * Get the overwrite file, used by editor.php.
	 * @return boollean: true or false
	 */
	function getOverWriteFile() 
	{
		if(isset($_GET['fileoverwrite']))
			$overwrite = $_GET['fileoverwrite'] ? true : false;
		return $overwrite;
	}
	
	/**
	 * Get a unique filename. If the file exists, the filename
	 * base is appended with an increasing integer.
	 * @param string $relative the relative filename to the base_dir
	 * @return string a unique filename in the current path
	 */
	function getUniqueFilename($relative) 
	{
		$fullpath = $this->manager->getFullPath($relative);
		
		$pathinfo = pathinfo($fullpath);

		$path = ImageManager::fixPath($pathinfo['dirname']);
		$file = ImageManager::escape($pathinfo['basename']);
		
		$filename = $file;

		if(!$this->getOverWriteFile()) {
			$dotIndex = strrpos($file, '.');
			$ext = '';
	
			if(is_int($dotIndex)) 
			{
				$ext = substr($file, $dotIndex);
				$base = substr($file, 0, $dotIndex);
			}
	
			$counter = 0;
			while(is_file($path.$filename)) 
			{
				$counter++;
				$filename = $base.'_'.$counter.$ext;
			}
		}
		return $filename;
	}

	/**
	 * Specifiy the original relative path, a new filename
	 * and return the new filename with relative path.
	 * i.e. $pathA (-filename) + $file
	 * @param string $pathA the relative file
	 * @param string $file the new filename
	 * @return string relative path with the new filename
	 */
	function makeRelative($pathA, $file) 
	{
		$index = strrpos($pathA,'/');
		if(!is_int($index))
			return $file;

		$path = substr($pathA, 0, $index);
		return ImageManager::fixPath($path).$file;
	}

	/**
	 * Get the action GET parameter
	 * @return string action parameter
	 */
	function getAction() 
	{
		$action = null;
		if(isset($_GET['action']))
			$action = $_GET['action'];
		return $action;
	}

	/**
	 * Generate a unique string based on md5(microtime()).
	 * Well not so uniqe, as it is limited to 6 characters
	 * @return string unique string.
	 */
    function uniqueStr()
    {
      return substr(md5(microtime()),0,6);
    }

	/**
	 * Create unique tmp image file name.
	 * The filename is based on the tmp file prefix
	 * specified in config.inc.php plus 
	 * the UID (basically a md5 of the remote IP)
	 * and some random 6 character string.
	 * This function also calls to clean up the tmp files.
	 * @param string $file the fullpath to a file
	 * @return string a unique filename for that path
	 * NOTE: it only returns the filename, path no included.
	 */
	function createUnique($file) 
	{
		$pathinfo = pathinfo($file);
		$path = ImageManager::fixPath($pathinfo['dirname']);
		$imgType = $this->getImageType($file);
		
		$unique_str = $this->manager->getTmpPrefix().$this->_uid.'_'.$this->uniqueStr().".".$imgType;

	   //make sure the the unique temp file does not exists
        while (file_exists($path.$unique_str))
        {
            $unique_str = $this->manager->getTmpPrefix().$this->_uid.'_'.$this->uniqueStr().".".$imgType;
        }

		$this->cleanUp($path,$pathinfo['basename']);
		
		return $unique_str;
	}
	
	/**
	 * Delete any tmp image files.
	 * @param string $path the full path 
	 * where the clean should take place.
	 */
	function cleanUp($path,$file) 
	{
		$path = ImageManager::fixPath($path);

		if(!is_dir($path))
			return false;

		$d = @dir($path);
		
		$tmp = $this->manager->getTmpPrefix();
		$tmpLen = strlen($tmp);

		$prefix = $tmp.$this->_uid;
		$len = strlen($prefix);

		while (false !== ($entry = $d->read())) 
		{
			//echo $entry."<br>";
			if(is_file($path.$entry) && $this->manager->isTmpFile($entry))
			{
				if(substr($entry,0,$len)==$prefix && $entry != $file)
					ImageManager::delFile($path.$entry);
				else if(substr($entry,0,$tmpLen)==$tmp && $entry != $file)
				{
					if(filemtime($path.$entry)+$this->lapse_time < time())
						ImageManager::delFile($path.$entry);
				}
			}
		}
		$d->close();
	}

	/**
	 * Get the image type base on an image file.
	 * @param string $file the full path to the image file.
	 * @return string of either 'gif', 'jpeg', 'png' or 'bmp'
	 * otherwise it will return null.
	 */
	function getImageType($file) 
	{
		//$imageInfo = @getImageSize($file);
		$imageInfo = @getimagesize($file);

		if(!is_array($imageInfo))
			return null;

		switch($imageInfo[2]) 
		{
			case 1:
				return 'gif';
			case 2:
				return 'jpeg';
			case 3:
				return 'png';
			case 6:
				return 'bmp';
		}

		return null;
	}

	/**
	 * Check if the specified image can be edit by GD
	 * mainly to check that GD can read and save GIFs
	 * @return int 0 if it is not a GIF file, 1 is GIF is editable, -1 if not editable.
	 */
	function isGDEditable() 
	{
		if(isset($_GET['img']))
			$relative = rawurldecode($_GET['img']);
		else
			return 0;
		if(IMAGE_CLASS != 'GD')
			return 0;

		$fullpath = $this->manager->getFullPath($relative);

		$type = $this->getImageType($fullpath);
		if($type != 'gif')
			return 0;

		if(function_exists('imagecreatefrom'+strtolower($type))
			&& function_exists('image'+$type))
			return 1;
		else
			return -1;
	}

	/**
	 * Check if GIF can be edit by GD.
	 * @return int 0 if it is not using the GD library, 1 is GIF is editable, -1 if not editable.
	 */
	function isGDGIFAble() 
	{
		if(IMAGE_CLASS != 'GD')
			return 0;

		if(function_exists('imagecreatefromgif')
			&& function_exists('imagegif'))
			return 1;
		else
			return -1;
	}
}

?>
