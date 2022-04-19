<?php

// Russian Language Module for eXtplorer (translated by Mikhail M. Pigulsky - mikhail@mikhail.pp.ru)
global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
      // error
      "error"                  => "ÐžÐ¨Ð˜Ð‘ÐšÐ(Ð˜)",
      "back"                  => "Ð’ÐµÑ€Ð½ÑƒÑ‚ÑŒÑÑ",
      
      // root
      "home"                  => "Ð”Ð¾Ð¼Ð°ÑˆÐ½ÑÑ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ Ð½Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚! ÐŸÑ€Ð¾Ð²ÐµÑ€ÑŒÑ‚Ðµ Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ¸.",
      "abovehome"            => "Ð¢ÐµÐºÑƒÑ‰Ð°Ñ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ Ð½Ðµ Ð¼Ð¾Ð¶ÐµÑ‚ Ð½Ð°Ñ…Ð¾Ð´Ð¸Ñ‚ÑÑ Ð²Ñ‹ÑˆÐµ Ð´Ð¾Ð¼Ð°ÑˆÐ½ÐµÐ³Ð¾ ÐºÐ°Ñ‚Ð°Ð»Ð¾Ð³Ð°.",
      "targetabovehome"      => "Ð—Ð°Ð¿Ñ€Ð¾ÑˆÐµÐ½Ð½Ð°Ñ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ Ð½Ðµ Ð¼Ð¾Ð¶ÐµÑ‚ Ð½Ð°Ñ…Ð¾Ð´Ð¸Ñ‚ÑÑ Ð²Ñ‹ÑˆÐµ Ð´Ð¾Ð¼Ð°ÑˆÐ½ÐµÐ³Ð¾ ÐºÐ°Ñ‚Ð°Ð»Ð¾Ð³Ð°.",

      // exist
      "direxist"            => "Ð”Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ Ð½Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚",
      //"filedoesexist"      => "Ð¢Ð°ÐºÐ¾Ð¹ Ñ„Ð°Ð¹Ð» ÑƒÐ¶Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚",
      "fileexist"            => "Ð¢Ð°ÐºÐ¾Ð³Ð¾ Ñ„Ð°Ð¹Ð»Ð° Ð½Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚",
      "itemdoesexist"            => "Ð¢Ð°ÐºÐ¾Ð¹ Ð¾Ð±ÑŠÐµÐºÑ‚ ÑƒÐ¶Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚",
      "itemexist"            => "Ð¢Ð°ÐºÐ¾Ð³Ð¾ Ð¾Ð±ÑŠÐµÐºÑ‚Ð° ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚",
      "targetexist"            => "ÐÐ°Ð·Ð½Ð°Ñ‡ÐµÐ½Ð½Ð¾Ð¹ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ð¸ Ð½Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚",
      "targetdoesexist"      => "ÐÐ°Ð·Ð½Ð°Ñ‡ÐµÐ½Ð½Ð¾Ð³Ð¾ Ð¾Ð±ÑŠÐµÐºÑ‚Ð° Ð½Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚",
      
      // open
      "opendir"            => "ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð¾Ñ‚ÐºÑ€Ñ‹Ñ‚ÑŒ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸ÑŽ",
      "readdir"            => "ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿Ñ€Ð¾Ñ‡Ð¸Ñ‚Ð°Ñ‚ÑŒ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸ÑŽ",

      // access
      "accessdir"            => "Ð’Ð°Ð¼ Ð·Ð°Ð¿Ñ€ÐµÑ‰ÐµÐ½Ð¾ Ð·Ð°Ñ…Ð¾Ð´Ð¸Ñ‚ÑŒ Ð² Ð´Ð°Ð½Ð½ÑƒÑŽ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸ÑŽ",
      "accessfile"            => "Ð’Ð°Ð¼ Ð·Ð°Ð¿Ñ€ÐµÑ‰ÐµÐ½Ð¾ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ Ð´Ð°Ð½Ð½Ñ‹Ð¹ Ñ„Ð°Ð¹Ð»",
      "accessitem"            => "Ð’Ð°Ð¼ Ð·Ð°Ð¿Ñ€ÐµÑ‰ÐµÐ½Ð¾ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ Ð´Ð°Ð½Ð½Ñ‹Ð¹ Ð¾Ð±ÑŠÐµÐºÑ‚",
      "accessfunc"            => "Ð’Ð°Ð¼ Ð·Ð°Ð¿Ñ€ÐµÑ‰ÐµÐ½Ð¾ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ Ð´Ð°Ð½Ð½ÑƒÑŽ Ñ„ÑƒÐ½ÐºÑ†Ð¸ÑŽ",
      "accesstarget"            => "Ð’Ð°Ð¼ Ð·Ð°Ð¿Ñ€ÐµÑ‰ÐµÐ½Ð¾ Ð²Ñ…Ð¾Ð´Ð¸Ñ‚ÑŒ Ð² Ð·Ð°Ð´Ð°Ð½Ð½ÑƒÑŽ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸ÑŽ",

      // actions
      "permread"            => "ÐžÑˆÐ¸Ð±ÐºÐ° Ð² Ð¿Ð¾Ð»ÑƒÑ‡ÐµÐ½Ð¸Ð¸ Ð¿Ñ€Ð°Ð² Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð°",
      "permchange"            => "ÐžÑˆÐ¸Ð±ÐºÐ° Ð² ÑÐ¼ÐµÐ½Ðµ Ð¿Ñ€Ð°Ð² Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð°",
      "openfile"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² Ð¾Ñ‚ÐºÑ€Ñ‹Ñ‚Ð¸Ð¸ Ñ„Ð°Ð¹Ð»Ð°",
      "savefile"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² ÑÐ¾Ñ…Ñ€Ð°Ð½ÐµÐ½Ð¸Ð¸ Ñ„Ð°Ð¹Ð»Ð°",
      "createfile"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² ÑÐ¾Ð·Ð´Ð°Ð½Ð¸Ð¸ Ñ„Ð°Ð¹Ð»Ð°",
      "createdir"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² ÑÐ¾Ð·Ð´Ð°Ð½Ð¸Ð¸ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ð¸",
      "uploadfile"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² Ð·Ð°Ð³Ñ€ÑƒÐ·ÐºÐµ Ñ„Ð°Ð¹Ð»Ð°",
      "copyitem"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² ÐºÐ¾Ð¿Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ð¸",
      "moveitem"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² Ð¿ÐµÑ€ÐµÐ¸Ð¼ÐµÐ½Ð¾Ð²Ð°Ð½Ð¸Ð¸",
      "delitem"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² ÑƒÐ´Ð°Ð»ÐµÐ½Ð¸Ð¸",
      "chpass"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² ÑÐ¼ÐµÐ½Ðµ Ð¿Ð°Ñ€Ð¾Ð»Ñ",
      "deluser"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² ÑƒÐ´Ð°Ð»ÐµÐ½Ð¸Ð¸ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ",
      "adduser"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² ÑƒÐ´Ð°Ð»ÐµÐ½Ð¸Ð¸ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ",
      "saveuser"            => "ÐŸÑ€Ð¾Ð²Ð°Ð» Ð² ÑÐ¾Ñ…Ñ€Ð°Ð½ÐµÐ½Ð¸Ð¸ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ",
      "searchnothing"            => "Ð¡Ñ‚Ñ€Ð¾ÐºÐ° Ð¿Ð¾Ð¸ÑÐºÐ° Ð½Ðµ Ð´Ð¾Ð»Ð¶Ð½Ð° Ð±Ñ‹Ñ‚ÑŒ Ð¿ÑƒÑÑ‚Ð¾Ð¹",
      
      // misc
      "miscnofunc"            => "Ð¤ÑƒÐ½ÐºÑ†Ð¸Ñ Ð½ÐµÐ´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð°",
      "miscfilesize"            => "Ð¤Ð°Ð¹Ð» Ð¿Ñ€ÐµÐ²Ñ‹ÑˆÐ°ÐµÑ‚ Ð¼Ð°ÐºÑÐ¸Ð¼Ð°Ð»ÑŒÐ½Ñ‹Ð¹ Ñ€Ð°Ð·Ð¼ÐµÑ€",
      "miscfilepart"            => "Ð¤Ð°Ð¹Ð» Ð±Ñ‹Ð» Ð·Ð°Ð³Ñ€ÑƒÐ¶ÐµÐ½ Ñ‡Ð°ÑÑ‚Ð¸Ñ‡Ð½Ð¾",
      "miscnoname"            => "Ð’Ñ‹ Ð´Ð¾Ð»Ð¶Ð½Ñ‹ Ð´Ð°Ñ‚ÑŒ Ð·Ð°Ð´Ð°Ñ‚ÑŒ Ð¸Ð¼Ñ",
      "miscselitems"            => "Ð’Ñ‹ Ð½Ðµ Ð²Ñ‹Ð±Ñ€Ð°Ð»Ð¸ Ð¾Ð±ÑŠÐµÐºÑ‚(Ñ‹)",
      "miscdelitems"            => "Ð’Ñ‹ ÑƒÐ²ÐµÑ€ÐµÐ½Ñ‹, Ñ‡Ñ‚Ð¾ Ñ…Ð¾Ñ‚Ð¸Ñ‚Ðµ ÑƒÐ´Ð°Ð»Ð¸Ñ‚ÑŒ {0} Ð¾Ð±ÑŠÐµÐºÑ‚(Ð°/Ð¾Ð²)?",
      "miscdeluser"            => "Ð’Ñ‹ ÑƒÐ²ÐµÑ€ÐµÐ½Ñ‹, Ñ‡Ñ‚Ð¾ Ñ…Ð¾Ñ‚Ð¸Ñ‚Ðµ ÑƒÐ´Ð°Ð»Ð¸Ñ‚ÑŒ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ '{0}'?",
      "miscnopassdiff"      => "ÐÐ¾Ð²Ñ‹Ð¹ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ Ð½Ðµ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð°ÐµÑ‚ÑÑ Ð¾Ñ‚ Ñ‚ÐµÐºÑƒÑ‰ÐµÐ³Ð¾",
      "miscnopassmatch"      => "ÐŸÐ°Ñ€Ð¾Ð»Ð¸ Ð½Ðµ ÑÐ¾Ð²Ð¿Ð°Ð´Ð°ÑŽÑ‚",
      "miscfieldmissed"      => "Ð’Ñ‹ Ð¿Ñ€Ð¾Ð¿ÑƒÑÑ‚Ð¸Ð»Ð¸ Ð²Ð°Ð¶Ð½Ð¾Ðµ Ð¿Ð¾Ð»Ðµ",
      "miscnouserpass"      => "Ð˜Ð¼Ñ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ Ð¸Ð»Ð¸ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ Ð½Ðµ Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ‹",
      "miscselfremove"      => "Ð’Ñ‹ Ð½Ðµ Ð¼Ð¾Ð¶ÐµÑ‚Ðµ ÑƒÐ´Ð°Ð»Ð¸Ñ‚ÑŒ ÑÐ°Ð¼Ð¾Ð³Ð¾ ÑÐµÐ±Ñ",
      "miscuserexist"            => "Ð¢Ð°ÐºÐ¾Ð¹ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ ÑƒÐ¶Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚",
      "miscnofinduser"      => "ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð½Ð°Ð¹Ñ‚Ð¸ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ",
	"extract_noarchive" => "The File is no extractable Archive.",
	"extract_unknowntype" => "Unknown Archive Type",
	
	'chmod_none_not_allowed' => 'Changing Permissions to <none> is not allowed',
	'archive_dir_notexists' => 'The Save-To Directory you have specified does not exist.',
	'archive_dir_unwritable' => 'Please specify a writable directory to save the archive to.',
	'archive_creation_failed' => 'Failed saving the Archive File'
);
$GLOBALS["messages"] = array(
      // links
      "permlink"            => "ÐŸÐžÐœÐ•ÐÐ¯Ð¢Ð¬ ÐŸÐ ÐÐ’Ð Ð”ÐžÐ¡Ð¢Ð£ÐŸÐ",
      "editlink"            => "Ð Ð•Ð”ÐÐšÐ¢Ð˜Ð ÐžÐ’ÐÐ¢Ð¬",
      "downlink"            => "Ð¡ÐšÐÐ§ÐÐ¢Ð¬",
      "uplink"            => "ÐÐÐ’Ð•Ð Ð¥",
      "homelink"            => "Ð”ÐžÐœÐžÐ™",
      "reloadlink"            => "ÐžÐ‘ÐÐžÐ’Ð˜Ð¢Ð¬",
      "copylink"            => "ÐšÐžÐŸÐ˜Ð ÐžÐ’ÐÐ¢Ð¬",
      "movelink"            => "ÐŸÐ•Ð Ð•ÐœÐ•Ð¡Ð¢Ð˜Ð¢Ð¬",
      "dellink"            => "Ð£Ð”ÐÐ›Ð˜Ð¢Ð¬",
      "comprlink"            => "ÐÐ Ð¥Ð˜Ð’Ð˜Ð ÐžÐ’ÐÐ¢Ð¬",
      "adminlink"            => "ÐÐ”ÐœÐ˜ÐÐ˜Ð¡Ð¢Ð Ð˜Ð ÐžÐ’ÐÐÐ˜Ð•",
      "logoutlink"            => "Ð’Ð«Ð™Ð¢Ð˜",
      "uploadlink"            => "Ð—ÐÐšÐÐ§ÐÐ¢Ð¬",
      "searchlink"            => "ÐŸÐžÐ˜Ð¡Ðš",
	"extractlink"	=> "Extract Archive",
	'chmodlink'		=> 'Change (chmod) Rights (Folder/File(s))', // new mic
	'mossysinfolink'	=> 'eXtplorer System Information (eXtplorer, Server, PHP, mySQL)', // new mic
	'logolink'		=> 'Go to the eXtplorer Website (new window)', // new mic
      
      // list
      "nameheader"            => "Ð¤Ð°Ð¹Ð»",
      "sizeheader"            => "Ð Ð°Ð·Ð¼ÐµÑ€",
      "typeheader"            => "Ð¢Ð¸Ð¿",
      "modifheader"            => "Ð˜Ð·Ð¼ÐµÐ½ÐµÐ½",
      "permheader"            => "ÐŸÑ€Ð°Ð²Ð°",
      "actionheader"            => "Ð”ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ",
      "pathheader"            => "ÐŸÑƒÑ‚ÑŒ",
      
      // buttons
      "btncancel"            => "ÐžÑ‚Ð¼ÐµÐ½Ñ",
      "btnsave"            => "Ð¡Ð¾Ñ…Ñ€Ð°Ð½Ð¸Ñ‚ÑŒ",
      "btnchange"            => "Ð˜Ð·Ð¼ÐµÐ½Ð¸Ñ‚ÑŒ",
      "btnreset"            => "ÐžÑ‡Ð¸ÑÑ‚Ð¸Ñ‚ÑŒ",
      "btnclose"            => "Ð—Ð°ÐºÑ€Ñ‹Ñ‚ÑŒ",
      "btncreate"            => "Ð¡Ð¾Ð·Ð´Ð°Ñ‚ÑŒ",
      "btnsearch"            => "ÐŸÐ¾Ð¸ÑÐº",
      "btnupload"            => "Ð—Ð°ÐºÐ°Ñ‡Ð°Ñ‚ÑŒ",
      "btncopy"            => "ÐšÐ¾Ð¿Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ",
      "btnmove"            => "ÐŸÐµÑ€ÐµÐ¼ÐµÑÑ‚Ð¸Ñ‚ÑŒ",
      "btnlogin"            => "Ð’Ð¾Ð¹Ñ‚Ð¸",
      "btnlogout"            => "Ð’Ñ‹Ð¹Ñ‚Ð¸",
      "btnadd"            => "Ð”Ð¾Ð±Ð°Ð²Ð¸Ñ‚ÑŒ",
      "btnedit"            => "Ð ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ",
      "btnremove"            => "Ð£Ð´Ð°Ð»Ð¸Ñ‚ÑŒ",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'	=> 'RENAME',
	'confirm_delete_file' => 'Are you sure you want to delete this file? \\n%s',
	'success_delete_file' => 'Item(s) successfully deleted.',
	'success_rename_file' => 'The directory/file %s was successfully renamed to %s.',
	
      
      // actions
      "actdir"            => "ÐŸÐ°Ð¿ÐºÐ°",
      "actperms"            => "ÐŸÐ¾Ð¼ÐµÐ½ÑÑ‚ÑŒ Ð¿Ñ€Ð°Ð²Ð°",
      "actedit"            => "ÐŸÑ€Ð°Ð²Ð¸Ñ‚ Ñ„Ð°Ð¹Ð»",
      "actsearchresults"      => "Ð ÐµÐ·ÑƒÐ»ÑŒÑ‚Ð°Ñ‚Ñ‹ Ð¿Ð¾Ð¸ÑÐºÐ°",
      "actcopyitems"            => "ÐšÐ¾Ð¿Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð¾Ð±ÑŠÐµÐºÑ‚(Ñ‹)",
      "actcopyfrom"            => "ÐšÐ¾Ð¿Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð¸Ð· /%s Ð² /%s ",
      "actmoveitems"            => "ÐŸÐµÑ€ÐµÐ¼ÐµÑÑ‚Ð¸Ñ‚ÑŒ Ð¾Ð±ÑŠÐµÐºÑ‚(Ñ‹)",
      "actmovefrom"            => "ÐŸÐµÑ€ÐµÐ¼ÐµÑÑ‚Ð¸Ñ‚ÑŒ Ð¸Ð· /%s Ð² /%s ",
      "actlogin"            => "Ð’Ð¾Ð¹Ñ‚Ð¸",
      "actloginheader"      => "Ð’Ð¾Ð¹Ñ‚Ð¸, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð½Ð°Ñ‡Ð°Ñ‚ÑŒ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ QuiXplorer",
      "actadmin"            => "ÐÐ´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ",
      "actchpwd"            => "Ð¡Ð¼ÐµÐ½Ð¸Ñ‚ÑŒ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ",
      "actusers"            => "ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ð¸",
      "actarchive"            => "Ð—Ð°Ð°Ñ€Ñ…Ð¸Ð²Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð¾Ð±ÑŠÐµÐºÑ‚(Ñ‹)",
      "actupload"            => "Ð—Ð°ÐºÐ°Ñ‡Ð°Ñ‚ÑŒ Ñ„Ð°Ð¹Ð»(Ñ‹)",
      
      // misc
      "miscitems"            => "ÐžÐ±ÑŠÐµÐºÑ‚(Ð°/Ð¾Ð²)",
      "miscfree"            => "Ð¡Ð²Ð¾Ð±Ð¾Ð´Ð½Ð¾",
      "miscusername"            => "ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ",
      "miscpassword"            => "ÐŸÐ°Ñ€Ð¾Ð»ÑŒ",
      "miscoldpass"            => "Ð¡Ñ‚Ð°Ñ€Ñ‹Ð¹ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ",
      "miscnewpass"            => "ÐÐ¾Ð²Ñ‹Ð¹ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ",
      "miscconfpass"            => "ÐŸÐ¾Ð´Ñ‚Ð²ÐµÑ€Ð´Ð¸Ñ‚Ðµ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ",
      "miscconfnewpass"      => "ÐŸÐ¾Ð´Ñ‚Ð²ÐµÑ€Ð´Ð¸Ñ‚Ðµ Ð½Ð¾Ð²Ñ‹Ð¹ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ",
      "miscchpass"            => "ÐŸÐ¾Ð¼ÐµÐ½ÑÑ‚ÑŒ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ",
      "mischomedir"            => "Ð”Ð¾Ð¼Ð°ÑˆÐ½ÑÑ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ",
      "mischomeurl"            => "Ð”Ð¾Ð¼Ð°ÑˆÐ½Ð¸Ð¹ URL",
      "miscshowhidden"      => "ÐŸÐ¾ÐºÐ°Ð·Ñ‹Ð²Ð°Ñ‚ÑŒ ÑÐ¿Ñ€ÑÑ‚Ð°Ð½Ð½Ñ‹Ðµ Ð¾Ð±ÑŠÐµÐºÑ‚Ñ‹",
      "mischidepattern"      => "ÐŸÑ€ÑÑ‚Ð°Ñ‚ÑŒ Ñ„Ð°Ð¹Ð»Ñ‹",
      "miscperms"            => "ÐŸÑ€Ð°Ð²Ð°",
      "miscuseritems"            => "(Ð¸Ð¼Ñ, Ð´Ð¾Ð¼Ð°ÑˆÐ½ÑÑ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸Ñ, Ð¿Ð¾ÐºÐ°Ð·Ñ‹Ð²Ð°Ñ‚ÑŒ ÑÐ¿Ñ€ÑÑ‚Ð°Ð½Ð½Ñ‹Ðµ Ð¾Ð±ÑŠÐµÐºÑ‚Ñ‹, Ð¿Ñ€Ð°Ð²Ð° Ð´Ð¾ÑÑƒÑ‚Ð¿Ð°, Ð°ÐºÑ‚Ð¸Ð²ÐµÐ½)",
      "miscadduser"            => "Ð´Ð¾Ð±Ð°Ð²Ð¸Ñ‚ÑŒ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ",
      "miscedituser"            => "Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ '%s'",
      "miscactive"            => "ÐÐºÑ‚Ð¸Ð²ÐµÐ½",
      "misclang"            => "Ð¯Ð·Ñ‹Ðº",
      "miscnoresult"            => "ÐÐµÑ‚ Ñ€ÐµÐ·ÑƒÐ»ÑŒÑ‚Ð°Ñ‚Ð¾Ð²",
      "miscsubdirs"            => "Ð˜ÑÐºÐ°Ñ‚ÑŒ Ð² Ð¿Ð¾Ð´Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ð¸ÑÑ…",
      "miscpermnames"            => array("Ð¢Ð¾Ð»ÑŒÐºÐ¾ Ð¿Ñ€Ð¾ÑÐ¼Ð¾Ñ‚Ñ€","Ð ÐµÐ´Ð°ÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ","Ð¡Ð¼ÐµÐ½Ñ Ð¿Ð°Ñ€Ð¾Ð»Ñ","ÐŸÑ€Ð°Ð²ÐºÐ° Ð¸ ÑÐ¼ÐµÐ½Ð° Ð¿Ð°Ñ€Ð¾Ð»Ñ",
                              "ÐÐ´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð°Ñ‚Ð¾Ñ€"),
      "miscyesno"            => array("Ð”Ð°","ÐÐµÑ‚","Ð”","Ð"),
      "miscchmod"            => array("Ð’Ð»Ð°Ð´ÐµÐ»ÐµÑ†", "Ð“Ñ€ÑƒÐ¿Ð¿Ð°", "Ð˜Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚"),
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
