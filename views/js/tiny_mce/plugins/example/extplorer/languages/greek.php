<?php

// Greek Language file for eXtplorer
global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "d/m/Y H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "ERROR(S)",
	"back"			=> "Î•Ï€Î¹ÏƒÏ„ÏÎ¿Ï†Î®",
	
	// root
	"home"			=> "ÎŸ Î¼Î·Ï„ÏÎ¹ÎºÏŒÏ‚ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚ Î´Î­Î½ Ï…Ï€Î¬ÏÏ‡ÎµÎ¹, Ï€Î±ÏÎ±ÎºÎ±Î»ÏŽ ÎµÎ»Î­Î¾Ï„Îµ Ï„Î¹Ï‚ ÏÏ…Î¸Î¼Î¯ÏƒÎµÎ¹Ï‚ ÏƒÎ±Ï‚.",
	"abovehome"		=> "ÎŸ Ï„ÏÎ­Ï‡Ï‰Î½ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚ Î´Î­Î½ Î¼Ï€Î¿ÏÎµÎ¯ Î½Î± Ï…Ï€ÎµÏÎ²Î±Î¯Î½ÎµÎ¹ Ï„Î¿Î½ Î¼Î·Ï„ÏÎ¹ÎºÏŒ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿.",
	"targetabovehome"	=> "ÎŸ ÎµÏ€Î¹Î»ÎµÎ³Î¼Î­Î½Î¿Ï‚ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚ Î´Î­Î½ Î¼Ï€Î¿ÏÎµÎ¯ Î½Î± Ï…Ï€ÎµÏÎ²Î±Î¯Î½ÎµÎ¹ Ï„Î¿Î½ Î¼Î·Ï„ÏÎ¹ÎºÏŒ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿.",
	
	// exist
	"direxist"		=> "Î‘Ï…Ï„ÏŒÏ‚ Î¿ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚ Î´Î­Î½ Ï…Ï€Î¬ÏÏ‡ÎµÎ¹.",
	//"filedoesexist"	=> "Î‘Ï…Ï„ÏŒ Ï„Î¿ Î±ÏÏ‡ÎµÎ¯Î¿ Î´Î­Î½ Ï…Ï€Î¬ÏÏ‡ÎµÎ¹.",
	"fileexist"		=> "Î‘Ï…Ï„ÏŒ Ï„Î¿ Î±ÏÏ‡ÎµÎ¯Î¿ Î´Î­Î½ Ï…Ï€Î¬ÏÏ‡ÎµÎ¹.",
	"itemdoesexist"		=> "Î‘Ï…Ï„ÏŒ Ï„Î¿ Î±Î½Ï„Î¹ÎºÎµÎ¯Î¼ÎµÎ½Î¿ Ï…Ï€Î¬ÏÏ‡ÎµÎ¹ Î®Î´Î·.",
	"itemexist"		=> "Î‘Ï…Ï„ÏŒ Ï„Î¿ Î±Î½Ï„Î¹ÎºÎµÎ¯Î¼ÎµÎ½Î¿ Ï…Ï€Î¬ÏÏ‡ÎµÎ¹ Î®Î´Î·.",
	"targetexist"		=> "ÎŒ ÎµÏ€Î¹Î»ÎµÎ³Î¼Î­Î½Î¿Ï‚ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚ Î´Î­Î½ Ï…Ï€Î¬ÏÏ‡ÎµÎ¹.",
	"targetdoesexist"	=> "Î¤Î¿ ÎµÏ€Î¹Î»ÎµÎ³Î¼Î­Î½Î¿ Î±Î½Ï„Î¹ÎºÎµÎ¯Î¼ÎµÎ½Î¿ Ï…Ï€Î¬ÏÏ‡ÎµÎ¹ Î®Î´Î·.",
	
	// open
	"opendir"		=> "Î•Î¯Î½Î±Î¹ Î±Î´ÏÎ½Î±Ï„Î¿Î½ Î½Î± Î±Î½Î¿Î¹Ï‡Ï„ÎµÎ¯ Î¿ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚.",
	"readdir"		=> "Î•Î¯Î½Î±Î¹ Î±Î´ÏÎ½Î±Ï„Î¿Î½ Î½Î± Î´Î¹Î±Î²Î±ÏƒÏ„ÎµÎ¯ Î¿ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚.",
	
	// access
	"accessdir"		=> "Î”Î­Î½ ÏƒÎ±Ï‚ ÎµÏ€Î¹Ï„ÏÎ­Ï€ÎµÏ„Î±Î¹ Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ· Ïƒ' Î±Ï…Ï„ÏŒÎ½ Ï„Î¿Î½ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿.",
	"accessfile"		=> "Î”Î­Î½ ÏƒÎ±Ï‚ ÎµÏ€Î¹Ï„ÏÎ­Ï€ÎµÏ„Î±Î¹ Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ· Ïƒ' Î±Ï…Ï„ÏŒ Ï„Î¿ Î±ÏÏ‡ÎµÎ¯Î¿.",
	"accessitem"		=> "Î”Î­Î½ ÏƒÎ±Ï‚ ÎµÏ€Î¹Ï„ÏÎ­Ï€ÎµÏ„Î±Î¹ Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ· Ïƒ' Î±Ï…Ï„ÏŒ Ï„Î¿ Î±Î½Ï„Î¹ÎºÎµÎ¯Î¼ÎµÎ½Î¿.",
	"accessfunc"		=> "Î”Î­Î½ ÏƒÎ±Ï‚ ÎµÏ€Î¹Ï„ÏÎ­Ï€ÎµÏ„Î±Î¹ Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ· Ïƒ' Î±Ï…Ï„Î® Ï„Î·Î½ Î»ÎµÎ¹Ï„Î¿Ï…ÏÎ³Î¯Î±.",
	"accesstarget"		=> "Î”Î­Î½ ÏƒÎ±Ï‚ ÎµÏ€Î¹Ï„ÏÎ­Ï€ÎµÏ„Î±Î¹ Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ· Ïƒ' Î±Ï…Ï„ÏŒÎ½ Ï„Î¿Î½ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿.",
	
	// actions
	"permread"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î±Î½Î¬ÎºÏ„Î·ÏƒÎ·Ï‚ Ï€ÏÎ¿ÏƒÎ²Î¬ÏƒÎµÏ‰Î½ Î´Î­Î½ ÎºÎ±Ï„Î­ÏƒÏ„ÎµÎ¹ Î´Ï…Î½Î±Ï„ÏŒ Î½Î± ÎµÎºÏ„ÎµÎ»ÎµÏƒÏ„ÎµÎ¯.",
	"permchange"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î¼ÎµÏ„Î±Ï„ÏÎ¿Ï€Î®Ï‚ Ï€ÏÎ¿ÏƒÎ²Î¬ÏƒÎµÏ‰Î½ Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"openfile"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î±Î½Î¿Î¯Î³Î¼Î±Ï„Î¿Ï‚ Î±ÏÏ‡ÎµÎ¯Î¿Ï… Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"savefile"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î±Ï€Î¿Î¸Î®ÎºÎµÏ…ÏƒÎ·Ï‚ Î±ÏÏ‡ÎµÎ¯Î¿Ï… Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"createfile"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î±Ï‚ Î±ÏÏ‡ÎµÎ¯Î¿Ï… Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"createdir"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î´Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î±Ï‚ ÎºÎ±Ï„Î±Î»ÏŒÎ³Î¿Ï… Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"uploadfile"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Ï†ÏŒÏÏ„Ï‰ÏƒÎ·Ï‚ Î±ÏÏ‡ÎµÎ¯Î¿Ï… Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"copyitem"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î±Î½Ï„Î¹Î³ÏÎ±Ï†Î®Ï‚ Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"moveitem"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î¼ÎµÏ„Î±ÎºÎ¯Î½Î·ÏƒÎ·Ï‚ Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"delitem"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î´Î¹Î±Î³ÏÎ±Ï†Î®Ï‚ Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"chpass"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î¼ÎµÏ„Î±Î²Î¿Î»Î®Ï‚ ÎºÏ‰Î´Î¹ÎºÎ¿Ï Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ·Ï‚ Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"deluser"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î±Ï€Î¿Î¼Î¬ÎºÏÏ…Î½ÏƒÎ·Ï‚ Ï‡ÏÎ®ÏƒÏ„Î· Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"adduser"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Ï€ÏÎ¿ÏƒÎ¸Î®ÎºÎ·Ï‚ Ï‡ÏÎ®ÏƒÏ„Î· Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"saveuser"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î±Ï€Î¿Î¸Î®ÎºÎµÏ…ÏƒÎ·Ï‚ Ï„Ï‰Î½ ÏƒÏ„Î¿Î¹Ï‡ÎµÎ¯Ï‰Î½ Ï„Î¿Ï… Ï‡ÏÎ®ÏƒÏ„Î· Î±Ï€Î­Ï„Ï…Ï‡Îµ.",
	"searchnothing"		=> "Î•Î¯Î½Î±Î¹ Î±Ï€Î±ÏÎ±Î¯Ï„Î·Ï„Î¿ Î½Î± Î¿ÏÎ¯ÏƒÎµÏ„Îµ ÎºÎ¬Ï€Î¿Î¹Î± Ï†ÏÎ¬ÏƒÎ· Î³Î¹Î± Ï„Î·Î½ Î¿Ï€Î¿Î¯Î± Î¸Î± ÎµÎºÏ„ÎµÎ»ÎµÏƒÏ„ÎµÎ¯ Î· Î±Î½Î±Î¶Î®Ï„Î·ÏƒÎ·.",
	
	// misc
	"miscnofunc"		=> "Î— Î´Î¹Î±Î´Î¹ÎºÎ±ÏƒÎ¯Î± Î´Î­Î½ ÎµÎ¯Î½Î±Î¹ Î´Î¹Î±Î¸Î­ÏƒÎ¹Î¼Î·.",
	"miscfilesize"		=> "Î¤Î¿ Î±ÏÏ‡ÎµÎ¯Î¿ Ï…Ï€ÎµÏÎ²Î±Î¯Î½ÎµÎ¹ Ï„Î¿ Î¼Î­Î³Î¹ÏƒÏ„Î¿ ÎµÏ€Î¹Ï„ÏÎµÏ€Ï„ÏŒ Î¼Î­Î³ÎµÎ¸Î¿Ï‚.",
	"miscfilepart"		=> "Î¤Î¿ Î±ÏÏ‡ÎµÎ¯Î¿ Ï†Î¿ÏÏ„ÏŽÎ¸Î·ÎºÎµ Î±Ï€Î¿ÏƒÏ€Î±ÏƒÎ¼Î±Ï„Î¹ÎºÎ¬.",
	"miscnoname"		=> "Î ÏÎ­Ï€ÎµÎ¹ Î½Î± Î¿ÏÎ¯ÏƒÎµÏ„Îµ Î­Î½Î± ÏŒÎ½Î¿Î¼Î±.",
	"miscselitems"		=> "Î”Î­Î½ Î­Ï‡ÎµÏ„Îµ ÎµÏ€Î¹Î»Î­Î¾ÎµÎ¹ Î±Î½Ï„Î¹ÎºÎµÎ¯Î¼ÎµÎ½Î¿(Î±).",
	"miscdelitems"		=> "Î˜Î­Î»ÎµÏ„Îµ Î½Î± Ï€ÏÎ¿Ï‡Ï‰ÏÎ®ÏƒÎµÏ„Îµ ÏƒÏ„Î·Î½ Î´Î¹Î±Î³ÏÎ±Ï†Î® {0} Î±Î½Ï„Î¹ÎºÎµÎ¹Î¼Î­Î½Î¿Ï…(Ï‰Î½);",
	"miscdeluser"		=> "Î˜Î­Î»ÎµÏ„Îµ Î½Î± Ï€ÏÎ¿Ï‡Ï‰ÏÎ®ÏƒÎµÏ„Îµ ÏƒÏ„Î·Î½ Î´Î¹Î±Î³ÏÎ±Ï†Î® Ï„Î¿Ï… Ï‡ÏÎ®ÏƒÏ„Î· '{0}';",
	"miscnopassdiff"	=> "ÎŸ Î½Î­Î¿Ï‚ ÎºÏ‰Î´Î¹ÎºÏŒÏ‚ Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ·Ï‚ Î´Î­Î½ Ï€Î±ÏÎ¿Ï…ÏƒÎ¹Î¬Î¶ÎµÎ¹ Î´Î¹Î±Ï†Î¿ÏÎ¬ Î±Ï€ÏŒ Ï„Î¿Î½ Ï€ÏÎ¿Î·Î³Î¿ÏÎ¼ÎµÎ½Î¿.",
	"miscnopassmatch"	=> "ÎŸÎ¹ ÎºÏ‰Î´Î¹ÎºÎ¿Î¯ Î´Î­Î½ Ï„Î±Î¹ÏÎ¹Î¬Î¶Î¿Ï…Î½ Î¼ÎµÏ„Î±Î¾Ï Ï„Î¿Ï…Ï‚.",
	"miscfieldmissed"	=> "Î Î±ÏÎ±Î»ÎµÎ¯ÏˆÎ±Ï„Îµ Î­Î½Î± ÏƒÎ·Î¼Î±Î½Ï„Î¹ÎºÏŒ Ï€ÎµÎ´Î¯Î¿.",
	"miscnouserpass"	=> "Î¤Î¿ ÏŒÎ½Î¿Î¼Î± Ï‡ÏÎ®ÏƒÏ„Î· Î® Î¿ ÎºÏ‰Î´Î¹ÎºÏŒÏ‚ Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ·Ï‚ Î´Î­Î½ ÎµÎ¯Î½Î±Î¹ ÏƒÏ‰ÏƒÏ„Î¬.",
	"miscselfremove"	=> "Î”Î­Î½ Î¼Ï€Î¿ÏÎµÎ¯Ï„Îµ Î½Î± Î±Ï†Î±Î¹ÏÎ­ÏƒÎµÏ„Îµ Ï„Î¿Î½ ÎµÎ±Ï…Ï„ÏŒ ÏƒÎ±Ï‚.",
	"miscuserexist"		=> "ÎŸ Ï‡ÏÎ®ÏƒÏ„Î·Ï‚ Ï…Ï€Î¬ÏÏ‡ÎµÎ¹ Î®Î´Î·.",
	"miscnofinduser"	=> "ÎŸ Ï‡ÏÎ®ÏƒÏ„Î·Ï‚ Î´Î­Î½ Î¼Ï€Î¿ÏÎµÎ¯ Î½Î± Î²ÏÎµÎ¸ÎµÎ¯.",
	"extract_noarchive" => "The File is no extractable Archive.",
	"extract_unknowntype" => "Unknown Archive Type",
	
	'chmod_none_not_allowed' => 'Changing Permissions to <none> is not allowed',
	'archive_dir_notexists' => 'The Save-To Directory you have specified does not exist.',
	'archive_dir_unwritable' => 'Please specify a writable directory to save the archive to.',
	'archive_creation_failed' => 'Failed saving the Archive File'
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "Î‘Î›Î›Î‘Î“Î— Î”Î™ÎšÎ‘Î™Î©ÎœÎ‘Î¤Î©Î Î Î¡ÎŸÎ£Î’Î‘Î£Î—Î£",
	"editlink"		=> "Î•Î Î•ÎžÎ•Î¡Î“Î‘Î£Î™Î‘",
	"downlink"		=> "Î‘Î ÎŸÎ˜Î—ÎšÎ•Î¥Î£Î—",
	"uplink"		=> "Î Î‘ÎÎ©",
	"homelink"		=> "Î‘Î¡Î§Î™ÎšÎ— Î£Î•Î›Î™Î”Î‘",
	"reloadlink"		=> "Î‘ÎÎ‘ÎÎ•Î©Î£Î—",
	"copylink"		=> "Î‘ÎÎ¤Î™Î“Î¡Î‘Î¦Î—",
	"movelink"		=> "ÎœÎ•Î¤Î‘ÎšÎ™ÎÎ—Î£Î—",
	"dellink"		=> "Î”Î™Î‘Î“Î¡Î‘Î¦Î—",
	"comprlink"		=> "Î£Î¥ÎœÎ Î™Î•Î£Î—",
	"adminlink"		=> "Î”Î™Î‘Î§Î•Î™Î¡Î™Î£Î¤Î—Î£",
	"logoutlink"		=> "Î•ÎžÎŸÎ”ÎŸÎ£",
	"uploadlink"		=> "Î¦ÎŸÎ¡Î¤Î©Î£Î—",
	"searchlink"		=> "Î‘ÎÎ‘Î–Î—Î¤Î—Î£Î—",
	"extractlink"	=> "Extract Archive",
	'chmodlink'		=> 'Change (chmod) Rights (Folder/File(s))', // new mic
	'mossysinfolink'	=> 'eXtplorer System Information (eXtplorer Server, PHP, mySQL)', // new mic
	'logolink'		=> 'Go to the eXtplorer Website (new window)', // new mic
	
	// list
	"nameheader"		=> "ÎŒÎ½Î¿Î¼Î±",
	"sizeheader"		=> "ÎœÎ­Î³ÎµÎ¸Î¿Ï‚",
	"typeheader"		=> "Î¤ÏÏ€Î¿Ï‚",
	"modifheader"		=> "Î¤ÏÎ¿Ï€Î¿Ï€Î¿Î¯Î·ÏƒÎ·",
	"permheader"		=> "Î”Î¹Îº/Ï„Î±",
	"actionheader"		=> "Î•Î½Î­ÏÎ³ÎµÎ¹ÎµÏ‚",
	"pathheader"		=> "Î”Î¹Î±Î´ÏÎ¿Î¼Î®",
	
	// buttons
	"btncancel"		=> "'Î‘ÎºÏ…ÏÎ¿",
	"btnsave"		=> "Î‘Ï€Î¿Î¸Î®ÎºÏ…ÎµÏƒÎ·",
	"btnchange"		=> "Î‘Î»Î»Î±Î³Î®",
	"btnreset"		=> "Î‘Î½Î±Î¯ÏÎµÏƒÎ·",
	"btnclose"		=> "ÎšÎ»ÎµÎ¯ÏƒÎ¹Î¼Î¿",
	"btncreate"		=> "Î”Î·Î¼Î¹Î¿Ï…ÏÎ³Î¯Î±",
	"btnsearch"		=> "Î‘Î½Î±Î¶Î®Ï„Î·ÏƒÎ·",
	"btnupload"		=> "Î¦ÏŒÏÏ„Ï‰ÏƒÎ·",
	"btncopy"		=> "Î‘Î½Ï„Î¹Î³ÏÎ±Ï†Î®",
	"btnmove"		=> "ÎœÎµÏ„Î±ÎºÎ¯Î½Î·ÏƒÎ·",
	"btnlogin"		=> "Î•Î¯ÏƒÎ¿Î´Î¿Ï‚",
	"btnlogout"		=> "ÎˆÎ¾Î¿Î´Î¿Ï‚",
	"btnadd"		=> "Î ÏÎ¿ÏƒÎ¸Î®ÎºÎ·",
	"btnedit"		=> "Î•Ï€ÎµÎ¾ÎµÏÎ³Î±ÏƒÎ¯Î±",
	"btnremove"		=> "Î‘Ï†Î±Î¯ÏÎµÏƒÎ·",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'	=> 'RENAME',
	'confirm_delete_file' => 'Are you sure you want to delete this file? \\n%s',
	'success_delete_file' => 'Item(s) successfully deleted.',
	'success_rename_file' => 'The directory/file %s was successfully renamed to %s.',
	
	
	// actions
	"actdir"		=> "ÎšÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚",
	"actperms"		=> "Î‘Î»Î»Î±Î³Î® Î´Î¹ÎºÎ±Î¹Ï‰Î¼Î¬Ï„Ï‰Î½ Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ·Ï‚",
	"actedit"		=> "Î•Ï€ÎµÎ¾ÎµÏÎ³Î±ÏƒÎ¯Î± Î‘ÏÏ‡ÎµÎ¯Î¿Ï…",
	"actsearchresults"	=> "Î‘Ï€Î¿Ï„ÎµÎ»Î­ÏƒÎ¼Î±Ï„Î± Î‘Î½Î±Î¶Î®Ï„Î·ÏƒÎ·Ï‚",
	"actcopyitems"		=> "Î‘Î½Ï„Î¹Î³ÏÎ±Ï†Î® Î‘Î½Ï„Î¹ÎºÎµÎ¹Î¼Î­Î½Î¿Ï…(Ï‰Î½)",
	"actcopyfrom"		=> "Î‘Î½Ï„Î¹Î³ÏÎ±Ï†Î® Î±Ï€ÏŒ /%s ÏƒÎµ /%s ",
	"actmoveitems"		=> "ÎœÎµÏ„Î±ÎºÎ¯Î½Î·ÏƒÎ· Î‘Î½Ï„Î¹ÎºÎµÎ¹Î¼Î­Î½Î¿Ï…(Ï‰Î½)",
	"actmovefrom"		=> "ÎœÎµÏ„Î±ÎºÎ¯Î½Î·ÏƒÎ· Î±Ï€ÏŒ /%s ÏƒÎµ /%s ",
	"actlogin"		=> "Î•Î¯ÏƒÎ¿Î´Î¿Ï‚",
	"actloginheader"	=> "ÎŒÎ½Î¿Î¼Î± Ï€Î¿Ï… Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹ÎµÎ¯ Ï„Î¿ QuiXplorer",
	"actadmin"		=> "Î”Î¹Î±Ï‡ÎµÎ¯ÏÎ¹ÏƒÎ·",
	"actchpwd"		=> "Î‘Î»Î»Î±Î³Î® ÎšÏ‰Î´Î¹ÎºÎ¿Ï Î ÏÏŒÏƒÎ²Î±ÏƒÎ·Ï‚",
	"actusers"		=> "Î§ÏÎ®ÏƒÏ„ÎµÏ‚",
	"actarchive"		=> "Î£Ï…Î¼Ï€Î¯ÎµÏƒÎ· Î‘Î½Ï„Î¹ÎºÎµÎ¹Î¼Î­Î½Î¿Ï…(Ï‰Î½)",
	"actupload"		=> "Î¦ÏŒÏÏ„Ï‰ÏƒÎ· Î‘ÏÏ‡ÎµÎ¯Î¿Ï…(Ï‰Î½)",
	
	// misc
	"miscitems"		=> "Î‘Î½Ï„Î¹ÎºÎµÎ¯Î¼ÎµÎ½Î¿(Î±)",
	"miscfree"		=> "Î•Î»ÎµÏÎ¸ÎµÏÎ¿",
	"miscusername"		=> "ÎŒÎ½Î¿Î¼Î± Î§ÏÎ®ÏƒÏ„Î·",
	"miscpassword"		=> "ÎšÏ‰Î´Î¹ÎºÏŒÏ‚ Î ÏÏŒÏƒÎ²Î±ÏƒÎ·Ï‚",
	"miscoldpass"		=> "Î Î±Î»Î¹ÏŒÏ‚ ÎšÏ‰Î´Î¹ÎºÏŒÏ‚",
	"miscnewpass"		=> "ÎÎ­Î¿Ï‚ ÎšÏ‰Î´Î¹ÎºÏŒÏ‚",
	"miscconfpass"		=> "Î•Ï€Î±Î»Î®Î¸ÎµÏ…ÏƒÎ· ÎšÏ‰Î´Î¹ÎºÎ¿Ï",
	"miscconfnewpass"	=> "Î•Ï€Î±Î»Î®Î¸ÎµÏ…ÏƒÎ· ÎÎ­Î¿Ï… ÎšÏ‰Î´Î¹ÎºÎ¿Ï",
	"miscchpass"		=> "Î‘Î»Î»Î±Î³Î® ÎšÏ‰Î´Î¹ÎºÎ¿Ï",
	"mischomedir"		=> "Î‘ÏÏ‡Î¹ÎºÏŒÏ‚ ÎšÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚",
	"mischomeurl"		=> "URL Î‘ÏÏ‡Î¹ÎºÎ¿Ï ÎšÎ±Ï„Î±Î»ÏŒÎ³Î¿Ï…",
	"miscshowhidden"	=> "Î•Î¼Ï†Î¬Î½Î¹ÏƒÎ· ÎºÏÏ…Ï†ÏŽÎ½ Î±Î½Ï„Î¹ÎºÎµÎ¹Î¼Î­Î½Ï‰Î½",
	"mischidepattern"	=> "Î‘Ï€ÏŒÎºÏÏ…ÏˆÎ· Î¼Î¿ÏÏ†Î®Ï‚",
	"miscperms"		=> "Î”Î¹ÎºÎ±Î¹ÏŽÎ¼Î±Ï„Î± Ï€ÏÏŒÏƒÎ²Î±ÏƒÎ·Ï‚",
	"miscuseritems"		=> "(ÏŒÎ½Î¿Î¼Î±, Î¼Î·Ï„ÏÎ¹ÎºÏŒÏ‚ ÎºÎ±Ï„Î¬Î»Î¿Î³Î¿Ï‚, ÎµÎ¼Ï†Î¬Î½Î¹ÏƒÎ· ÎºÏÏ…Ï†ÏŽÎ½ Î±Î½Ï„Î¹ÎºÎµÎ¹Î¼Î­Î½Ï‰Î½, Î´Î¹ÎºÎ±Î¹ÏŽÎ¼Î±Ï„Î±, ÎµÎ½ÎµÏÎ³ÏŒ)",
	"miscadduser"		=> "Ï€ÏÎ¿ÏƒÎ¸Î®ÎºÎ· Ï‡ÏÎ®ÏƒÏ„Î·",
	"miscedituser"		=> "ÎµÏ€ÎµÎ¾ÎµÏÎ³Î±ÏƒÎ¯Î± Ï‡ÏÎ®ÏƒÏ„Î· '%s'",
	"miscactive"		=> "Î•Î½ÎµÏÎ³ÏŒ",
	"misclang"		=> "Î“Î»ÏŽÏƒÏƒÎ±",
	"miscnoresult"		=> "Î”Î­Î½ Ï…Ï€Î¬ÏÏ‡Î¿Ï…Î½ Î±Ï€Î¿Ï„ÎµÎ»Î­ÏƒÎ¼Î±Ï„Î±.",
	"miscsubdirs"		=> "Î‘Î½Î±Î¶Î®Ï„Î·ÏƒÎ· ÏƒÎµ Ï…Ï€Î¿ÎºÎ±Ï„Î±Î»ÏŒÎ³Î¿Ï…Ï‚",
	"miscpermnames"		=> array("ÎœÏŒÎ½Î¿ Î³Î¹Î± Î¸Î­Î±ÏƒÎ·","ÎœÎµÏ„Î±Î²Î¿Î»Î®","ÎœÎµÏ„Î±Î²Î¿Î»Î® ÎšÏ‰Î´Î¹ÎºÎ¿Ï Î ÏÏŒÏƒÎ²Î±ÏƒÎ·Ï‚","ÎœÎµÏ„Î±Î²Î¿Î»Î® ÎšÏ‰Î´Î¹ÎºÎ¿Ï Î ÏÏŒÏƒÎ²Î±ÏƒÎ·Ï‚",
					"Î”Î¹Î±Ï‡ÎµÎ¹ÏÎ¹ÏƒÏ„Î®Ï‚"),
	"miscyesno"		=> array("ÎÎ±Î¯","ÎŒÏ‡Î¹","Î","ÎŸ"),
	"miscchmod"		=> array("Î™Î´Î¹Î¿ÎºÏ„Î®Ï„Î·Ï‚", "ÎŸÎ¼Î¬Î´Î±", "Î”Î·Î¼ÏŒÏƒÎ¹Î¿"),
	// from here all new by mic
	'miscowner'			=> 'Owner',
	'miscownerdesc'		=> '<strong>Description:</strong><br />User (UID) /<br />Group (GID)<br />Current rights:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> 'eXtplorer System Info',
	'sisysteminfo'		=> 'System Info',
	'sibuilton'			=> 'Operating System',
	'sidbversion'		=> 'Database Version (MySQL)',
	'siphpversion'		=> 'PHP Version',
	'siphpupdate'		=> 'INFORMATION: <span style="color: red;">The PHP version you use is <strong>not</strong> actual!</span><br />To guarantee all functions and features of eXtplorer and addons,<br />you should use as minimum <strong>PHP.Version 4.3</strong>!',
	'siwebserver'		=> 'Webserver',
	'siwebsphpif'		=> 'WebServer - PHP Interface',
	'simamboversion'	=> 'eXtplorer Version',
	'siuseragent'		=> 'Browser Version',
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
	'sionoff'			=> array( 'On', 'Off' ),
	
	'extract_warning' => "Do you really want to extract this file? Here?\\nThis will overwrite existing files when not used carefully!",
	'extract_success' => "Extraction was successful",
	'extract_failure' => "Extraction failed",
	
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
