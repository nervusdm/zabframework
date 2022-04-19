<?php
// $Id: bulgarian.php 2011-05-30 sloarch $
// Bulgarian Language Module for v2.4 (translated by the QuiX project)
// Additional translation by Ivo Apostolov, sloarch, mic, Paulino Michelazzo

global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"				=> "Ð“Ð Ð•Ð¨ÐšÐ(Ð˜)",
	"message"			=> "Ð¡ÑŠÐ¾Ð±Ñ‰ÐµÐ½Ð¸Ðµ(Ñ)",
	"back"				=> "ÐÐ°Ð·Ð°Ð´",

	// root
	"home"				=> "ÐÐ°Ñ‡Ð°Ð»Ð½Ð°Ñ‚Ð° Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ Ð½Ðµ ÑÑŠÑ‰ÐµÑÑ‚Ð²ÑƒÐ²Ð°, Ð¿Ñ€Ð¾Ð²ÐµÑ€ÐµÑ‚Ðµ Ð²Ð°ÑˆÐ¸Ñ‚Ðµ Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ¸.",
	"abovehome"			=> "Ð¢ÐµÐºÑƒÑ‰Ð°Ñ‚Ð° Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ Ð½Ðµ Ð¼Ð¾Ð¶Ðµ Ð´Ð° Ð±ÑŠÐ´Ðµ Ð¿Ñ€ÐµÐ´Ð¸ Ð½Ð°Ñ‡Ð°Ð»Ð½Ð°Ñ‚Ð°.",
	"targetabovehome"	=> "Ð¦ÐµÐ»ÐµÐ²Ð°Ñ‚Ð° Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ Ð½Ðµ Ð¼Ð¾Ð¶Ðµ Ð´Ð° Ð±ÑŠÐ´Ðµ Ð¿Ñ€ÐµÐ´Ð¸ Ð½Ð°Ñ‡Ð°Ð»Ð½Ð°Ñ‚Ð°.",

	// exist
	"direxist"			=> "Ð”Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸ÑÑ‚Ð° Ð½Ðµ ÑÑŠÑ‰ÐµÑÑ‚Ð²ÑƒÐ²Ð°",
	//"filedoesexist"	=> "Ð¤Ð°Ð¹Ð» Ñ Ñ‚Ð¾Ð²Ð° Ð¸Ð¼Ðµ Ð²ÐµÑ‡Ðµ ÑÑŠÑ‰ÐµÑÑ‚Ð²ÑƒÐ²Ð°",
	"fileexist"			=> "Ð¢Ð°ÐºÑŠÐ² Ñ„Ð°Ð¹Ð» Ð½Ðµ ÑÑŠÑ‰ÐµÑÑ‚Ð²ÑƒÐ²Ð°",
	"itemdoesexist"		=> "Ð¢Ð°ÐºÑŠÐ² Ð¾Ð±ÐµÐºÑ‚ Ð²ÐµÑ‡Ðµ ÑÑŠÑ‰ÐµÑÑ‚Ð²ÑƒÐ²Ð°",
	"itemexist"			=> "Ð¢Ð°ÐºÑŠÐ² Ð¾Ð±ÐµÐºÑ‚ Ð½Ðµ ÑÑŠÑ‰ÐµÑÑ‚Ð²ÑƒÐ²Ð°",
	"targetexist"		=> "Ð¦ÐµÐ»ÐµÐ²Ð°Ñ‚Ð° Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ Ð½Ðµ ÑÑŠÑ‰ÐµÑÑ‚Ð²ÑƒÐ²Ð°",
	"targetdoesexist"	=> "Ð¦ÐµÐ»ÐµÐ²Ð¸ÑÑ‚ Ð¾Ð±ÐµÐºÑ‚ Ð½Ðµ ÑÑŠÑˆÐµÑÑ‚Ð²ÑƒÐ²Ð°",

	// open
	"opendir"			=> "Ð”Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸ÑÑ‚Ð° Ð½Ðµ Ð¼Ð¾Ð¶Ðµ Ð´Ð° Ð±ÑŠÐ´Ðµ Ð¾Ñ‚Ð²Ð¾Ñ€ÐµÐ½Ð°",
	"readdir"			=> "Ð”Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸ÑÑ‚Ð° Ð½Ðµ Ð¼Ð¾Ð¶Ðµ Ð´Ð° Ð±ÑŠÐ´Ðµ Ð¿Ñ€Ð¾Ñ‡ÐµÑ‚ÐµÐ½Ð°",

	// access
	"accessdir"			=> "ÐÑÐ¼Ð°Ñ‚Ðµ Ð´Ð¾ÑÑ‚ÑŠÐ¿ Ð´Ð¾ Ñ‚Ð°Ð·Ð¸ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ",
	"accessfile"		=> "ÐÑÐ¼Ð°Ñ‚Ðµ Ð´Ð¾ÑÑ‚ÑŠÐ¿ Ð´Ð¾ Ñ‚Ð¾Ð·Ð¸ Ñ„Ð°Ð¹Ð»",
	"accessitem"		=> "ÐÑÐ¼Ð°Ñ‚Ðµ Ð´Ð¾ÑÑ‚ÑŠÐ¿ Ð´Ð¾ Ñ‚Ð¾Ð·Ð¸ Ð¾Ð±ÐµÐºÑ‚",
	"accessfunc"		=> "ÐÑÐ¼Ð°Ñ‚Ðµ Ð¿Ñ€Ð°Ð²Ð¾ Ð´Ð° Ð¿Ð¾Ð»Ð·Ð²Ð°Ñ‚Ðµ Ñ‚Ð°Ð·Ð¸ Ñ„ÑƒÐ½ÐºÑ†Ð¸Ñ",
	"accesstarget"		=> "ÐÑÐ¼Ð°Ñ‚Ðµ Ð´Ð¾ÑÑ‚ÑŠÐ¿ Ð´Ð¾ Ñ†ÐµÐ»ÐµÐ²Ð°Ñ‚Ð° Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ",

	// actions
	"permread"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð¿Ð¾Ð»ÑƒÑ‡Ð°Ð²Ð°Ð½Ðµ Ð½Ð° Ð¿Ñ€Ð°Ð²Ð° Ð·Ð° Ð´Ð¾ÑÑ‚ÑŠÐ¿",
	"permchange"		=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ ÑÐ¼ÑÐ½Ð° Ð¿Ñ€Ð°Ð²Ð° Ð·Ð° Ð´Ð¾ÑÑ‚ÑŠÐ¿",
	"openfile"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð¾Ñ‚Ð²Ð°Ñ€ÑÐ½Ðµ Ð½Ð° Ñ„Ð°Ð¹Ð»",
	"savefile"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð·Ð°Ð¿Ð¸Ñ Ð½Ð° Ñ„Ð°Ð¹Ð»",
	"createfile"		=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ ÑÑŠÐ·Ð´Ð°Ð²Ð°Ð½Ðµ Ð½Ð° Ñ„Ð°Ð¹Ð»",
	"createdir"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ ÑÑŠÐ·Ð´Ð°Ð²Ð°Ð½Ðµ Ð½Ð° Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ",
	"uploadfile"		=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ ÐºÐ°Ñ‡Ð²Ð°Ð½Ðµ Ð½Ð° Ñ„Ð°Ð¹Ð»",
	"copyitem"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ ÐºÐ¾Ð¿Ð¸Ñ€Ð°Ð½Ðµ",
	"moveitem"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð¿Ñ€ÐµÐ¸Ð¼ÐµÐ½ÑƒÐ²Ð°Ð½Ðµ",
	"delitem"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð¸Ð·Ñ‚Ñ€Ð¸Ð²Ð°Ð½Ðµ",
	"chpass"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð¿Ñ€Ð¾Ð¼ÑÐ½Ð° Ð½Ð° Ð¿Ð°Ñ€Ð¾Ð»Ð°",
	"deluser"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð¸Ð·Ñ‚Ñ€Ð¸Ð²Ð°Ð½Ðµ Ð½Ð° Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»",
	"adduser"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ ÑÑŠÐ·Ð´Ð°Ð²Ð°Ð½Ðµ Ð½Ð° Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»",
	"saveuser"			=> "Ð“Ñ€ÐµÑˆÐºÐ° Ð¿Ñ€Ð¸ Ð·Ð°Ð¿Ð¸Ñ Ð½Ð° Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»",
	"searchnothing"		=> "ÐŸÐ¾Ð¿ÑŠÐ»Ð½ÐµÑ‚Ðµ Ð¿Ð¾Ð»ÐµÑ‚Ð¾ Ð·Ð° Ñ‚ÑŠÑ€ÑÐµÐ½Ðµ",
	
	// misc
	"miscnofunc"		=> "ÐÐµÐ´Ð¾ÑÑ‚ÑŠÐ¿Ð½Ð° Ñ„ÑƒÐ½ÐºÑ†Ð¸Ñ",
	"miscfilesize"		=> "ÐŸÑ€ÐµÐ²Ð¸ÑˆÐµÐ½ Ð¼Ð°ÐºÑÐ¸Ð¼Ð°Ð»ÐµÐ½ Ñ€Ð°Ð·Ð¼ÐµÑ€ Ð½Ð° Ñ„Ð°Ð¹Ð»Ð°",
	"miscfilepart"		=> "Ð¤Ð°Ð¹Ð»Ð° Ðµ ÐºÐ°Ñ‡ÐµÐ½ Ñ‡Ð°ÑÑ‚Ð¸Ñ‡Ð½Ð¾",
	"miscnoname"		=> "Ð¢Ñ€ÑÐ±Ð²Ð° Ð´Ð° Ð²ÑŠÐ²ÐµÐ´ÐµÑ‚Ðµ Ð¸Ð¼Ðµ",
	"miscselitems"		=> "ÐÐµ ÑÑ‚Ðµ Ð¸Ð·Ð±Ñ€Ð°Ð»Ð¸ Ð¾Ð±ÐµÐºÑ‚(Ð¸)",
	"miscdelitems"		=> "Ð¡Ð¸Ð³ÑƒÑ€Ð½Ð¸ Ð»Ð¸ ÑÑ‚Ðµ Ñ‡Ðµ Ð¸ÑÐºÐ°Ñ‚Ðµ Ð´Ð° Ð¸Ð·Ñ‚Ñ€Ð¸ÐµÑ‚Ðµ Ñ‚ÐµÐ·Ð¸ \"+num+\" Ð¾Ð±ÐµÐºÑ‚(Ð°)?",
	"miscdeluser"		=> "Ð¡Ð¸Ð³ÑƒÑ€Ð½Ð¸ Ð»Ð¸ ÑÑ‚Ðµ Ñ‡Ðµ Ð¸ÑÐºÐ°Ñ‚Ðµ Ð´Ð° Ð¸Ð·Ñ‚Ñ€Ð¸ÐµÑ‚Ðµ Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ» '\"+user+\"'?",
	"miscnopassdiff"	=> "ÐÐ¾Ð²Ð°Ñ‚Ð° Ð¿Ð°Ñ€Ð¾Ð»Ð° Ð½Ðµ ÑÐµ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð°Ð²Ð° Ð¾Ñ‚ Ð¿Ñ€ÐµÐ´Ð¸ÑˆÐ½Ð°Ñ‚Ð°",
	"miscnopassmatch"	=> "ÐŸÐ°Ñ€Ð¾Ð»Ð¸Ñ‚Ðµ Ð½Ðµ ÑÑŠÐ²Ð¿Ð°Ð´Ð°Ñ‚",
	"miscfieldmissed"	=> "ÐŸÑ€Ð¾Ð¿ÑƒÑÐ½Ð°Ð»Ð¸ ÑÑ‚Ðµ Ð´Ð° Ð¿Ð¾Ð¿ÑŠÐ»Ð½Ð¸Ñ‚Ðµ Ð²Ð°Ð¶Ð½Ð¾ Ð¿Ð¾Ð»Ðµ",
	"miscnouserpass"	=> "Ð“Ñ€ÐµÑˆÐ½Ð¾ Ð¸Ð¼Ðµ Ð¸Ð»Ð¸ Ð¿Ð°Ñ€Ð¾Ð»Ð°",
	"miscselfremove"	=> "ÐÐµ Ð¼Ð¾Ð¶ÐµÑ‚Ðµ Ð´Ð° Ð¸Ð·Ñ‚Ñ€Ð¸ÐµÑ‚Ðµ ÑÐ¾Ð±ÑÑ‚Ð²ÐµÐ½Ð¸ÑÑ‚ ÑÐ¸ Ð°ÐºÐ°ÑƒÐ½Ñ‚",
	"miscuserexist"		=> "ÐŸÐ¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»ÑÑ‚ Ð²ÐµÑ‡Ðµ ÑÑŠÑ‰ÐµÑÑ‚Ð²ÑƒÐ²Ð°",
	"miscnofinduser"	=> "ÐŸÐ¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»ÑÑ‚ Ð½Ðµ Ð¼Ð¾Ð¶Ðµ Ð´Ð° Ð±ÑŠÐ´Ðµ Ð¾Ñ‚ÐºÑ€Ð¸Ñ‚",
	"extract_noarchive"		=> "Ð¢Ð¾Ð·Ð¸ Ñ„Ð°Ð¹Ð» Ð½Ðµ Ðµ Ð¸Ð·Ð²Ð»ÐµÑ‡Ð¸Ð¼Ð¾Ñ‚Ð¾ ÐÑ€Ñ…Ð¸Ð².",
	"extract_unknowntype"	=> "ÐÐµÐ¸Ð·Ð²ÐµÑÑ‚ÐµÐ½ ÐÑ€Ñ…Ð¸Ð² Ð¢Ð¸Ð¿",
	
	'chmod_none_not_allowed'	=> 'Changing Permissions to <none> is not allowed',
	'archive_dir_notexists'		=> 'The Save-To Directory you have specified does not exist.',
	'archive_dir_unwritable'	=> 'Please specify a writable directory to save the archive to.',
	'archive_creation_failed'	=> 'Ð¡ÐŸÐÐ¡Ð¯Ð’ÐÐÐ• ÐÐ Ð°Ñ€Ñ…Ð¸Ð²ÐµÐ½ Ñ„Ð°Ð¹Ð» Ð½ÐµÑƒÑÐ¿ÐµÑˆÐ½Ð¾'

);
$GLOBALS["messages"] = array(
	// links
	"permlink"			=> "ÐŸÐ ÐžÐœÐ•ÐÐ˜ ÐŸÐ ÐÐ’Ð ÐÐ Ð”ÐžÐ¡Ð¢ÐªÐŸ",
	"editlink"			=> "Ð Ð•Ð”ÐÐšÐ¢Ð˜Ð ÐÐ™",
	"downlink"			=> "Ð˜Ð—Ð¢Ð•Ð“Ð›Ð˜",
	"uplink"			=> "ÐÐÐ“ÐžÐ Ð•",
	"homelink"			=> "ÐÐÐ§ÐÐ›Ðž",
	"reloadlink"		=> "ÐžÐ‘ÐÐžÐ’Ð˜",
	"copylink"			=> "ÐšÐžÐŸÐ˜Ð ÐÐ™",
	"movelink"			=> "ÐŸÐ Ð•ÐœÐ•Ð¡Ð¢Ð˜",
	"dellink"			=> "Ð˜Ð—Ð¢Ð Ð˜Ð™",
	"comprlink"			=> "ÐÐ Ð¥Ð˜Ð’Ð˜Ð ÐÐ™",
	"adminlink"			=> "ÐÐ”ÐœÐ˜ÐÐ˜Ð¡Ð¢Ð Ð˜Ð ÐÐÐ•",
	"logoutlink"		=> "Ð˜Ð—Ð¥ÐžÐ”",
	"uploadlink"		=> "ÐŸÐ Ð˜ÐšÐÐ§Ð˜",
	"searchlink"		=> "Ð¢ÐªÐ Ð¡Ð˜",
	'difflink'     		=> 'Ð”Ð¸Ñ„ÐµÑ€ÐµÐ½Ñ†',
	"extractlink"		=> "Ð˜Ð·Ð²Ð°Ð´ÐºÐ° ÐÑ€Ñ…Ð¸Ð²",
	'chmodlink'			=> 'Change (chmod) Rights (Folder/File(s))', // new mic
	'mossysinfolink'	=> 'eXtplorer System Information (eXtplorer, Server, PHP, mySQL)', // new mic
	'logolink'			=> 'Go to the eXtplorer Website (new window)', // new mic

	// list
	"nameheader"		=> "Ð¤Ð°Ð¹Ð»",
	"sizeheader"		=> "Ð Ð°Ð·Ð¼ÐµÑ€",
	"typeheader"		=> "Ð¢Ð¸Ð¿",
	"modifheader"		=> "ÐŸÑ€Ð¾Ð¼ÐµÐ½ÐµÐ½",
	"permheader"		=> "ÐŸÑ€Ð°Ð²Ð°",
	"actionheader"		=> "Ð”ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ",
	"pathheader"		=> "ÐŸÑŠÑ‚",
 
	// buttons
	"btncancel"			=> "ÐžÑ‚Ð¼ÐµÐ½Ð¸",
	"btnsave"			=> "Ð¡ÑŠÑ…Ñ€Ð°Ð½Ð¸",
	"btnchange"			=> "ÐŸÑ€Ð¾Ð¼ÐµÐ½Ð¸",
	"btnreset"			=> "Ð˜Ð·Ñ‡Ð¸ÑÑ‚Ð¸",
	"btnclose"			=> "Ð—Ð°Ñ‚Ð²Ð¾Ñ€Ð¸",
	"btnreopen"			=> "ÐžÑ‚ÐºÑ€Ð¸Ð²Ð°Ð¼",
	"btncreate"			=> "Ð¡ÑŠÐ·Ð´Ð°Ð¹",
	"btnsearch"			=> "Ð¢ÑŠÑ€ÑÐ¸",
	"btnupload"			=> "ÐŸÑ€Ð¸ÐºÐ°Ñ‡Ð¸",
	"btncopy"			=> "ÐšÐ¾Ð¿Ð¸Ñ€Ð°Ð¹",
	"btnmove"			=> "ÐŸÑ€ÐµÐ¼ÐµÑÑ‚Ð¸",
	"btnlogin"			=> "Ð’Ñ…Ð¾Ð´",
	"btnlogout"			=> "Ð˜Ð·Ñ…Ð¾Ð´",
	"btnadd"			=> "Ð”Ð¾Ð±Ð°Ð²Ð¸",
	"btnedit"			=> "Ð ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð°Ð¹",
	"btnremove"			=> "Ð˜Ð·Ñ‚Ñ€Ð¸Ð¹",
	"btndiff"			=> "Ð”Ð¸Ñ„ÐµÑ€ÐµÐ½Ñ†",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'		=> 'ÐŸÑ€ÐµÐ¸Ð¼ÐµÐ½ÑƒÐ²Ð°Ð¹Ñ‚Ðµ',
	'confirm_delete_file' => 'Ð¡Ð¸Ð³ÑƒÑ€Ð½Ð¸ Ð»Ð¸ ÑÑ‚Ðµ, Ñ‡Ðµ Ð¸ÑÐºÐ°Ñ‚Ðµ Ð´Ð° Ð¸Ð·Ñ‚Ñ€Ð¸ÐµÑ‚Ðµ Ñ‚Ð¾Ð·Ð¸ Ñ„Ð°Ð¹Ð»? <br />%s',
	'success_delete_file' => 'Item(s) successfully deleted.',
	'success_rename_file' => 'The directory/file %s was successfully renamed to %s.',
	
	// actions
	"actdir"		=> "ÐŸÐ°Ð¿ÐºÐ°",
	"actperms"		=> "ÐŸÑ€Ð¾Ð¼ÑÐ½Ð° Ð½Ð° Ð¿Ñ€Ð°Ð²Ð°",
	"actedit"		=> "Ð ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð°Ð¹ Ñ„Ð°Ð¹Ð»",
	"actsearchresults"	=> "Ð ÐµÐ·ÑƒÐ»Ñ‚Ð°Ñ‚Ð¸ Ð¾Ñ‚ Ñ‚ÑŠÑ€ÑÐµÐ½Ðµ",
	"actcopyitems"		=> "ÐšÐ¾Ð¿Ð¸Ñ€Ð°Ð¹ Ð¾Ð±ÐµÐºÑ‚(Ð¸)",
	"actcopyfrom"		=> "ÐšÐ¾Ð¿Ð¸Ñ€Ð°Ð¹ Ð¾Ñ‚ /%s Ð² /%s ",
	"actmoveitems"		=> "ÐŸÑ€ÐµÐ¼ÐµÑÑ‚Ð¸ Ð¾Ð±ÐµÐºÑ‚(Ð¸)",
	"actmovefrom"		=> "ÐŸÑ€ÐµÐ¼ÐµÑÑ‚Ð¸ Ð¾Ñ‚ /%s Ð² /%s ",
	"actlogin"		=> "Ð’Ñ…Ð¾Ð´",
	"actloginheader"	=> "Ð’Ñ…Ð¾Ð´ Ð·Ð° Ð´Ð° Ð¿Ð¾Ð»Ð·Ð²Ð°Ñˆ QuiXplorer",
	"actadmin"		=> "ÐÐ´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð¸Ñ€Ð°Ð½Ðµ",
	"actchpwd"		=> "Ð¡Ð¼ÐµÐ½Ð¸ Ð¿Ð°Ñ€Ð¾Ð»Ð°",
	"actusers"		=> "ÐŸÐ¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»Ð¸",
	"actarchive"		=> "ÐÑ€Ñ…Ð¸Ð²Ð¸Ñ€Ð°Ð¹ Ð¾Ð±ÑŠÐµÐºÑ‚(Ð¸)",
	"actupload"		=> "ÐŸÑ€Ð¸ÐºÐ°Ñ‡Ð¸ Ñ„Ð°Ð¹Ð»(Ð¾Ð²Ðµ)",

	// misc
	"miscitems"		=> "ÐžÐ±ÐµÐºÑ‚(Ð¸)",
	"miscfree"		=> "Ð¡Ð²Ð¾Ð±Ð¾Ð´Ð½Ð¾",
	"miscusername"		=> "ÐŸÐ¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»",
	"miscpassword"		=> "ÐŸÐ°Ñ€Ð¾Ð»Ð°",
	"miscoldpass"		=> "Ð¡Ñ‚Ð°Ñ€Ð° Ð¿Ð°Ñ€Ð¾Ð»Ð°",
	"miscnewpass"		=> "ÐÐ¾Ð²Ð° Ð¿Ð°Ñ€Ð¾Ð»Ð°",
	"miscconfpass"		=> "ÐŸÐ¾Ñ‚Ð²ÑŠÑ€Ð´ÐµÑ‚Ðµ Ð¿Ð°Ñ€Ð¾Ð»Ð°",
	"miscconfnewpass"	=> "ÐŸÐ¾Ñ‚Ð²ÑŠÑ€Ð´ÐµÑ‚Ðµ Ð½Ð¾Ð²Ð° Ð¿Ð°Ñ€Ð¾Ð»Ð°",
	"miscchpass"		=> "ÐŸÑ€Ð¾Ð¼ÐµÐ½Ð¸ Ð¿Ð°Ñ€Ð¾Ð»Ð°",
	"mischomedir"		=> "ÐÐ°Ñ‡Ð°Ð»Ð½Ð° Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ",
	"mischomeurl"		=> "ÐÐ°Ñ‡Ð°Ð»ÐµÐ½ URL",
	"miscshowhidden"	=> "ÐŸÐ¾ÐºÐ°Ð·Ð²Ð°Ð¹ ÑÐºÑ€Ð¸Ñ‚Ðµ Ð¾Ð±ÐµÐºÑ‚Ð¸",
	"mischidepattern"	=> "Ð¡ÐºÑ€Ð¸Ð¹ Ñ„Ð°Ð¹Ð»Ð¾Ð²Ðµ",
	"miscperms"			=> "ÐŸÑ€Ð°Ð²Ð°",
	"miscuseritems"		=> "(Ð¸Ð¼Ðµ, Ð½Ð°Ñ‡Ð°Ð»Ð½Ð° Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ, Ð¿Ð¾ÐºÐ°Ð·Ð²Ð°Ð¹ ÑÐºÑ€Ð¸Ñ‚Ð¸ Ð¾Ð±ÐµÐºÑ‚Ð¸, Ð¿Ñ€Ð°Ð²Ð° Ð·Ð° Ð´Ð¾ÑÑ‚ÑŠÐ¿, Ð°ÐºÑ‚Ð¸Ð²ÐµÐ½)",
	"miscadduser"		=> "Ð´Ð¾Ð±Ð°Ð²Ð¸ Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»",
	"miscedituser"		=> "Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð°Ð¹ Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ» '%Ð¸'",
	"miscactive"		=> "ÐÐºÑ‚Ð¸Ð²ÐµÐ½",
	"misclang"			=> "Ð•Ð·Ð¸Ðº",
	"miscnoresult"		=> "ÐÑÐ¼Ð° Ñ€ÐµÐ·ÑƒÐ»Ñ‚Ð°Ñ‚Ð¸",
	"miscsubdirs"		=> "Ð¢ÑŠÑ€ÑÐ¸ Ð² Ð¿Ð¾Ð´Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ð¸",
	"miscpermnames"		=> array("Ð¡Ð°Ð¼Ð¾ Ð´Ð° Ñ€Ð°Ð·Ð³Ð»ÐµÐ¶Ð´Ð°","Ð ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð°Ð½Ðµ","Ð¡Ð¼ÑÐ½Ð° Ð½Ð° Ð¿Ð°Ñ€Ð¾Ð»Ð°","ÐŸÑ€Ð°Ð²Ð° Ð¸ ÑÐ¼ÑÐ½Ð° Ð½Ð° Ð¿Ð°Ñ€Ð¾Ð»Ð°",
					"ÐÐ´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð°Ñ‚Ð¾Ñ€"),
	"miscyesno"		=> array("Ð”Ð°","ÐÐµ","Ð”","Ð"),
	"miscchmod"		=> array("ÐŸÑ€Ð¸Ñ‚ÐµÐ¶Ð°Ñ‚ÐµÐ»", "Ð“Ñ€ÑƒÐ¿Ð°", "ÐžÐ±Ñ‰Ð¾Ð´Ð¾ÑÑ‚ÑŠÐ¿ÐµÐ½"),
	'misccontent'	=> "Ð¡ÑŠÐ´ÑŠÑ€Ð¶Ð°Ð½Ð¸Ðµ Ð½Ð° Ñ„Ð°Ð¹Ð»Ð°",

	// from here all new by mic
	'miscowner'			=> 'Ð¡Ð¾Ð±ÑÑ‚Ð²ÐµÐ½Ð¸Ðº',
	'miscownerdesc'		=> '<strong>Description:</strong><br />User (UID) /<br />Group (GID)<br />Current rights:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> "eXtplorer System Info",
	'sisysteminfo'		=> 'System Info',
	'sibuilton'			=> 'Operating System',
	'sidbversion'		=> 'Database Version (MySQL)',
	'siphpversion'		=> 'PHP Version',
	'siphpupdate'		=> 'INFORMATION: <span style="color: red;">The PHP version you use is <strong>not</strong> actual!</span><br />To guarantee all functions and features of Mambo and addons,<br />you should use as minimum <strong>PHP.Version 4.3</strong>!',
	'siwebserver'		=> 'Webserver',
	'siwebsphpif'		=> 'WebServer - PHP Interface',
	'simamboversion'	=> 'eXtplorer Version',
	'siuseragent'		=> 'Browser Version',
	'sirelevantsettings'	=> 'Important PHP Settings',
	'sisafemode'		=> 'Safe Mode',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'PHP Errors',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'File Uploads',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'Output Buffer',
	'sisesssavepath'	=> 'Session Savepath',
	'sisessautostart'	=> 'Session auto start',
	'sixmlenabled'		=> 'XML enabled',
	'sizlibenabled'		=> 'ZLIB enabled',
	'sidisabledfuncs'	=> 'Disabled functions',
	'sieditor'			=> 'WYSIWYG Editor',
	'siconfigfile'		=> 'Config file',
	'siphpinfo'			=> 'PHP Info',
	'siphpinformation'	=> 'PHP Information',
	'sipermissions'		=> 'Permissions',
	'sidirperms'		=> 'Directory permissions',
	'sidirpermsmess'	=> 'To be shure that all functions and features of eXtplorer are working correct, following folders should have permission to write [chmod 0777]',
	'sionoff'			=> array( 'On', 'Off' ),
	
	'extract_warning'	=> "Do you really want to extract this file? Here?<br />This will overwrite existing files when not used carefully!",
	'extract_success'	=> "Extraction was successful",
	'extract_failure'	=> "Extraction failed",
	
	'overwrite_files'	=> 'Overwrite existing file(s)?',
	"viewlink"			=> "View",
	"actview"			=> "Showing source of file",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'Recurse into subdirectories?',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'		=> 'Check for latest version',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'		=>	'Rename a directory or file...',
	'newname'			=>	'New Name',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'			=>	'Return to directory after saving?',
	'line'				=> 	'Line',
	'column'			=>	'Column',
	'wordwrap'			=>	'Wordwrap: (IE only)',
	'copyfile'			=>	'Copy file into this filename',
	
	// Bookmarks
	'quick_jump' 		=> 'Quick Jump To',
	'already_bookmarked' => 'This directory is already bookmarked',
	'bookmark_was_added' => 'This directory was added to the bookmark list.',
	'not_a_bookmark'	=> 'This directory is not a bookmark.',
	'bookmark_was_removed' => 'This directory was removed from the bookmark list.',
	'bookmarkfile_not_writable' => "Failed to %s the bookmark.\n The Bookmark File '%s' \nis not writable.",
	
	'lbl_add_bookmark'	=> 'Add this Directory as Bookmark',
	'lbl_remove_bookmark' => 'Remove this Directory from the Bookmark List',
	
	'enter_alias_name'	=> 'Please enter the alias name for this bookmark',
	
	'normal_compression' => 'normal compression',
	'good_compression'	=> 'good compression',
	'best_compression'	=> 'best compression',
	'no_compression'	=> 'no compression',
	
	'creating_archive'	=> 'Creating Archive File...',
	'processed_x_files'	=> 'Processed %s of %s Files',
	
	'ftp_header'		=> 'Local FTP Authentication',
	'ftp_login_lbl'		=> 'Please enter the login credentials for the FTP server',
	'ftp_login_name'	=> 'FTP User Name',
	'ftp_login_pass'	=> 'FTP Password',
	'ftp_hostname_port'	=> 'FTP Server Hostname and Port <br />(Port is optional)',
	'ftp_login_check'	=> 'Checking FTP connection...',
	'ftp_connection_failed' => "The FTP server could not be contacted. \nPlease check that the FTP server is running on your server.",
	'ftp_login_failed'	=> "The FTP login failed. Please check the username and password and try again.",
		
	'switch_file_mode'	=> 'Current mode: <strong>%s</strong>. You could switch to %s mode.',
	'symlink_target'	=> 'Target of the Symbolic Link',
	
	"permchange"		=> "CHMOD Success:",
	"savefile"			=> "The File was saved.",
	"moveitem"			=> "Moving succeeded.",
	"copyitem"			=> "Copying succeeded.",
	'archive_name'	 	=> 'Name of the Archive File',
	'archive_saveToDir'	=> 'Save the Archive in this directory',
	
	'editor_simple'		=> 'Simple Editor Mode',
	'editor_syntaxhighlight'	=> 'Syntax-Highlighted Mode',

	'newlink'			=> 'New File/Directory',
	'show_directories'	=> 'Show Directories',
	'actlogin_success'	=> 'Login successful!',
	'actlogin_failure'	=> 'Login failed, try again.',
	'directory_tree'	=> 'Directory Tree',
	'browsing_directory'	=> 'Browsing Directory',
	'filter_grid'		=> 'Filter',
	'paging_page'		=> 'Page',
	'paging_of_X'		=> 'of {0}',
	'paging_firstpage'	=> 'First Page',
	'paging_lastpage'	=> 'Last Page',
	'paging_nextpage'	=> 'Next Page',
	'paging_prevpage'	=> 'Previous Page',
	
	'paging_info'		=> 'Displaying Items {0} - {1} of {2}',
	'paging_noitems'	=> 'No items to display',
	'aboutlink'			=> 'About...',
	'password_warning_title'	=> 'Important - Change your Password!',
	'password_warning_text'		=> 'The user account you are logged in with (admin with password admin) corresponds to the default eXtplorer priviliged account. Your eXtplorer installation is open to intrusion and you should immediately fix this security hole!',
	'change_password_success'	=> 'Your Password has been changed!',
	'success'			=> 'Success',
	'failure'			=> 'Failure',
	'dialog_title'		=> 'Website Dialog',
	'upload_processing'	=> 'Processing Upload, please wait...',
	'upload_completed'	=> 'Upload successful!',
	'acttransfer'		=> 'Transfer from another Server',
	'transfer_processing'	=> 'Processing Server-to-Server Transfer, please wait...',
	'transfer_completed'	=> 'Transfer completed!',
	'max_file_size'		=> 'Maximum File Size',
	'max_post_size'		=> 'Maximum Upload Limit',
	'done'				=> 'Done.',
	'permissions_processing' => 'Applying Permissions, please wait...',
	'archive_created'	=> 'The Archive File has been created!',
	'save_processing'	=> 'Saving File...',
	'current_user'		=> 'This script currently runs with the permissions of the following user:',
	'your_version'		=> 'Your Version',
	'search_processing'	=> 'Searching, please wait...',
	'url_to_file'		=> 'URL of the File',
	'file'				=> 'File'
	
);
?>
