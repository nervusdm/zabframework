/*<frameset id="filelistmanager_subframeset" rows="*,7,140" cols="*" framespacing="0px" frameborder="no" border="0px" subframesnames="filelist,hidefileuploadframe,fileupload">
	<frame id="filelist" name="filelist" src="filelist.php?path=<? echo $path;?>" noresize="noresize" frameborder="no" scrolling="no" marginwidth="0" marginheight="0" framerows="*" />
	<frame id="hidefileuploadframe" name="hidefileuploadframe" src="hideframehorizontal.php?direction=bottom&frame_name=fileupload" noresize="noresize" frameborder="no" scrolling="no" marginwidth="0" marginheight="0" framerows="7" />
	<frame id="fileupload" name="fileupload" src="fileupload.php?path=<? echo $path;?>" noresize="noresize" frameborder="no" scrolling="no" marginwidth="0" marginheight="0" framerows="140" />
</frameset>*/

function displayInternalFrame(frameId) {
	var filelistmanager = parent.document.getElementById('filelistmanager_subframeset');
	var framesrows = filelistmanager.getAttribute('rows');
	var subframesnames = filelistmanager.getAttribute('subframesnames');
	
	var rows = framesrows.split(',');
	var subframes = subframesnames.split(',');

	var frame_i, frame_i_id, frameclosed;
	var newrows = '';
	for(var i = 0; i < subframes.length; ++i) {
		frame_i = parent.document.getElementById(subframes[i]);
		frame_i_id = frame_i.getAttribute('id');
		
		if(i > 0) newrows += ',';
		
		if(frame_i_id == frameId){
			newrows += rows[i] > 10 ? '0': frame_i.getAttribute('framerows');
			frame_i.setAttribute('isclosed',rows[i] > 10 ? 1 : 0);
		}else {newrows += rows[i];}
	}
	filelistmanager.setAttribute('rows',newrows);
	filelistmanager.rows = newrows;
};

function changeFramesetImage(imgId,frameId,direction) {
	var frame = parent.document.getElementById(frameId);
	var frameclosed = frame.getAttribute('isclosed');

	if(direction == 'bottom')
		direction = (frameclosed == 1) ? 'top' : 'bottom';
	else if(direction == 'top')
		direction = (frameclosed == 1) ? 'bottom' : 'top';
	
	if(direction) {
		var img = document.getElementById(imgId);
		img.className = 'tool_frame_horizontal tool_frame_'+direction;
		img.onmouseout = function() { this.className = 'tool_frame_horizontal tool_frame_'+direction; };
		img.onmouseover = function() { this.className = 'tool_frame_horizontal tool_frame_'+direction+'_on'; };
	}
};

function resizeFileListTable() {
	
};