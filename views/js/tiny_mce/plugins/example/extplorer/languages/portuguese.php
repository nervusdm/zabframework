<?php

// Portuguese Language Module for eXtplorer (translated by Paulo Brito, geral@oitavaesfera.com, http://www.oitavaesfera.com)
global $_VERSION;

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "d/m/y H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "ERRO(S)",
	"back"			=> "Voltar",
	
	// root
	"home"			=> "A directoria inicial nÃ£o existe, verifique as configuraÃ§Ãµes.",
	"abovehome"		=> "A directoria actual nÃ£o pode estar acima da directoria inicial.",
	"targetabovehome"	=> "A directoria alvo nÃ£o pode estar acima da directoria principal.",
	
	// exist
	"direxist"		=> "Esta directoria nÃ£o existe.",
	//"filedoesexist"	=> "Este ficheiro jÃ¡ existe.",
	"fileexist"		=> "Este ficheiro nÃ£o existe.",
	"itemdoesexist"		=> "Este item jÃ¡ existe.",
	"itemexist"		=> "Este item nÃ£o existe.",
	"targetexist"		=> "A directoria nÃ£o existe.",
	"targetdoesexist"	=> "A directoria jÃ¡ existe.",
	
	// open
	"opendir"		=> "NÃ£o Ã© possÃ­vel abrir a directoria.",
	"readdir"		=> "NÃ£o Ã© possÃ­vel ler a directoria.",
	
	// access
	"accessdir"		=> "NÃ£o estÃ¡ autorizado a aceder a esta directoria.",
	"accessfile"		=> "NÃ£o estÃ¡ autorizado a aceder a este ficheiro.",
	"accessitem"		=> "NÃ£o estÃ¡ autorizado a aceder a este item.",
	"accessfunc"		=> "NÃ£o estÃ¡ autorizado a usar esta funÃ§Ã£o.",
	"accesstarget"		=> "NÃ£o estÃ¡ autorizado a aceder Ã  directoria.",
	
	// actions
	"permread"		=> "NÃ£o foi possÃ­vel visualizar as permissÃµes.",
	"permchange"		=> "NÃ£o foi possÃ­vel modificar as permissÃµes.",
	"openfile"		=> "NÃ£o foi possÃ­vel abrir o ficheiro.",
	"savefile"		=> "NÃ£o foi possÃ­vel gravar o ficheiro.",
	"createfile"		=> "NÃ£o foi possÃ­vel criar o ficheiro.",
	"createdir"		=> "NÃ£o foi possÃ­vel criar a directoria.",
	"uploadfile"		=> "NÃ£o foi possÃ­vel o envio do ficheiro.",
	"copyitem"		=> "NÃ£o foi possÃ­vel a cÃ³pia.",
	"moveitem"		=> "NÃ£o foi possÃ­vel mover.",
	"delitem"		=> "NÃ£o foi possÃ­vel apagar o ficheiro.",
	"chpass"		=> "NÃ£o foi possÃ­vel modificar a password.",
	"deluser"		=> "NÃ£o foi possÃ­vel remover o utilizador.",
	"adduser"		=> "NÃ£o foi possÃ­vel adicionar o utilizador.",
	"saveuser"		=> "NÃ£o foi possÃ­vel gravar o utilizador.",
	"searchnothing"		=> "Deve ser inserido um valor para ser feita a procura.",
	
	// misc
	"miscnofunc"		=> "FunÃ§Ã£o nÃ£o disponÃ­vel.",
	"miscfilesize"		=> "O ficheiro ultrapassa o tamanho mÃ¡ximo permitido.",
	"miscfilepart"		=> "O ficheiro foi apenas enviado parcialmente.",
	"miscnoname"		=> "Deve ser fornecido um nome.",
	"miscselitems"		=> "NÃ£o foi seleccionado qualquer item.",
	"miscdelitems"		=> "Tem certeza que deseja apagar este(s) {0} item(s)?",
	"miscdeluser"		=> "Tem certeza que deseja apagar o utilizador '{0}'?",
	"miscnopassdiff"	=> "A nova password nÃ£o Ã© diferente da actual.",
	"miscnopassmatch"	=> "As passwords nÃ£o sÃ£o iguais.",
	"miscfieldmissed"	=> "Um campo importante estÃ¡ vazio.",
	"miscnouserpass"	=> "Username ou password incorrectos.",
	"miscselfremove"	=> "NÃ£o pode remover-se a si prÃ³prio.",
	"miscuserexist"		=> "O utilizador jÃ¡ existe.",
	"miscnofinduser"	=> "NÃ£o foi possÃ­vel encontrar o utilizador.",
	"extract_noarchive" => "O Ficheiro nÃ£o Ã© um arquivo de extracÃ§Ã£o.",
	"extract_unknowntype" => "Tipo de Arquivo Desconhecido",
	
	'chmod_none_not_allowed' => 'Changing Permissions to <none> is not allowed',
	'archive_dir_notexists' => 'The Save-To Directory you have specified does not exist.',
	'archive_dir_unwritable' => 'Please specify a writable directory to save the archive to.',
	'archive_creation_failed' => 'Failed saving the Archive File'
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "MODIFICAR PERMISSÃ•ES",
	"editlink"		=> "EDITAR",
	"downlink"		=> "DOWNLOAD",
	"uplink"		=> "CIMA",
	"homelink"		=> "PÃGINA INICIAL",
	"reloadlink"		=> "ACTUALIZAR",
	"copylink"		=> "COPIAR",
	"movelink"		=> "MOVER",
	"dellink"		=> "APAGAR",
	"comprlink"		=> "ARQUIVO",
	"adminlink"		=> "ADMIN",
	"logoutlink"		=> "LOGOUT",
	"uploadlink"		=> "UPLOAD",
	"searchlink"		=> "PROCURAR",
	"extractlink"	=> "Extrair Arquivo",
	'chmodlink'		=> 'Modificar as PermissÃµes (chmod) (Pasta/Ficheiro(s))', // new mic
	'mossysinfolink'	=> 'eXtplorer InformaÃ§Ã£o do Sistema (eXtplorer, Server, PHP, mySQL)', // new mic
	'logolink'		=> 'Ir para o site do eXtplorer (nova janela)', // new mic
	
	// list
	"nameheader"		=> "Nome",
	"sizeheader"		=> "Tamanho",
	"typeheader"		=> "Tipo",
	"modifheader"		=> "Modificado",
	"permheader"		=> "PermissÃµes",
	"actionheader"		=> "AcÃ§Ãµes",
	"pathheader"		=> "Caminho",
	
	// buttons
	"btncancel"		=> "Cancelar",
	"btnsave"		=> "Gravar",
	"btnchange"		=> "Modificar",
	"btnreset"		=> "Reiniciar",
	"btnclose"		=> "Fechar",
	"btncreate"		=> "Criar",
	"btnsearch"		=> "Procurar",
	"btnupload"		=> "Upload",
	"btncopy"		=> "Copiar",
	"btnmove"		=> "Mover",
	"btnlogin"		=> "Login",
	"btnlogout"		=> "Logout",
	"btnadd"		=> "Novo",
	"btnedit"		=> "Editar",
	"btnremove"		=> "Remover",
	
	// user messages, new in eXtplorer 1.3.0
	'renamelink'	=> 'RENOMEAR',
	'confirm_delete_file' => 'Tem a certeza que deseja apagar este ficheiro? \\n%s',
	'success_delete_file' => 'Item(s) apagado com sucesso.',
	'success_rename_file' => 'A directoria/ficheiro %s foi renomeada com sucesso para %s.',
	
	
	// actions
	"actdir"		=> "Directoria",
	"actperms"		=> "Modificar permissÃµes",
	"actedit"		=> "Editar ficheiro",
	"actsearchresults"	=> "Resultados da procura",
	"actcopyitems"		=> "Copiar item(s)",
	"actcopyfrom"		=> "Copiar de /%s para /%s ",
	"actmoveitems"		=> "Mover item(s)",
	"actmovefrom"		=> "Mover de /%s para /%s ",
	"actlogin"		=> "Login",
	"actloginheader"	=> "FaÃ§a o login para usar o QuiXplorer",
	"actadmin"		=> "AdministraÃ§Ã£o",
	"actchpwd"		=> "Modificar password",
	"actusers"		=> "utilizadores",
	"actarchive"		=> "Arquivo de item(s)",
	"actupload"		=> "Upload de ficheiro(s)",
	
	// misc
	"miscitems"		=> "Item(s)",
	"miscfree"		=> "Livres",
	"miscusername"		=> "Username",
	"miscpassword"		=> "Password",
	"miscoldpass"		=> "Password antiga",
	"miscnewpass"		=> "Nova password",
	"miscconfpass"		=> "Confirmar password",
	"miscconfnewpass"	=> "Confirmar a nova password",
	"miscchpass"		=> "Modificar password",
	"mischomedir"		=> "Directoria inicial",
	"mischomeurl"		=> "URL da pÃ¡gina inicial",
	"miscshowhidden"	=> "Mostrar items escondidos",
	"mischidepattern"	=> "Esconder esquema",
	"miscperms"		=> "PermissÃµes",
	"miscuseritems"		=> "(nome, directoria inicial, mostrar items escondidos, permissÃµes, activo)",
	"miscadduser"		=> "novo utilizador",
	"miscedituser"		=> "editar utilizador '%s'",
	"miscactive"		=> "Activo",
	"misclang"		=> "Linguagem",
	"miscnoresult"		=> "NÃ£o hÃ¡ resultados disponÃ­veis.",
	"miscsubdirs"		=> "Procurar subdirectorias",
	"miscpermnames"		=> array("Ver apenas","Modificar","Alterar password","Modificar a password",
					"Administrador"),
	"miscyesno"		=> array("Sim","NÃ£o","Y","N"),
	"miscchmod"		=> array("ProprietÃ¡rio", "Grupo", "PÃºblico"),
	// from here all new by mic
	'miscowner'			=> 'ProprietÃ¡rio',
	'miscownerdesc'		=> '<strong>DesccriÃ§Ã£o:</strong><br />Utilizador (UID) /<br />Grupo (GID)<br />PermissÃµes Actuais:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> 'eXtplorer Info Sistema',
	'sisysteminfo'		=> 'Info Sistema',
	'sibuilton'			=> 'Sistema Operativo',
	'sidbversion'		=> 'VersÃ£o da Base de Dados (MySQL)',
	'siphpversion'		=> 'VersÃ£o de PHP',
	'siphpupdate'		=> 'INFORMAÃ‡ÃƒO: <span style="color: red;">A versÃ£o de PHP usada <strong>nÃ£o estÃ¡</strong> actualizada!</span><br />Para garantir todas as funÃ§Ãµes e possibilidades do eXtplorer e dos addons,<br />deve estar a usar pelo menos a <strong>VersÃ£o 4.3 do PHP</strong>!',
	'siwebserver'		=> 'Servidor Web',
	'siwebsphpif'		=> 'Servidor Web - PHP Interface',
	'simamboversion'	=> 'eXtplorer VersÃ£o',
	'siuseragent'		=> 'VersÃ£o do Browser',
	'sirelevantsettings' => 'ConfiguraÃ§Ãµes de PHP Importantes',
	'sisafemode'		=> 'Safe Mode',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'Erros de PHP',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'Datei Uploads',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Registar Globais',
	'sioutputbuf'		=> 'Output Buffer',
	'sisesssavepath'	=> 'Session Savepath',
	'sisessautostart'	=> 'Session auto start',
	'sixmlenabled'		=> 'XML enabled',
	'sizlibenabled'		=> 'ZLIB enabled',
	'sidisabledfuncs'	=> 'Non enabled functions',
	'sieditor'			=> 'Editor WYSIWYG',
	'siconfigfile'		=> 'Configuration File',
	'siphpinfo'			=> 'PHP Info',
	'siphpinformation'	=> 'PHP Information',
	'sipermissions'		=> 'Permissions',
	'sidirperms'		=> 'Directory Permissions',
	'sidirpermsmess'	=> 'Para ter certeza que todas as funÃ§Ãµes e possibilidades do eXtplorer estÃ£o a funcionar correctamente, as seguintes pastas devem ter a permissÃ£o de escrita [chmod 0777]',
	'sionoff'			=> array( 'On', 'Off' ),
	
	'extract_warning' => "Deseja mesmo extrair este ficheiro? Aqui?\\nIsto irÃ¡ apagar ficheiros existentes se nÃ£o for usado com cuidado!",
	'extract_success' => "A extracÃ§Ã£o foi um sucesso",
	'extract_failure' => "A extracÃ§Ã£o falhou",
	
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
