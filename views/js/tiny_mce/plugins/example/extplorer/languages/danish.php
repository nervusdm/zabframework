<?php
// $Id: english.php 195 2011-05-30 18:13:22Z sloarch $
// English Language Module for v2.3 (translated by the QuiX project)
global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "Fejl",
	"message"			=> "Besked(er)",
	"back"			=> "GÃ¥ tilbage",

	// root
	"home"			=> "home mappen eksisterer ikke, kontroller dine indstillinger.",
	"abovehome"		=> "Den aktuelle mappe mÃ¥ ikke vÃ¦re over home mappen.",
	"targetabovehome"	=> "Destinationsmappen mÃ¥ ikke vÃ¦re over home mappen.",

	// exist
	"direxist"		=> "Denne mappe eksisterer ikke.",
	//"filedoesexist"	=> "Denne fil eksisterer allerede.",
	"fileexist"		=> "Denne fil eksisterer ikke.",
	"itemdoesexist"		=> "Dette element eksisterer allerede.",
	"itemexist"		=> "Dette element eksisterer ikke.",
	"targetexist"		=> "Destinationsmappen eksisterer ikke.",
	"targetdoesexist"	=> "Destinationselementet eksisterer allerede.",

	// open
	"opendir"		=> "Kan ikke Ã¥bne mappen.",
	"readdir"		=> "Kan ikke lÃ¦se mappen.",

	// access
	"accessdir"		=> "Du har ikke tilladelse til at tilgÃ¥ denne mappe.",
	"accessfile"		=> "Du har ikke tilladelse til at tilgÃ¥ denne fil.",
	"accessitem"		=> "Du har ikke tilladelse til at tilgÃ¥ dette element.",
	"accessfunc"		=> "Du har ikke tilladelse til at bruge denne funktion.",
	"accesstarget"		=> "Du har ikke tilladelse til at tilgÃ¥ destinationsmappen.",

	// actions
	"permread"		=> "Kunne ikke hente tilladelser.",
	"permchange"		=> "CHMOD fejl (for det meste skyldes dette et filejerskabsproblem - f.eks. hvis HTTP brugeren ('wwwrun' eller 'nobody') og FTP brugeren ikke er den samme)",
	"openfile"		=> "Ã…bning af fil fejlede.",
	"savefile"		=> "Lagring af fil fejlede.",
	"createfile"		=> "Oprettelse af fil fejlede.",
	"createdir"		=> "Oprettelse af mappe fejlede.",
	"uploadfile"		=> "Filupload fejlede.",
	"copyitem"		=> "Kopiering fejlede.",
	"moveitem"		=> "Flytning fejlede.",
	"delitem"		=> "Sletning fejlede.",
	"chpass"		=> "Ã†ndring af adgangskode fejlede.",
	"deluser"		=> "Fjernelse af bruger fejlede.",
	"adduser"		=> "TilfÃ¸jelse af bruger fejlede.",
	"saveuser"		=> "Lagring af bruger fejlede.",
	"searchnothing"		=> "Du skal angive noget at sÃ¸ge efter.",

	// misc
	"miscnofunc"		=> "Funktion er ikke tilgÃ¦ngelig.",
	"miscfilesize"		=> "Filen overskrider maksimum stÃ¸rrelse.",
	"miscfilepart"		=> "Filen blev kun delvist uploadet.",
	"miscnoname"		=> "Du skal angive et navn.",
	"miscselitems"		=> "Du har ikke valgt noget/le element(er).",
	"miscdelitems"		=> "Er du sikker pÃ¥ at du vil slette disse {0} element(er)?",
	"miscdeluser"		=> "Er du sikker pÃ¥ at du vil slette bruger '{0}'?",
	"miscnopassdiff"	=> "Ny adgangskode er ikke forskellig fra den nuvÃ¦rende.",
	"miscnopassmatch"	=> "Adgangskode matcher ikke.",
	"miscfieldmissed"	=> "Du mangler et vigtigt felt.",
	"miscnouserpass"	=> "Brugernavn eller adgangskode forkert.",
	"miscselfremove"	=> "Du kan ikke fjerne dig selv.",
	"miscuserexist"		=> "Bruger eksisterer allerede.",
	"miscnofinduser"	=> "Kan ikke finde bruger.",
	"extract_noarchive" => "Filen er ikke et arkiv.",
	"extract_unknowntype" => "Ukendt arkivtype",
	
	'chmod_none_not_allowed' => 'Ã†ndring af tilladelser til <none> er ikke tilladt',
	'archive_dir_notexists' => 'Gem-til mappen som du har angivet eksisterer ikke.',
	'archive_dir_unwritable' => 'Angiv venligst en skrivbar mappe som arkivet skal gemmes i.',
	'archive_creation_failed' => 'Kunne ikke gemme arkivfilen'
	
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "Skift tilladelser",
	"editlink"		=> "Rediger",
	"downlink"		=> "Download",
	"uplink"		=> "Op",
	"homelink"		=> "Home",
	"reloadlink"		=> "GenindlÃ¦s",
	"copylink"		=> "Kopier",
	"movelink"		=> "Flyt",
	"dellink"		=> "Slet",
	"comprlink"		=> "Arkiver",
	"adminlink"		=> "Admin",
	"logoutlink"		=> "Log af",
	"uploadlink"		=> "Upload",
	"searchlink"		=> "SÃ¸g",
	"extractlink"	=> "Udpak arkiv",
	'chmodlink'		=> 'Skift (chmod) rettigheder (Mappe/Fil(er))', // new mic
	'mossysinfolink'	=> 'eXtplorer Systeminformation (eXtplorer, Server, PHP, mySQL)', // new mic
	'logolink'		=> 'GÃ¥ til eXtplorer webstedet (nyt vindue)', // new mic

	// list
	"nameheader"		=> "Navn",
	"sizeheader"		=> "StÃ¸rrelse",
	"typeheader"		=> "Type",
	"modifheader"		=> "Ã†ndret",
	"permheader"		=> "Tilladelser",
	"actionheader"		=> "Handlinger",
	"pathheader"		=> "Sti",

	// buttons
	"btncancel"		=> "Annuller",
	"btnsave"		=> "Gem",
	"btnchange"		=> "Skift",
	"btnreset"		=> "Nulstil",
	"btnclose"		=> "Luk",
	"btncreate"		=> "Opret",
	"btnsearch"		=> "SÃ¸g",
	"btnupload"		=> "Upload",
	"btncopy"		=> "Kopier",
	"btnmove"		=> "Flyt",
	"btnlogin"		=> "Log pÃ¥",
	"btnlogout"		=> "Log af",
	"btnadd"		=> "TilfÃ¸g",
	"btnedit"		=> "Rediger",
	"btnremove"		=> "Fjern",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'	=> 'OmdÃ¸b',
	'confirm_delete_file' => 'Er du sikker pÃ¥ at du vil slette denne fil? <br />%s',
	'success_delete_file' => 'Element(er) slettet.',
	'success_rename_file' => 'Mappen/filen %s blev omdÃ¸bt til %s.',
	
	// actions
	"actdir"		=> "Mappe",
	"actperms"		=> "Skift tilladelser",
	"actedit"		=> "Rediger fil",
	"actsearchresults"	=> "SÃ¸geresultater",
	"actcopyitems"		=> "Kopier element(er)",
	"actcopyfrom"		=> "Kopier fra /%s til /%s ",
	"actmoveitems"		=> "Flyt element(er)",
	"actmovefrom"		=> "Flyt fra /%s til /%s ",
	"actlogin"		=> "Log pÃ¥",
	"actloginheader"	=> "Log pÃ¥ for at bruge eXtplorer",
	"actadmin"		=> "Administration",
	"actchpwd"		=> "Skift adgangskode",
	"actusers"		=> "Brugere",
	"actarchive"		=> "Arkiv element(er)",
	"actupload"		=> "Upload fil(er)",

	// misc
	"miscitems"		=> "Element(er)",
	"miscfree"		=> "Fri",
	"miscusername"		=> "Brugernavn",
	"miscpassword"		=> "Adgangskode",
	"miscoldpass"		=> "Gammel adgangskode",
	"miscnewpass"		=> "Ny adgangskode",
	"miscconfpass"		=> "BekrÃ¦ft adgangskode",
	"miscconfnewpass"	=> "BekrÃ¦ft ny adgangskode",
	"miscchpass"		=> "Skift adgangskode",
	"mischomedir"		=> "Home mappe",
	"mischomeurl"		=> "Home URL",
	"miscshowhidden"	=> "Vis skjulte elementer",
	"mischidepattern"	=> "Skjul mÃ¸nster",
	"miscperms"		=> "Tilladelser",
	"miscuseritems"		=> "(navn, home mappe, vis skjulte elementer, tilladelser, aktiv)",
	"miscadduser"		=> "tilfÃ¸j bruger",
	"miscedituser"		=> "rediger bruger '%s'",
	"miscactive"		=> "Aktiv",
	"misclang"		=> "Sprog",
	"miscnoresult"		=> "Ingen resultater tilgÃ¦ngelige.",
	"miscsubdirs"		=> "SÃ¸g i undermapper",
	"miscpermnames"		=> array("Vis kun","Modificer","Skift adgangskode","Modificer & skift adgangskode",
					"Administrator"),
	"miscyesno"		=> array("Ja","Nej","J","N"),
	"miscchmod"		=> array("Ejer", "Gruppe", "Offentlig"),

	// from here all new by mic
	'miscowner'			=> 'Ejer',
	'miscownerdesc'		=> '<strong>Beskrivelse:</strong><br />Bruger (UID) /<br />Gruppe (GID)<br />Aktuelle tilladelser:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> "eXtplorer System info",
	'sisysteminfo'		=> 'System info',
	'sibuilton'			=> 'Styresystem',
	'sidbversion'		=> 'Database version (MySQL)',
	'siphpversion'		=> 'PHP version',
	'siphpupdate'		=> 'INFORMATION: <span style="color: red;">PHP versionen som du bruger er <strong>ikke</strong> aktuel!</span><br />For at garantere alle funktioner og features i Mambo og tilfÃ¸jelser,<br />bÃ¸r du som minimum bruger <strong>PHP.Version 4.3</strong>!',
	'siwebserver'		=> 'Webserver',
	'siwebsphpif'		=> 'WebServer - PHP Interface',
	'simamboversion'	=> 'eXtplorer version',
	'siuseragent'		=> 'Browser version',
	'sirelevantsettings' => 'Vigtige PHP indstillinger',
	'sisafemode'		=> 'Safe Mode',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'PHP fejl',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'Fil uploads',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'Output Buffer',
	'sisesssavepath'	=> 'Session lagringssti',
	'sisessautostart'	=> 'Session auto start',
	'sixmlenabled'		=> 'XML aktiveret',
	'sizlibenabled'		=> 'ZLIB aktiveret',
	'sidisabledfuncs'	=> 'Disabled funktioner',
	'sieditor'			=> 'WYSIWYG editor',
	'siconfigfile'		=> 'Config fil',
	'siphpinfo'			=> 'PHP info',
	'siphpinformation'	=> 'PHP information',
	'sipermissions'		=> 'Tilladelser',
	'sidirperms'		=> 'Mappetilladelser',
	'sidirpermsmess'	=> 'For at vÃ¦re sikker pÃ¥ at alle funktioner og features i eXtplorer virker korrekt, skal fÃ¸lgende mapper have tilladelser til skrivning [chmod 0777]',
	'sionoff'			=> array( 'On', 'Off' ),
	
	'extract_warning' => "Ã˜nsker du virkelig at udpakke denne fil? Her?<br />Dette vil overskrive eksisterende filer hvis det ikke bruges forsigtigt!",
	'extract_success' => "Udpakning lykkedes",
	'extract_failure' => "Udpakning fejlede",
	
	'overwrite_files' => 'Overskriv eksisterende fil(er)?',
	"viewlink"		=> "Vis",
	"actview"		=> "Viser kilde for filen",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'Rekursivt i undermapper?',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'Kontroller for seneste version',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'OmdÃ¸b en mappe eller en fil...',
	'newname'		=>	'Nyt navn',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'Vend tilbage til mappe efter lagring?',
	'line'		=> 	'Linje',
	'column'	=>	'Kolonne',
	'wordwrap'	=>	'Ombrydning: (kun IE)',
	'copyfile'	=>	'Kopier fil til dette filnavn',
	
	// Bookmarks
	'quick_jump' => 'Spring hurtigt til',
	'already_bookmarked' => 'Denne mappe er allerede bogmÃ¦rket',
	'bookmark_was_added' => 'Denne mappe blev tilfÃ¸jet til bogmÃ¦rkelisten.',
	'not_a_bookmark' => 'Mappen er ikke et bogmÃ¦rke.',
	'bookmark_was_removed' => 'Denne mappe blev fjerne fra bogmÃ¦rkelisten.',
	'bookmarkfile_not_writable' => "Kunne ikke %s bogmÃ¦rket.\n BogmÃ¦rkefilen File '%s' \ner ikke skrivbar.",
	
	'lbl_add_bookmark' => 'TilfÃ¸j denne mappe som bogmÃ¦rke',
	'lbl_remove_bookmark' => 'Fjern denne mappe fra bogmÃ¦rkelisten',
	
	'enter_alias_name' => 'Angiv venligst aliasnavn for dette bogmÃ¦rke',
	
	'normal_compression' => 'normal komprimering',
	'good_compression' => 'god komprimering',
	'best_compression' => 'besdte komprimering',
	'no_compression' => 'ingen komprimering',
	
	'creating_archive' => 'Opretter arkivfil...',
	'processed_x_files' => 'GennemfÃ¸rt %s af %s filer',
	
	'ftp_header' => 'Lokal FTP godkendelse',
	'ftp_login_lbl' => 'Angiv venligst log pÃ¥ oplysninger til FTP serveren',
	'ftp_login_name' => 'FTP brugernavn',
	'ftp_login_pass' => 'FTP adgangskode',
	'ftp_hostname_port' => 'FTP Server hostnavn og port <br />(Porten er valgfri)',
	'ftp_login_check' => 'Kontrollerer FTP forbindelse..',
	'ftp_connection_failed' => "FTP serveren kunne ikke kontaktes. \nKontroller venligst at FTP serveren kÃ¸rer pÃ¥ din server.",
	'ftp_login_failed' => "FTP log pÃ¥ fejlede. Kontroller venligst brugernavn og adgangskode og prÃ¸v igen.",
		
	'switch_file_mode' => 'Aktuel tilstand: <strong>%s</strong>. Du kunne skifte til %s tilstand.',
	'symlink_target' => 'MÃ¥l for det symbolske link',
	
	"permchange"		=> "CHMOD success:",
	"savefile"		=> "Filen blev gemt.",
	"moveitem"		=> "Flytning gennemfÃ¸rt.",
	"copyitem"		=> "Kopiering gennemfÃ¸rt.",
	'archive_name' 	=> 'Navn pÃ¥ arkivfilen',
	'archive_saveToDir' 	=> 'Gem arkivet i denne mappe',
	
	'editor_simple'	=> 'Simpel editor tilstand',
	'editor_syntaxhighlight'	=> 'Syntaks-Highlighted tilstand',

	'newlink'	=> 'Nu fil/mappe',
	'show_directories' => 'Vis mapper',
	'actlogin_success' => 'Log pÃ¥ gennemfÃ¸rt!',
	'actlogin_failure' => 'Log pÃ¥ fejlede, prÃ¸v igen.',
	'directory_tree' => 'MappetrÃ¦',
	'browsing_directory' => 'Gennemse mapper',
	'filter_grid' => 'Filter',
	'paging_page' => 'Side',
	'paging_of_X' => 'ud af {0}',
	'paging_firstpage' => 'FÃ¸rste side',
	'paging_lastpage' => 'Sidste side',
	'paging_nextpage' => 'NÃ¦ste side',
	'paging_prevpage' => 'Forrige side',
	
	'paging_info' => 'Viser elementer {0} - {1} ud af {2}',
	'paging_noitems' => 'Ingen elementer til visning',
	'aboutlink' => 'Om...',
	'password_warning_title' => 'Vigtigt - skift din adgangskode!',
	'password_warning_text' => 'Brugerkontoen som du er logget pÃ¥ med (admin med adgangskode admin) svarer til standard eXtplorer priviligeret konto. Din eXtplorer installation er Ã¥ben for indbrud og du bÃ¸r straks lukke dette sikkerhedshul!',
	'change_password_success' => 'Din adgangskode er Ã¦ndret!',
	'success' => 'Success',
	'failure' => 'Fejl',
	'dialog_title' => 'Webstedsdialog',
	'upload_processing' => 'GennemfÃ¸rer upload, vent venligst...',
	'upload_completed' => 'Upload gennemfÃ¸rt!',
	'acttransfer' => 'OverfÃ¸r fra en anden Server',
	'transfer_processing' => 'GennemfÃ¸rer Server-til-Server overfÃ¸rsel, vent venligst...',
	'transfer_completed' => 'OverfÃ¸rsel fuldfÃ¸rt!',
	'max_file_size' => 'Maksimal filstÃ¸rrelse',
	'max_post_size' => 'Maksimal upload grÃ¦nse',
	'done' => 'FÃ¦rdig.',
	'permissions_processing' => 'Anvender tilladelser, vent venligst...',
	'archive_created' => 'Arkivfilen er blevet oprettet!',
	'save_processing' => 'Gemmer fil...',
	'current_user' => 'Dette script kÃ¸rer aktuelt med tilladelser fra den fÃ¸lgende bruger:',
	'your_version' => 'Din version',
	'search_processing' => 'SÃ¸ger, vent venligst...',
	'url_to_file' => 'URL for filen',
	'file' => 'Fil'
	
);
?>
