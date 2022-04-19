/**
 * Hungarian translation
 * @author GÃ¡spÃ¡r Lajos <info@glsys.eu>
 * @version 2011-09-10
 */
if (elFinder && elFinder.prototype && typeof(elFinder.prototype.i18) == 'object') {
	elFinder.prototype.i18.hu = {
		translator : 'GÃ¡spÃ¡r Lajos &lt;info@glsys.eu&gt;',
		language   : 'magyar',
		direction  : 'ltr',
		messages   : {
			
			/********************************** errors **********************************/
			'error'                : 'Hiba',
			'errUnknown'           : 'Ismeretlen hiba.',
			'errUnknownCmd'        : 'Ismeretlen parancs.',
			'errJqui'              : 'HibÃ¡s jQuery UI konfigurÃ¡ciÃ³. A "selectable", "draggable" Ã©s a "droppable" komponensek szÃ¼ksÃ©gesek.',
			'errNode'              : 'elFinder requires DOM Element to be created.',
			'errURL'               : 'HibÃ¡s elFinder konfigurÃ¡ciÃ³! "URL" paramÃ©ter nincs megadva.',
			'errAccess'            : 'HozzÃ¡fÃ©rÃ©s megtagadva.',
			'errConnect'           : 'Nem sikerÃ¼lt csatlakozni a kiszolgÃ¡lÃ³hoz.',
			'errAbort'             : 'Kapcsolat megszakÃ­tva.',
			'errTimeout'           : 'Kapcsolat idÅ‘tÃºllÃ©pÃ©s.',
			'errNotFound'          : 'A backend nem elÃ©rhetÅ‘.',
			'errResponse'          : 'HibÃ¡s backend vÃ¡lasz.',
			'errConf'              : 'Invalid backend configuration.',
			'errJSON'              : 'PHP JSON module not installed.',
			'errNoVolumes'         : 'Readable volumes not available.',
			'errCmdParams'         : 'Invalid parameters for command "$1".',
			'errDataNotJSON'       : 'A vÃ¡lasz nem JSON tÃ­pusÃº adat.',
			'errDataEmpty'         : 'Nem Ã©rkezett adat.',
			'errCmdReq'            : 'Backend request requires command name.',
			'errOpen'              : '"$1" megnyitÃ¡sa nem sikerÃ¼lt.',
			'errNotFolder'         : 'Object is not a folder.',
			'errNotFile'           : 'Object is not a file.',
			'errRead'              : 'Unable to read "$1".',
			'errWrite'             : 'Unable to write into "$1".',
			'errPerm'              : 'EngedÃ©ly megtagadva.',
			'errLocked'            : '"$1" is locked and can not be renamed, moved or removed.',
			'errExists'            : 'File named "$1" already exists.',
			'errInvName'           : 'Invalid file name.',
			'errFolderNotFound'    : 'Folder not found.',
			'errFileNotFound'      : 'File not found.',
			'errTrgFolderNotFound' : 'Target folder "$1" not found.',
			'errPopup'             : 'Browser prevented opening popup window. To open file enable it in browser options.',
			'errMkdir'             : 'Unable to create folder "$1".',
			'errMkfile'            : 'Unable to create file "$1".',
			'errRename'            : 'Unable to rename "$1".',
			'errCopyFrom'          : 'Copying files from volume "$1" not allowed.',
			'errCopyTo'            : 'Copying files to volume "$1" not allowed.',
			'errUploadCommon'      : 'FeltÃ¶ltÃ©si hiba.',
			'errUpload'            : 'Nem sikerÃ¼lt a fÃ¡jlt feltÃ¶lteni. ($1)',
			'errUploadNoFiles'     : 'No files found for upload.',
			'errMaxSize'           : 'Data exceeds the maximum allowed size.',
			'errFileMaxSize'       : 'File exceeds maximum allowed size.',
			'errUploadMime'        : 'File type not allowed.',
			'errUploadTransfer'    : '"$1" transfer error.', 
			'errSave'              : '"$1" mentÃ©se nem sikerÃ¼lt.',
			'errCopy'              : '"$1" mÃ¡solÃ¡sa nem sikerÃ¼lt.',
			'errMove'              : '"$1" Ã¡thelyezÃ©se nem sikerÃ¼lt.',
			'errCopyInItself'      : '"$1" nem mÃ¡solhatÃ³ sajÃ¡t magÃ¡ra.',
			'errRm'                : '"$1" tÃ¶rlÃ©se nem sikerÃ¼lt.',
			'errExtract'           : 'Unable to extract files from "$1".',
			'errArchive'           : 'Unable to create archive.',
			'errArcType'           : 'Nem tÃ¡mogatott archÃ­vum tÃ­pus.',
			'errNoArchive'         : 'File is not archive or has unsupported archive type.',
			'errCmdNoSupport'      : 'Backend does not support this command.',
			
			/******************************* commands names ********************************/
			'cmdarchive'   : 'ArchÃ­vum lÃ©trehozÃ¡sa',
			'cmdback'      : 'Vissza',
			'cmdcopy'      : 'MÃ¡solÃ¡s',
			'cmdcut'       : 'KivÃ¡gÃ¡s',
			'cmddownload'  : 'LetÃ¶ltÃ©s',
			'cmdduplicate' : 'MÃ¡solat kÃ©szÃ­tÃ©s',
			'cmdedit'      : 'SzerkesztÃ©s',
			'cmdextract'   : 'KibontÃ¡s',
			'cmdforward'   : 'ElÅ‘re',
			'cmdgetfile'   : 'FÃ¡jlok kijelÃ¶lÃ©se',
			'cmdhelp'      : 'ErrÅ‘l a programrÃ³l...',
			'cmdhome'      : 'FÅ‘kÃ¶nyvtÃ¡r',
			'cmdinfo'      : 'TulajdonsÃ¡gok',
			'cmdmkdir'     : 'Ãšj mappa',
			'cmdmkfile'    : 'Ãšj szÃ¶veges dokumentum',
			'cmdopen'      : 'MegnyitÃ¡s',
			'cmdpaste'     : 'BeillesztÃ©s',
			'cmdquicklook' : 'ElÅ‘nÃ©zet',
			'cmdreload'    : 'FrissÃ­tÃ©s',
			'cmdrename'    : 'ÃtnevezÃ©s',
			'cmdrm'        : 'TÃ¶rlÃ©s',
			'cmdsearch'    : 'KeresÃ©s',
			'cmdup'        : 'UgrÃ¡s a szÃ¼lÅ‘mappÃ¡ba',
			'cmdupload'    : 'FeltÃ¶ltÃ©s',
			'cmdview'      : 'View',
			
			/*********************************** buttons ***********************************/ 
			'btnClose'  : 'BezÃ¡r',
			'btnSave'   : 'Ment',
			'btnRm'     : 'TÃ¶rÃ¶l',
			'btnCancel' : 'MÃ©gsem',
			'btnNo'     : 'Nem',
			'btnYes'    : 'Igen',
			
			/******************************** notifications ********************************/
			'ntfopen'     : 'Mappa megnyitÃ¡s',
			'ntffile'     : 'FÃ¡jl megnyitÃ¡s',
			'ntfreload'   : 'Reload folder content',
			'ntfmkdir'    : 'Mappa lÃ©trehozÃ¡sa',
			'ntfmkfile'   : 'Creating files',
			'ntfrm'       : 'FÃ¡jlok tÃ¶rÃ©lse',
			'ntfcopy'     : 'FÃ¡jlok mÃ¡solÃ¡sa',
			'ntfmove'     : 'FÃ¡jlok Ã¡thelyezÃ©se',
			'ntfprepare'  : 'Prepare to copy files',
			'ntfrename'   : 'FÃ¡jlok Ã¡tnevezÃ©se',
			'ntfupload'   : 'FÃ¡jlok feltÃ¶ltÃ©se',
			'ntfdownload' : 'FÃ¡jlok letÃ¶ltÃ©se',
			'ntfsave'     : 'FÃ¡jlok mentÃ©se',
			'ntfarchive'  : 'ArchÃ­vum lÃ©trehozÃ¡sa',
			'ntfextract'  : 'KibontÃ¡s archÃ­vumbÃ³l',
			'ntfsearch'   : 'FÃ¡jlok keresÃ©se',
			'ntfsmth'     : 'Doing something >_<',
			
			/************************************ dates **********************************/
			'dateUnknown' : 'Ismeretlen',
			'Today'       : 'Ma',
			'Yesterday'   : 'Tegnap',
			'Jan'         : 'jan',
			'Feb'         : 'febr',
			'Mar'         : 'mÃ¡rc',
			'Apr'         : 'Ã¡pr',
			'May'         : 'mÃ¡j',
			'Jun'         : 'jÃºn',
			'Jul'         : 'jÃºl',
			'Aug'         : 'aug',
			'Sep'         : 'szept',
			'Oct'         : 'okt',
			'Nov'         : 'nov',
			'Dec'         : 'dec',

			/********************************** messages **********************************/
			'confirmReq'      : 'Confirmation required',
			'confirmRm'       : 'ValÃ³ban tÃ¶rÃ¶lni akarja a kijelÃ¶lt adatokat?<br/>Ez kÃ©sÅ‘bb nem fordÃ­thatÃ³ vissza!',
			'confirmRepl'     : 'Replace old file with new one?',
			'apllyAll'        : 'Apply to all',
			'name'            : 'NÃ©v',
			'size'            : 'MÃ©ret',
			'perms'           : 'Jogok',
			'modify'          : 'MÃ³dosÃ­tva',
			'kind'            : 'TÃ­pus',
			'read'            : 'olvasÃ¡s',
			'write'           : 'Ã­rÃ¡s',
			'noaccess'        : '-',
			'and'             : 'Ã©s',
			'unknown'         : 'ismeretlen',
			'selectall'       : 'Ã–sszes kijelÃ¶lÃ©se',
			'selectfiles'     : 'FÃ¡jlok kijelÃ¶lÃ©se',
			'selectffile'     : 'ElsÅ‘ fÃ¡jl kijelÃ¶lÃ©se',
			'selectlfile'     : 'UtolsÃ³ fÃ¡jl kijelÃ¶lÃ©se',
			'viewlist'        : 'Lista nÃ©zet',
			'viewicons'       : 'Ikon nÃ©zet',
			'places'          : 'Helyek',
			'calc'            : 'Calculate',
			'path'            : 'Ãštvonal',
			'aliasfor'        : 'CÃ©l',
			'locked'          : 'ZÃ¡rolt',
			'dim'             : 'MÃ©retek',
			'files'           : 'FÃ¡jlok',
			'folders'         : 'MappÃ¡k',
			'items'           : 'Elemek',
			'yes'             : 'igen',
			'no'              : 'nem',
			'link'            : 'Parancsikon',
			'searcresult'     : 'KeresÃ©s eredmÃ©nye',
			'selected'        : 'kijelÃ¶lt elemek',
			'about'           : 'NÃ©vjegy',
			'shortcuts'       : 'GyorsbillenytyÅ±k',
			'help'            : 'SÃºgÃ³',
			'webfm'           : 'Web file manager',
			'ver'             : 'VerziÃ³',
			'protocolver'     : 'protokol verziÃ³',
			'homepage'        : 'Projekt honlap',
			'docs'            : 'DokumentÃ¡ciÃ³',
			'github'          : 'Hozz lÃ©tre egy Ãºj verziÃ³t a Github-on',
			'twitter'         : 'KÃ¶vess minket a twitter-en',
			'facebook'        : 'Csatlakozz hozzÃ¡nk a facebook-on',
			'team'            : 'Csapat',
			'chiefdev'        : 'vezetÅ‘ fejlesztÅ‘',
			'developer'       : 'fejlesztÅ‘',
			'contributor'     : 'kÃ¼lsÅ‘s hozzÃ¡jÃ¡rulÃ³',
			'maintainer'      : 'karbantartÃ³',
			'translator'      : 'fordÃ­tÃ³',
			'icons'           : 'Ikonok',
			'dontforget'      : 'tÃ¶rÃ¶lkÃ¶zÅ‘t ne felejts el hozni!',
			'shortcutsof'     : 'Shortcuts disabled',
			'dropFiles'       : 'FÃ¡jlok dobÃ¡sa ide',
			'or'              : 'vagy',
			'selectForUpload' : 'fÃ¡jlok bÃ¶ngÃ©szÃ©se',
			'moveFiles'       : 'FÃ¡jlok Ã¡thelyezÃ©se',
			'copyFiles'       : 'FÃ¡jlok mÃ¡solÃ¡sa',
			
			/********************************** mimetypes **********************************/
			'kindUnknown'     : 'Ismeretlen',
			'kindFolder'      : 'Mappa',
			'kindAlias'       : 'Parancsikon',
			'kindAliasBroken' : 'HibÃ¡s parancsikon',
			// applications
			'kindApp'         : 'AlkalmazÃ¡s',
			'kindPostscript'  : 'Postscript dokumentum',
			'kindMsOffice'    : 'Microsoft Office dokumentum',
			'kindMsWord'      : 'Microsoft Word dokumentum',
			'kindMsExcel'     : 'Microsoft Excel dokumentum',
			'kindMsPP'        : 'Microsoft Powerpoint bemutatÃ³',
			'kindOO'          : 'Open Office dokumentum',
			'kindAppFlash'    : 'Flash alkalmazÃ¡s',
			'kindPDF'         : 'Portable Document Format (PDF)',
			'kindTorrent'     : 'Bittorrent fÃ¡jl',
			'kind7z'          : '7z archÃ­vum',
			'kindTAR'         : 'TAR archÃ­vum',
			'kindGZIP'        : 'GZIP archÃ­vum',
			'kindBZIP'        : 'BZIP archÃ­vum',
			'kindZIP'         : 'ZIP archÃ­vum',
			'kindRAR'         : 'RAR archÃ­vum',
			'kindJAR'         : 'Java JAR fÃ¡jl',
			'kindTTF'         : 'True Type font',
			'kindOTF'         : 'Open Type font',
			'kindRPM'         : 'RPM csomag',
			// texts
			'kindText'        : 'SzÃ¶veges dokumentum',
			'kindTextPlain'   : 'Plain text',
			'kindPHP'         : 'PHP forrÃ¡skÃ³d',
			'kindCSS'         : 'Cascading style sheet',
			'kindHTML'        : 'HTML dokumentum',
			'kindJS'          : 'Javascript forrÃ¡skÃ³d',
			'kindRTF'         : 'Rich Text Format',
			'kindC'           : 'C forrÃ¡skÃ³d',
			'kindCHeader'     : 'C header forrÃ¡skÃ³d',
			'kindCPP'         : 'C++ forrÃ¡skÃ³d',
			'kindCPPHeader'   : 'C++ header forrÃ¡skÃ³d',
			'kindShell'       : 'Unix shell script',
			'kindPython'      : 'Python forrÃ¡skÃ³d',
			'kindJava'        : 'Java forrÃ¡skÃ³d',
			'kindRuby'        : 'Ruby forrÃ¡skÃ³d',
			'kindPerl'        : 'Perl script',
			'kindSQL'         : 'SQL forrÃ¡skÃ³d',
			'kindXML'         : 'XML dokumentum',
			'kindAWK'         : 'AWK forrÃ¡skÃ³d',
			'kindCSV'         : 'Comma separated values',
			'kindDOCBOOK'     : 'Docbook XML dokumentum',
			// images
			'kindImage'       : 'KÃ©p',
			'kindBMP'         : 'BMP kÃ©p',
			'kindJPEG'        : 'JPEG kÃ©p',
			'kindGIF'         : 'GIF kÃ©p',
			'kindPNG'         : 'PNG kÃ©p',
			'kindTIFF'        : 'TIFF kÃ©p',
			'kindTGA'         : 'TGA kÃ©p',
			'kindPSD'         : 'Adobe Photoshop kÃ©p',
			'kindXBITMAP'     : 'X bitmap image',
			'kindPXM'         : 'Pixelmator image',
			// media
			'kindAudio'       : 'HangfÃ¡jl',
			'kindAudioMPEG'   : 'MPEG hangfÃ¡jl',
			'kindAudioMPEG4'  : 'MPEG-4 hangfÃ¡jl',
			'kindAudioMIDI'   : 'MIDI hangfÃ¡jl',
			'kindAudioOGG'    : 'Ogg Vorbis hangfÃ¡jl',
			'kindAudioWAV'    : 'WAV hangfÃ¡jl',
			'AudioPlaylist'   : 'MP3 playlist',
			'kindVideo'       : 'Film',
			'kindVideoDV'     : 'DV film',
			'kindVideoMPEG'   : 'MPEG film',
			'kindVideoMPEG4'  : 'MPEG-4 film',
			'kindVideoAVI'    : 'AVI film',
			'kindVideoMOV'    : 'Quick Time film',
			'kindVideoWM'     : 'Windows Media film',
			'kindVideoFlash'  : 'Flash film',
			'kindVideoMKV'    : 'Matroska film',
			'kindVideoOGG'    : 'Ogg film'
		}
	}
}