<?php

// Hungarian Language Module for v2.3 (translated by Jozsef Tamas Herczeg a.k.a LocaLiceR www.joomlandia.eu)
global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y.m.d. H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "HibÃ¡(k)",
	"message"			=> "InformÃ¡ciÃ³",
	"back"			=> "Vissza",
	
	// root
	"home"			=> "A gyÃ¶kÃ©rkÃ¶nyvtÃ¡r nem lÃ©tezik, ellenÅ‘rizze a beÃ¡llÃ­tÃ¡sokat.",
	"abovehome"		=> "A jelenlegi kÃ¶nyvtÃ¡r nem lehet fÃ¶ljebb a gyÃ¶kÃ©rkÃ¶nyvtÃ¡rnÃ¡l.",
	"targetabovehome"	=> "A cÃ©lkÃ¶nyvtÃ¡r nem lehet fÃ¶ljebb a gyÃ¶kÃ©rkÃ¶nyvtÃ¡rnÃ¡l.",
	
	// exist
	"direxist"		=> "Ez a kÃ¶nyvtÃ¡r nem lÃ©tezik.",
	//"filedoesexist"	=> "Ez a fÃ¡jl mÃ¡r lÃ©tezik.",
	"fileexist"		=> "Ez a fÃ¡jl nem lÃ©tezik.",
	"itemdoesexist"		=> "Ez az elem mÃ¡r lÃ©tezik.",
	"itemexist"		=> "Ez az elem nem lÃ©tezik.",
	"targetexist"		=> "A cÃ©lkÃ¶nyvtÃ¡r nem lÃ©tezik.",
	"targetdoesexist"	=> "A cÃ©lelem mÃ¡r lÃ©tezik.",
	
	// open
	"opendir"		=> "Nem nyithatÃ³ meg a kÃ¶nyvtÃ¡r.",
	"readdir"		=> "Nem olvashatÃ³ a kÃ¶nyvtÃ¡r.",
	
	// access
	"accessdir"		=> "Nem engedÃ©lyezett az Ã–n szÃ¡mÃ¡ra az ehhez a kÃ¶nyvtÃ¡rhoz valÃ³ hozzÃ¡fÃ©rÃ©s.",
	"accessfile"		=> "Nem engedÃ©lyezett az Ã–n szÃ¡mÃ¡ra az ehhez a fÃ¡jlhoz valÃ³ hozzÃ¡fÃ©rÃ©s.",
	"accessitem"		=> "Nem engedÃ©lyezett az Ã–n szÃ¡mÃ¡ra az ehhez az elemhez valÃ³ hozzÃ¡fÃ©rÃ©s.",
	"accessfunc"		=> "Ennek a funkciÃ³nak a hasznÃ¡lata nem engedÃ©lyezett az Ã–n szÃ¡mÃ¡ra.",
	"accesstarget"		=> "Nem engedÃ©lyezett a cÃ©lkÃ¶nyvtÃ¡rhoz valÃ³ hozzÃ¡fÃ©rÃ©s.",
	
	// actions
	"permread"		=> "Az engedÃ©lyek lekÃ©rÃ©se nem sikerÃ¼lt.",
	"permchange"		=> "Az engedÃ©lymÃ³dosÃ­tÃ¡s nem sikerÃ¼lt.",
	"openfile"		=> "Nem lehet megnyitni a fÃ¡jlt.",
	"savefile"		=> "Nem lehet menteni a fÃ¡jlt.",
	"createfile"		=> "Nem lehet lÃ©trehozni a fÃ¡jlt.",
	"createdir"		=> "Nem lehet lÃ©trehozni a kÃ¶nyvtÃ¡rt.",
	"uploadfile"		=> "A fÃ¡jl feltÃ¶ltÃ©se nem sikerÃ¼lt.",
	"copyitem"		=> "A mÃ¡solÃ¡s nem sikerÃ¼lt.",
	"moveitem"		=> "Az Ã¡thelyezÃ©s nem sikerÃ¼lt.",
	"delitem"		=> "A tÃ¶rlÃ©s nem sikerÃ¼lt.",
	"chpass"		=> "Nem sikerÃ¼lt megvÃ¡ltoztatni a jelszÃ³t.",
	"deluser"		=> "A felhasznÃ¡lÃ³ eltÃ¡volÃ­tÃ¡sa nem sikerÃ¼lt.",
	"adduser"		=> "A felhasznÃ¡lÃ³ hozzÃ¡adÃ¡sa nem sikerÃ¼lt.",
	"saveuser"		=> "A felhasznÃ¡lÃ³ mentÃ©se nem sikerÃ¼lt.",
	"searchnothing"		=> "Meg kell adnia a keresendÅ‘ kulcsszÃ³t.",
	
	// misc
	"miscnofunc"		=> "Ez a funkciÃ³ nem mÅ±kÃ¶dik.",
	"miscfilesize"		=> "A fÃ¡jl mÃ©rete nagyobb a megengedettnÃ©l.",
	"miscfilepart"		=> "Csak rÃ©szben sikerÃ¼lt feltÃ¶lteni a fÃ¡jlt.",
	"miscnoname"		=> "Meg kell adnia egy nevet.",
	"miscselitems"		=> "Nem vÃ¡lasztott ki egy elemet sem.",
	"miscdelitems"		=> "Biztosan tÃ¶rÃ¶lni akarja ezt a(z) {0} elemet?",
	"miscdeluser"		=> "Biztosan tÃ¶rÃ¶lni akarja a kÃ¶vetkezÅ‘ felhasznÃ¡lÃ³t: '{0}'?",
	"miscnopassdiff"	=> "Az Ãºj jelszÃ³ ugyanaz, mint a jelenlegi.",
	"miscnopassmatch"	=> "EltÃ©rÅ‘ek a jelszavak.",
	"miscfieldmissed"	=> "Kihagyott egy fontos mezÅ‘t.",
	"miscnouserpass"	=> "Ã‰rvÃ©nytelen a felhasznÃ¡lÃ³nÃ©v vagy a jelszÃ³.",
	"miscselfremove"	=> "SajÃ¡t magÃ¡t nem tÃ¡volÃ­thatja el.",
	"miscuserexist"		=> "A felhasznÃ¡lÃ³ mÃ¡r lÃ©tezik.",
	"miscnofinduser"	=> "Nem talÃ¡lhatÃ³ a felhasznÃ¡lÃ³.",
	"extract_noarchive" => "A fÃ¡jl nem kibonthatÃ³ archÃ­vum.",
	"extract_unknowntype" => "Ismeretlen tÃ­pusÃº archÃ­vum",
	
	'chmod_none_not_allowed' => 'Changing Permissions to <none> is not allowed',
	'archive_dir_notexists' => 'The Save-To Directory you have specified does not exist.',
	'archive_dir_unwritable' => 'Please specify a writable directory to save the archive to.',
	'archive_creation_failed' => 'Failed saving the Archive File'
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "EngedÃ©lyek mÃ³dosÃ­tÃ¡sa",
	"editlink"		=> "SzerkesztÃ©s",
	"downlink"		=> "LetÃ¶ltÃ©s",
	"uplink"		=> "Fel",
	"homelink"		=> "GyÃ¶kÃ©r",
	"reloadlink"		=> "FrissÃ­tÃ©s",
	"copylink"		=> "MÃ¡solÃ¡s",
	"movelink"		=> "ÃthelyezÃ©s",
	"dellink"		=> "TÃ¶rlÃ©s",
	"comprlink"		=> "ArchivÃ¡lÃ¡s",
	"adminlink"		=> "Admin",
	"logoutlink"		=> "KilÃ©pÃ©s",
	"uploadlink"		=> "FeltÃ¶ltÃ©s",
	"searchlink"		=> "KeresÃ©s",
	"extractlink"	=> "ArchÃ­vum kibontÃ¡sa",
	'chmodlink'		=> 'EngedÃ©lyek mÃ³dosÃ­tÃ¡sa (chmod) (KÃ¶nyvtÃ¡r/FÃ¡jl(ok))', // new mic
	'mossysinfolink'	=> $_VERSION->PRODUCT.' RendszerinformÃ¡ciÃ³ ('.$_VERSION->PRODUCT.', KiszolgÃ¡lÃ³, PHP, mySQL)', // new mic
	'logolink'		=> 'UgrÃ¡s a eXtplorer webhelyÃ©re (Ãºj ablak)', // new mic
	
	// list
	"nameheader"		=> "NÃ©v",
	"sizeheader"		=> "MÃ©ret",
	"typeheader"		=> "TÃ­pus",
	"modifheader"		=> "MÃ³dosÃ­tva",
	"permheader"		=> "EngedÃ©lyek",
	"actionheader"		=> "MÅ±veletek",
	"pathheader"		=> "Ãštvonal",
	
	// buttons
	"btncancel"		=> "MÃ©gse",
	"btnsave"		=> "MentÃ©s",
	"btnchange"		=> "MÃ³dosÃ­tÃ¡s",
	"btnreset"		=> "Alaphelyzet",
	"btnclose"		=> "BezÃ¡rÃ¡s",
	"btncreate"		=> "LÃ©trehozÃ¡s",
	"btnsearch"		=> "KeresÃ©s",
	"btnupload"		=> "FeltÃ¶ltÃ©s",
	"btncopy"		=> "MÃ¡solÃ¡s",
	"btnmove"		=> "ÃthelyezÃ©s",
	"btnlogin"		=> "BejelentkezÃ©s",
	"btnlogout"		=> "KijelentkezÃ©s",
	"btnadd"		=> "HozzÃ¡adÃ¡s",
	"btnedit"		=> "SzerkesztÃ©s",
	"btnremove"		=> "EltÃ¡volÃ­tÃ¡s",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'	=> 'ÃtnevezÃ©s',
	'confirm_delete_file' => 'Biztosan tÃ¶rÃ¶lni akarja ezt a fÃ¡jlt? \\n%s',
	'success_delete_file' => 'Az elem(ek) tÃ¶rlÃ©se sikerÃ¼lt.',
	'success_rename_file' => 'A(z) %s kÃ¶nyvtÃ¡r/fÃ¡jl Ã¡tnevezÃ©se %s nÃ©vre sikerÃ¼lt.',
	
	// actions
	"actdir"		=> "KÃ¶nyvtÃ¡r",
	"actperms"		=> "EngedÃ©lyek mÃ³dosÃ­tÃ¡sa",
	"actedit"		=> "FÃ¡jl szerkesztÃ©se",
	"actsearchresults"	=> "A keresÃ©s eredmÃ©nye",
	"actcopyitems"		=> "Elem(ek) mÃ¡solÃ¡sa",
	"actcopyfrom"		=> "MÃ¡solÃ¡s a(z) /%s kÃ¶nyvtÃ¡rbÃ³l a(z) /%s kÃ¶nyvtÃ¡rba ",
	"actmoveitems"		=> "Elem(ek) Ã¡thelyezÃ©se",
	"actmovefrom"		=> "ÃthelyezÃ©s a(z) /%s kÃ¶nyvtÃ¡rbÃ³l a(z) /%s kÃ¶nyvtÃ¡rba ",
	"actlogin"		=> "BejelentkezÃ©s",
	"actloginheader"	=> "BejelentkezÃ©s a QuiXplorer hasznÃ¡latÃ¡ra",
	"actadmin"		=> "AdminisztrÃ¡lÃ¡s",
	"actchpwd"		=> "A jelszÃ³ megvÃ¡ltoztatÃ¡sa",
	"actusers"		=> "FelhasznÃ¡lÃ³k",
	"actarchive"		=> "Elem(ek) archivÃ¡lÃ¡sa",
	"actupload"		=> "FÃ¡jl(ok) feltÃ¶ltÃ©se",
	
	// misc
	"miscitems"		=> "elem",
	"miscfree"		=> "Szabad terÃ¼let",
	"miscusername"		=> "FelhasznÃ¡lÃ³nÃ©v",
	"miscpassword"		=> "JelszÃ³",
	"miscoldpass"		=> "A rÃ©gi jelszÃ³",
	"miscnewpass"		=> "Az Ãºj jelszÃ³",
	"miscconfpass"		=> "A jelszÃ³ megerÅ‘sÃ­tÃ©se",
	"miscconfnewpass"	=> "Az Ãºj jelszÃ³ megerÅ‘sÃ­tÃ©se",
	"miscchpass"		=> "JelszÃ³csere",
	"mischomedir"		=> "GyÃ¶kÃ©rkÃ¶nyvtÃ¡r",
	"mischomeurl"		=> "KezdÅ‘ URL",
	"miscshowhidden"	=> "A rejtett elemek lÃ¡thatÃ³k",
	"mischidepattern"	=> "Minta elrejtÃ©se",
	"miscperms"		=> "EngedÃ©lyek",
	"miscuseritems"		=> "(nÃ©v, gyÃ¶kÃ©rkÃ¶nyvtÃ¡r, rejtett elemek megjelenÃ­tÃ©se, engedÃ©lyek, aktÃ­v)",
	"miscadduser"		=> "Ãºj felhasznÃ¡lÃ³",
	"miscedituser"		=> "'%s' felhasznÃ¡lÃ³ mÃ³dosÃ­tÃ¡sa",
	"miscactive"		=> "AktÃ­v",
	"misclang"		=> "Nyelv",
	"miscnoresult"		=> "A keresÃ©s eredmÃ©nytelen.",
	"miscsubdirs"		=> "KeresÃ©s az alkÃ¶nyvtÃ¡rakban",
	"miscpermnames"		=> array("Csak nÃ©zet","MÃ³dosÃ­tÃ¡s","JelszÃ³csere","MÃ³dosÃ­tÃ¡s Ã©s jelszÃ³csere",
					"AdminisztrÃ¡tor"),
	"miscyesno"		=> array("Igen","Nem","I","N"),
	"miscchmod"		=> array("Tulajdonos", "Csoport", "Mindenki"),

	// from here all new by mic
	'miscowner'			=> 'Tulajdonos',
	'miscownerdesc'		=> '<strong>LeÃ­rÃ¡s:</strong><br />FelhasznÃ¡lÃ³ (UID) /<br />Csoport (GID)<br />Jelenlegi engedÃ©lyek:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> $_VERSION->PRODUCT." rendszerinformÃ¡ciÃ³",
	'sisysteminfo'		=> 'Rendszer',
	'sibuilton'			=> 'OperÃ¡ciÃ³s rendszer',
	'sidbversion'		=> 'AdatbÃ¡zis verziÃ³szÃ¡ma (MySQL)',
	'siphpversion'		=> 'PHP verziÃ³szÃ¡ma',
	'siphpupdate'		=> 'INFORMÃCIÃ“: <span style="color: red;">Az Ã–n Ã¡ltal hasznÃ¡lt PHP verziÃ³ <strong>elavult</strong>!</span><br />A Mambo Ã©s kiegÃ©szÃ­tÅ‘i valamennyi funkciÃ³inak Ã©s szolgÃ¡ltatÃ¡sainak biztosÃ­tÃ¡sÃ¡hoz<br />legalÃ¡bb <strong>PHP 4.3-as verziÃ³t</strong> kell hasznÃ¡lnia!',
	'siwebserver'		=> 'WebkiszolgÃ¡lÃ³',
	'siwebsphpif'		=> 'WebkiszolgÃ¡lÃ³ - PHP felÃ¼let',
	'simamboversion'	=> $_VERSION->PRODUCT.' verziÃ³szÃ¡ma',
	'siuseragent'		=> 'BÃ¶ngÃ©szÅ‘ verziÃ³szÃ¡ma',
	'sirelevantsettings' => 'Fontos PHP beÃ¡llÃ­tÃ¡sok',
	'sisafemode'		=> 'BiztonsÃ¡gos mÃ³d',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'PHP hibÃ¡k',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'FÃ¡jlfeltÃ¶ltÃ©s',
	'simagicquotes'		=> 'MÃ¡gikus idÃ©zÅ‘jelek',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'Kimeneti puffer',
	'sisesssavepath'	=> 'Munkamenet mentÃ©si Ãºtvonal',
	'sisessautostart'	=> 'Munkamenet automatikus indÃ­tÃ¡sa',
	'sixmlenabled'		=> 'XML engedÃ©lyezett',
	'sizlibenabled'		=> 'ZLIB engedÃ©lyezett',
	'sidisabledfuncs'	=> 'Nem engedÃ©lyezett funkciÃ³k',
	'sieditor'			=> 'WYSIWYG szerkesztÅ‘',
	'siconfigfile'		=> 'KonfigurÃ¡ciÃ³s fÃ¡jl',
	'siphpinfo'			=> 'PHP',
	'siphpinformation'	=> 'PHP tulajdonsÃ¡gai',
	'sipermissions'		=> 'EngedÃ©lyek',
	'sidirperms'		=> 'KÃ¶nyvtÃ¡rengedÃ©lyek',
	'sidirpermsmess'	=> 'Ha azt akarja, hogy a '.$_VERSION->PRODUCT.' Ã¶sszes funkciÃ³ja Ã©s szolgÃ¡ltatÃ¡sa megfelelÅ‘en mÅ±kÃ¶djÃ¶n, akkor Ã­rhatÃ³vÃ¡ kell tennie a kÃ¶vetkezÅ‘ kÃ¶nyvtÃ¡rakat [chmod 0777]',
	'sionoff'			=> array( 'Be', 'Ki' ),
	
	'extract_warning' => "ValÃ³ban ki akarja bontani ezt a fÃ¡jlt? Ide?\\nFelÃ¼l fogja Ã­rni a lÃ©tezÅ‘ fÃ¡jlokat, ha nem kÃ¶rÃ¼ltekintÅ‘en hasznÃ¡lja!",
	'extract_success' => "A kibontÃ¡s sikerÃ¼lt",
	'extract_failure' => "A kibontÃ¡s nem sikerÃ¼lt",
	
	'overwrite_files' => 'A lÃ©tezÅ‘ fÃ¡jlok felÃ¼lÃ­rÃ¡sa',
	"viewlink"		=> "NÃ©zet",
	"actview"		=> "A fÃ¡jl forrÃ¡sÃ¡nak megtekintÃ©se",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'Az alkÃ¶nyvtÃ¡rakon is',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'Ãšj verziÃ³ ellenÅ‘rzÃ©se',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'FÃ¡jl/kÃ¶nyvtÃ¡r Ã¡tnevezÃ©se...',
	'newname'		=>	'Ãšj nÃ©v',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'MentÃ©s utÃ¡n vissza a kÃ¶nyvtÃ¡rhoz',
	'line'		=> 	'Sor',
	'column'	=>	'Oszlop',
	'wordwrap'	=>	'SortÃ¶rdelÃ©s: (csak IE)',
	'copyfile'	=>	'MÃ¡solat a fÃ¡jlrÃ³l az alÃ¡bbi nÃ©ven',
	
	// Bookmarks
	'quick_jump' => 'Gyors ugrÃ¡s ide',
	'already_bookmarked' => 'Ehhez a kÃ¶nyvtÃ¡rhoz mÃ¡r helyezett el kÃ¶nyvjelzÅ‘t',
	'bookmark_was_added' => 'A kÃ¶nyvjelzÅ‘ lÃ©trehozÃ¡sa ehhez a kÃ¶nyvtÃ¡rhoz kÃ©sz.',
	'not_a_bookmark' => 'Ez a kÃ¶nyvtÃ¡r nem kÃ¶nyvjelzÅ‘.',
	'bookmark_was_removed' => 'Ez a kÃ¶nyvtÃ¡r eltÃ¡volÃ­tÃ¡sra kerÃ¼lt a kÃ¶nyvjelzÅ‘k kÃ¶zÃ¼l.',
	'bookmarkfile_not_writable' => "Nem sikerÃ¼lt %s a kÃ¶nyvjelzÅ‘t.\n A(z) '%s' kÃ¶nyvjelzÅ‘fÃ¡jl \nnem Ã­rhatÃ³.",
	
	'lbl_add_bookmark' => 'KÃ¶nyvjelzÅ‘ kÃ©szÃ­tÃ©se ehhez a kÃ¶nyvtÃ¡rhoz',
	'lbl_remove_bookmark' => 'A kÃ¶nyvtÃ¡r kÃ¶nyvjelzÅ‘jÃ©nek eltÃ¡volÃ­tÃ¡sa',
	
	'enter_alias_name' => 'KÃ©rjÃ¼k, hogy Ã­rja be a kÃ¶nyvtÃ¡r aliasnevÃ©t',
	
	'normal_compression' => 'normÃ¡l tÃ¶mÃ¶rÃ­tÃ©s',
	'good_compression' => 'jÃ³ tÃ¶mÃ¶rÃ­tÃ©s',
	'best_compression' => 'legjobb tÃ¶mÃ¶rÃ­tÃ©s',
	'no_compression' => 'nincs tÃ¶mÃ¶rÃ­tÃ©s',
	
	'creating_archive' => 'ArchÃ­v fÃ¡jl lÃ©trehozÃ¡sa...',
	'processed_x_files' => 'Feldolgozva %s a(z) %s fÃ¡jlbÃ³l',
	
	'ftp_header' => 'Helyi FTP hitelesÃ­tÃ©s',
	'ftp_login_lbl' => 'KÃ©rjÃ¼k, hogy Ã­rja be az FTP kiszolgÃ¡lÃ³ hitelesÃ­tÃ©si adatait',
	'ftp_login_name' => 'FTP felhasznÃ¡lÃ³nÃ©v',
	'ftp_login_pass' => 'FTP jelszÃ³',
	'ftp_hostname_port' => 'FTP kiszolgÃ¡lÃ³ neve Ã©s portja <br />(A port elhagyhatÃ³)',
	'ftp_login_check' => 'FTP kapcsolat ellenÅ‘rzÃ©se...',
	'ftp_connection_failed' => "Nem lehet kapcsolÃ³dni az FTP kiszolgÃ¡lÃ³hoz. \nKÃ©rjÃ¼k, ellenÅ‘rizze, hogy mÅ±kÃ¶dik-e az FTP kiszolgÃ¡lÃ³ a szerveren.",
	'ftp_login_failed' => "Sikertelen az FTP bejelentkezÃ©s. KÃ©rjÃ¼k, hogy ellenÅ‘rizze a felhasznÃ¡lÃ³nevet Ã©s a jelszÃ³t, majd prÃ³bÃ¡lja Ãºjra.",
		
	'switch_file_mode' => 'Jelenlegi mÃ³d: <strong>%s</strong>. ÃtvÃ¡ltÃ¡s %s mÃ³dba.',
	'symlink_target' => 'A szimbolikus hivatkozÃ¡s cÃ©lja',
	
	"permchange"		=> "CHMOD siker:",
	"savefile"		=> "A fÃ¡jl mentÃ©se kÃ©sz.",
	"moveitem"		=> "Az Ã¡thelyezÃ©s sikerÃ¼lt.",
	"copyitem"		=> "A mÃ¡solÃ¡s sikerÃ¼lt.",
	'archive_name' 	=> 'Az archÃ­vumfÃ¡jl neve',
	'archive_saveToDir' 	=> 'Az archÃ­vum mentÃ©se a kÃ¶nyvtÃ¡rban',
	
	'editor_simple'	=> 'EgyszerÅ± szerkesztÅ‘ mÃ³d',
	'editor_syntaxhighlight'	=> 'Szintaxis-kiemelÃ©ses mÃ³d',

	'newlink'	=> 'Ãšj fÃ¡jl/kÃ¶nyvtÃ¡r',
	'show_directories' => 'KÃ¶nyvtÃ¡rak megjelenÃ­tÃ©se',
	'actlogin_success' => 'A bejelentkezÃ©s sikerÃ¼lt!',
	'actlogin_failure' => 'A bejelentkezÃ©s nem sikerÃ¼lt, prÃ³bÃ¡lja Ãºjra.',
	'directory_tree' => 'KÃ¶nyvtÃ¡rak',
	'browsing_directory' => 'TallÃ³zandÃ³ kÃ¶nyvtÃ¡r',
	'filter_grid' => 'SzÅ±rÅ‘',
	'paging_page' => 'Oldal',
	'paging_of_X' => '/ {0}',
	'paging_firstpage' => 'ElsÅ‘ oldal',
	'paging_lastpage' => 'UtolsÃ³ oldal',
	'paging_nextpage' => 'KÃ¶vetkezÅ‘ oldal',
	'paging_prevpage' => 'ElÅ‘zÅ‘ oldal',
	
	'paging_info' => 'Elemek megjelenÃ­tÃ©se: {0} - {1} / {2}',
	'paging_noitems' => 'Nincs megjelenÃ­tett elem',
	'aboutlink' => 'NÃ©vjegy...',
	'password_warning_title' => 'Fontos - VÃ¡ltoztassa meg jelszavÃ¡t!',
	'password_warning_text' => 'A felhasznÃ¡lÃ³i fiÃ³k, melybe bejelentkezett (admin admin jelszÃ³val) megegyezik az alapÃ©rtelmezÃ©s szerinti eXtplorer engedÃ©lyezÃ©sÅ± fiÃ³kÃ©val. Az Ã–n eXtplorer telepÃ­tÃ©se Ã­gy nyitott a betolakodÃ³k szÃ¡mÃ¡ra, ezÃ©rt javÃ­tsa azonnal ezt a biztonsÃ¡gi rÃ©st!',
	'change_password_success' => 'Az Ã–n jelszava megvÃ¡ltozott!',
	'success' => 'Siker',
	'failure' => 'Sikertelen',
	'dialog_title' => 'Webhely pÃ¡rbeszÃ©dablak',
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
