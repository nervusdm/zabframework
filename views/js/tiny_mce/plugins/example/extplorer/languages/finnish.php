<?php
// Finnish language file for eXtplorer 2.1.0 Beta2 UTF-8
// Dated 21.06.2009
// Author: Markku Suominen / admin@joomlaportal.fi
// Author/Editor: Sami Haaranen / mortti@joomlaportal.fi
// Finnish Joomla translation team, http://www.joomlaportal.fi
global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "d.m.Y H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "virheet",
	"message"			=> "viesti(Ã¤)",
	"back"			=> "Palaa",

	// root
	"home"			=> "Kotihakemistoa ei ole, tarkista asetuksesi.",
	"abovehome"		=> "Nykyinen hakemisto ei saa olla kotihakemiston ylÃ¤puolella.",
	"targetabovehome"	=> "Kohdehakemisto ei saa olla kotihakemiston ylÃ¤puolella.",

	// exist
	"direxist"		=> "Hakemistoa ei ole.",
	//"filedoesexist"	=> "This file already exists.",
	"fileexist"		=> "Tiedostoa ei ole.",
	"itemdoesexist"		=> "Nimike on jo olemassa.",
	"itemexist"		=> "Nimike ei ole olemassa.",
	"targetexist"		=> "Kohdehakemistoa ei ole.",
	"targetdoesexist"	=> "Kohdenimike on jo olemassa.",

	// open
	"opendir"		=> "Hakemistoa ei voi avata.",
	"readdir"		=> "Hakemistoa ei voi lukea.",

	// access
	"accessdir"		=> "Sinulla ei ole valtuuksia tÃ¤hÃ¤n hakemistoon.",
	"accessfile"		=> "Sinulla ei ole valtuuksia tÃ¤hÃ¤n tiedostoon.",
	"accessitem"		=> "Sinulla ei ole valtuuksia tÃ¤hÃ¤n nimikkeeseen.",
	"accessfunc"		=> "Sinulla ei ole valtuuksia tÃ¤hÃ¤n toimintoon.",
	"accesstarget"		=> "Sinulla ei ole valtuuksia kohdehakemistoon.",

	// actions
	"permread"		=> "KÃ¤yttÃ¶oikeuksien luku epÃ¤onnistui.",
	"permchange"		=> "KÃ¤yttÃ¶oikeuksien muutos epÃ¤onnistui.",
	"openfile"		=> "Tiedoston avaaminen epÃ¤onnistui.",
	"savefile"		=> "Tiedoston tallennus epÃ¤onnistui.",
	"createfile"		=> "Tiedoston luonti epÃ¤onnistui.",
	"createdir"		=> "Hakemiston luonti epÃ¤onnistui.",
	"uploadfile"		=> "Tiedoston vienti palvelimelle epÃ¤onnistui.",
	"copyitem"		=> "Kopiointi epÃ¤onnistui.",
	"moveitem"		=> "Siirto epÃ¤onnistui.",
	"delitem"		=> "Poisto epÃ¤onnistui.",
	"chpass"		=> "Salasanan vaihto epÃ¤onnistui.",
	"deluser"		=> "KÃ¤yttÃ¤jÃ¤n poisto epÃ¤onnistui.",
	"adduser"		=> "KÃ¤yttÃ¤jÃ¤n lisÃ¤ys epÃ¤onnistui.",
	"saveuser"		=> "KÃ¤yttÃ¤jÃ¤n tallennus epÃ¤onnistui.",
	"searchnothing"		=> "Sinun pitÃ¤Ã¤ antaa jotain etsittÃ¤vÃ¤Ã¤.",

	// misc
	"miscnofunc"		=> "Toiminto ei ole k&auml;ytettÃ¤viss&auml;.",
	"miscfilesize"		=> "Tiedosto koko ylitt&auml;&auml; suurimman sallitun arvon.",
	"miscfilepart"		=> "Tiedoston vienti palvelimelle onnistui vain osittain.",
	"miscnoname"		=> "Anna nimi.",
	"miscselitems"		=> "Et ole valinnut yht&auml;&auml;n nimikett&auml;.",
	"miscdelitems"		=> "Haluatko varmasti poistaa n&auml;m&auml; {0} nimike(tt&auml;)?",
	"miscdeluser"		=> "Haluatko varmasti poistaa k&auml;ytt&auml;j&auml;n '{0}'?",
	"miscnopassdiff"	=> "Uusi salasana ei eroa nykyisest&auml;.",
	"miscnopassmatch"	=> "Salasanat eivÃ¤t t&auml;sm&auml;&auml;.",
	"miscfieldmissed"	=> "Ohitit t&auml;rke&auml;n kent&auml;n.",
	"miscnouserpass"	=> "K&auml;ytt&auml;j&auml;nimi tai salasana on v&auml;&auml;r&auml;.",
	"miscselfremove"	=> "Et voi poistaa omaa tunnustasi.",
	"miscuserexist"		=> "K&auml;ytt&auml;j&auml; on jo olemassa.",
	"miscnofinduser"	=> "K&auml;ytt&auml;j&auml;&auml; ei l&oumlydy.",
	"extract_noarchive" => "Tiedostomuoto ei ole sellainen joka voidaan purkaa.",
	"extract_unknowntype" => "Tuntematon arkistointimuoto",
	
	'chmod_none_not_allowed' => 'KÃ¤yttÃ¶oikeuksien muutos <none> ei ole sallittu',
	'archive_dir_notexists' => 'Tallennuksiin mÃ¤Ã¤riteltyÃ¤ hakemistoa ei ole olemassa.',
	'archive_dir_unwritable' => 'MÃ¤Ã¤rittele kirjoitettava hakemisto tallentaaksesi arkisto sinne.',
	'archive_creation_failed' => 'Arkistotiedoston tallennus epÃ¤onnistui'
	
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "Muuta oikeuksia",
	"editlink"		=> "Muokkaa",
	"downlink"		=> "Lataa",
	"uplink"		=> "YlÃ¶s",
	"homelink"		=> "Juurihakemisto",
	"reloadlink"	=> "PÃ¤ivitÃ¤",
	"copylink"		=> "Kopioi",
	"movelink"		=> "SiirrÃ¤",
	"dellink"		=> "Poista",
	"comprlink"		=> "Arkistoi",
	"adminlink"		=> "Hallinta",
	"logoutlink"	=> "Poistu",
	"uploadlink"	=> "Vie palvelimelle",
	"searchlink"	=> "Etsi",
	'difflink'      => 'Vertaa',
	"extractlink"	=> "Pura arkistotiedosto",
	'chmodlink'		=> 'Muuta (chmod) oikeudet (kansio/tiedosto(t))', // new mic
	'mossysinfolink'	=> 'eXtplorer jÃ¤rjestelmÃ¤tiedot (eXtplorer, palvelin, PHP, mySQL)', // new mic
	'logolink'		=> 'Siirry eXtplorer sivustolle (uusi ikkuna)', // new mic

	// list
	"nameheader"		=> "Nimi",
	"sizeheader"		=> "Koko",
	"typeheader"		=> "Tyyppi",
	"modifheader"		=> "Muutettu",
	"permheader"		=> "Oikeudet",
	"actionheader"		=> "Toiminnot",
	"pathheader"		=> "Polku",

	// buttons
	"btncancel"		=> "Peru",
	"btnsave"		=> "Tallenna",
	"btnchange"		=> "Muuta",
	"btnreset"		=> "Peru",
	"btnclose"		=> "Sulje",
	"btncreate"		=> "Luo",
	"btnsearch"		=> "Etsi",
	"btnupload"		=> "Vie palvelimelle",
	"btncopy"		=> "Kopioi",
	"btnmove"		=> "SiirrÃ¤",
	"btnlogin"		=> "Kirjaudu",
	"btnlogout"		=> "Poistu",
	"btnadd"		=> "LisÃ¤Ã¤",
	"btnedit"		=> "Muokkaa",
	"btnremove"		=> "Poista",
	"btndiff"       => "Vertaa",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'	=> 'NimeÃ¤',
	'confirm_delete_file' => 'Haluatko varmasti poistaa tiedoston? <br />%s',
	'success_delete_file' => 'Nimike poistettu.',
	'success_rename_file' => 'Hakemisto/tiedosto  %s nimettiin nimellÃ¤ %s.',
	
	// actions
	"actdir"		=> "Hakemisto",
	"actperms"		=> "Muuta oikeuksia",
	"actedit"		=> "Muokkaa tiedostoa",
	"actsearchresults"	=> "Haun tulokset",
	"actcopyitems"		=> "Kopioi nimikkeet",
	"actcopyfrom"		=> "Kopioi kohteesta /%s kohteeseen /%s ",
	"actmoveitems"		=> "SiirrÃ¤ nimikkeet",
	"actmovefrom"		=> "SiirrÃ¤ kohteesta /%s kohteeseen /%s ",
	"actlogin"		=> "Kirjaudu",
	"actloginheader"	=> "Kirjaudu kÃ¤yttÃ¤Ã¤ksesi eXtploreria",
	"actadmin"		=> "Hallinta",
	"actchpwd"		=> "Muuta salasana",
	"actusers"		=> "KÃ¤yttÃ¤jÃ¤t",
	"actarchive"		=> "Arkistoi nimikkeet",
	"actupload"		=> "Vie tiedostot palvelimelle",

	// misc
	"miscitems"		=> "Nimike(ttÃ¤)",
	"miscfree"		=> "Vapaana",
	"miscusername"		=> "KÃ¤yttÃ¤jÃ¤tunnus",
	"miscpassword"		=> "Salasana",
	"miscoldpass"		=> "Vanha salasana",
	"miscnewpass"		=> "Uusi salasana",
	"miscconfpass"		=> "Vahvista salasana",
	"miscconfnewpass"	=> "Vahvista uusi salasana",
	"miscchpass"		=> "Muuta salasana",
	"mischomedir"		=> "Kotihakemisto",
	"mischomeurl"		=> "Koti URL",
	"miscshowhidden"	=> "NÃ¤ytÃ¤ piilotetut nimikkeet",
	"mischidepattern"	=> "Piilota kuvio",
	"miscperms"		=> "Oikeudet",
	"miscuseritems"		=> "(nimi, kotihakemisto, nÃ¤ytÃ¤ piilotetut nimikkeet, oikeudet, aktiivi)",
	"miscadduser"		=> "lisÃ¤Ã¤ kÃ¤yttÃ¤jÃ¤",
	"miscedituser"		=> "muokkaa kÃ¤yttÃ¤jÃ¤Ã¤ '%s'",
	"miscactive"		=> "Aktiivi",
	"misclang"		=> "Kieli",
	"miscnoresult"		=> "Ei tuloksia.",
	"miscsubdirs"		=> "Etsi alahakemistoista",
	"miscpermnames"		=> array("Vain katselu","Muokkaa","Muuta salasana","Muokkaa ja muuta salasana",
					"Hallinta"),
	"miscyesno"		=> array("KyllÃ¤","Ei","K","E"),
	"miscchmod"		=> array("Omistaja", "RyhmÃ¤", "Julkinen"),
	'misccontent'    => "TiedostosisÃ¤ltÃ¶",

	// from here all new by mic
	'miscowner'			=> 'Omistaja',
	'miscownerdesc'		=> '<strong>Kuvaus:</strong><br />KÃ¤yttÃ¤jÃ¤ (UID) /<br />RyhmÃ¤ (GID)<br />Nykyiset oikeudet:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> "eXtplorer jÃ¤rjestelmÃ¤n tiedot",
	'sisysteminfo'		=> 'JÃ¤rjestelmÃ¤n tiedot',
	'sibuilton'			=> 'KÃ¤yttÃ¶jÃ¤rjestelmÃ¤',
	'sidbversion'		=> 'Tietokannan versio (MySQL)',
	'siphpversion'		=> 'PHP versio',
	'siphpupdate'		=> 'TIETOJA: <span style="color: red;">KÃ¤yttÃ¤mÃ¤si PHP-versio <strong>ei ole </strong> riittÃ¤vÃ¤n uusi</span><br />KÃ¤yttÃ¤Ã¤ksesi tuotteen toimintoja ja lisÃ¤osia,<br />vanhin hyvÃ¤ksytty versio on <strong>PHP 4.3</strong>!',
	'siwebserver'		=> 'Web-palvelin',
	'siwebsphpif'		=> 'Web-palvelin - PHP rajapinta',
	'simamboversion'	=> 'eXtplorer versio',
	'siuseragent'		=> 'Selaimen versio',
	'sirelevantsettings' => 'TÃ¤rkeÃ¤t PHP-asetukset',
	'sisafemode'		=> 'Safe Mode',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'PHP-virheet',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'Tiedostojen lataaminen palvelimelle',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'Output Buffer',
	'sisesssavepath'	=> 'Istunnon tallennuspolku',
	'sisessautostart'	=> 'Istunnon automaattinen kÃ¤ynnistys',
	'sixmlenabled'		=> 'XML kÃ¤ytÃ¶ssÃ¤',
	'sizlibenabled'		=> 'ZLIB kÃ¤ytÃ¶ssÃ¤',
	'sidisabledfuncs'	=> 'Estetyt funktiot',
	'sieditor'			=> 'WYSIWYG-editori',
	'siconfigfile'		=> 'Asetustiedosto',
	'siphpinfo'			=> 'PHP-tiedot',
	'siphpinformation'	=> 'PHP-tiedot',
	'sipermissions'		=> 'KÃ¤yttÃ¶oikeudet',
	'sidirperms'		=> 'Hakemiston kÃ¤yttÃ¶oikeudet',
	'sidirpermsmess'	=> 'Jotta kaikki tuotteen toiminnot ja funktiot toimivat oikein, seuraavien kansioihin tulee voida kirjoittaa [chmod 0777]',
	'sionoff'			=> array( 'PÃ¤Ã¤llÃ¤', 'Pois' ),
	
	'extract_warning' => "Haluatko purkaa tiedoston tÃ¤hÃ¤n hakemistoon?<br />KÃ¤ytÃ¤ toimintoa varoen, sillÃ¤ olemassa olevat tiedostot ylikirjoitetaan arkistotiedoston tiedostoilla.",
	'extract_success' => "Tiedoston purkaminen onnistui",
	'extract_failure' => "Purkaminen epÃ¤onnistui",
	
	'overwrite_files' => 'Korvaa nykyiset tiedostot?',
	"viewlink"		=> "NÃ¤ytÃ¤",
	"actview"		=> "NÃ¤ytetÃ¤Ã¤n tiedoston sisÃ¤ltÃ¶",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'Kohdista toiminto myÃ¶s alihakemistoihin?',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'Tarkista viimeisin versio',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'NimeÃ¤ tiedosto tai hakemisto...',
	'newname'		=>	'Uusi nimi',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'Palaa hakemistoon tallentamisen jÃ¤lkeen?',
	'line'		=> 	'Rivi',
	'column'	=>	'Sarake',
	'wordwrap'	=>	'RivitÃ¤: (vain IE)',
	'copyfile'	=>	'Kopioi tiedosto tÃ¤lle nimelle',
	
	// Bookmarks
	'quick_jump' => 'Siirry kohteeseen',
	'already_bookmarked' => 'Hakemisto on jo kirjanmerkitty',
	'bookmark_was_added' => 'Hakemisto lisÃ¤ttiin kirjanmerkki listaan.',
	'not_a_bookmark' => 'Hakemisto ei ole kirjanmerkki.',
	'bookmark_was_removed' => 'Hakemisto poistettiin kirjanmerkki listasta.',
	'bookmarkfile_not_writable' => "Kirjanmerkkiin liittyvÃ¤ toiminto %s epÃ¤onnistui.\n Kirjanmerkkitiedosto '%s' \n on kirjoitussuojattu.",
	
	'lbl_add_bookmark' => 'LisÃ¤Ã¤ hakemisto kirjanmerkkeihin',
	'lbl_remove_bookmark' => 'Poista hakemisto kirjanmerkki listasta',
	
	'enter_alias_name' => 'Kirjoita kirjanmerkin alias',
	
	'normal_compression' => 'normaali pakkaus',
	'good_compression' => 'parempi pakkaus',
	'best_compression' => 'paras pakkaus',
	'no_compression' => 'ei pakkausta',
	
	'creating_archive' => 'Luodaan arkistotiedosto ...',
	'processed_x_files' => 'KÃ¤yty lÃ¤pi %s / %s tiedostoa',
	
	'ftp_header' => 'Paikallinen FTP-autentikointi',
	'ftp_login_lbl' => 'Anna FTP-palvelimen vaatimat kirjatumistiedot',
	'ftp_login_name' => 'FTP kÃ¤yttÃ¤jÃ¤tunnus',
	'ftp_login_pass' => 'FTP salasana',
	'ftp_hostname_port' => 'FTP-palvelimen nimi ja portti <br />(portti on valinnainen)',
	'ftp_login_check' => 'Tarkistetaan FTP-yhteyttÃ¤...',
	'ftp_connection_failed' => "FTP-palvelimeen ei saada yhteyttÃ¤. \nTarkista ettÃ¤ FTP-palvelin on toiminnassa.",
	'ftp_login_failed' => "FTP-kirjautuminen ei onnistunut. Tarkista kÃ¤yttÃ¤jÃ¤tunnus ja salasana ja yritÃ¤ uudelleen.",
		
	'switch_file_mode' => 'Nykyinen tila: <strong>%s</strong>. Voit vaihtaa tilaan %s.',
	'symlink_target' => 'Symbolisen linkin kohde',
	
	"permchange"		=> "CHMOD-toiminto onnistui:",
	"savefile"		=> "Tiedosto tallennettiin.",
	"moveitem"		=> "Siirto onnistui.",
	"copyitem"		=> "Kopiointi onnistui.",
	'archive_name' 	=> 'Arkistotiedoston nimi',
	'archive_saveToDir' 	=> 'Tallenna arkistotiedosto tÃ¤hÃ¤n hakemistoon',
	
	'editor_simple'	=> 'Yksinkertainen editori -tila',
	'editor_syntaxhighlight'	=> 'Syntaksin korostus -tila',

	'newlink'	=> 'Uusi tiedosto/hakemisto',
	'show_directories' => 'NÃ¤ytÃ¤ hakemistot',
	'actlogin_success' => 'Kirjautuminen onnistui',
	'actlogin_failure' => 'Kirjautuminen epÃ¤onnistui, yritÃ¤ uudelleen.',
	'directory_tree' => 'Hakemistopuu',
	'browsing_directory' => 'Selataan hakemistoa',
	'filter_grid' => 'Suodatin',
	'paging_page' => 'Sivu',
	'paging_of_X' => '/ {0}',
	'paging_firstpage' => 'EnsimmÃ¤inen sivu',
	'paging_lastpage' => 'Viimeinen sivu',
	'paging_nextpage' => 'Seuraava sivu',
	'paging_prevpage' => 'Edellinen sivu',
	
	'paging_info' => 'NÃ¤ytetÃ¤Ã¤n nimikkeet {0} - {1} / {2}',
	'paging_noitems' => 'NÃ¤ytettÃ¤viÃ¤ nimikkeitÃ¤ ei ole',
	'aboutlink' => 'Tietoja...',
	'password_warning_title' => 'TÃ¤rkeÃ¤Ã¤ - muuta salasanasi',
	'password_warning_text' => 'Olet kirjautunut eXtplorer-sovellukseen oletuskÃ¤yttÃ¤jÃ¤tilin (kÃ¤yttÃ¤jÃ¤tunnus admin, salasana admin) avulla. eXtplorerin vÃ¤Ã¤rinkÃ¤yttÃ¶ on mahdollista, joten vaihda admin-kÃ¤yttÃ¤jÃ¤n salasana vÃ¤littÃ¶mÃ¤sti.',
	'change_password_success' => 'Salasanasi on muutettu',
	'success' => 'Onnistui',
	'failure' => 'EpÃ¤onnistui',
	'dialog_title' => 'Web-sivuston valintaikkuna',
	'upload_processing' => 'Lataus kÃ¤ynnissÃ¤...',
	'upload_completed' => 'Lataus onnistui.',
	'acttransfer' => 'SiirrÃ¤ toiselta palvelimelta',
	'transfer_processing' => 'Siirto toiselta palvelimelta kÃ¤ynnissÃ¤...',
	'transfer_completed' => 'Siirto suoritettu.',
	'max_file_size' => 'Suurin tiedosto koko',
	'max_post_size' => 'Suurin lataus raja',
	'done' => 'Valmis.',
	'permissions_processing' => 'KÃ¤yttÃ¶oikeuksien lisÃ¤ys kÃ¤ynnissÃ¤...',
	'archive_created' => 'Arkistotiedosto on luotu',
	'save_processing' => 'Tallennetaan tiedostoa...',
	'current_user' => 'TÃ¤mÃ¤ skripti ajetaan seuraavien kÃ¤yttÃ¤jien kÃ¤yttÃ¶oikeuksilla:',
	'your_version' => 'Versiosi',
	'search_processing' => 'EtsitÃ¤Ã¤n...',
	'url_to_file' => 'Tiedoston URL',
	'file' => 'Tiedosto'
	
);
?>
