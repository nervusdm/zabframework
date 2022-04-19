<?php
// $Id: english.php 115 2009-01-10 11:18:58Z soeren $
// English Language Module for v2.3 (translated by the QuiX project)


global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "Viga",
	"message"			=> "SÃµnum(it)",
	"back"			=> "Tagasi",

	// root
	"home"			=> "Kodukaust on puudu, kontrolli seadeid.",
	"abovehome"		=> "Praegune kasut ei saa olla kodukaustast Ã¼levalpool.",
	"targetabovehome"	=> "Sihtkaust ei saa olla kodukaustast Ã¼levalpool.",

	// exist
	"direxist"		=> "Seda kausta pole olemas.",
	//"filedoesexist"	=> "See fail on juba olemas.",
	"fileexist"		=> "Seda faili pole olemas.",
	"itemdoesexist"		=> "See objekt on juba olemas.",
	"itemexist"		=> "Seda objekti pole olemas.",
	"targetexist"		=> "Sihtkausta pole olemas.",
	"targetdoesexist"	=> "Sihtobjekt on juba olemas.",

	// open
	"opendir"		=> "Kausta avamine ebaÃµnnestus.",
	"readdir"		=> "Kausta lugemine ebaÃµnnestus.",

	// access
	"accessdir"		=> "Sul pole sellele kaustale ligipÃ¤Ã¤su.",
	"accessfile"		=> "Sul pole sellele failile ligipÃ¤Ã¤su.",
	"accessitem"		=> "Sul pole sellele objektile ligipÃ¤Ã¤su.",
	"accessfunc"		=> "Sul pole luba seda funktsiooni kasutada.",
	"accesstarget"		=> "Sul pole sellele sihtkaustale ligipÃ¤Ã¤su.",

	// actions
	"permread"		=> "LigipÃ¤Ã¤suÃµiguste lugemine ebaÃµnnestus.",
	"permchange"		=> "LigipÃ¤Ã¤suÃµiguste muutmine ebaÃµnnestus. (see juhtub enamasti faili omanduse probleemide pÃ¤rast - nt. kui HTTP kasutaja ('wwwrun' vÃµi 'nobody') ja FTP kasutaja pole samad)",
	"openfile"		=> "Faili avamine ebaÃµnnestus.",
	"savefile"		=> "Faili salvestamine ebaÃµnnestus.",
	"createfile"		=> "Faili loomine ebaÃµnnestus.",
	"createdir"		=> "Kausta loomine ebaÃµnnestus.",
	"uploadfile"		=> "Faili Ã¼les laadimine ebaÃµnnestus.",
	"copyitem"		=> "Kopeerimine ebaÃµnnestus.",
	"moveitem"		=> "Liigutamine ebaÃµnnestus.",
	"delitem"		=> "Kustutamine ebaÃµnnestus.",
	"chpass"		=> "Parooli muutmine ebaÃµnnestus.",
	"deluser"		=> "Kasutaja kustutamine ebaÃµnnestus.",
	"adduser"		=> "Kasutaja lisamine ebaÃµnnestus.",
	"saveuser"		=> "Kasutaja salvestamine ebaÃµnnestus.",
	"searchnothing"		=> "Sa pead sisestama ka otsingusÃµna(d).",

	// misc
	"miscnofunc"		=> "Funktsiooni ei saa kasutada.",
	"miscfilesize"		=> "Fail Ã¼letab maksimaalset suurust.",
	"miscfilepart"		=> "Fail laeti Ã¼les ainult osaliselt.",
	"miscnoname"		=> "Sa pead mÃ¤Ã¤rama ka nime.",
	"miscselitems"		=> "Sa pole valinud Ã¼htegi objekti.",
	"miscdelitems"		=> "Oled sa kindel, et tahad kustutada need {0} item(s)?",
	"miscdeluser"		=> "Oled sa kindel, et tahad kustutada kasutajat '{0}'?",
	"miscnopassdiff"	=> "Uus parool on sama, mis praegune parool.",
	"miscnopassmatch"	=> "Paroolid ei kattu.",
	"miscfieldmissed"	=> "Sul jÃ¤i oluline lahter tÃ¤itmata.",
	"miscnouserpass"	=> "kasutajanimi vÃµi parool pole Ãµige.",
	"miscselfremove"	=> "Sa ei saa iseennast kustutada.",
	"miscuserexist"		=> "Selline kasutaja on juba olemas.",
	"miscnofinduser"	=> "Ei leia kasutajat.",
	"extract_noarchive" => "See pole lahtipakitav arhiivifail.",
	"extract_unknowntype" => "Tundmatu arhiivifaili tÃ¼Ã¼p",

	'chmod_none_not_allowed' => 'Ã•iguste muutmine <none>-ks pole lubatud',
	'archive_dir_notexists' => 'MÃ¤Ã¤ratud salvestamiste sihtkausta ei eksisteeri.',
	'archive_dir_unwritable' => 'Palun mÃ¤Ã¤ra kirjutatav kaust, kuhu arhiivifail salvestada.',
	'archive_creation_failed' => 'Arhiivifaili salvestamine ebaÃµnnestus'
	
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "Muuda Ãµigusi",
	"editlink"		=> "Muuda",
	"downlink"		=> "Lae alla",
	"uplink"		=> "Ãœles",
	"homelink"		=> "Pealeht",
	"reloadlink"		=> "VÃ¤rskenda",
	"copylink"		=> "Kopeeri",
	"movelink"		=> "Liiguta",
	"dellink"		=> "Kustuta",
	"comprlink"		=> "Arhiveeri",
	"adminlink"		=> "Admin",
	"logoutlink"		=> "VÃ¤lju",
	"uploadlink"		=> "Lae Ã¼les",
	"searchlink"		=> "Otsi",
	'difflink'     		=> 'Erinevus',
	"extractlink"	=> "Ava arhiiv",
	'chmodlink'		=> 'Muuda (chmod) Ãµigusi (Kaust/Fail(id))', // new mic
	'mossysinfolink'	=> 'eXtploreri sÃ¼steemiinfo (eXtplorer, Server, PHP, mySQL)', // new mic
	'logolink'		=> 'Mine eXtploreri veebilehele (avaneb uus aken)', // new mic

	// list
	"nameheader"		=> "Nimi",
	"sizeheader"		=> "Suurus",
	"typeheader"		=> "TÃ¼Ã¼p",
	"modifheader"		=> "Muudetud",
	"permheader"		=> "Ã•igused",
	"actionheader"		=> "Tegevused",
	"pathheader"		=> "Asukoht",

	// buttons
	"btncancel"		=> "Loobu",
	"btnsave"		=> "Salvesta",
	"btnchange"		=> "Muuda",
	"btnreset"		=> "Taasta",
	"btnclose"		=> "Sulge",
	"btnreopen"			=> "Ava uuesti",
	"btncreate"		=> "Loo",
	"btnsearch"		=> "Otsi",
	"btnupload"		=> "Lae Ã¼les",
	"btncopy"		=> "Kopeeri",
	"btnmove"		=> "Liiguta",
	"btnlogin"		=> "Sisene",
	"btnlogout"		=> "VÃ¤lju",
	"btnadd"		=> "Lisa",
	"btnedit"		=> "Muuda",
	"btnremove"		=> "Eemalda",
	"btndiff"			=> "Erinevus",
	
	// user messages, new in joomlaXplorer 1.3.0
	'renamelink'	=> 'Nimeta Ã¼mber',
	'confirm_delete_file' => 'Oled sa kindel, et soovid seda faili kustutada? <br />%s',
	'success_delete_file' => 'Kirje(d)on kustutatud.',
	'success_rename_file' => 'Kausta/faili %s uus nimi on %s.',
	
	// actions
	"actdir"		=> "Kaust",
	"actperms"		=> "Muuda Ãµiguseid",
	"actedit"		=> "Muuda faili",
	"actsearchresults"	=> "Otsingu tulemused",
	"actcopyitems"		=> "Kopeeri kirje(d)",
	"actcopyfrom"		=> "Kopeeri kaustast /%s kausta /%s ",
	"actmoveitems"		=> "Liiguta kirje(d)",
	"actmovefrom"		=> "Liiguta kaustast /%s kausta /%s ",
	"actlogin"		=> "Sisene",
	"actloginheader"	=> "Sisene eXtplorerisse",
	"actadmin"		=> "Administreerimine",
	"actchpwd"		=> "Muuda parooli",
	"actusers"		=> "Kasutajad",
	"actarchive"		=> "Arhiveeri kirje(id)",
	"actupload"		=> "Lae fail(id) Ã¼les",

	// misc
	"miscitems"		=> "Kirje(d)",
	"miscfree"		=> "Vaba",
	"miscusername"		=> "Kasutajanimi",
	"miscpassword"		=> "Parool",
	"miscoldpass"		=> "Vana parool",
	"miscnewpass"		=> "Uus parool",
	"miscconfpass"		=> "Korda parooli",
	"miscconfnewpass"	=> "Korda uut parooli",
	"miscchpass"		=> "Muuda parooli",
	"mischomedir"		=> "Kodukaust",
	"mischomeurl"		=> "Kodukausta URL",
	"miscshowhidden"	=> "NÃ¤ita peidetud faile",
	"mischidepattern"	=> "Peida laiend",
	"miscperms"		=> "Ã•igused",
	"miscuseritems"		=> "(nimi, kodukaust, nÃ¤ita peidetud faile, Ãµigused, aktiivne)",
	"miscadduser"		=> "lisa kasutaja",
	"miscedituser"		=> "muuda kasutajat '%s'",
	"miscactive"		=> "Aktiivne",
	"misclang"		=> "Keel",
	"miscnoresult"		=> "Ei leidnud midagi.",
	"miscsubdirs"		=> "Otsi alamkaustadest",
	"miscpermnames"		=> array("Ainult vaatamine","Muutmine","Parooli muutmine","Parooli muutmine ja vahetamine","Administraator"),
	"miscyesno"		=> array("Jah","Ei","J","E"),
	"miscchmod"		=> array("Omanik", "Grupp", "Teised"),
	'misccontent'		=> "Faili sisu",

	// from here all new by mic
	'miscowner'			=> 'Omanik',
	'miscownerdesc'		=> '<strong>Kirjeldus:</strong><br />Kasutaja (UID) /<br />Grupp (GID)<br />Praegused Ãµigused:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> "eXtplorer sÃ¼steemi info",
	'sisysteminfo'		=> 'SÃ¼steemiinfo',
	'sibuilton'			=> 'OperatsioonisÃ¼steem',
	'sidbversion'		=> 'Andmebaasi versioon (MySQL)',
	'siphpversion'		=> 'PHP versioon',
	'siphpupdate'		=> 'INFORMATSIOON: <span style="color: red;">Sinu poolt kasutatav PHP versioon <strong>pole</strong> ajakohane!</span><br />KÃµikide Mambo ja selle lisade funktsioonide toimimseks,<br />peaksid sa kasutama vÃ¤hemalt <strong>PHP versiooni 4.3</strong>!',
	'siwebserver'		=> 'Veebiserver',
	'siwebsphpif'		=> 'Veebiserver - PHP kasutajaliides',
	'simamboversion'	=> 'eXtplorer versioon',
	'siuseragent'		=> 'Veebilehitseja versioon',
	'sirelevantsettings' => 'Olulised PHP seaded',
	'sisafemode'		=> 'Safe Mode',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'PHP vead',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'Failide Ã¼leslaadimised',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'VÃ¤ljundi puhverdamine',
	'sisesssavepath'	=> 'Sessioni salvestamise kaust',
	'sisessautostart'	=> 'Session automaatne alustamine',
	'sixmlenabled'		=> 'XML on sisse lÃ¼litatud',
	'sizlibenabled'		=> 'ZLIB on sisse lÃ¼litatud',
	'sidisabledfuncs'	=> 'VÃ¤lja lÃ¼litatud funktsioonid',
	'sieditor'		=> 'WYSIWYG redaktor',
	'siconfigfile'		=> 'Seadete fail',
	'siphpinfo'		=> 'PHP info',
	'siphpinformation'	=> 'PHP informatsioon',
	'sipermissions'		=> 'Ã•igused',
	'sidirperms'		=> 'Kaustade Ãµigused',
	'sidirpermsmess'	=> 'KÃµikide funktsioonide ja omaduste korrektseks toimimiseks on vaja anda kirjutusÃµigused [chmod 0777] jÃ¤rgnevatele kaustadele',
	'sionoff'			=> array( 'Sisse lÃ¼litatud', 'VÃ¤lja lÃ¼litatud' ),
	
	'extract_warning' => "Oled sa kindel, et soovid seda faili Siia?\\nSee kirjutab Ã¼le olemasolevad failid, kui sa sellega ettevaatliklt ringi ei kÃ¤i!",
	'extract_success' => "Lahtipakkimine on edukalt lÃµpetatud",
	'extract_failure' => "lahtipakkimine ebaÃµnnestus",
	
	'overwrite_files' => 'Kirjutada olemasolev(ad) fail(id) Ã¼le?',
	"viewlink"		=> "Vaata",
	"actview"		=> "Faili algkoodi nÃ¤itamine",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'Rekursiivselt alamkataloogid?',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'Kontrolli uuema versiooni olemasolu',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'Nimeta kaust vÃµi fail Ã¼mber...',
	'newname'		=>	'Uus nimi',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'Mine pÃ¤rast salvestamist tagasi kausta?',
	'line'		=> 	'Ridu',
	'column'	=>	'Veergusid',
	'wordwrap'	=>	'Reamurdmine: (ainult IE)',
	'copyfile'	=>	'Kopeeri fail sellesse failinimesse',
	
	// Bookmarks
	'quick_jump' => 'Mine kiiresti',
	'already_bookmarked' => 'See kaust on juba jÃ¤rjehoidjates',
	'bookmark_was_added' => 'See kaust lisati jÃ¤rjehoidjatesse.',
	'not_a_bookmark' => 'See kaust pole jÃ¤rjehoidjates.',
	'bookmark_was_removed' => 'See kaust eemaldati jÃ¤rjehoidjatest.',
	'bookmarkfile_not_writable' => "JÃ¤rjehoidja (%s) lisamine ebaÃµnnestus.\n JÃ¤rjehoidjate fail '%s' \npole kirjutatav.",
	
	'lbl_add_bookmark' => 'Lisa see kaust jÃ¤rjehoidjatesse',
	'lbl_remove_bookmark' => 'Eemalda see kaust jÃ¤rjehoidjatest',
	
	'enter_alias_name' => 'Palun sisesta sellele jÃ¤rjehoidjale nimi',
	
	'normal_compression' => 'tavaline pakkimine',
	'good_compression' => 'hea pakkimine',
	'best_compression' => 'parim pakkimine',
	'no_compression' => 'ei pakita',
	
	'creating_archive' => 'Arhiivifaili loomine...',
	'processed_x_files' => 'TÃ¶Ã¶deldud %s faili %s failist',
	
	'ftp_header' => 'Kohalik FTP autentimine',
	'ftp_login_lbl' => 'Palun sisesta siia FTK konto andmed',
	'ftp_login_name' => 'FTP kasutajanimi',
	'ftp_login_pass' => 'FTP parool',
	'ftp_hostname_port' => 'FTP serveri hostinimi ja port <br />(Port on valikuline)',
	'ftp_login_check' => 'FTP Ã¼henduse kontrollimine ...',
	'ftp_connection_failed' => "Ãœhendumine FTP serveriga ebaÃµnnestus. \nPalun veendus, et FTP server toimib.",
	'ftp_login_failed' => "FTP sisselogimine ebaÃµnnestus. Palun kontrolli kasutajanime ja parooli ning proovi uuesti.",
		
	'switch_file_mode' => 'Praegune reÅ¾iim: <strong>%s</strong>. Sa vÃµid lÃ¼lituda Ã¼mber %s reÅ¾iimi.',
	'symlink_target' => 'SÃ¼mboolse lingi sihtaken',
	
	"permchange"		=> "CHMOD on tehtud:",
	"savefile"		=> "Fail on salvestatud.",
	"moveitem"		=> "Liigutamine on tehtud.",
	"copyitem"		=> "Kopeerimine on tehtud.",
	'archive_name' 	=> 'Arhiivifaili nimi',
	'archive_saveToDir' 	=> 'Salvesta arhiiv sellesse kausta',
	
	'editor_simple'	=> 'Lihtne redaktori reÅ¾iim',
	'editor_syntaxhighlight'	=> 'SÃ¼ntaksit esiletÃµstev reÅ¾iim',

	'newlink'	=> 'Uus fail/kaust',
	'show_directories' => 'NÃ¤ita kaustasid',
	'actlogin_success' => 'Sisselogimine oli edukas!',
	'actlogin_failure' => 'Sisselogimine ebaÃµnnestus, proovi uuesti.',
	'directory_tree' => 'Kaustapuu',
	'browsing_directory' => 'Kausta sirvimine',
	'filter_grid' => 'Filter',
	'paging_page' => 'LehekÃ¼lg',
	'paging_of_X' => '/ {0}',
	'paging_firstpage' => 'Esimene lehekÃ¼lg',
	'paging_lastpage' => 'Viimane lehekÃ¼lg',
	'paging_nextpage' => 'JÃ¤rgmine lehekÃ¼lg',
	'paging_prevpage' => 'Eelmine lehekÃ¼lg',
	
	'paging_info' => 'Kirjade nÃ¤itamine {0} - {1} / {2}',
	'paging_noitems' => 'Pole kirjeid, mida nÃ¤idata',
	'aboutlink' => 'Tiitel...',
	'password_warning_title' => 'Oluline - Muuda oma parooli!',
	'password_warning_text' => 'Kasutajakonto, millega sa oled sisse loginud (admin parooliga admin) on vaikimisi eXtploreri priviligeeritud konto. Sinu eXtplorer on avatud sissetungidele ja sa peaksid selle turvaaugu koheselt sulgema!',
	'change_password_success' => 'Sinu parool on muudetud!',
	'success' => 'Korras',
	'failure' => 'EbaÃµnnestus',
	'dialog_title' => 'Veebisaidi dialoogiaken',
	'upload_processing' => 'Ãœleslaadimine, palun oota ...',
	'upload_completed' => 'Ãœles laetud!',
	'acttransfer' => 'Ãœhest serverist teise kopeerimine',
	'transfer_processing' => 'Serverist serverisse kopeerimine, palun oota ...',
	'transfer_completed' => 'Kopeerimine on lÃµpetatud!',
	'max_file_size' => 'Maksimaalne faili suurus',
	'max_post_size' => 'Maksimaalne Ã¼leslaadimise limiit',
	'done' => 'Valmis.',
	'permissions_processing' => 'Ã•iguste mÃ¤Ã¤ramine, palun oota...',
	'archive_created' => 'Arhiivifail on loodud!',
	'save_processing' => 'Faili salvestamine...',
	'current_user' => 'See skript tÃ¶Ã¶tab praegu selle kasutaja Ãµigustega:',
	'your_version' => 'Sinu versioon',
	'search_processing' => 'Otsimine, palun oota...',
	'url_to_file' => 'Faili aadress (URL)',
	'file' => 'Fail'
  
);
?>
