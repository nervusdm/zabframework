<?php
// $Id: $
// Norwegian Language Module for v2.3 (translated by BjÃ¶rnar Markussen)
global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y-m-d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"		=> "Feil",
	"message"		=> "Melding(er)",
	"back"			=> "Tilbake",

	// root
	"home"			=> "Hjemkatalogen finnes ikke, kontroller dine innstillinger.",
	"abovehome"		=> "Den aktuelle katalogen kan ikke vÃ¤re over hjemkatalogen.",
	"targetabovehome"	=> "MÃ¥lkatalogen kan ikke vÃ¦re ovenfor hjemkatalogen.",

	// exist
	"direxist"		=> "Katalogen finnes ikke",
	//"filedoesexist"	=> "Filen finnes allerede.",
	"fileexist"		=> "Filen finnes ikke.",
	"itemdoesexist"	=> "Objektet finnes allerede.",
	"itemexist"		=> "Objektet finnes ikke",
	"targetdoesexist"	=> "MÃ¥lobjektet finnes allerede.",
	"targetexist"		=> "MÃ¥lkatalogen finnes ikke.",

	// open
	"opendir"		=> "Katalogen kan ikke Ã¥pnes.",
	"readdir"		=> "Kan ikke lese fra katalogen.",

	// access
	"accessdir"		=> "Du har ikke tillatelse til lesing av denne katalog.",
	"accessfile"		=> "Du har ikke tillatelse til lesing av denne filen.",
	"accessitem"		=> "Du har ikke tillatelse til lesing av denne objektet.",
	"accessfunc"		=> "Du har ikke tillatelse til lesing av denne funktionen.",
	"accesstarget"	=> "Du har ikke tillatelse til Ã¥ning av mÃ¥lkatalogen.",

	// actions
	"permread"		=> "Kan ikke lese filrettighetene.",
	"permchange"		=> "CHMOD-feil (Problemet er ofte relatert til hvem som eier filen - f.eks. at HTTP-bruker ('wwwrun' eller 'nobody') og FTP-bruker ikke er den samme.)",
	"openfile"		=> "Kan ikke Ã¥pne filen.",
	"savefile"		=> "Kan ikke lagre filen.",
	"createfile"		=> "Kan ikke opprette filen.",
	"createdir"		=> "Kan ikke opprette katalogen.",
	"uploadfile"		=> "Kan ikke laste opp filen.",
	"copyitem"		=> "Kopiering feilet.",
	"moveitem"		=> "Flytting feilet.",
	"delitem"		=> "Sletting feilet.",
	"chpass"		=> "Bytting av passord feilet.",
	"deluser"		=> "Sletting av bruker feilet.",
	"adduser"		=> "Oppretting av bruker feilet.",
	"saveuser"		=> "Lagring av bruker feilet.",
	"searchnothing"	=> "SÃ¶ketema mÃ¥ angis.",

	// misc
	"miscnofunc"		=> "Funksjonen er ikke tilgjengelig.",
	"miscfilesize"	=> "Filen overskrider maksimal stÃ¶rrelse.",
	"miscfilepart"	=> "Filen ble bare delvis lastet opp.",
	"miscnoname"		=> "Du mÃ¥ angi et navn.",
	"miscselitems"	=> "Du har ikke valgt objekt.",
	"miscdelitems"	=> "Er du helt sikker pÃ¥ at du vil slette disse {0} objektene?",
	"miscdeluser"		=> "Er du helt sikker pÃ¥ at du vil slette brukeren '{0}'?",
	"miscnopassdiff"	=> "Det nye passordet skiller seg ikke fra gjeldende.",
	"miscnopassmatch"	=> "Passordet stemmer ikke",
	"miscfieldmissed"	=> "Obligatorisk felt utelatt.",
	"miscnouserpass"	=> "Bruker eller passord er feil.",
	"miscselfremove"	=> "Du kan desverre ikke slette deg selv.",
	"miscuserexist"	=> "Brukeren finnes allerede.",
	"miscnofinduser"	=> "Kan ikke finne brukeren.",
	"extract_noarchive"	=> "Filen kan ikke pakkes ut.",
	"extract_unknowntype" => "Ukjent filtype",
	
	'chmod_none_not_allowed' => 'Endring av rettigheter til <none> er ikke tillatt',
	'archive_dir_notexists' => 'Den angitte lagringskatalogen finnes ikke.',
	'archive_dir_unwritable' => 'Angi en skrivbar katalog for lagring av arkivet.',
	'archive_creation_failed' => 'Lagring av arkiv feilet'
	
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "Endre rettigheter",
	"editlink"		=> "Redigere",
	"downlink"		=> "Last ned",
	"uplink"		=> "Opp",
	"homelink"		=> "Hjem",
	"reloadlink"		=> "Last pÃ¥ nytt",
	"copylink"		=> "Kopiere",
	"movelink"		=> "Flytte",
	"dellink"		=> "Ta bort",
	"comprlink"		=> "Arkiv",
	"adminlink"		=> "Admin",
	"logoutlink"		=> "Logg ut",
	"uploadlink"		=> "Last opp",
	"searchlink"		=> "SÃ¶k",
	"extractlink"		=> "Pakk ut arkivet",
	'chmodlink'		=> 'Endre (chmod) rettigheter (Mappe/Fil(er))', // new mic
	'mossysinfolink'	=> 'eXtplorer System Information (eXtplorer, Server, PHP, mySQL)', // new mic
	'logolink'		=> 'GÃ¥ til websiden for eXtplorer (Ã¥pnes i nytt vindu)', // new mic

	// list
	"nameheader"		=> "Navn",
	"sizeheader"		=> "StÃ¶rrelse",
	"typeheader"		=> "Type",
	"modifheader"		=> "Endret",
	"permheader"		=> "Rettigheter",
	"actionheader"	=> "Hendelser",
	"pathheader"		=> "SÃ¶kesti",

	// buttons
	"btncancel"		=> "Avbryt",
	"btnsave"		=> "Lagre",
	"btnchange"		=> "Endre",
	"btnreset"		=> "Tilbakestill",
	"btnclose"		=> "Avslutt",
	"btncreate"		=> "Lag",
	"btnsearch"		=> "SÃ¶k",
	"btnupload"		=> "Last opp",
	"btncopy"		=> "Kopier",
	"btnmove"		=> "Flytt",
	"btnlogin"		=> "Logg inn",
	"btnlogout"		=> "Logg ut",
	"btnadd"		=> "Legg til",
	"btnedit"		=> "Rediger",
	"btnremove"		=> "Ta bort",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'		=> 'Bytt navn',
	'confirm_delete_file' => 'Vil du virkelig slette filen? <br />%s',
	'success_delete_file' => 'Filen er slettet.',
	'success_rename_file' => 'Katalogen/filen %s ble omdÃ¶pt til %s.',
	
	// actions
	"actdir"		=> "Katalog",
	"actperms"		=> "Endre rettigheter",
	"actedit"		=> "Redigere fil",
	"actsearchresults"	=> "SÃ¶kresultat",
	"actcopyitems"	=> "Kopiere objekt",
	"actcopyfrom"		=> "Kopiere fra /%s til /%s ",
	"actmoveitems"	=> "Flytt objekt",
	"actmovefrom"		=> "Flytt fra /%s til /%s ",
	"actlogin"		=> "Logg inn",
	"actloginheader"	=> "Logg inn for Ã¥ bruke eXtplorer",
	"actadmin"		=> "Administrasjon",
	"actchpwd"		=> "Bytt passord",
	"actusers"		=> "Brukere",
	"actarchive"		=> "Arkiver objekt",
	"actupload"			=> "Last opp fil(er)",

	// misc
	"miscitems"		=> "Objekt",
	"miscfree"		=> "Fri",
	"miscusername"	=> "Brukernavn",
	"miscpassword"	=> "Passord",
	"miscoldpass"		=> "Gammelt passord",
	"miscnewpass"		=> "Nytt passord",
	"miscconfpass"	=> "Bekreft passord",
	"miscconfnewpass"	=> "Bekreft nytt passord",
	"miscchpass"		=> "Bytt passord",
	"mischomedir"		=> "Hjemkatalog",
	"mischomeurl"		=> "Hjem-URL",
	"miscshowhidden"	=> "Vis skjulte objekt",
	"mischidepattern"	=> "Skjul stier",
	"miscperms"		=> "Rettigheter",
	"miscuseritems"	=> "(navn, hjemkatalog, vis skjulte objekt, rettigheter, aktiv)",
	"miscadduser"		=> "legg til bruker",
	"miscedituser"	=> "redigere bruker '%s'",
	"miscactive"		=> "Aktiv",
	"misclang"		=> "SprÃ¥k",
	"miscnoresult"	=> "Intet resultat tilgjengelig.",
	"miscsubdirs"		=> "SÃ¶k i underkataloger",
	"miscpermnames"	=> array("Vis bare","Endre","Endre passord","Endra og Bytt passord",	"Administrator"),
	"miscyesno"		=> array("Ja","Nei","J","N"),
	"miscchmod"		=> array("Eier", "Gruppe", "Offentlig"),

	// from here all new by mic
	'miscowner'		=> 'Eier',
	'miscownerdesc'	=> '<strong>Beskrivelse:</strong><br />Brukere (UID) /<br />Gruppe (GID)<br />Gjeldende rettigheter:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'	=> "eXtplorer systeminformasjon",
	'sisysteminfo'	=> 'Systeminformasjon',
	'sibuilton'		=> 'Operativsystem',
	'sidbversion'		=> 'Databaseversjon (MySQL)',
	'siphpversion'	=> 'PHP-versjon',
	'siphpupdate'		=> 'INFORMASJON: <span style="color: red;">PHP-versjonen du bruker er<strong>ikke</strong> gjeldende!</span><br />For Ã¥ garantere at alle funksjoner og muligheter skal fungera,<br />bÃ¶r du bruke minst <strong>PHP-versjon 4.3</strong>!',
	'siwebserver'		=> 'Webserver',
	'siwebsphpif'		=> 'Weberverns PHP-interface',
	'simamboversion'	=> 'eXtplorer-versjon',
	'siuseragent'		=> 'Nettleserversion',
	'sirelevantsettings' => 'Viktige PHP-instillninger',
	'sisafemode'		=> 'Sikkerhetsmodus',
	'sibasedir'		=> 'Ã¥pne basismappe',
	'sidisplayerrors'	=> 'PHP Feil',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'	=> 'Filopplasting',
	'simagicquotes'	=> 'Magiske Kvoter',
	'siregglobals'	=> 'Registere Globals',
	'sioutputbuf'		=> 'Resultat Buffer',
	'sisesssavepath'	=> 'Session lagre sti',
	'sisessautostart'	=> 'Session auto start',
	'sixmlenabled'	=> 'XML tillatt',
	'sizlibenabled'	=> 'ZLIB tillatt',
	'sidisabledfuncs'	=> 'Funksjoner avslÃ¥tt',
	'sieditor'		=> 'WYSIWYG-editor',
	'siconfigfile'	=> 'Konfigurasjonsfil',
	'siphpinfo'		=> 'PHP-info',
	'siphpinformation'	=> 'PHP-informasjon',
	'sipermissions'	=> 'Rettigheter',
	'sidirperms'		=> 'Katalogrettigheter',
	'sidirpermsmess'	=> 'For Ã¥ vÃ¦re sikker pÃ¥ at alle funksjoner og muligheter i eXtplorer skal fungere korrekt, skal fÃ¶lgende kataloger ha skrivrÃ¤ttigheter [chmod 0777]',
	'sionoff'		=> array( 'Av', 'PÃ¥' ),
	'extract_warning' 	=> "Vil du virkelig pakke ut filen her?<br />Dette kan resultere i at eksisterende filer skrives over om du er uforsiktig!",
	'extract_success' 	=> "Utpakking vellykket",
	'extract_failure' 	=> "Utpakking mislykket",
	'overwrite_files' 	=> 'Skriv over eksisterende fil(er)?',
	"viewlink"		=> "Vis",
	"actview"		=> "Vis kildefilen",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'Bruk pÃ¥ underkataloger?',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'Kontrollere om det finnes oppdateringer',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'		=> 'Bytt navn pÃ¥ katalog eller fil...',
	'newname'		=> 'Nytt navn',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'		=> 'Returnere til katalog etter lagring?',
	'line'			=> 'Rad',
	'column'		=> 'Kolonne',
	'wordwrap'		=> 'Radbryting (bare i IE)',
	'copyfile'		=> 'Kopiere fil inn i detta filnavn',
	
	// Bookmarks
	'quick_jump' 		=> 'Flytt Raskt Til',
	'already_bookmarked' => 'Denne katalogen er allerede bokmerket',
	'bookmark_was_added' => 'Denne katalogen legges til pÃ¥ bokmerkeslisten.',
	'not_a_bookmark' 	=> 'Denne kataloger er ikke bokmerket.',
	'bookmark_was_removed' => 'Denne katalogen er tatt bort fra bokmerkelisten.',
	'bookmarkfile_not_writable' => "Det gikk ikke Ã¥ bokmerke .\n Bokmerkefilen '%s' er ikke skrivbar \n.",
	
	'lbl_add_bookmark' => 'Legg til denne katalogen som bokmerke',
	'lbl_remove_bookmark' => 'Ta bort denne katalogen fra bokmerkelisten',
	
	'enter_alias_name' 	=> 'Angi et alias for detta bokmerke',
	
	'normal_compression' => 'normal komprimering',
	'good_compression' 	=> 'god komprimering',
	'best_compression' 	=> 'beste komprimering',
	'no_compression' 	=> 'ingen komprimering',
	
	'creating_archive' 	=> 'Lag arkivfil...',
	'processed_x_files' 	=> 'Prossessert %s av %s filer',
	
	'ftp_header' 		=> 'Lokale FTP-innstillinger',
	'ftp_login_lbl' 	=> 'Angi dine login innstillinger for FTP-servern',
	'ftp_login_name' 	=> 'FTP-brukernavn',
	'ftp_login_pass' 	=> 'FTP-passord',
	'ftp_hostname_port' 	=> 'FTP-host og port<br />(Angivelse av port er valfritt)',
	'ftp_login_check' 	=> 'Kontrollerer FTP-tilkobling...',
	'ftp_connection_failed' => "Det gikk ikke Ã¥ kopple opp mot FTP-serveren. \nKontroller om FTP-serveren kjÃ¶rer pÃ¥ din server.",
	'ftp_login_failed' 	=> "FTP-innloggingen feilet. Kontrollere brukernavn og passord og prÃ¶v igjen.",
		
	'switch_file_mode' => 'NÃ¥vÃ¦rende modus er [%s] <br /> Endre til [%s] modus.',
	'symlink_target' => 'MÃ¥l for Symbolic Link',
	
	"permchange"		=> "CHMOD vellykket:",
	"savefile"		=> "Filen ble lagret.",
	"moveitem"		=> "Flytting vellykket.",
	"copyitem"		=> "Kopiering vellykket.",
	'archive_name' 	=> 'Navn pÃ¥ arkivfil',
	'archive_saveToDir' 	=> 'Lagre arkivet i denna katalog',
	
	'editor_simple'	=> 'Enkel editormodus',
	'editor_syntaxhighlight'	=> 'Modus for kodemarkering',

	'newlink'		=> 'Ny Fil/Katalog',
	'show_directories' 	=> 'Vis kataloger',
	'actlogin_success' 	=> 'Innlogging vellykket!',
	'actlogin_failure' 	=> 'Innlogging mislykket, prÃ¶v igjen.',
	'directory_tree' 	=> 'Katalogtre',
	'browsing_directory' => 'Bla i katalogen',
	'filter_grid' 	=> 'Filter',
	'paging_page' 	=> 'Side',
	'paging_of_X' 	=> 'av {0}',
	'paging_firstpage' 	=> 'FÃ¶rste side',
	'paging_lastpage' 	=> 'Siste side',
	'paging_nextpage' 	=> 'Neste side',
	'paging_prevpage' 	=> 'Forrige side',
	
	'paging_info' 	=> 'Vis objekt {0} - {1} av {2}',
	'paging_noitems' 	=> 'Intet objekt Ã¥ vise',
	'aboutlink' 		=> 'Om...',
	'password_warning_title' 	=> 'Viktig - endre passordet ditt!',
	'password_warning_text'	=> 'Brukerkontoen du logget inn med (admin med passord admin) er standardkontoen for administratorer i eXtplorer. Din eXtplorer-installasjon ligger Ã¥pen for angrep og du mÃ¥ derfor umiddelbart endre / fjerne detta sikkerhetshullet. Bytt passord nÃ¥!',
	'change_password_success' => 'Ditt passord er endret!',
	'success' 		=> 'Vellykket',
	'failure' 		=> 'Mislykket',
	'dialog_title' 	=> 'Websitedialog',
	'upload_processing' 	=> 'Prossesserer opplasting, vennligst vent...',
	'upload_completed' 	=> 'Opplasting vellykket!',
	'acttransfer' 	=> 'OverfÃ¶re filer fra en annen server',
	'transfer_processing' => 'Prossesserer opplasting fra Server-til-Server, vennligst vent...',
	'transfer_completed' => 'OverfÃ¶ring ferdig!',
	'max_file_size' 	=> 'Maximal filstÃ¶rrelse',
	'max_post_size' 	=> 'Maximal opplastingsstÃ¶rrelse',
	'done' 		=> 'Ferdig.',
	'permissions_processing' => 'Setter rettigheter, vennligst vent...',
	'archive_created' 	=> 'Arkivfilen er laget!',
	'save_processing' 	=> 'Lagrer fil...',
	'current_user' 	=> 'Detta skriptet kjÃ¶rer nÃ¥ med rettigheter for fÃ¶lgende brukere:',
	'your_version' 	=> 'Din versjon',
	'search_processing' 	=> 'SÃ¶ker, vennligst vent...',
	'url_to_file' 	=> 'Filens URL',
	'file' 		=> 'Fil'
	
);
?>
