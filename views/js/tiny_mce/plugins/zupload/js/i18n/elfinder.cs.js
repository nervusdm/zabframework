/**
 * Czech translation
 * @author Jay Gridley <gridley.jay@hotmail.com>
 * @version 2012-03-23
 */
if (elFinder && elFinder.prototype && typeof(elFinder.prototype.i18) == 'object') {
	elFinder.prototype.i18.cs = {
		translator : 'Jay Gridley &lt;gridley.jay@hotmail.com&gt;',
		language   : 'ÄeÅ¡tina',
		direction  : 'ltr',
		dateFormat : 'd. m. Y H:i',
		fancyDateFormat : '$1 H:i',
		messages   : {

			/********************************** errors **********************************/
			'error'                : 'Chyba',
			'errUnknown'           : 'NeznÃ¡mÃ¡ chyba.',
			'errUnknownCmd'        : 'NeznÃ¡mÃ½ pÅ™Ã­kaz.',
			'errJqui'              : 'NedostaÄujÃ­cÃ­ konfigurace jQuery UI. MusÃ­ bÃ½t zahrnuty komponenty Selectable, Draggable a Droppable.',
			'errNode'              : 'elFinder vyÅ¾aduje vytvoÅ™enÃ½ DOM Element.',
			'errURL'               : 'ChybnÃ¡ konfigurace elFinderu! NenÃ­ nastavena hodnota URL.',
			'errAccess'            : 'PÅ™Ã­stup zamÃ­tnut.',
			'errConnect'           : 'NepodaÅ™ilo se pÅ™ipojit k backendu (konektoru).',
			'errAbort'             : 'PÅ™ipojenÃ­ zruÅ¡eno.',
			'errTimeout'           : 'VypÅ¡el limit pro pÅ™ipojenÃ­.',
			'errNotFound'          : 'Backend nenalezen.',
			'errResponse'          : 'NesprÃ¡vnÃ¡ odpovÄ›Ä backendu.',
			'errConf'              : 'NepsrÃ¡vnÃ¡ konfigurace backendu.',
			'errJSON'              : 'PHP modul JSON nenÃ­ nainstalovÃ¡n.',
			'errNoVolumes'         : 'NenÃ­ dostupnÃ½ ÄitelnÃ½ oddÃ­l.',
			'errCmdParams'         : 'NesprÃ¡vnÃ© parametry pÅ™Ã­kazu "$1".',
			'errDataNotJSON'       : 'Data nejsou ve formÃ¡tu JSON.',
			'errDataEmpty'         : 'Data jsou prÃ¡zdnÃ¡.',
			'errCmdReq'            : 'Dotaz backendu vyÅ¾aduje nÃ¡zev pÅ™Ã­kazu.',
			'errOpen'              : 'Chyba pÅ™i otevÃ­rÃ¡nÃ­ "$1".',
			'errNotFolder'         : 'Objekt nenÃ­ sloÅ¾ka.',
			'errNotFile'           : 'Objekt nenÃ­ soubor.',
			'errRead'              : 'Chyba pÅ™i ÄtenÃ­ "$1".',
			'errWrite'             : 'Chyba pÅ™i zÃ¡pisu do "$1".',
			'errPerm'              : 'PÅ™Ã­stup odepÅ™en.',
			'errLocked'            : '"$1" je uzamÄenÃ½ a nemÅ¯Å¾e bÃ½t pÅ™ejmenovÃ¡n, pÅ™esunut nebo smazÃ¡n.',
			'errExists'            : 'Soubor s nÃ¡zvem "$1" jiÅ¾ existuje.',
			'errInvName'           : 'NesprÃ¡vnÃ½ nÃ¡zev souboru.',
			'errFolderNotFound'    : 'SloÅ¾ka nenalezena.',
			'errFileNotFound'      : 'Soubor nenalezen.',
			'errTrgFolderNotFound' : 'CÃ­lovÃ¡ sloÅ¾ka "$1" nenalezena.',
			'errPopup'             : 'ProhlÃ­Å¾eÄ zabrÃ¡nil otevÅ™enÃ­ vyskakovacÃ­ho okna. K otevÅ™enÃ­ souboru, povolte vyskakovacÃ­ okno v prohlÃ­Å¾eÄi.',
			'errMkdir'             : 'NepodaÅ™ilo se vytvoÅ™it sloÅ¾ku "$1".',
			'errMkfile'            : 'NepodaÅ™ilo se vytvoÅ™it soubor "$1".',
			'errRename'            : 'NepodaÅ™ilo se pÅ™ejmenovat "$1".',
			'errCopyFrom'          : 'KopÃ­rovÃ¡nÃ­ souborÅ¯ z oddÃ­lu "$1" nenÃ­ povoleno.',
			'errCopyTo'            : 'KopÃ­rovÃ¡nÃ­ souborÅ¯ do oddÃ­lu "$1" nenÃ­ povoleno.',
			'errUploadCommon'      : 'Chyba nahrÃ¡vÃ¡nÃ­.',
			'errUpload'            : 'NepodaÅ™ilo se nahrÃ¡t "$1".',
			'errUploadNoFiles'     : 'Nejsou vybrÃ¡ny Å¾Ã¡dnÃ© soubory k nahrÃ¡nÃ­.',
			'errMaxSize'           : 'PÅ™ekroÄena maximÃ¡lnÃ­ povolenÃ¡ velikost dat.',
			'errFileMaxSize'       : 'PÅ™ekroÄena maximÃ¡lnÃ­ povolenÃ¡ velikost souboru.',
			'errUploadMime'        : 'NepovolenÃ½ typ souboru.',
			'errUploadTransfer'    : '"$1" chyba pÅ™enosu.',
			'errSave'              : '"$1" nelze uloÅ¾it.',
			'errCopy'              : '"$1" nelze zkopÃ­rovat.',
			'errMove'              : '"$1" nelze pÅ™emÃ­stit.',
			'errCopyInItself'      : '"$1" nelze zkopÃ­rovat do sebe sama.',
			'errRm'                : '"$1" nelze odstranit.',
			'errExtract'           : 'Nelze extrahovat soubory z "$1".',
			'errArchive'           : 'Nelze vytvoÅ™it archÃ­v.',
			'errArcType'           : 'NepodporovanÃ½ typ archÃ­vu.',
			'errNoArchive'         : 'Soubor nenÃ­ archÃ­v nebo mÃ¡ nepodporovanÃ½ formÃ¡t.',
			'errCmdNoSupport'      : 'Backend tento pÅ™Ã­kaz nepodporuje.',
			'errReplByChild'       : 'SloÅ¾ka "$1" nemÅ¯Å¾e bÃ½t nahrazena souborem, kterÃ½ sama obsahuje.',
			'errArcSymlinks'       : 'Z bezpeÄnostnÃ­ch dÅ¯vodÅ¯ je zakÃ¡zÃ¡no rozbalit archÃ­vy obsahujÃ­cÃ­ symlinky.',
			'errArcMaxSize'        : 'Soubory archÃ­vu pÅ™ekraÄujÃ­ maximÃ¡lnÃ­ povolenou velikost.',
			'errResize'            : 'NepodaÅ™ilo se zmÄ›nit velikost obrÃ¡zku "$1".',
			'errUsupportType'      : 'NepodporovanÃ½ typ souboru.',

			/******************************* commands names ********************************/
			'cmdarchive'   : 'VytvoÅ™it archÃ­v',
			'cmdback'      : 'ZpÄ›t',
			'cmdcopy'      : 'KopÃ­rovat',
			'cmdcut'       : 'Vyjmout',
			'cmddownload'  : 'StÃ¡hnout',
			'cmdduplicate' : 'Duplikovat',
			'cmdedit'      : 'Upravit soubor',
			'cmdextract'   : 'Rozbalit archÃ­v',
			'cmdforward'   : 'VpÅ™ed',
			'cmdgetfile'   : 'Vybrat soubory',
			'cmdhelp'      : 'O softwaru',
			'cmdhome'      : 'DomÅ¯',
			'cmdinfo'      : 'Zobrazit informace',
			'cmdmkdir'     : 'NovÃ¡ sloÅ¾ka',
			'cmdmkfile'    : 'NovÃ½ textovÃ½ soubor',
			'cmdopen'      : 'OtevÅ™Ã­t',
			'cmdpaste'     : 'VloÅ¾it',
			'cmdquicklook' : 'NÃ¡hled',
			'cmdreload'    : 'Obnovit',
			'cmdrename'    : 'PÅ™ejmenovat',
			'cmdrm'        : 'Smazat',
			'cmdsearch'    : 'NajÃ­t soubory',
			'cmdup'        : 'PÅ™ejÃ­t do nadÅ™azenÃ© sloÅ¾ky',
			'cmdupload'    : 'NahrÃ¡t soubor(y)',
			'cmdview'      : 'Zobrazit',
			'cmdresize'    : 'ZmÄ›nit velikost',
			'cmdsort'      : 'SeÅ™adit',

			/*********************************** buttons ***********************************/
			'btnClose'  : 'ZavÅ™Ã­t',
			'btnSave'   : 'UloÅ¾it',
			'btnRm'     : 'Odstranit',
			'btnApply'  : 'PouÅ¾Ã­t',
			'btnCancel' : 'ZruÅ¡it',
			'btnNo'     : 'Ne',
			'btnYes'    : 'Ano',

			/******************************** notifications ********************************/
			'ntfopen'     : 'OtevÃ­rÃ¡nÃ­ sloÅ¾ky',
			'ntffile'     : 'OtevÃ­rÃ¡nÃ­ souboru',
			'ntfreload'   : 'ObnovovÃ¡nÃ­ obsahu sloÅ¾ky',
			'ntfmkdir'    : 'VytvÃ¡Å™enÃ­ sloÅ¾ky',
			'ntfmkfile'   : 'VytvÃ¡Å™enÃ­ souborÅ¯',
			'ntfrm'       : 'MazÃ¡nÃ­ souborÅ¯',
			'ntfcopy'     : 'KopÃ­rovÃ¡nÃ­ souborÅ¯',
			'ntfmove'     : 'PÅ™esunovÃ¡nÃ­ souborÅ¯',
			'ntfprepare'  : 'PÅ™Ã­prava ke kopÃ­rovÃ¡nÃ­ souborÅ¯',
			'ntfrename'   : 'PÅ™ejmenovÃ¡vÃ¡nÃ­ souborÅ¯',
			'ntfupload'   : 'NahrÃ¡vÃ¡nÃ­ souborÅ¯',
			'ntfdownload' : 'StahovÃ¡nÃ­ souborÅ¯',
			'ntfsave'     : 'UklÃ¡dÃ¡nÃ­ souborÅ¯',
			'ntfarchive'  : 'VytvÃ¡Å™enÃ­ archÃ­vu',
			'ntfextract'  : 'RozbalovÃ¡nÃ­ souborÅ¯ z archÃ­vu',
			'ntfsearch'   : 'VyhledÃ¡vÃ¡nÃ­ souborÅ¯',
			'ntfsmth'     : 'ÄŒekejte prosÃ­m...',
			'ntfloadimg'  : 'NaÄÃ­tÃ¡nÃ­ obrÃ¡zkÅ¯',

			/************************************ dates **********************************/
			'dateUnknown' : 'neznÃ¡mÃ½',
			'Today'       : 'Dnes',
			'Yesterday'   : 'VÄera',
			'Jan'         : 'Led',
			'Feb'         : 'Ãšno',
			'Mar'         : 'BÅ™e',
			'Apr'         : 'Dub',
			'May'         : 'KvÄ›',
			'Jun'         : 'ÄŒer',
			'Jul'         : 'ÄŒec',
			'Aug'         : 'Srp',
			'Sep'         : 'ZÃ¡Å™',
			'Oct'         : 'Å˜Ã­j',
			'Nov'         : 'Lis',
			'Dec'         : 'Pro',
			'January'     : 'Leden',
			'February'    : 'Ãšnor',
			'March'       : 'BÅ™ezen',
			'April'       : 'Duben',
			'May'         : 'KvÄ›ten',
			'June'        : 'ÄŒerven',
			'July'        : 'ÄŒervenec',
			'August'      : 'Srpen',
			'September'   : 'ZÃ¡Å™Ã­',
			'October'     : 'Å˜Ã­jen',
			'November'    : 'Listopad',
			'December'    : 'Prosinec',
			'Sunday'      : 'NedÄ›le',
			'Monday'      : 'PondÄ›lÃ­',
			'Tuesday'     : 'ÃšterÃ½',
			'Wednesday'   : 'StÅ™eda',
			'Thursday'    : 'ÄŒtvrtek',
			'Friday'      : 'PÃ¡tek',
			'Saturday'    : 'Sobota',
			'Sun'         : 'Ne',
			'Mon'         : 'Po',
			'Tue'         : 'Ãšt',
			'Wed'         : 'St',
			'Thu'         : 'ÄŒt',
			'Fri'         : 'PÃ¡',
			'Sat'         : 'So',
			/******************************** sort variants ********************************/
			'sortnameDirsFirst' : 'dle jmÃ©na (sloÅ¾ky pÅ™ednostnÄ›)',
			'sortkindDirsFirst' : 'dle typu (sloÅ¾ky pÅ™ednostnÄ›)',
			'sortsizeDirsFirst' : 'dle veliksoti (sloÅ¾ky pÅ™ednostnÄ›)',
			'sortdateDirsFirst' : 'dle data (sloÅ¾ky pÅ™ednostnÄ›',
			'sortname'          : 'dle jmÃ©na',
			'sortkind'          : 'dle typu',
			'sortsize'          : 'dle velikosti',
			'sortdate'          : 'dle data',

			/********************************** messages **********************************/
			'confirmReq'      : 'PoÅ¾adovÃ¡no potvrÅ¾enÃ­',
			'confirmRm'       : 'Opravdu chcete odstranit tyto soubory?<br/>Operace nelze vrÃ¡tit!',
			'confirmRepl'     : 'Nahradit starÃ© soubory novÃ½mi?',
			'apllyAll'        : 'VÅ¡em',
			'name'            : 'NÃ¡zev',
			'size'            : 'Velikost',
			'perms'           : 'PrÃ¡va',
			'modify'          : 'UpravenÃ½',
			'kind'            : 'Typ',
			'read'            : 'ÄtenÃ­',
			'write'           : 'zÃ¡pis',
			'noaccess'        : 'pÅ™Ã­stup nepovolen',
			'and'             : 'a',
			'unknown'         : 'neznÃ¡mÃ½',
			'selectall'       : 'Vybrat vÅ¡echny soubory',
			'selectfiles'     : 'Vybrat soubor(y)',
			'selectffile'     : 'Vybrat prvnÃ­ soubor',
			'selectlfile'     : 'Vybrat poslednÃ­ soubor',
			'viewlist'        : 'Seznam',
			'viewicons'       : 'Ikony',
			'places'          : 'MÃ­sta',
			'calc'            : 'VypoÄÃ­tat',
			'path'            : 'Cesta',
			'aliasfor'        : 'ZÃ¡stupce pro',
			'locked'          : 'UzamÄenÃ½',
			'dim'             : 'RozmÄ›ry',
			'files'           : 'Soubory',
			'folders'         : 'SloÅ¾ky',
			'items'           : 'PoloÅ¾ky',
			'yes'             : 'ano',
			'no'              : 'ne',
			'link'            : 'Odkaz',
			'searcresult'     : 'VÃ½sledky hledÃ¡nÃ­',
			'selected'        : 'vybranÃ© poloÅ¾ky',
			'about'           : 'O softwaru',
			'shortcuts'       : 'ZÃ¡stupci',
			'help'            : 'NÃ¡povÄ›da',
			'webfm'           : 'WebovÃ½ sprÃ¡vce souborÅ¯',
			'ver'             : 'Verze',
			'protocolver'     : 'verze protokolu',
			'homepage'        : 'DomovskÃ¡ strÃ¡nka projektu',
			'docs'            : 'Dokumentace',
			'github'          : 'Fork us on Github',
			'twitter'         : 'Follow us on Twitter',
			'facebook'        : 'Join us on Facebook',
			'team'            : 'TÃ½m',
			'chiefdev'        : 'sÃ©f vÃ½vojÃ¡Å™Å¯',
			'developer'       : 'vÃ½vojÃ¡r',
			'contributor'     : 'spolupracovnÃ­k',
			'maintainer'      : 'ÃºdrÅ¾ba',
			'translator'      : 'pÅ™eklad',
			'icons'           : 'Ikony',
			'dontforget'      : 'a nezapomeÅˆte si vzÃ­t plavky',
			'shortcutsof'     : 'ZÃ¡stupci nejsou povoleni',
			'dropFiles'       : 'PÅ™etÃ¡hnÄ›te soubory sem',
			'or'              : 'nebo',
			'selectForUpload' : 'Vyberte soubory',
			'moveFiles'       : 'PÅ™esunout sobory',
			'copyFiles'       : 'ZkupÃ­rovat soubory',
			'rmFromPlaces'    : 'Odstranit z mÃ­st',
			'untitled folder' : 'bez nÃ¡zvu',
			'untitled file.txt' : 'nepojmenovanÃ½ soubor.txt',
			'aspectRatio'     : 'PomÄ›r stran',
			'scale'           : 'MÄ›Å™Ã­tko',
			'width'           : 'Å Ã­Å™ka',
			'height'          : 'VÃ½Å¡ka',
			'mode'            : 'MÃ³d',
			'resize'          : 'ZmÄ›nit vel.',
			'crop'            : 'OÅ¾ezat',
			'rotate'          : 'OtoÄit',
			'rotate-cw'       : 'OtoÄit o +90 stupÅˆÅ¯',
			'rotate-ccw'      : 'OtoÄit o -90 stupÅˆÅ¯',
			'degree'          : ' stupÅˆÅ¯',

			/********************************** mimetypes **********************************/
			'kindUnknown'     : 'NeznÃ¡mÃ½',
			'kindFolder'      : 'SloÅ¾ka',
			'kindAlias'       : 'Odkaz',
			'kindAliasBroken' : 'NeplatnÃ½ odkaz',
			// applications
			'kindApp'         : 'Aplikace',
			'kindPostscript'  : 'Dokument Postscriptu',
			'kindMsOffice'    : 'Dokument Microsoft Office',
			'kindMsWord'      : 'Dokument Microsoft Word',
			'kindMsExcel'     : 'Dokument Microsoft Excel',
			'kindMsPP'        : 'Prezentace Microsoft Powerpoint',
			'kindOO'          : 'OtevÅ™Ã­t dokument Office',
			'kindAppFlash'    : 'Flash aplikace',
			'kindPDF'         : 'PDF',
			'kindTorrent'     : 'Soubor BitTorrent',
			'kind7z'          : 'ArchÃ­v 7z',
			'kindTAR'         : 'ArchÃ­v TAR',
			'kindGZIP'        : 'ArchÃ­v GZIP',
			'kindBZIP'        : 'ArchÃ­v BZIP',
			'kindZIP'         : 'ArchÃ­v ZIP',
			'kindRAR'         : 'ArchÃ­v RAR',
			'kindJAR'         : 'Soubor Java JAR',
			'kindTTF'         : 'True Type font',
			'kindOTF'         : 'Open Type font',
			'kindRPM'         : 'RPM balÃ­Äek',
			// texts
			'kindText'        : 'TextovÃ½ dokument',
			'kindTextPlain'   : 'ÄŒistÃ½ text',
			'kindPHP'         : 'PHP zdrojovÃ½ kÃ³d',
			'kindCSS'         : 'KaskÃ¡dovÃ© styly',
			'kindHTML'        : 'HTML dokument',
			'kindJS'          : 'Javascript zdrojovÃ½ kÃ³d',
			'kindRTF'         : 'Rich Text Format',
			'kindC'           : 'C zdrojovÃ½ kÃ³d',
			'kindCHeader'     : 'C hlaviÄka',
			'kindCPP'         : 'C++ zdrojovÃ½ kÃ³d',
			'kindCPPHeader'   : 'C++ hlaviÄka',
			'kindShell'       : 'Unix shell skript',
			'kindPython'      : 'Python zdrojovÃ½ kÃ³d',
			'kindJava'        : 'Java zdrojovÃ½ kÃ³d',
			'kindRuby'        : 'Ruby zdrojovÃ½ kÃ³d',
			'kindPerl'        : 'Perl skript',
			'kindSQL'         : 'SQL zdrojovÃ½ kÃ³d',
			'kindXML'         : 'Dokument XML',
			'kindAWK'         : 'AWK zdrojovÃ½ kÃ³d',
			'kindCSV'         : 'CSV',
			'kindDOCBOOK'     : 'Docbook XML dokument',
			// images
			'kindImage'       : 'ObrÃ¡zek',
			'kindBMP'         : 'ObrÃ¡zek BMP',
			'kindJPEG'        : 'ObrÃ¡zek JPEG',
			'kindGIF'         : 'ObrÃ¡zek GIF',
			'kindPNG'         : 'ObrÃ¡zek PNG',
			'kindTIFF'        : 'ObrÃ¡zek TIFF',
			'kindTGA'         : 'ObrÃ¡zek TGA',
			'kindPSD'         : 'ObrÃ¡zek Adobe Photoshop',
			'kindXBITMAP'     : 'ObrÃ¡zek X bitmapa',
			'kindPXM'         : 'ObrÃ¡zek Pixelmator',
			// media
			'kindAudio'       : 'Audio sobory',
			'kindAudioMPEG'   : 'MPEG audio',
			'kindAudioMPEG4'  : 'MPEG-4 audio',
			'kindAudioMIDI'   : 'MIDI audio',
			'kindAudioOGG'    : 'Ogg Vorbis audio',
			'kindAudioWAV'    : 'WAV audio',
			'AudioPlaylist'   : 'MP3 playlist',
			'kindVideo'       : 'Video sobory',
			'kindVideoDV'     : 'DV video',
			'kindVideoMPEG'   : 'MPEG video',
			'kindVideoMPEG4'  : 'MPEG-4 video',
			'kindVideoAVI'    : 'AVI video',
			'kindVideoMOV'    : 'Quick Time video',
			'kindVideoWM'     : 'Windows Media video',
			'kindVideoFlash'  : 'Flash video',
			'kindVideoMKV'    : 'Matroska video',
			'kindVideoOGG'    : 'Ogg video'
		}
	}
}
