<?php
/**
* @version $Id:germanf.php 195 2011-05-30 07:10:43Z sloarch $
* @package eXtplorer
* @copyright (C) 2005 Quix project, Soeren
* @license http://www.mozilla.org/MPL/
* eXtplorer is Free Software
*/

// German Language Module for eXtplorer (translated by the QuiX project)
global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "d.m.Y H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "Fehler",
	"message" => "Nachricht(en)",
	"back"			=> "ZurÃ¼ck",

	// root
	"home"			=> "Das Home-Verzeichnis existiert nicht, kontrollieren sie ihre Einstellungen.",
	"abovehome"		=> "Das aktuelle Verzeichnis darf nicht hÃ¶her liegen als das Home-Verzeichnis.",
	"targetabovehome"	=> "Das Zielverzeichnis darf nicht hÃ¶her liegen als das Home-Verzeichnis.",

	// exist
	"direxist"		=> "Dieses Verzeichnis existiert nicht.",
	//"filedoesexist"	=> "Diese Datei existiert bereits.",
	"fileexist"		=> "Diese Datei existiert nicht.",
	"itemdoesexist"		=> "Dieses Objekt existiert bereits.",
	"itemexist"		=> "Dieses Objekt existiert nicht.",
	"targetexist"		=> "Das Zielverzeichnis existiert nicht.",
	"targetdoesexist"	=> "Das Zielobjekt existiert bereits.",

	// open
	"opendir"		=> "Kann Verzeichnis nicht Ã¶ffnen.",
	"readdir"		=> "Kann Verzeichnis nicht lesen",

	// access
	"accessdir"		=> "Zugriff auf dieses Verzeichnis verweigert.",
	"accessfile"		=> "Zugriff auf diese Datei verweigert.",
	"accessitem"		=> "Zugriff auf dieses Objekt verweigert.",
	"accessfunc"		=> "Zugriff auf diese Funktion verweigert.",
	"accesstarget"		=> "Zugriff auf das Zielverzeichnis verweigert.",

	// actions
	"permread"		=> "Rechte lesen fehlgeschlagen.",
	"permchange"		=> "Rechte Ã¤ndern fehlgeschlagen.",
	"openfile"		=> "Datei Ã¶ffnen fehlgeschlagen.",
	"savefile"		=> "Datei speichern fehlgeschlagen.",
	"createfile"		=> "Datei anlegen fehlgeschlagen.",
	"createdir"		=> "Verzeichnis anlegen fehlgeschlagen.",
	"uploadfile"		=> "Datei hochladen fehlgeschlagen.",
	"copyitem"		=> "Kopieren fehlgeschlagen.",
	"moveitem"		=> "Verschieben fehlgeschlagen.",
	"delitem"		=> "LÃ¶schen fehlgeschlagen.",
	"chpass"		=> "Passwort Ã¤ndern fehlgeschlagen.",
	"deluser"		=> "Benutzer lÃ¶schen fehlgeschlagen.",
	"adduser"		=> "Benutzer hinzufÃ¼gen fehlgeschlagen.",
	"saveuser"		=> "Benutzer speichern fehlgeschlagen.",
	"searchnothing"		=> "Sie mÃ¼ssen etwas zum Suchen eintragen.",

	// misc
	"miscnofunc"		=> "Funktion nicht vorhanden.",
	"miscfilesize"		=> "Datei ist grÃ¶ÃŸer als die maximal zulÃ¤ssige GrÃ¶ÃŸe.",
	"miscfilepart"		=> "Datei wurde nur zum Teil hochgeladen.",
	"miscnoname"		=> "Sie mÃ¼ssen einen Namen eintragen",
	"miscselitems"		=> "Sie haben keine Objekt(e) ausgewÃ¤hlt.",
	"miscdelitems"		=> "Sollen die {0} markierten Objekt(e) gelÃ¶scht werden?",
	"miscdeluser"		=> "Soll der Benutzer {0} gelÃ¶scht werden?",
	"miscnopassdiff"	=> "Das alte und neue Passwort sind nicht verschieden.",
	"miscnopassmatch"	=> "PasswÃ¶rter sind nicht gleich.",
	"miscfieldmissed"	=> "Sie haben ein wichtiges Eingabefeld vergessen auszufÃ¼llen",
	"miscnouserpass"	=> "Benutzer oder Passwort unbekannt.",
	"miscselfremove"	=> "Sie kÃ¶nnen sich selbst nicht lÃ¶schen.",
	"miscuserexist"		=> "Der Benutzer existiert bereits.",
	"miscnofinduser"	=> "Kann Benutzer nicht finden.",
	"extract_noarchive" => "Dieses Datei ist leider kein Archiv.",
	"extract_unknowntype" => "Archivtyp unbekannt",
	
	'chmod_none_not_allowed' => 'Dateirechte kÃ¶nnen nicht leer sein!',
	'archive_dir_notexists' => 'Das Verzeichnis zum Speichern des Archivs existiert nicht.',
	'archive_dir_unwritable' => 'Bitte geben Sie ein beschreibbares Verzeichnis an!',
	'archive_creation_failed' => 'Speichern des Archivs fehlgeschlagen'
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "Rechte Ã¤ndern",
	"editlink"		=> "Bearbeiten",
	"downlink"		=> "Herunterladen",
	"uplink"		=> "HÃ¶her",
	"homelink"		=> "Startseite",
	"reloadlink"		=> "Aktualisieren",
	"copylink"		=> "Kopieren",
	"movelink"		=> "Verschieben",
	"dellink"		=> "LÃ¶schen",
	"comprlink"		=> "Archivieren",
	"adminlink"		=> "Administration",
	"logoutlink"		=> "Abmelden",
	"uploadlink"		=> "Hochladen",
	"searchlink"		=> "Suchen",
	"extractlink"	=> "Entpacken",
	'chmodlink'		=> 'Zugriffsrechte Ã¤ndern (chmod)', // new mic
	'mossysinfolink'	=> 'eXtplorer System Informationen (eXtplorer, Server, PHP, mySQL)', // new mic
	'logolink'		=> 'Gehe zur eXtplorer Webseite (neues Fenster)', // new mic

	// list
	"nameheader"		=> "Name",
	"sizeheader"		=> "GrÃ¶ÃŸe",
	"typeheader"		=> "Typ",
	"modifheader"		=> "GeÃ¤ndert",
	"permheader"		=> "Rechte",
	"actionheader"		=> "Aktionen",
	"pathheader"		=> "Pfad",

	// buttons
	"btncancel"		=> "Abbrechen",
	"btnsave"		=> "Speichern",
	"btnchange"		=> "Ã„ndern",
	"btnreset"		=> "ZurÃ¼cksetzen",
	"btnclose"		=> "SchlieÃŸen",
	"btncreate"		=> "Anlegen",
	"btnsearch"		=> "Suchen",
	"btnupload"		=> "Hochladen",
	"btncopy"		=> "Kopieren",
	"btnmove"		=> "Verschieben",
	"btnlogin"		=> "Anmelden",
	"btnlogout"		=> "Abmelden",
	"btnadd"		=> "HinzufÃ¼gen",
	"btnedit"		=> "Ã„ndern",
	"btnremove"		=> "LÃ¶schen",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'	=> 'Umbenennen',
	'confirm_delete_file' => 'Sind Sie sicher, dass Sie diese Datei lÃ¶schen wollen? \\n%s',
	'success_delete_file' => 'Die Datei(en) bzw. Verzeichnis(se) wurden gelÃ¶scht.',
	'success_rename_file' => 'Das Verzeichnis / die Datei %s wurde erfolgreich in %s unbenannt.',
	
	// actions
	"actdir"		=> "Verzeichnis",
	"actperms"		=> "Rechte Ã¤ndern",
	"actedit"		=> "Datei bearbeiten",
	"actsearchresults"	=> "Suchergebnisse",
	"actcopyitems"		=> "Objekt(e) kopieren",
	"actcopyfrom"		=> "Kopiere von /%s nach /%s ",
	"actmoveitems"		=> "Objekt(e) verschieben",
	"actmovefrom"		=> "Versetze von /%s nach /%s ",
	"actlogin"		=> "Anmelden",
	"actloginheader"	=> "Melden sie sich an, um eXtplorer zu benutzen",
	"actadmin"		=> "Administration",
	"actchpwd"		=> "Passwort Ã¤ndern",
	"actusers"		=> "Benutzer",
	"actarchive"		=> "Objekt(e) archivieren",
	"actupload"		=> "Datei(en) hochladen",

	// misc
	"miscitems"		=> "Objekt(e)",
	"miscfree"		=> "Freier Speicher",
	"miscusername"		=> "Benutzername",
	"miscpassword"		=> "Passwort",
	"miscoldpass"		=> "Altes Passwort",
	"miscnewpass"		=> "Neues Passwort",
	"miscconfpass"		=> "BestÃ¤tige Passwort",
	"miscconfnewpass"	=> "BestÃ¤tige neues Passwort",
	"miscchpass"		=> "Ã„ndere Passwort",
	"mischomedir"		=> "Startverzeichnis",
	"mischomeurl"		=> "Start-URL",
	"miscshowhidden"	=> "Versteckte Objekte anzeigen",
	"mischidepattern"	=> "Versteck-Filter",
	"miscperms"		=> "Rechte",
	"miscuseritems"		=> "(Name, Home-Verzeichnis, versteckte Objekte anzeigen, Rechte, aktiviert)",
	"miscadduser"		=> "Benutzer hinzufÃ¼gen",
	"miscedituser"		=> "Benutzer '%s' Ã¤ndern",
	"miscactive"		=> "Aktiviert",
	"misclang"		=> "Sprache",
	"miscnoresult"		=> "Suche ergebnislos.",
	"miscsubdirs"		=> "Suche in Unterverzeichnisse",
	"miscpermnames"		=> array("Nur ansehen","Ã„ndern","Passwort Ã¤ndern",
					"Ã„ndern & Passwort Ã¤ndern","Administrator"),
	"miscyesno"		=> array("Ja","Nein","J","N"),
	"miscchmod"		=> array("Besitzer", "Gruppe", "Publik"),
	'miscowner'			=> 'Inhaber',
	'miscownerdesc'		=> '<strong>ErklÃ¤rung:</strong><br />Benutzer (UID) /<br />Gruppe (GID)<br />Aktuelle Besitzerrechte:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>', // new mic

	// sysinfo (new by mic)
	'simamsysinfo'		=> 'eXtplorer System Info',
	'sisysteminfo'		=> 'System Info',
	'sibuilton'			=> 'Betriebssystem',
	'sidbversion'		=> 'Datenbankversion (MySQL)',
	'siphpversion'		=> 'PHP Version',
	'siphpupdate'		=> 'HINWEIS: <font style="color: red;">Die verwendete PHP Version ist <strong>nicht</strong> aktuell!</font><br />Um ein ordnungsgemÃ¤sses Funktionieren von eXtplorer bzw. dessen Erweiterungen zu gewÃ¤hrleisten,<br />sollte mindestens <strong>PHP.Version 4.3</strong> eingesetzt werden!',
	'siwebserver'		=> 'Webserver',
	'siwebsphpif'		=> 'WebServer - PHP Schnittstelle',
	'simamboversion'	=> 'eXtplorer Version',
	'siuseragent'		=> 'Browserversion',
	'sirelevantsettings' => 'Wichtige PHP Einstellungen',
	'sisafemode'		=> 'Safe Mode',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'PHP Fehleranzeige',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'Datei Uploads',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'Ausgabebuffer',
	'sisesssavepath'	=> 'Session Sicherungspfad',
	'sisessautostart'	=> 'Session auto start',
	'sixmlenabled'		=> 'XML aktiviert',
	'sizlibenabled'		=> 'ZLIB aktiviert',
	'sidisabledfuncs'	=> 'Nicht aktivierte Funktionen',
	'sieditor'			=> 'WYSIWYG Bearbeitung (Editor)',
	'siconfigfile'		=> 'Konfigurationsdatei',
	'siphpinfo'			=> 'PHP Info',
	'siphpinformation'	=> 'PHP Information',
	'sipermissions'		=> 'Rechte',
	'sidirperms'		=> 'Verzeichnisrechte',
	'sidirpermsmess'	=> 'Damit alle Funktionen und ZusÃ¤tze einwandfrei arbeiten kÃ¶nnen, sollten folgende Verzeichnisse Schreibrechte [chmod 0777] besitzen',
	'sionoff'			=> array( 'Ein', 'Aus' ),
	
	'extract_warning' => "Soll dieses Datei wirklich entpackt werden? Hier?\\nBeim Entpacken werden evtl. vorhandene Dateien Ã¼berschrieben!",
	'extract_success' => "Das Entpacken des Archivs war erfolgreich.",
	'extract_failure' => "Das Entpacken des Archivs ist fehlgeschlagen.",
	
	'overwrite_files' => 'vorhandene Datei(en) Ã¼berschreiben?',
	"viewlink"		=> "Anzeigen",
	"actview"		=> "Zeige Quelltext der Datei",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'auch Unterverzeichnisse mit einbeziehen?',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'PrÃ¼fe auf aktuellste Version',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'Umbenennen eines Verzeichnisses oder einer Datei...',
	'newname'		=>	'Neuer Name',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'zurÃ¼ck zum Verzeichnis nach dem Speichern?',
	'line'		=> 	'Zeile',
	'column'	=>	'Spalte',
	'wordwrap'	=>	'Zeilenumbruch: (IE only)',
	'copyfile'	=>	'Kopiere diese Datei zu folgendem Dateinamen',
	
	// Bookmarks
	'quick_jump' => 'Springe zu',
	'already_bookmarked' => 'Dieses Verzeichnis ist bereits als Lesezeichen eingetragen.',
	'bookmark_was_added' => 'Das Verzeichnis wurde als Lesezeichen hinzugefÃ¼gt.',
	'not_a_bookmark' => 'Dieses Verzeichnis ist kein Lesezeichen und kann nicht entfernt werden.',
	'bookmark_was_removed' => 'Das Verzeichnis wurde von der Liste der Lesezeichen entfernt.',
	'bookmarkfile_not_writable' => "Die Aktion (%) ist fehlgeschlagen. Die Lesezeichendatei '%s' \nist nicht beschreibbar.",
	
	'lbl_add_bookmark' => 'FÃ¼ge dieses Verzeichnis als Lesezeichen hinzu',
	'lbl_remove_bookmark' => 'Entferne dieses Verzeichnis von der Liste der Lesezeichen',
	
	'enter_alias_name' => 'Bitte geben Sie einen Aliasnamen fÃ¼r dieses Lesezeichen an',
	
	'normal_compression' => 'normale Kompression, schnell',
	'good_compression' => 'gute Kompression, CPU-intensiv',
	'best_compression' => 'beste Kompression, CPU-intensiv',
	'no_compression' => 'keine Kompression, sehr schnell',
	
	'creating_archive' => 'Das Archiv wird erstellt...',
	'processed_x_files' => 'Es wurden %s von %s Dateien bearbeitet',
	
	'ftp_header' => 'FTP Authentifizierung',
	'ftp_login_lbl' => 'Bitte geben Sie Ihre Login-Daten fÃ¼r den FTP Server ein',
	'ftp_login_name' => 'FTP Nutzername',
	'ftp_login_pass' => 'FTP Passwort',
	'ftp_hostname_port' => 'FTP Hostname und Port <br />(Port ist optional)',
	'ftp_login_check' => 'FTP Verbindung wird hergestellt...',
	'ftp_connection_failed' => "Der FTP Server konnte nicht kontaktiert werden. \nStellen Sie bitte sicher, dass auf dem Server ein FTP-Server aktiv ist.",
	'ftp_login_failed' => "Die Anmeldung am FTP Server ist fehlgeschlagen. \nÃœberprÃ¼fen Sie den Nutzernamen \nund das Passwort und versuchen Sie es erneut.",
	
	'switch_file_mode' => 'Aktueller Modus: <strong>%s</strong>. Modus wechseln zu: %s.',
	'symlink_target' => 'Ziel des symbolischen Links',
	
	"permchange"		=> "CHMOD Erfolg:",
	"savefile"		=> "Die Datei wurde gespeichert.",
	"moveitem"		=> "Das Verschieben war erfolgreich.",
	"copyitem"		=> "Das Kopieren war erfolgreich.",
	'archive_name' 	=> 'Name des Archivs',
	'archive_saveToDir' 	=> 'Speichere das Archiv in folgendem Verzeichnis',
	
	'editor_simple'	=> 'Einfacher Editormodus',
	'editor_syntaxhighlight'	=> 'Syntax-Hervorhebungsmodus',

	'newlink'	=> 'Neue Datei/Verzeichnis',
	'show_directories' => 'Zeige Verzeichnisse',
	'actlogin_success' => 'Anmeldung erfolreich!',
	'actlogin_failure' => 'Anmeldung fehlgeschlagen, bitte erneut versuchen.',
	'directory_tree' => 'Verzeichnisbaum',
	'browsing_directory' => 'Zeige Verzeichnis',
	'filter_grid' => 'Filter',
	'paging_page' => 'Seite',
	'paging_of_X' => 'von {0}',
	'paging_firstpage' => 'Erste Seite',
	'paging_lastpage' => 'Letzte Seite',
	'paging_nextpage' => 'NÃ¤chste Seite',
	'paging_prevpage' => 'Vorherige Seite',
	'paging_info' => 'Zeige EintrÃ¤ge {0} - {1} von {2}',
	'paging_noitems' => 'keine EintrÃ¤ge zum anzeigen',
	'aboutlink' => 'Ãœber..',
	'password_warning_title' => 'Wichtig - Ã„ndern Sie Ihr Passwort!',
	'password_warning_text' => 'Das Benutzerkonto, mit dem Sie angemeldet sind (admin mit Passwort admin) entspricht dem des Standard-eXtplorer Administratorkontos. Wird Ihre eXtplorer Installation mit diesen Einstellungen betrieben, so kÃ¶nnen Unbefugte leicht von auÃŸen auf sie zugreifen. Sie sollten diese SicherheitslÃ¼cke unbedingt schlieÃŸen!',
	'change_password_success' => 'Ihr Passwort wurde geÃ¤ndert!',
	'success' => 'Erfolg',
	'failure' => 'Fehlgeschlagen',
	'dialog_title' => 'Webseiten-Dialog',
	'upload_processing'	=> 'Datei(en) werden hochgeladen...',
	'upload_completed'	=> 'Upload erfolgreich!',
	'acttransfer' => 'Ãœbertragen von einem anderen Server',
	'transfer_processing' => 'Ãœbertragung ist im Gange, bitte warten Sie...',
	'transfer_completed' => 'Ãœbertragung vollstÃ¤ndig!',
	'max_file_size' => 'Maximale DateigrÃ¶ÃŸe',
	'max_post_size' => 'Maximale Upload-GrÃ¶ÃŸe',
	'done' => 'Fertig.',
	'permissions_processing' => 'Rechte werden angepasst, bitte warten Sie...',
	'archive_created' => 'Das Archiv wurde erstellt!',
	'save_processing' => 'Datei wird gespeichert...',
	'current_user' => 'Diese Anwendung lÃ¤ft gegenwÃ¤rtig mit den Rechten des folgenden Nutzers:',
	'your_version' => 'Ihre Version',
	'search_processing' => 'Suche lÃ¤ft, bitte warten Sie...',
	'url_to_file' => 'Adresse der Datei',
	'file' => 'Datei'
);
?>
