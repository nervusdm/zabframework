<?php
// Simplified chinese Language Module for eXtplorer version 1.5 

// translated by Baijianpeng http://www.tcmbook.net
global $_VERSION;

$GLOBALS["charset"] = "utf-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "é”™è¯¯",
	"back"			=> "å›žä¸Šé¡µ",
	
	// root
	"home"			=> "æœªæ‰¾åˆ°Joomlaæ ¹ç›®å½•ï¼Œè¯·æ£€æŸ¥æ‚¨çš„è®¾ç½®.",
	"abovehome"		=> "å½“å‰ç›®å½•å¯èƒ½å¹¶éžJoomlaæ ¹ç›®å½•çš„ä¸Šçº§ç›®å½•.",
	"targetabovehome"	=> "ç›®æ ‡ç›®å½•å¯èƒ½å¹¶éžJoomlaæ ¹ç›®å½•çš„ä¸Šçº§ç›®å½•.",
	
	// exist
	"direxist"		=> "è¯¥ç›®å½•ä¸å­˜åœ¨.",
	//"filedoesexist"	=> "è¿™ç›®å½•å·²å­˜åœ¨.",
	"fileexist"		=> "è¯¥æ–‡ä»¶ä¸å­˜åœ¨.",
	"itemdoesexist"		=> "è¯¥é¡¹ç›®å·²å­˜åœ¨.",
	"itemexist"		=> "è¯¥é¡¹ç›®ä¸å­˜åœ¨.",
	"targetexist"		=> "è¯¥ç›®æ ‡ç›®å½•ä¸å­˜åœ¨.",
	"targetdoesexist"	=> "è¯¥ç›®æ ‡é¡¹ç›®å·²å­˜åœ¨.",
	
	// open
	"opendir"		=> "æ— æ³•æ‰“å¼€ç›®å½•.",
	"readdir"		=> "æ— æ³•è¯»å–ç›®å½•.",
	
	// access
	"accessdir"		=> "æ‚¨ä¸å…è®¸å­˜å–è¿™ä¸ªç›®å½•.",
	"accessfile"		=> "æ‚¨ä¸å…è®¸å­˜å–è¿™ä¸ªæ–‡ä»¶.",
	"accessitem"		=> "æ‚¨ä¸å…è®¸å­˜å–è¿™ä¸ªé¡¹ç›®.",
	"accessfunc"		=> "æ‚¨ä¸å…è®¸ä½¿ç”¨è¿™ä¸ªåŠŸèƒ½.",
	"accesstarget"		=> "æ‚¨ä¸å…è®¸å­˜å–è¿™ä¸ªç›®æ ‡ç›®å½•.",
	
	// actions
	"permread"		=> "å–å¾—æƒé™å¤±è´¥.",
	"permchange"		=> "æƒé™æ›´æ”¹å¤±è´¥.",
	"openfile"		=> "æ‰“å¼€æ–‡ä»¶å¤±è´¥.",
	"savefile"		=> "æ–‡ä»¶å‚¨å­˜å¤±è´¥.",
	"createfile"		=> "æ–°å¢žæ–‡ä»¶å¤±è´¥.",
	"createdir"		=> "æ–°å¢žç›®å½•å¤±è´¥.",
	"uploadfile"		=> "æ–‡ä»¶ä¸Šä¼ å¤±è´¥.",
	"copyitem"		=> "å¤åˆ¶å¤±è´¥.",
	"moveitem"		=> "ç§»åŠ¨å¤±è´¥.",
	"delitem"		=> "åˆ é™¤å¤±è´¥.",
	"chpass"		=> "æ›´æ”¹å¯†ç å¤±è´¥.",
	"deluser"		=> "ç§»é™¤ä½¿ç”¨è€…å¤±è´¥.",
	"adduser"		=> "åŠ å…¥ä½¿ç”¨è€…å¤±è´¥.",
	"saveuser"		=> "å‚¨å­˜ä½¿ç”¨è€…å¤±è´¥.",
	"searchnothing"		=> "æ‚¨å¿…é¡»è¾“å…¥äº›ä»€éº½æ¥æœå¯».",
	
	// misc
	"miscnofunc"		=> "åŠŸèƒ½æ— æ•ˆ.",
	"miscfilesize"		=> "æ–‡ä»¶å¤§å°å·²è¾¾åˆ°æœ€å¤§.",
	"miscfilepart"		=> "æ–‡ä»¶åªæœ‰éƒ¨åˆ†å·²ä¸Šä¼ .",
	"miscnoname"		=> "æ‚¨å¿…é¡»è¾“å…¥åç§°.",
	"miscselitems"		=> "æ‚¨è¿˜æœªé€‰æ‹©ä»»ä½•é¡¹ç›®.",
	"miscdelitems"		=> "æ‚¨ç¡®å®šè¦åˆ é™¤è¿™äº› {0} é¡¹ç›®?",
	"miscdeluser"		=> "æ‚¨ç¡®å®šè¦åˆ é™¤ä½¿ç”¨è€… '{0}'?",
	"miscnopassdiff"	=> "æ–°å¯†ç è·Ÿæ—§å¯†ç ç›¸åŒ.",
	"miscnopassmatch"	=> "å¯†ç ä¸ç¬¦.",
	"miscfieldmissed"	=> "æ‚¨é—æ¼ä¸€ä¸ªé‡è¦æ ä½.",
	"miscnouserpass"	=> "ä½¿ç”¨è€…åç§°æˆ–å¯†ç é”™è¯¯.",
	"miscselfremove"	=> "æ‚¨æ— æ³•ç§»é™¤æ‚¨è‡ªå·±.",
	"miscuserexist"		=> "ä½¿ç”¨è€…å·²å­˜åœ¨.",
	"miscnofinduser"	=> "æ— æ³•æ‰¾åˆ°ä½¿ç”¨è€….",
	"extract_noarchive" => "è¯¥æ–‡ä»¶ä¸å¯è§£åŽ‹ç¼©.",
	"extract_unknowntype" => "æœªçŸ¥æ–‡ä»¶ç±»åž‹",
	
	'chmod_none_not_allowed' => 'Changing Permissions to <none> is not allowed',
	'archive_dir_notexists' => 'The Save-To Directory you have specified does not exist.',
	'archive_dir_unwritable' => 'Please specify a writable directory to save the archive to.',
	'archive_creation_failed' => 'Failed saving the Archive File'
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "æ›´æ”¹æƒé™",
	"editlink"		=> "ç¼–è¾‘",
	"downlink"		=> "ä¸‹è½½",
	"uplink"		=> "ä¸Šä¸€å±‚",
	"homelink"		=> "ç½‘ç«™æ ¹ç›®å½•",
	"reloadlink"		=> "åˆ·æ–°",
	"copylink"		=> "å¤åˆ¶",
	"movelink"		=> "ç§»åŠ¨",
	"dellink"		=> "åˆ é™¤",
	"comprlink"		=> "åŽ‹ç¼©",
	"adminlink"		=> "ç®¡ç†å‘˜",
	"logoutlink"		=> "ç™»å‡º",
	"uploadlink"		=> "ä¸Šä¼ ",
	"searchlink"		=> "æœç´¢",
	"extractlink"	=> "è§£åŽ‹ç¼©",
	'chmodlink'		=> 'æ”¹å˜ (chmod) æƒé™ (ç›®å½•/æ–‡ä»¶)', // new mic
	'mossysinfolink'	=> 'eXtplorer ç³»ç»Ÿä¿¡æ¯ (eXtplorer, æœåŠ¡å™¨, PHP, mySQLæ•°æ®åº“)', // new mic
	'logolink'		=> 'è®¿é—® eXtplorer å®˜æ–¹ç½‘ç«™ (åœ¨æ–°çª—å£æ‰“å¼€)', // new mic
	
	// list
	"nameheader"		=> "åç§°",
	"sizeheader"		=> "å¤§å°",
	"typeheader"		=> "ç±»åž‹",
	"modifheader"		=> "æœ€åŽæ›´æ–°",
	"permheader"		=> "æƒé™",
	"actionheader"		=> "åŠ¨ä½œ",
	"pathheader"		=> "è·¯å¾„",
	
	// buttons
	"btncancel"		=> "å–æ¶ˆ",
	"btnsave"		=> "å‚¨å­˜",
	"btnchange"		=> "æ›´æ”¹",
	"btnreset"		=> "é‡è®¾",
	"btnclose"		=> "å…³é—­",
	"btncreate"		=> "æ–°å¢ž",
	"btnsearch"		=> "æœå¯»",
	"btnupload"		=> "ä¸Šä¼ ",
	"btncopy"		=> "å¤åˆ¶",
	"btnmove"		=> "ç§»åŠ¨",
	"btnlogin"		=> "ç™»å…¥",
	"btnlogout"		=> "ç™»å‡º",
	"btnadd"		=> "å¢žåŠ ",
	"btnedit"		=> "ç¼–è¾‘",
	"btnremove"		=> "ç§»é™¤",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'	=> 'é‡å‘½å',
	'confirm_delete_file' => 'ä½ ç¡®å®šè¦åˆ é™¤è¿™äº›æ–‡ä»¶å—ï¼Ÿ \\n%s',
	'success_delete_file' => 'é¡¹ç›®åˆ é™¤æˆåŠŸï¼',
	'success_rename_file' => 'æ–‡ä»¶å¤¹/æ–‡ä»¶ %s å·²è¢«æˆåŠŸé‡æ–°å‘½åä¸º %s.',
	
	
	// actions
	"actdir"		=> "ç›®å½•",
	"actperms"		=> "æ›´æ”¹æƒé™",
	"actedit"		=> "ç¼–è¾‘æ–‡ä»¶",
	"actsearchresults"	=> "æœå¯»ç»“æžœ",
	"actcopyitems"		=> "å¤åˆ¶é¡¹ç›®",
	"actcopyfrom"		=> "ä»Ž /%s å¤åˆ¶åˆ° /%s ",
	"actmoveitems"		=> "ç§»åŠ¨é¡¹ç›®",
	"actmovefrom"		=> "ä»Ž /%s ç§»åŠ¨åˆ° /%s ",
	"actlogin"		=> "ç™»å…¥",
	"actloginheader"	=> "ç™»å…¥ä»¥ä½¿ç”¨ QuiXplorer",
	"actadmin"		=> "ç®¡ç†é€‰å•",
	"actchpwd"		=> "æ›´æ”¹å¯†ç ",
	"actusers"		=> "ä½¿ç”¨è€…",
	"actarchive"		=> "åŽ‹ç¼©é¡¹ç›®",
	"actupload"		=> "ä¸Šä¼ æ–‡ä»¶",
	
	// misc
	"miscitems"		=> "ä¸ªé¡¹ç›®",
	"miscfree"		=> "æœåŠ¡å™¨å¯ç”¨ç£ç›˜ç©ºé—´",
	"miscusername"		=> "ä½¿ç”¨è€…åç§°",
	"miscpassword"		=> "å¯†ç ",
	"miscoldpass"		=> "æ—§å¯†ç ",
	"miscnewpass"		=> "æ–°å¯†ç ",
	"miscconfpass"		=> "ç¡®è®¤å¯†ç ",
	"miscconfnewpass"	=> "ç¡®è®¤æ–°å¯†ç ",
	"miscchpass"		=> "æ›´æ”¹å¯†ç ",
	"mischomedir"		=> "ä¸»é¡µç›®å½•",
	"mischomeurl"		=> "ä¸»é¡µ URL",
	"miscshowhidden"	=> "æ˜¾ç¤ºéšè—é¡¹ç›®",
	"mischidepattern"	=> "éšè—æ ·å¼",
	"miscperms"		=> "æƒé™",
	"miscuseritems"		=> "(åç§°, ä¸»é¡µç›®å½•, æ˜¾ç¤ºéšè—é¡¹ç›®, æƒé™, å¯ç”¨)",
	"miscadduser"		=> "å¢žåŠ ä½¿ç”¨è€…",
	"miscedituser"		=> "ç¼–è¾‘ä½¿ç”¨è€… '%s'",
	"miscactive"		=> "å¯ç”¨",
	"misclang"		=> "è¯­è¨€",
	"miscnoresult"		=> "æ— ç»“æžœå¯ç”¨.",
	"miscsubdirs"		=> "æœå¯»å­ç›®å½•",
	"miscpermnames"		=> array("åªèƒ½æµè§ˆ","ä¿®æ”¹","æ›´æ”¹å¯†ç ","ä¿®æ”¹åŠæ›´æ”¹å¯†ç ",
					"ç®¡ç†å‘˜"),
	"miscyesno"		=> array("æ˜¯","å¦","Y","N"),
	"miscchmod"		=> array("æ‰€æœ‰äºº", "ç¾¤ç»„", "å…¬å¼€çš„"),
	// from here all new by mic
	'miscowner'			=> 'æ‰€æœ‰è€…',
	'miscownerdesc'		=> '<strong>æè¿°æ ¼å¼:</strong><br />ç”¨æˆ· (UID) /<br />å·¥ä½œç»„ (GID)<br />å½“å‰æƒé™:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> 'eXtplorer ç³»ç»Ÿä¿¡æ¯',
	'sisysteminfo'		=> 'ç³»ç»Ÿä¿¡æ¯',
	'sibuilton'			=> 'æ“ä½œç³»ç»Ÿ',
	'sidbversion'		=> 'æ•°æ®åº“ç‰ˆæœ¬ (MySQL)',
	'siphpversion'		=> 'PHP ç‰ˆæœ¬',
	'siphpupdate'		=> 'ä¿¡æ¯: <span style="color: red;">æ‚¨æ­£åœ¨ä½¿ç”¨çš„PHPç‰ˆæœ¬æ˜¯ <strong>not</strong> actual!</span><br />ä¸ºä¿è¯ eXtplorer åŠå…¶æ’ä»¶çš„æ‰€æœ‰åŠŸèƒ½æ­£å¸¸è¿è¡Œ,<br />æ‚¨å¿…é¡»æœ€ä½Žä½¿ç”¨ <strong>PHP. 4.3 ç‰ˆæœ¬</strong>!',
	'siwebserver'		=> 'æœåŠ¡å™¨',
	'siwebsphpif'		=> 'æœåŠ¡å™¨ - PHP ç•Œé¢',
	'simamboversion'	=> 'eXtplorer ç‰ˆæœ¬',
	'siuseragent'		=> 'æµè§ˆå™¨ç‰ˆæœ¬',
	'sirelevantsettings' => 'é‡è¦ PHP è®¾ç½®',
	'sisafemode'		=> 'å®‰å…¨æ¨¡å¼',
	'sibasedir'			=> 'æ‰“å¼€åŸºç¡€ç›®å½•',
	'sidisplayerrors'	=> 'PHP é”™è¯¯ä¿¡æ¯',
	'sishortopentags'	=> 'çŸ­çš„å¼€æ”¾æ ‡ç­¾',
	'sifileuploads'		=> 'æ–‡ä»¶ä¸Šä¼ ',
	'simagicquotes'		=> 'é­”åŠ›å¼•ç”¨',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'è¾“å‡ºç¼“å­˜',
	'sisesssavepath'	=> 'ä¿å­˜è·¯å¾„è¿›ç¨‹',
	'sisessautostart'	=> 'çº¿ç¨‹è‡ªåŠ¨å¯åŠ¨',
	'sixmlenabled'		=> 'XML å·²æ¿€æ´»',
	'sizlibenabled'		=> 'ZLIB å·²æ¿€æ´»',
	'sidisabledfuncs'	=> 'æ²¡æœ‰å¯ç”¨åŠŸèƒ½',
	'sieditor'			=> 'æ‰€è§å³æ‰€å¾—ç¼–è¾‘å™¨',
	'siconfigfile'		=> 'é…ç½®æ–‡ä»¶',
	'siphpinfo'			=> 'PHP ä¿¡æ¯',
	'siphpinformation'	=> 'PHP ä¿¡æ¯',
	'sipermissions'		=> 'å…è®¸',
	'sidirperms'		=> 'æ–‡ä»¶å¤¹å…è®¸',
	'sidirpermsmess'	=> 'ä¸ºäº†ä¿è¯ eXtplorerçš„æ‰€æœ‰åŠŸèƒ½éƒ½æ­£å¸¸è¿è¡Œï¼Œä¸‹åˆ—ç›®å½•å¿…é¡»è¢«å…è®¸å†™å…¥ [chmod 0777]ï¼Œå³æ‚¨å¿…é¡»çœ‹åˆ°å®ƒä»¬çš„çŠ¶æ€åœ¨ä¸‹é¢æ˜¾ç¤ºæ˜¯ç»¿è‰²çš„ â€œ<font color=green> Writeable </font>â€ ',
	'sionoff'			=> array( 'å¼€', 'å…³' ),
	
	'extract_warning' => "æ‚¨ç¡®å®šè¦è§£åŽ‹ç¼©è¯¥æ–‡ä»¶å—ï¼Ÿåœ¨å½“å‰ç›®å½•ï¼Ÿ\\nè‹¥ä½¿ç”¨ä¸å½“ï¼Œæœ¬æ“ä½œå°†è¦è¦†ç›–çŽ°æœ‰åŒåæ–‡ä»¶!",
	'extract_success' => "è§£åŽ‹ç¼©æˆåŠŸå®Œæˆï¼",
	'extract_failure' => "è§£åŽ‹ç¼©å¤±è´¥",
	
	'overwrite_files' => 'è¦†ç›–çŽ°æœ‰åŒåæ–‡ä»¶ï¼Ÿ',
	"viewlink"		=> "æŸ¥çœ‹",
	"actview"		=> "æ˜¾ç¤ºæ–‡ä»¶æ¥æº",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'åŒ…æ‹¬å­ç›®å½•ï¼Ÿ',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'æ£€æŸ¥æœ€æ–°ç‰ˆæœ¬',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'é‡å‘½åç›®å½•æˆ–æ–‡ä»¶...',
	'newname'		=>	'æ–°åç§°',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'ä¿å­˜åŽè¿”å›žç›®å½•?',
	'line'		=> 	'è¡Œ',
	'column'	=>	'åˆ—',
	'wordwrap'	=>	'æ–‡æœ¬æ¢è¡Œ: (ä»…é™ IE)',
	'copyfile'	=>	'å¦å­˜æ–‡ä»¶ä¸ºè¿™ä¸ªåç§°',
	
	// Bookmarks
	'quick_jump' => 'å¿«é€Ÿè·³è½¬åˆ°',
	'already_bookmarked' => 'æ­¤ç›®å½•å·²è¢«æ ‡ä¸ºä¹¦ç­¾',
	'bookmark_was_added' => 'æ­¤ç›®å½•å·²è¢«åŠ å…¥åˆ°ä¹¦ç­¾åˆ—è¡¨',
	'not_a_bookmark' => 'æ­¤ç›®å½•å°šæœªè¢«æ ‡ä¸ºä¹¦ç­¾',
	'bookmark_was_removed' => 'æ­¤ç›®å½•å·²è¢«ä»Žä¹¦ç­¾åˆ—è¡¨åˆ é™¤',
	'bookmarkfile_not_writable' => " %s æ­¤ä¹¦ç­¾å¤±è´¥ã€‚\n ä¹¦ç­¾æ–‡ä»¶ '%s' \nä¸å¯å†™ã€‚",
	
	'lbl_add_bookmark' => 'å°†æ­¤ç›®å½•åŠ å…¥ä¹¦ç­¾ã€‚',
	'lbl_remove_bookmark' => 'ä»Žä¹¦ç­¾åˆ—è¡¨åˆ é™¤æ­¤ç›®å½•ã€‚',
	
	'enter_alias_name' => 'è¯·ä¸ºæœ¬ä¹¦ç­¾è¾“å…¥åˆ«å',
	
	'normal_compression' => 'æ­£å¸¸åŽ‹ç¼©',
	'good_compression' => 'è¾ƒå¥½åŽ‹ç¼©',
	'best_compression' => 'æœ€å¤§åŽ‹ç¼©',
	'no_compression' => 'ä¸åŽ‹ç¼©',
	
	'creating_archive' => 'åˆ›å»ºå­˜æ¡£æ–‡ä»¶...',
	'processed_x_files' => 'å·²å¤„ç† %s ä¸ªæ–‡ä»¶ï¼Œå…±æœ‰ %s ä¸ªæ–‡ä»¶',
	
	'ftp_header' => 'æœ¬åœ° FTP éªŒè¯',
	'ftp_login_lbl' => 'è¯·ä¸º FTP æœåŠ¡å™¨è¾“å…¥ç™»å½•ä¿¡æ¯',
	'ftp_login_name' => 'FTP ç”¨æˆ·å',
	'ftp_login_pass' => 'FTP å¯†ç ',
	'ftp_hostname_port' => 'FTP æœåŠ¡å™¨ä¸»æœºåå’Œç«¯å£å·<br />(ç«¯å£å¯ä»¥ä¸å¡«)',
	'ftp_login_check' => 'æ£€æŸ¥ FTP è¿žæŽ¥...',
	'ftp_connection_failed' => "FTP æœåŠ¡å™¨æ— æ³•è¿žæŽ¥ã€‚ \nè¯·æ£€æŸ¥ä½ çš„ä¸»æœºä¸Šæ˜¯å¦è¿è¡Œäº† FTP æœåŠ¡å™¨ã€‚",
	'ftp_login_failed' => "FTP ç™»å½•å¤±è´¥ã€‚è¯·æ£€æŸ¥ç”¨æˆ·ååŠå¯†ç æ˜¯å¦æ­£ç¡®ï¼Œç„¶åŽå†è¯•ä¸€æ¬¡ã€‚",
		
	'switch_file_mode' => 'å½“å‰æ¨¡å¼: <strong>%s</strong>. ä½ å¯ä»¥åˆ‡æ¢åˆ° %s æ¨¡å¼.',
	'symlink_target' => 'è±¡å¾æ€§é“¾æŽ¥çš„ç›®æ ‡',
	
	"permchange"		=> "CHMOD æˆåŠŸ:",
	"savefile"		=> "æ–‡ä»¶å·²è¢«ä¿å­˜.",
	"moveitem"		=> "ç§»åŠ¨æˆåŠŸ.",
	"copyitem"		=> "å¤åˆ¶æˆåŠŸ.",
	'archive_name' 	=> 'å­˜æ¡£æ–‡ä»¶çš„åç§°',
	'archive_saveToDir' 	=> 'åœ¨æœ¬ç›®å½•ä¸­ä¿å­˜å­˜æ¡£æ–‡ä»¶',
	
	'editor_simple'	=> 'ç®€åŒ–ç¼–è¾‘å™¨æ¨¡å¼',
	'editor_syntaxhighlight'	=> 'è¯­æ³•é«˜äº®æç¤ºæ¨¡å¼',

	'newlink'	=> 'New File/Directory',
	'show_directories' => 'Show Directories',
	'actlogin_success' => 'Login successful!',
	'actlogin_failure' => 'Login failed, try again.',
	'directory_tree' => 'Directory Tree',
	'browsing_directory' => 'Browsing Directory',
	'filter_grid' => 'Filter',
	'paging_page' => 'Page',
	'paging_of_X' => 'of {0}',
	'paging_firstpage' => 'First Page',
	'paging_lastpage' => 'Last Page',
	'paging_nextpage' => 'Next Page',
	'paging_prevpage' => 'Previous Page',
	
	'paging_info' => 'Displaying Items {0} - {1} of {2}',
	'paging_noitems' => 'No items to display',
	'aboutlink' => 'About...',
	'password_warning_title' => 'Important - Change your Password!',
	'password_warning_text' => 'The user account you are logged in with (admin with password admin) corresponds to the default eXtplorer priviliged account. Your eXtplorer installation is open to intrusion and you should immediately fix this security hole!',
	'change_password_success' => 'Your Password has been changed!',
	'success' => 'Success',
	'failure' => 'Failure',
	'dialog_title' => 'Website Dialog',
	'upload_processing' => 'Processing Upload, please wait...',
	'upload_completed' => 'Upload successful!',
	'acttransfer' => 'Transfer from another Server',
	'transfer_processing' => 'Processing Server-to-Server Transfer, please wait...',
	'transfer_completed' => 'Transfer completed!',
	'max_file_size' => 'Maximum File Size',
	'max_post_size' => 'Maximum Upload Limit',
	'done' => 'Done.',
	'permissions_processing' => 'Applying Permissions, please wait...',
	'archive_created' => 'The Archive File has been created!',
	'save_processing' => 'Saving File...',
	'current_user' => 'This script currently runs with the permissions of the following user:',
	'your_version' => 'Your Version',
	'search_processing' => 'Searching, please wait...',
	'url_to_file' => 'URL of the File',
	'file' => 'File'
);
?>
