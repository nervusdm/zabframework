<?php

// Ãslenska fyrir eXtplorer ver 1.2.1 (translated by gudjon@247.is)
global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "Villa(ur)",
	"back"			=> "Bakka",

	// root
	"home"			=> "Mappa heimasvÃ¦Ã°isins er ekki til, vinsamlegast kannaÃ°u stillingarnar.",
	"abovehome"		=> "Ãžessi mappa getur ekki veriÃ° staÃ°sett fyrir ofan heimasvÃ¦Ã°iÃ° Ã¾itt.",
	"targetabovehome"	=> "Mappan getur ekki veriÃ° staÃ°sett fyrir ofan heimasvÃ¦Ã°iÃ° Ã¾itt.",

	// exist
	"direxist"		=> "Ãžessi mappa er ekki til.",
	//"filedoesexist"	=> "Ãžetta skjal er Ã¾egar til.",
	"fileexist"		=> "Ãžessi skrÃ¡ er ekki til.",
	"itemdoesexist"		=> "Ãžessi hlutur er Ã¾egar til.",
	"itemexist"		=> "Ãžessi hlutur er ekki til.",
	"targetexist"		=> "Ãžessi mappa er ekki til.",
	"targetdoesexist"	=> "Ãžessi hlutur er Ã¾egar til.",

	// open
	"opendir"		=> "Gat ekki opnaÃ° mÃ¶ppuna.",
	"readdir"		=> "Gat ekki lesiÃ° mÃ¶ppuna.",

	// access
	"accessdir"		=> "ÃžÃº hefur ekki aÃ°gang aÃ° Ã¾essari mÃ¶ppu.",
	"accessfile"		=> "ÃžÃº hefur ekki aÃ°gang aÃ° Ã¾essari skrÃ¡.",
	"accessitem"		=> "ÃžÃº hefur ekki aÃ°gang aÃ° Ã¾essum hlut.",
	"accessfunc"		=> "ÃžÃº hefur ekki aÃ°gang aÃ° Ã¾essari skipun.",
	"accesstarget"		=> "ÃžÃº hefur ekki aÃ°gang aÃ° Ã¾essari mÃ¶ppu.",

	// actions
	"permread"		=> "Gat ekki sÃ³tt aÃ°gangsstÃ½ringar.",
	"permchange"		=> "Gat ekki breytt aÃ°gangsstÃ½ringum.",
	"openfile"		=> "Gat ekki opnaÃ° skjaliÃ°.",
	"savefile"		=> "Vistun skjalsins mistÃ³kst.",
	"createfile"		=> "Gat ekki bÃºiÃ° til skrÃ¡nna.",
	"createdir"		=> "Gat ekki bÃºiÃ° til skrÃ¡nna.",
	"uploadfile"		=> "Gat ekki sÃ³tt skrÃ¡nna.",
	"copyitem"		=> "Afritun mistÃ³kst.",
	"moveitem"		=> "Ekki tÃ³kst aÃ° fÃ¦ra skrÃ¡nna.",
	"delitem"		=> "Ekki tÃ³kst aÃ° eyÃ°a skrÃ¡nni.",
	"chpass"		=> "MistÃ³kst aÃ° breyta lykilorÃ°inu.",
	"deluser"		=> "Gat ekki fjarlÃ¦gt notanda.",
	"adduser"		=> "Gat ekki bÃ¦tt inn notanda.",
	"saveuser"		=> "Saving user failed.",
	"searchnothing"		=> "You must supply something to search for.",

	// misc
	"miscnofunc"		=> "Virknin er ekki tiltÃ¦k.",
	"miscfilesize"		=> "SkrÃ¡inn er of stÃ³r.",
	"miscfilepart"		=> "Hluti af skrÃ¡nni var sÃ³ttur.",
	"miscnoname"		=> "Vinsamlegast skrÃ¡Ã°u inn nafn.",
	"miscselitems"		=> "ÃžÃº hefur ekki valiÃ° neina hluti.",
	"miscdelitems"		=> "Ertu viss um aÃ° eyÃ°a Ã¾essum {0} hlut(um)?",
	"miscdeluser"		=> "Ertu viss um aÃ° vilja eyÃ°a Ã¾essum notanda '{0}'?",
	"miscnopassdiff"	=> "NÃ½a lykilorÃ°iÃ° er eins.",
	"miscnopassmatch"	=> "LykilorÃ°in standast ekki.",
	"miscfieldmissed"	=> "Ekki voru allir reiti rÃ©tt Ãºtfylltir.",
	"miscnouserpass"	=> "Notendanafn eÃ°a lykilorÃ° rangt.",
	"miscselfremove"	=> "ÃžÃº getur ekki fjarlÃ¦gt sjÃ¡fan Ã¾ig.",
	"miscuserexist"		=> "Notandi er Ã¾egar til.",
	"miscnofinduser"	=> "Finn ekki notanda.",
	"extract_noarchive" => "SkrÃ¡inn er ekki Ã¾jÃ¶ppuÃ° safnskrÃ¡.",
	"extract_unknowntype" => "Ã“Ã¾ekkt safnskrÃ¡",
	
	'chmod_none_not_allowed' => 'Changing Permissions to <none> is not allowed',
	'archive_dir_notexists' => 'The Save-To Directory you have specified does not exist.',
	'archive_dir_unwritable' => 'Please specify a writable directory to save the archive to.',
	'archive_creation_failed' => 'Failed saving the Archive File'
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "BREYTA AÃGANGSSTÃRINGUM",
	"editlink"		=> "BREYTA",
	"downlink"		=> "NIÃURHALA",
	"uplink"		=> "UPP",
	"homelink"		=> "HEIM",
	"reloadlink"		=> "ENDURHLAÃA",
	"copylink"		=> "AFRITA",
	"movelink"		=> "FÃ†RA",
	"dellink"		=> "EYÃA",
	"comprlink"		=> "GEYMA",
	"adminlink"		=> "ADMIN",
	"logoutlink"		=> "ÃšTSKRÃ",
	"uploadlink"		=> "UPPHALA",
	"searchlink"		=> "LEIT",
	"extractlink"	=> "AfÃ¾jappa",
	'chmodlink'		=> 'Breyta (chmod) AÃ°gangsstÃ½ringum (mÃ¶ppu/skrÃ¡(a))', // new mic
	'mossysinfolink'	=> 'eXtplorer upplÃ½singar (eXtplorer, Server, PHP, mySQL)', // new mic
	'logolink'		=> 'Fara Ã¡ heimasÃ­Ã°u eXtplorer (new window)', // new mic

	// list
	"nameheader"		=> "Nafn",
	"sizeheader"		=> "StÃ¦rÃ°",
	"typeheader"		=> "GerÃ°",
	"modifheader"		=> "Breytt",
	"permheader"		=> "AÃ°gangur",
	"actionheader"		=> "AÃ°gerÃ°ir",
	"pathheader"		=> "SlÃ³Ã°",

	// buttons
	"btncancel"		=> "HÃ¦tta",
	"btnsave"		=> "Vista",
	"btnchange"		=> "Breyta",
	"btnreset"		=> "Endurstilla",
	"btnclose"		=> "Loka",
	"btncreate"		=> "BÃºa til",
	"btnsearch"		=> "Leita",
	"btnupload"		=> "Upphala",
	"btncopy"		=> "Afrita",
	"btnmove"		=> "FÃ¦ra",
	"btnlogin"		=> "InnskrÃ¡",
	"btnlogout"		=> "ÃštskrÃ¡",
	"btnadd"		=> "BÃ¦ta inn",
	"btnedit"		=> "Breyta",
	"btnremove"		=> "Taka Ãºt",

	// user messages, new in eXtplorer 1.3.0
	'renamelink'	=> 'RENAME',
	'confirm_delete_file' => 'Are you sure you want to delete this file? \\n%s',
	'success_delete_file' => 'Item(s) successfully deleted.',
	'success_rename_file' => 'The directory/file %s was successfully renamed to %s.',
	
	// actions
	"actdir"		=> "Mappa",
	"actperms"		=> "Breyta aÃ°gangsstÃ½ringum",
	"actedit"		=> "Breyta skjali",
	"actsearchresults"	=> "NiÃ°urstÃ¶Ã°ur leitar",
	"actcopyitems"		=> "Afrita hlut(i)",
	"actcopyfrom"		=> "Afrita frÃ¡ /%s til /%s ",
	"actmoveitems"		=> "FÃ¦ra hlut(i)",
	"actmovefrom"		=> "FÃ¦ra frÃ¡ /%s til /%s ",
	"actlogin"		=> "InnskrÃ¡",
	"actloginheader"	=> "InnskrÃ¡ til aÃ° nota QuiXplorer",
	"actadmin"		=> "KerfisstjÃ³rn",
	"actchpwd"		=> "Breyta lykilorÃ°i",
	"actusers"		=> "Notendur",
	"actarchive"		=> "Geyma hlut(i)",
	"actupload"		=> "Upphala skrÃ¡(m)",

	// misc
	"miscitems"		=> "Hlut(i)",
	"miscfree"		=> "FrÃ­tt",
	"miscusername"		=> "Notendanafn",
	"miscpassword"		=> "LykilorÃ°",
	"miscoldpass"		=> "Gamla lykilorÃ°iÃ°",
	"miscnewpass"		=> "NÃ½tt lykilorÃ°",
	"miscconfpass"		=> "StaÃ°festa lykilorÃ°",
	"miscconfnewpass"	=> "StaÃ°festa nÃ½tt lykilorÃ°",
	"miscchpass"		=> "Breyta lykilorÃ°i",
	"mischomedir"		=> "HeimasvÃ¦Ã°i",
	"mischomeurl"		=> "SlÃ³Ã°",
	"miscshowhidden"	=> "SÃ½na falda hluti",
	"mischidepattern"	=> "Hylja slÃ³Ã°",
	"miscperms"		=> "AÃ°gangsstÃ½ring",
	"miscuseritems"		=> "(nafn, heimasvÃ¦Ã°i, sÃ½na falda hluti, aÃ°gangsstÃ½ringar, virkur)",
	"miscadduser"		=> "BÃ¦ta viÃ° notenda",
	"miscedituser"		=> "breyta notanda '%s'",
	"miscactive"		=> "Virkur",
	"misclang"		=> "TungumÃ¡l",
	"miscnoresult"		=> "Engar niÃ°urstÃ¶Ã°ur fengust.",
	"miscsubdirs"		=> "Leita Ã­ undirmÃ¶ppum",
	"miscpermnames"		=> array("SkoÃ°a eingÃ¶ngu","Breyta","Breyta lykilorÃ°i","Breyta & Breyta lykiorÃ°i",
					"Administrator"),
	"miscyesno"		=> array("JÃ¡","Nei","J","N"),
	"miscchmod"		=> array("Eigandi", "HÃ³pur", "Almennt"),

	// from here all new by mic
	'miscowner'			=> 'Eigandi',
	'miscownerdesc'		=> '<strong>LÃ½sing:</strong><br />Notandi (UID) /<br />HÃ³pur (GID)<br />Leyfi:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> 'eXtplorer UpplÃ½singar',
	'sisysteminfo'		=> 'KerfisupplÃ½singar',
	'sibuilton'			=> 'StÃ½rikerfi',
	'sidbversion'		=> 'ÃštgÃ¡fa gagnagrunns (MySQL)',
	'siphpversion'		=> 'PHP ÃºtgÃ¡fa',
	'siphpupdate'		=> 'UpplÃ½singar: <span style="color: red;">PHP sem Ã¾Ãº ert aÃ° nota er <strong>ekki</strong> raunverulega!</span><br />To guarantee all functions and features of eXtplorer and addons,<br />you should use as minimum <strong>PHP.Version 4.3</strong>!',
	'siwebserver'		=> 'Webserver',
	'siwebsphpif'		=> 'WebServer - PHP Interface',
	'simamboversion'	=> 'eXtplorer ÃºtgÃ¡fa',
	'siuseragent'		=> 'ÃštgÃ¡fa Vafrara',
	'sirelevantsettings' => 'Important PHP Settings',
	'sisafemode'		=> 'Safe Mode',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'PHP Errors',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'Datei Uploads',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'Output Buffer',
	'sisesssavepath'	=> 'Session Savepath',
	'sisessautostart'	=> 'Session auto start',
	'sixmlenabled'		=> 'XML enabled',
	'sizlibenabled'		=> 'ZLIB enabled',
	'sidisabledfuncs'	=> 'Non enabled functions',
	'sieditor'			=> 'WYSIWYG Editor',
	'siconfigfile'		=> 'Config file',
	'siphpinfo'			=> 'PHP Info',
	'siphpinformation'	=> 'PHP Information',
	'sipermissions'		=> 'Permissions',
	'sidirperms'		=> 'Directory permissions',
	'sidirpermsmess'	=> 'To be shure that all functions and features of eXtplorer are working correct, following folders should have permission to write [chmod 0777]',
	'sionoff'			=> array( 'Ã', 'Af' ),
	
	'extract_warning' => "Villtu afÃ¾jappa Ã¾essari skrÃ¡? HÃ©r?\\nAÃ°rar skrÃ¡r gÃ¦tu veriÃ° yfirskrifaÃ°ar ef ekki er fariÃ° varlega!",
	'extract_success' => "AÃ¾jÃ¶ppun tÃ³kst",
	'extract_failure' => "AfÃ¾jÃ¶ppun mistÃ³kst",
	
	'overwrite_files' => 'Overwrite existing file(s)?',
	"viewlink"		=> "VIEW",
	"actview"		=> "Showing source of file",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'Recurse into subdirectories?',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'Check for latest version',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'Rename a directory or file...',
	'newname'		=>	'New Name',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'Return to directory after saving?',
	'line'		=> 	'Line',
	'column'	=>	'Column',
	'wordwrap'	=>	'Wordwrap: (IE only)',
	'copyfile'	=>	'Copy file into this filename',
	
	// Bookmarks
	'quick_jump' => 'Quick Jump To',
	'already_bookmarked' => 'This directory is already bookmarked',
	'bookmark_was_added' => 'This directory was added to the bookmark list.',
	'not_a_bookmark' => 'This directory is not a bookmark.',
	'bookmark_was_removed' => 'This directory was removed from the bookmark list.',
	'bookmarkfile_not_writable' => "Failed to %s the bookmark.\n The Bookmark File '%s' \nis not writable.",
	
	'lbl_add_bookmark' => 'Add this Directory as Bookmark',
	'lbl_remove_bookmark' => 'Remove this Directory from the Bookmark List',
	
	'enter_alias_name' => 'Please enter the alias name for this bookmark',
	
	'normal_compression' => 'normal compression',
	'good_compression' => 'good compression',
	'best_compression' => 'best compression',
	'no_compression' => 'no compression',
	
	'creating_archive' => 'Creating Archive File...',
	'processed_x_files' => 'Processed %s of %s Files',
	
	'ftp_header' => 'Local FTP Authentication',
	'ftp_login_lbl' => 'Please enter the login credentials for the FTP server',
	'ftp_login_name' => 'FTP User Name',
	'ftp_login_pass' => 'FTP Password',
	'ftp_hostname_port' => 'FTP Server Hostname and Port <br />(Port is optional)',
	'ftp_login_check' => 'Checking FTP connection...',
	'ftp_connection_failed' => "The FTP server could not be contacted. \nPlease check that the FTP server is running on your server.",
	'ftp_login_failed' => "The FTP login failed. Please check the username and password and try again.",
		
	'switch_file_mode' => 'Current mode: <strong>%s</strong>. You could switch to %s mode.',
	'symlink_target' => 'Target of the Symbolic Link',
	
	"permchange"		=> "CHMOD Success:",
	"savefile"		=> "The File was saved.",
	"moveitem"		=> "Moving succeeded.",
	"copyitem"		=> "Copying succeeded.",
	'archive_name' 	=> 'Name of the Archive File',
	'archive_saveToDir' 	=> 'Save the Archive in this directory',
	
	'editor_simple'	=> 'Simple Editor Mode',
	'editor_syntaxhighlight'	=> 'Syntax-Highlighted Mode',

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
