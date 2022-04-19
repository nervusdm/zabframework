<?php
// $Id: polish.php 195 2011-05-31 06:57:32Z sloarch07 $
// Polish Language Module for v2.3 (translated by l0co@wp.pl)
// Additional translation and corrections 2010-07-24 by marcin@nevada.pl

global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"				=> "BÅ‚Ä…d",
	"message"			=> "Komunikat(y)",
	"back"				=> "WrÃ³Ä‡",

	// root
	"home"				=> "Katalog domowy nie istnieje. SprawdÅº swoje ustawienia.",
	"abovehome"			=> "BieÅ¼Ä…cy katalog nie moÅ¼e byÄ‡ powyÅ¼ej katalogu domowego.",
	"targetabovehome"	=> "Docelowy katalog nie moÅ¼e byÄ‡ powyÅ¼ej katalogu domowego.",

	// exist
	"direxist"			=> "Katalog nie istnieje.",
	//"filedoesexist"	=> "Plik juÅ¼ istnieje.",
	"fileexist"			=> "Plik nie istnieje.",
	"itemdoesexist"		=> "Element juÅ¼ istnieje.",
	"itemexist"			=> "Element nie istnieje.",
	"targetexist"		=> "Katalog docelowy nie istnieje.",
	"targetdoesexist"	=> "Miejsce docelowe juÅ¼ istnieje.",

	// open
	"opendir"			=> "Nie moÅ¼na otworzyÄ‡ katalogu.",
	"readdir"			=> "Nie moÅ¼na odczytaÄ‡ katalogu.",

	// access
	"accessdir"			=> "Nie masz prawa dostÄ™pu do tego katalogu.",
	"accessfile"		=> "Nie masz prawa dostÄ™pu do tego pliku.",
	"accessitem"		=> "Nie masz prawa dostÄ™pu do tego elementu.",
	"accessfunc"		=> "Nie masz prawa uÅ¼yÄ‡ tej funkcji.",
	"accesstarget"		=> "Nie masz prawa dostÄ™pu do docelowego katalogu.",

	// actions
	"permread"			=> "Pobieranie uprawnieÅ„ nie powiodÅ‚o siÄ™.",
	"permchange"		=> "BÅ‚Ä…d CHMOD (zazwyczaj spowodowane jest to problemem z ustawieniami wÅ‚aÅ›ciciela pliku - np. jeÅ›li uÅ¼ytkownik HTTP ('www-data' lub 'nobody') i uÅ¼ytkownik FTP nie sÄ… tymi samymi uÅ¼ytkownikami)",
	"openfile"			=> "Otwarcie pliku nie powiodÅ‚o siÄ™.",
	"savefile"			=> "Zapisanie pliku nie powiodÅ‚o siÄ™.",
	"createfile"		=> "Utworzenie pliku nie powiodÅ‚o siÄ™.",
	"createdir"			=> "Utworzenie katalogu nie powiodÅ‚o siÄ™.",
	"uploadfile"		=> "Upload pliku nie powiÃ³dÅ‚ siÄ™.",
	"copyitem"			=> "Kopiowanie nie powiodÅ‚o siÄ™.",
	"moveitem"			=> "Przenoszenie nie powiodÅ‚o siÄ™.",
	"delitem"			=> "Usuwanie nie powiodÅ‚o siÄ™.",
	"chpass"			=> "Zmiana nazwa nie powiodÅ‚a siÄ™.",
	"deluser"			=> "Usuwanie uÅ¼ytkownika nie powiodÅ‚o siÄ™.",
	"adduser"			=> "Dodawanie uÅ¼ytkownika nie powiodÅ‚o siÄ™.",
	"saveuser"			=> "Zapisywanie uÅ¼ytkownika nie powiodÅ‚o siÄ™.",
	"searchnothing"		=> "Musisz wpisaÄ‡ frazÄ™ wyszukiwania.",

	// misc
	"miscnofunc"		=> "Funkcja nie jest dostÄ™pna.",
	"miscfilesize"		=> "Plik przekracza maksymalnÄ… wielkoÅ›Ä‡.",
	"miscfilepart"		=> "Plik zostaÅ‚ zaÅ‚adowany tylko czÄ™Å›ciowo.",
	"miscnoname"		=> "Musisz wpisaÄ‡ nazwÄ™.",
	"miscselitems"		=> "Nie wybraÅ‚eÅ› Å¼adnych elementÃ³w.",
	"miscdelitems"		=> "Na pewno chcesz usunÄ…Ä‡ {0} element(Ã³w)?",
	"miscdeluser"		=> "Na pewno chcesz usunÄ…Ä‡ uÅ¼ytkownika '{0}'?",
	"miscnopassdiff"	=> "Nowe hasÅ‚o nie rÃ³Å¼ni siÄ™ od bieÅ¼Ä…cego.",
	"miscnopassmatch"	=> "HasÅ‚o nie pasuje.",
	"miscfieldmissed"	=> "Nie wypeÅ‚niÅ‚eÅ› waÅ¼nego pola.",
	"miscnouserpass"	=> "NieprawidÅ‚owe hasÅ‚o lub nazwa uÅ¼ytkownika.",
	"miscselfremove"	=> "Nie moÅ¼esz usunÄ…Ä‡ sam siebie.",
	"miscuserexist"		=> "UÅ¼ytkownik juÅ¼ istnieje.",
	"miscnofinduser"	=> "Nie znaleziono uÅ¼ytkownika.",
	"extract_noarchive"		=> "Plik nie jest archiwum moÅ¼liwym do rozpakowania.",
	"extract_unknowntype"	=> "Nieznany typ archiwum",

	'chmod_none_not_allowed'	=> 'Zmiana uprawnieÅ„ na <none> nie jest dopuszczalna',
	'archive_dir_notexists'		=> 'Docelowy katalog zapisu ktÃ³ry wybraÅ‚eÅ›, nie istnieje.',
	'archive_dir_unwritable'	=> 'ProszÄ™ wybraÄ‡ katalog z prawami do zapisu archiwum.',
	'archive_creation_failed'	=> 'Zapis archiwum nie powiÃ³dÅ‚ siÄ™'

);
$GLOBALS["messages"] = array(
	// links
	"permlink"			=> "Zmiana uprawnieÅ„",
	"editlink"			=> "Edycja",
	"downlink"			=> "Download",
	"uplink"			=> "W gÃ³rÄ™",
	"homelink"			=> "Katalog domowy",
	"reloadlink"		=> "OdÅ›wieÅ¼",
	"copylink"			=> "Kopiuj",
	"movelink"			=> "PrzenieÅ›",
	"dellink"			=> "UsuÅ„",
	"comprlink"			=> "Dodaj do archiwum",
	"adminlink"			=> "Administrator",
	"logoutlink"		=> "Wyloguj",
	"uploadlink"		=> "Upload",
	"searchlink"		=> "Wyszukaj",
	'difflink'			=> 'PorÃ³wnaj',
	"extractlink"		=> "Rozpakuj archiwum",
	'chmodlink'			=> 'ZmieÅ„ uprawnienia (chmod)', // new mic
	'mossysinfolink'	=> 'Informacje o systemie', // new mic
	'logolink'			=> 'Skocz do strony eXtplorer (nowe okno)', // new mic

	// list
	"nameheader"		=> "Nazwa",
	"sizeheader"		=> "Rozmiar",
	"typeheader"		=> "Typ",
	"modifheader"		=> "Zmodyfikowano",
	"permheader"		=> "Prawa",
	"actionheader"		=> "Akcje",
	"pathheader"		=> "ÅšcieÅ¼ka",

	// buttons
	"btncancel"			=> "Anuluj",
	"btnsave"			=> "Zapisz",
	"btnchange"			=> "ZmieÅ„",
	"btnreset"			=> "Resetuj",
	"btnclose"			=> "Zamknij",
	"btnreopen"			=> "OtwÃ³rz ponownie",
	"btncreate"			=> "UtwÃ³rz",
	"btnsearch"			=> "Szukaj",
	"btnupload"			=> "Upload",
	"btncopy"			=> "Kopiuj",
	"btnmove"			=> "PrzenieÅ›",
	"btnlogin"			=> "Zaloguj",
	"btnlogout"			=> "Wyloguj",
	"btnadd"			=> "Dodaj",
	"btnedit"			=> "Edytuj",
	"btnremove"			=> "UsuÅ„",
	"btndiff"			=> "PorÃ³wnaj",

	// user messages, new in eXtplorer 1.3.0
	'renamelink'			=> 'ZmieÅ„ nazwÄ™',
	'confirm_delete_file'	=> 'Na pewno chcesz usunÄ…Ä‡ ten plik?<br />%s',
	'success_delete_file'	=> 'Element(y) zostaÅ‚y poprawnie usuniÄ™te.',
	'success_rename_file'	=> 'Nazwa katalogu/pliku %s zostaÅ‚a zmieniona na %s.',

	// actions
	"actdir"			=> "Katalog",
	"actperms"			=> "Zmiana praw",
	"actedit"			=> "Edycja pliku",
	"actsearchresults"	=> "Wyniki szukania",
	"actcopyitems"		=> "Kopiowanie element(Ã³w)",
	"actcopyfrom"		=> "Kopiowanie z /%s do /%s ",
	"actmoveitems"		=> "Przenoszenie element(Ã³w)",
	"actmovefrom"		=> "Przenoszenie z /%s do /%s ",
	"actlogin"			=> "Zaloguj",
	"actloginheader"	=> "Zaloguj siÄ™ aby uÅ¼ywaÄ‡ menedÅ¼era plikÃ³w",
	"actadmin"			=> "Administracja",
	"actchpwd"			=> "Zmiana hasÅ‚a",
	"actusers"			=> "UÅ¼ytkownicy",
	"actarchive"		=> "Archiwizacja element(Ã³w)",
	"actupload"			=> "Upload plik(Ã³w)",

	// misc
	"miscitems"			=> "Element(y)",
	"miscfree"			=> "Wolny",
	"miscusername"		=> "Nazwa uÅ¼ytkownika",
	"miscpassword"		=> "HasÅ‚o",
	"miscoldpass"		=> "Poprzednie hasÅ‚o",
	"miscnewpass"		=> "Nowe hasÅ‚o",
	"miscconfpass"		=> "PotwierdÅº hasÅ‚o",
	"miscconfnewpass"	=> "PotwierdÅº nowe hasÅ‚o",
	"miscchpass"		=> "ZmieÅ„ hasÅ‚o",
	"mischomedir"		=> "Katalog domowy",
	"mischomeurl"		=> "Domowy adres URL",
	"miscshowhidden"	=> "Pokazuj elementy ukryte",
	"mischidepattern"	=> "Maska elementÃ³w ukrytych",
	"miscperms"			=> "Uprawnienia",
	"miscuseritems"		=> "(nazwa, katalog domowy, pokazywanie ukrytych elementÃ³w, uprawnienia, aktywnoÅ›Ä‡)",
	"miscadduser"		=> "dodaj uÅ¼ytkownika",
	"miscedituser"		=> "edycja uÅ¼ytkownika '%s'",
	"miscactive"		=> "Aktywny",
	"misclang"			=> "JÄ™zyk",
	"miscnoresult"		=> "Brak rezultatÃ³w.",
	"miscsubdirs"		=> "Przeszukaj podkatalogi",
	"miscpermnames"		=> array("Tylko przeglÄ…danie","Modyfikacja","Zmiana hasÅ‚a","Modyfikacja i zmiana hasÅ‚a","Administrator"),
	"miscyesno"			=> array("Tak","Nie","T","N"),
	"miscchmod"			=> array("WÅ‚aÅ›ciciel", "Grupa", "Pozostali"),
	'misccontent'		=> "ZawartoÅ›Ä‡ pliku",

	// from here all new by mic
	'miscowner'			=> 'WÅ‚aÅ›ciciel',
	'miscownerdesc'		=> '<strong>Opis:</strong><br />UÅ¼ytkownik (UID) /<br />Grupa (GID)<br />Prawa:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> "Informacje o systemie",
	'sisysteminfo'		=> 'Informacja o systemie',
	'sibuilton'			=> 'System operacyjny',
	'sidbversion'		=> 'Wersja bazy danych',
	'siphpversion'		=> 'Wersja PHP',
	'siphpupdate'		=> 'INFORMACJA: <span style="color:red">UÅ¼ywana przez Ciebie wersja PHP <strong>nie</strong> jest aktualna!</span><br />JeÅ›li chcesz aby wszystkie funkcje i dodatki Mambo dziaÅ‚aÅ‚y poprawnie,<br />musisz uÅ¼ywaÄ‡ minimum wersji <strong>PHP 4.3</strong>!',
	'siwebserver'		=> 'Serwer web',
	'siwebsphpif'		=> 'Serwer web - interfejs PHP',
	'simamboversion'	=> 'Wersja eXtplorer\'a',
	'siuseragent'		=> 'Wersja przeglÄ…darki',
	'sirelevantsettings'	=> 'WaÅ¼ne ustawienia PHP',
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
	'sidisabledfuncs'	=> 'Nieaktywne funkcje',
	'sieditor'			=> 'Edytor WYSIWYG',
	'siconfigfile'		=> 'Plik konfiguracyjny',
	'siphpinfo'			=> 'PHP Info',
	'siphpinformation'	=> 'Informacje o PHP',
	'sipermissions'		=> 'Prawa',
	'sidirperms'		=> 'Prawa katalogu',
	'sidirpermsmess'	=> 'Aby zapewniÄ‡ poprawne dziaÅ‚anie wszystkich funkcji eXtplorer\'a, nastÄ™pujÄ…ce katalogi powinny mieÄ‡ ustawione prawa do zapisu [chmod 0777]',
	'sionoff'			=> array( 'WÅ‚', 'WyÅ‚' ),

	'extract_warning'	=> "Czy na pewno chcesz rozpakowaÄ‡ ten plik tutaj?<br />MoÅ¼e to spowodowaÄ‡ nadpisanie istniejÄ…cych plikÃ³w!",
	'extract_success'	=> "Rozpakowanie powiodÅ‚o siÄ™",
	'extract_failure'	=> "Rozpakowanie nie powiodÅ‚o siÄ™",

	'overwrite_files'	=> 'NadpisaÄ‡ istniejÄ…ce pliki?',
	"viewlink"			=> "PodglÄ…d",
	"actview"			=> "PokaÅ¼ ÅºrÃ³dÅ‚o pliku",

	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'UstawiÄ‡ dla wszystkich podkatalogÃ³w?',

	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'		=> 'SprawdÅº ostatniÄ… wersjÄ™',

	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'		=>	'ZmieÅ„ nazwÄ™ katalogu lub pliku...',
	'newname'			=>	'Nowa nazwa',

	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'			=>	'PowrÃ³ciÄ‡ do katalogu po zapisaniu?',
	'line'				=> 	'Linia',
	'column'			=>	'Kolumna',
	'wordwrap'			=>	'Zawijanie wierszy: (tylko IE)',
	'copyfile'			=>	'Skopiuj plik pod tÄ… nazwÄ…',

	// Bookmarks
	'quick_jump'				=> 'Szybki skok do',
	'already_bookmarked'		=> 'Dla tego katalogu juÅ¼ istnieje zakÅ‚adka',
	'bookmark_was_added'		=> 'Katalog zostaÅ‚ dodany do zakÅ‚adek.',
	'not_a_bookmark'			=> 'Katalog nie jest zakÅ‚adkÄ….',
	'bookmark_was_removed'		=> 'Katalog zostaÅ‚ usuniÄ™ty z zakÅ‚adek.',
	'bookmarkfile_not_writable'	=> "Nie powiodÅ‚o siÄ™ dodanie do zakÅ‚adek %s.\n Plik zakÅ‚adek '%s' \nnie ma ustawionych praw do zapisu.",

	'lbl_add_bookmark'		=> 'Dodaj katalog jako zakÅ‚adkÄ™',
	'lbl_remove_bookmark'	=> 'UsuÅ„ katalog z listy zakÅ‚adek',

	'enter_alias_name'		=> 'Wpisz alias dla zakÅ‚adki',

	'normal_compression'	=> 'kompresja normalna (normal)',
	'good_compression'		=> 'kompresja dobra (good)',
	'best_compression'		=> 'kompresja najlepsza (best)',
	'no_compression'		=> 'brak kompresji',

	'creating_archive'	=> 'Tworzenie archiwum...',
	'processed_x_files'	=> 'Przetworzono %s z %s plikÃ³w',

	'ftp_header'			=> 'Lokalna autoryzacja FTP',
	'ftp_login_lbl'			=> 'ProszÄ™ podaÄ‡ dane dostÄ™powe do serwera FTP',
	'ftp_login_name'		=> 'Nazwa uÅ¼ytkownika',
	'ftp_login_pass'		=> 'HasÅ‚o',
	'ftp_hostname_port'		=> 'Serwer i port FTP<br />(port opcjonalnie)',
	'ftp_login_check'		=> 'Sprawdzanie poÅ‚Ä…czenia FTP...',
	'ftp_connection_failed'	=> "Nie moÅ¼na poÅ‚Ä…czyÄ‡ siÄ™ z serwerem FTP.<br />ProszÄ™ sprawdziÄ‡, czy serwer FTP jest aktywny na podanym hoÅ›cie.",
	'ftp_login_failed'		=> "Nie moÅ¼na zalogowaÄ‡ siÄ™ do serwera FTP.<br />ProszÄ™ zweryfikowaÄ‡ poprawnoÅ›Ä‡ nazwy uÅ¼ytkownika i hasÅ‚a i sprÃ³bowaÄ‡ ponownie.",

	'switch_file_mode'	=> 'Aktualny tryb: <strong>%s</strong>. MoÅ¼esz przeÅ‚Ä…czyÄ‡ siÄ™ do trybu %s.',
	'symlink_target'	=> 'Punkt docelowy linku symbolicznego',

	"permchange"		=> "Zmiana uprawnieÅ„ (chmod) powiodÅ‚a siÄ™:",
	"savefile"			=> "Plik zostaÅ‚ zapisany.",
	"moveitem"			=> "Przenoszenie powiodÅ‚o siÄ™.",
	"copyitem"			=> "Kopiowanie powiodÅ‚o siÄ™.",
	'archive_name' 		=> 'Nazwa pliku archiwum',
	'archive_saveToDir'	=> 'Zapisz archiwum do katalogu',

	'editor_simple'				=> 'Tryb edytora: prosty',
	'editor_syntaxhighlight'	=> 'Tryb edytora: wyrÃ³Å¼nianie skÅ‚adni',

	'newlink'			=> 'Nowy plik/katalog',
	'show_directories'	=> 'PokaÅ¼ katalogi',
	'actlogin_success'	=> 'UÅ¼ytkownik zostaÅ‚ zalogowany!',
	'actlogin_failure'	=> 'NieprawidÅ‚owy login bÄ…dÅº hasÅ‚o. SprÃ³buj ponownie',
	'directory_tree'	=> 'Drzewko katalogÃ³w',
	'browsing_directory'	=> 'PrzeglÄ…dany katalog',
	'filter_grid'		=> 'Filtr',
	'paging_page'		=> 'Strona',
	'paging_of_X'		=> 'z {0}',
	'paging_firstpage'	=> 'Pierwsza strona',
	'paging_lastpage'	=> 'Ostatnia strona',
	'paging_nextpage'	=> 'NastÄ™pna strona',
	'paging_prevpage'	=> 'Poprzednia strona',

	'paging_info'				=> 'WyÅ›wietlane elementy: {0} - {1} z {2}',
	'paging_noitems'			=> 'Brak elementÃ³w do wyÅ›wietlenia',
	'aboutlink'					=> 'O...',
	'password_warning_title'	=> 'WaÅ¼ne - zmieÅ„ swoje hasÅ‚o!',
	'password_warning_text'		=> 'Konto uÅ¼ytkownika do ktÃ³rego wÅ‚aÅ›nie siÄ™ zalogowaÅ‚eÅ› (admin z hasÅ‚em admin) odpowiada domyÅ›lnym ustawieniom systemu. To sprawia, Å¼e potencjalnie kaÅ¼dy moÅ¼e zalogowaÄ‡ siÄ™ do Twojego konta administratora. Aby naprawiÄ‡ ten problem, zmieÅ„ hasÅ‚o administratora na swoje prywatne hasÅ‚o!',
	'change_password_success'	=> 'HasÅ‚o zostaÅ‚o zmienione.',
	'success'					=> 'Sukces',
	'failure'					=> 'BÅ‚Ä…d',
	'dialog_title'				=> 'Okno dialogowe',
	'upload_processing'			=> 'Upload plikÃ³w, proszÄ™ czekaÄ‡...',
	'upload_completed'			=> 'Upload plikÃ³w powiÃ³dÅ‚ siÄ™!',
	'acttransfer'				=> 'Transfer z innego serwera',
	'transfer_processing'		=> 'Transfer plikÃ³w serwer-do-serwera, proszÄ™ czekaÄ‡...',
	'transfer_completed'		=> 'ZakoÅ„czono transfer!',
	'max_file_size'				=> 'Maksymalny rozmiar pliku',
	'max_post_size'				=> 'Maksymalny limit uploadu',
	'done'						=> 'ZakoÅ„czono.',
	'permissions_processing'	=> 'Trwa zastosowywanie uprawnieÅ„, proszÄ™ czekaÄ‡...',
	'archive_created'			=> 'Plik archiwum zostaÅ‚ utworzony.',
	'save_processing'			=> 'Zapis pliku...',
	'current_user'				=> 'Skrypt aktualnie jest wykonywany z prawami nastÄ™pujÄ…cego uÅ¼ytkownika:',
	'your_version'				=> 'Twoja wersja',
	'search_processing'			=> 'Wyszukiwanie, proszÄ™ czekaÄ‡...',
	'url_to_file'				=> 'Adres URL pliku',
	'file'						=> 'Plik'
);
?>