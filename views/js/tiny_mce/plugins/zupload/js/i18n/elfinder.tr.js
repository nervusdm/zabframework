/**
 * Turkish translation
 * @author I.Taskinoglu & A.Kaya <alikaya@armsyazilim.com>
 * @version 2012-06-15
 */
if (elFinder && elFinder.prototype && typeof(elFinder.prototype.i18) == 'object') {
	elFinder.prototype.i18.tr = {
		translator : 'I.Taskinoglu & A.Kaya &lt;alikaya@armsyazilim.com&gt;',
		language   : 'TÃ¼rkÃ§e',
		direction  : 'ltr',
		dateFormat : 'd.m.Y H:i',
		fancyDateFormat : '$1 H:i',
		messages   : {

			/********************************** errors **********************************/
			'error'                : 'Hata',
			'errUnknown'           : 'Bilinmeyen hata.',
			'errUnknownCmd'        : 'Bilinmeyen komut.',
			'errJqui'              : 'GeÃ§ersiz Jquery configurasyonu.',
			'errNode'              : 'DOM objesine ihtiyaÃ§ duyuluyor.',
			'errURL'               : 'GeÃ§ersiz konfigurasyon, URL ayarlanmamÄ±ÅŸ.',
			'errAccess'            : 'EriÅŸim yok.',
			'errConnect'           : 'Sunucya baÄŸlanamadÄ±.',
			'errAbort'             : 'BaÄŸlantÄ± kesildi.',
			'errTimeout'           : 'BaÄŸlantÄ± zaman aÅŸÄ±mÄ±na uÄŸradÄ±.',
			'errNotFound'          : 'Sunucu bulunamadÄ±.',
			'errResponse'          : 'Sunucu cevabÄ± geÃ§ersiz.',
			'errConf'              : 'Sunucu ayarlarÄ± geÃ§ersiz.',
			'errJSON'              : 'PHP JSON modÃ¼lÃ¼ kurulmamÄ±ÅŸ.',
			'errNoVolumes'         : 'Okunabilir fiziksel disk yok.',
			'errCmdParams'         : '"$1" komutu iÃ§in geÃ§ersiz parametre.',
			'errDataNotJSON'       : 'Veri JSON formatÄ±nda deÄŸil.',
			'errDataEmpty'         : 'Veri BoÅŸ.',
			'errCmdReq'            : 'Sunucu isteÄŸi komut gerektiriyor.',
			'errOpen'              : '"$1" aÃ§Ä±lamadÄ±.',
			'errNotFolder'         : 'Obje KlasÃ¶r deÄŸil.',
			'errNotFile'           : 'Obje Dosya deÄŸil.',
			'errRead'              : '"$1" okunamadÄ±.',
			'errWrite'             : '"$1" DosyasÄ±na yazÄ±lamadÄ±.',
			'errPerm'              : 'Yetki Yok.',                        
			'errLocked'            : '"$1" dosyasÄ± kilitli olduÄŸu iÃ§in adÄ± deÄŸiÅŸtirilemedi, taÅŸÄ±ndÄ± veya silindi.',
			'errExists'            : '"$1" adlÄ± dosya var zaten.',
			'errInvName'           : 'GeÃ§ersiz dosya adÄ±.',
			'errFolderNotFound'    : 'Dizin bulunamadÄ±.',
			'errFileNotFound'      : 'Dosya bulunamadÄ±.',
			'errTrgFolderNotFound' : 'Hedef klasÃ¶r ["$1"] bulunamadÄ±.',
			'errPopup'             : 'Ä°nternet gezgininiz aÃ§Ä±lÄ±r pencereleri engellememeli. Ayarlardan izin verip tekrar deneyin.',
			'errMkdir'             : '"$1" dizin oluÅŸturulamadÄ±.',
			'errMkfile'            : '"$1" dosya oluÅŸturulamadÄ±.',
			'errRename'            : '"$1" adÄ± deÄŸiÅŸtirilemedi.',
			'errCopyFrom'          : '"$1" dizininden kopyalamaya izin verilmedi.',
			'errCopyTo'            : '"$1" dizinine kopyalamaya izin verilmedi.',
			'errUploadCommon'      : 'Dosya gÃ¶nderme hatasÄ±.',
			'errUpload'            : '"$1" dosya gÃ¶nderilemedi.',
			'errUploadNoFiles'     : 'GÃ¶ndermek iÃ§in dosya bulunamadÄ±.',
			'errMaxSize'           : 'Data izin verilen boyuttan bÃ¼yÃ¼k.',
			'errFileMaxSize'       : 'Dosya izin verilen boyuttan bÃ¼yÃ¼k.',
			'errUploadMime'        : 'Dosya tipine izin verilmiyor.',
			'errUploadTransfer'    : '"$1" transfer hatasÄ±.', 
			'errSave'              : '"$1" kaydedilemez.',
			'errCopy'              : '"$1" kopylanamaz.',
			'errMove'              : '"$1" taÅŸÄ±namaz.',
			'errCopyInItself'      : '"$1" kendi iÃ§inde kopyalanamaz.',
			'errRm'                : '"$1" silinemedi.',
			'errExtract'           : '"$1" arÅŸivi aÃ§Ä±lamadÄ±.',
			'errArchive'           : 'ArÅŸiv oluÅŸturulamadÄ±.',
			'errArcType'           : 'Desteklenmeyen ArÅŸiv Tipi.',
			'errNoArchive'         : 'Dosya arÅŸiv deÄŸil veya desteklenmiyor.',
			'errCmdNoSupport'      : 'Bu komut desteklenmiyor.',
			'errReplByChild'       : 'KlasÃ¶r â€œ$1â€ iÃ§erdiÄŸi dosyadan dolayÄ± deÄŸiÅŸtirilemedi',
			'errArcSymlinks'       : 'GÃ¼venlik nedeni ile arÅŸiv aÃ§Ä±lamadÄ±.',
			'errArcMaxSize'        : 'ArÅŸiv dosyasÄ± izin verilen maksimum boyutun Ã¼stÃ¼nde.',
			'errResize'            : 'BoyutlandÄ±rÄ±lamadÄ± "$1".',
			'errUsupportType'      : 'Desteklenmeyen Dosya Tipi.',

			/******************************* commands names ********************************/
			'cmdarchive'   : 'ArÅŸiv OluÅŸtur',
			'cmdback'      : 'Geri',
			'cmdcopy'      : 'Kopyala',
			'cmdcut'       : 'Kes',
			'cmddownload'  : 'Ä°ndir',
			'cmdduplicate' : 'DosyayÄ± Ã‡oÄŸalt',
			'cmdedit'      : 'DosyayÄ± DÃ¼zenle',
			'cmdextract'   : 'DosyalarÄ± ArÅŸivden Ã‡Ä±kar',
			'cmdforward'   : 'Ä°leri',
			'cmdgetfile'   : 'DosyayÄ± SeÃ§',
			'cmdhelp'      : 'elFinde HakkÄ±nda',
			'cmdhome'      : 'Ana Sayfa',
			'cmdinfo'      : 'Bilgi',
			'cmdmkdir'     : 'Yeni KlasÃ¶r',
			'cmdmkfile'    : 'Yeni BoÅŸ Dosya',
			'cmdopen'      : 'AÃ§',
			'cmdpaste'     : 'YapÄ±ÅŸtÄ±r',
			'cmdquicklook' : 'Ã–nizleme',
			'cmdreload'    : 'Yenile',
			'cmdrename'    : 'AdÄ±nÄ± DeÄŸiÅŸtir',
			'cmdrm'        : 'Sil',
			'cmdsearch'    : 'Dosya Ara',
			'cmdup'        : 'Ãœst KlasÃ¶re Git',
			'cmdupload'    : 'Dosya GÃ¶nder',
			'cmdview'      : 'AÃ§',
			'cmdresize'    : 'Resmi Yeniden BoyutlandÄ±r',
			'cmdsort'      : 'SÄ±rala',

			/*********************************** buttons ***********************************/
			'btnClose'  : 'Kapat',
			'btnSave'   : 'Kaydet',
			'btnRm'     : 'Sil',
			'btnApply'  : 'Uygula',
			'btnCancel' : 'VazgeÃ§',
			'btnNo'     : 'HayÄ±r',
			'btnYes'    : 'Evet',

			/******************************** notifications ********************************/
			'ntfopen'     : 'KlasÃ¶r AÃ§',
			'ntffile'     : 'Dosya AÃ§',
			'ntfreload'   : 'KlasÃ¶rÃ¼ Yenile',
			'ntfmkdir'    : 'KlasÃ¶r OluÅŸuturuluyor',
			'ntfmkfile'   : 'Dosya OluÅŸturuluyor',
			'ntfrm'       : 'DosyalarÄ± Sil',
			'ntfcopy'     : 'DosyalarÄ± Kopyala',
			'ntfmove'     : 'DosyalarÄ± TaÅŸÄ±',
			'ntfprepare'  : 'Kopyalamak iÃ§in HazÄ±rla',
			'ntfrename'   : 'DosyalarÄ± AdlandÄ±r',
			'ntfupload'   : 'Dosyalar YÃ¼kleniyor',
			'ntfdownload' : 'Dosyalar Ä°ndiriliyor',
			'ntfsave'     : 'Dosyalar Kaydediliyor',
			'ntfarchive'  : 'ArÅŸiv OluÅŸturuluyor',
			'ntfextract'  : 'Dosyalar ArÅŸivde Ã‡Ä±karÄ±lÄ±yor',
			'ntfsearch'   : 'Dosyalar AranÄ±yor',
			'ntfsmth'     : 'BirÅŸeyler YapÄ±lÄ±yor >_<',
			'ntfloadimg'  : 'Resim YÃ¼kleniyor',

			/************************************ dates **********************************/
			'dateUnknown' : 'bilinmiyor',
			'Today'       : 'BugÃ¼n',
			'Yesterday'   : 'DÃ¼n',
			'Jan'         : 'Oca',
			'Feb'         : 'Åžub',
			'Mar'         : 'Mar',
			'Apr'         : 'Nis',
			'May'         : 'May',
			'Jun'         : 'Haz',
			'Jul'         : 'Tem',
			'Aug'         : 'AÄŸu',
			'Sep'         : 'Eyl',
			'Oct'         : 'Ekm',
			'Nov'         : 'Kas',
			'Dec'         : 'Ara',
			'January'     : 'Ocak',
			'February'    : 'Åžubat',
			'March'       : 'Mart',
			'April'       : 'Nisan',
			'May'         : 'MayÄ±s',
			'June'        : 'Haziran',
			'July'        : 'Temmuz',
			'August'      : 'AÄŸustos',
			'September'   : 'EylÃ¼l',
			'October'     : 'Ekim',
			'November'    : 'KasÄ±m',
			'December'    : 'AralÄ±k',
			'Sunday'      : 'Pazar', 
			'Monday'      : 'Pazartesi', 
			'Tuesday'     : 'SalÄ±', 
			'Wednesday'   : 'Ã‡arÅŸamba', 
			'Thursday'    : 'PerÅŸembe', 
			'Friday'      : 'Cuma', 
			'Saturday'    : 'Cumartesi',
			'Sun'         : 'Paz', 
			'Mon'         : 'Pzt', 
			'Tue'         : 'Sal', 
			'Wed'         : 'Ã‡ar', 
			'Thu'         : 'Per', 
			'Fri'         : 'Cum', 
			'Sat'         : 'Cmt',
			/******************************** sort variants ********************************/
			'sortnameDirsFirst' : 'Ada gÃ¶re (Ã¶nce klasÃ¶rler)', 
			'sortkindDirsFirst' : 'TÃ¼re gÃ¶re (Ã¶nce klasÃ¶rler)', 
			'sortsizeDirsFirst' : 'Boyuta gÃ¶re (Ã¶nce klasÃ¶rler)', 
			'sortdateDirsFirst' : 'Tarihe gÃ¶re (Ã¶nce klasÃ¶rler)', 
			'sortname'          : 'Ada gÃ¶re', 
			'sortkind'          : 'TÃ¼re gÃ¶re', 
			'sortsize'          : 'Boyuta gÃ¶re',
			'sortdate'          : 'Tarihe gÃ¶re',

			/********************************** messages **********************************/
			'confirmReq'      : 'Onay gerekli',
			'confirmRm'       : 'DosyalarÄ± silmek istediÄŸinize emin misiniz?<br/>Bu geri alÄ±namaz!',
			'confirmRepl'     : 'Eski dosyalarÄ± yenileriyle deÄŸiÅŸtir?',
			'apllyAll'        : 'TÃ¼mÃ¼nÃ¼ uygula',
			'name'            : 'Ad',
			'size'            : 'Boyut',
			'perms'           : 'Yetkiler',
			'modify'          : 'DeÄŸiÅŸtildi',
			'kind'            : 'TÃ¼r',
			'read'            : 'oku',
			'write'           : 'yaz',
			'noaccess'        : 'yetki yok',
			'and'             : 've',
			'unknown'         : 'bilinmeyen',
			'selectall'       : 'TÃ¼m DosyalarÄ± SeÃ§',
			'selectfiles'     : 'DosyalarÄ± SeÃ§',
			'selectffile'     : 'Ä°lk DosyayÄ± SeÃ§',
			'selectlfile'     : 'Son DosyayÄ± SeÃ§',
			'viewlist'        : 'Liste gÃ¶rÃ¼nÃ¼mÃ¼',
			'viewicons'       : 'Ä°kon gÃ¶rÃ¼nÃ¼mÃ¼',
			'places'          : 'KlasÃ¶rler',
			'calc'            : 'Hesapla', 
			'path'            : 'Dizin',
			'aliasfor'        : 'Takma adÄ± :',
			'locked'          : 'Kilitli',
			'dim'             : 'Ã–lÃ§Ã¼ler',
			'files'           : 'Dosyalar',
			'folders'         : 'KlasÃ¶rler',
			'items'           : 'Nesneler',
			'yes'             : 'evet',
			'no'              : 'hayÄ±r',
			'link'            : 'BaÄŸlantÄ±',
			'searcresult'     : 'Arama SonuÃ§larÄ±',  
			'selected'        : 'ÅžeÃ§ili Nesne',
			'about'           : 'HakkÄ±nda',
			'shortcuts'       : 'KÄ±sayollar',
			'help'            : 'YardÄ±m',
			'webfm'           : 'Dosya YÃ¶neticisi',
			'ver'             : 'Versiyon',
			'protocol'        : 'protocol versiyonu',
			'homepage'        : 'Proje Ana SayfasÄ±',
			'docs'            : 'YardÄ±m',
			'github'          : 'Fork us on Github',
			'twitter'         : 'twittwer da takip et',
			'facebook'        : 'facebookda bize katÄ±l',
			'team'            : 'TakÄ±m',
			'chiefdev'        : 'YapÄ±mcÄ±',
			'developer'       : 'yapÄ±mcÄ±',
			'contributor'     : 'katkÄ±',
			'maintainer'      : 'geliÅŸtirici',
			'translator'      : 'Ã§eviri',
			'icons'           : 'Ä°konlar',
			'dontforget'      : 'Ve... havlunuzu almayÄ± unutmayÄ±n',
			'shortcutsof'     : 'KÄ±sayollar KapalÄ±',
			'dropFiles'       : 'DosyalarÄ± buraya sÃ¼rÃ¼kleyin',
			'or'              : 'veya',
			'selectForUpload' : 'YÃ¼klenecek DosyalarÄ± SeÃ§in',
			'moveFiles'       : 'DosyalarÄ± TaÅŸÄ±',
			'copyFiles'       : 'DosyalarÄ± Kopyala',
			'rmFromPlaces'    : 'KlasÃ¶rlerden Sil',
			'untitled folder' : 'basliksiz_klasor',
			'untitled file.txt' : 'basliksiz_dosya.txt',
			'aspectRatio'     : 'Oran',
			'scale'           : 'Ã–lÃ§ekle',
			'width'           : 'GeniÅŸlik',
			'height'          : 'YÃ¼kseklik',
			'mode'            : 'Mod',
			'resize'          : 'BoyutlandÄ±r',
			'crop'            : 'Kes',
			'rotate'          : 'DÃ¶ndÃ¼r',
			'rotate-cw'       : '90 Derece SaÄŸa DÃ¶ndÃ¼r',
			'rotate-ccw'      : '90 Derece Sola DÃ¶ndÃ¼r',
			'degree'          : 'AÃ§Ä±',

			/********************************** mimetypes **********************************/
			'kindUnknown'     : 'Bilinmiyor',
			'kindFolder'      : 'KlasÃ¶r',
			'kindAlias'       : 'Takma Ad',
			'kindAliasBroken' : 'Bozuk Takma Ad',
			// applications
			'kindApp'         : 'Uygulama',
			'kindPostscript'  : 'Postscript DÃ¶kÃ¼man',
			'kindMsOffice'    : 'Microsoft Office DÃ¶kÃ¼manÄ±',
			'kindMsWord'      : 'Microsoft Word DÃ¶kÃ¼manÄ±',
			'kindMsExcel'     : 'Microsoft Excel DÃ¶kÃ¼manÄ±',
			'kindMsPP'        : 'Microsoft Powerpoint Sunum',
			'kindOO'          : 'Open Office DÃ¶kÃ¼manÄ±',
			'kindAppFlash'    : 'Flash UygulamasÄ±',
			'kindPDF'         : 'Adobe Acrobat (PDF)',
			'kindTorrent'     : 'Bittorrent dosyasÄ±',
			'kind7z'          : '7z arÅŸivi',
			'kindTAR'         : 'TAR arÅŸivi',
			'kindGZIP'        : 'GZIP arÅŸivi',
			'kindBZIP'        : 'BZIP arÅŸivi',
			'kindZIP'         : 'ZIP arÅŸivi',
			'kindRAR'         : 'RAR arÅŸivi',
			'kindJAR'         : 'Java JAR dosyasÄ±',
			'kindTTF'         : 'True Type font',
			'kindOTF'         : 'Open Type font',
			'kindRPM'         : 'RPM paketi',
			// texts
			'kindText'        : 'Text DÃ¶kÃ¼manÄ±',
			'kindTextPlain'   : 'Plain text',
			'kindPHP'         : 'PHP dosyasÄ±',
			'kindCSS'         : 'CSS dosyasÄ±',
			'kindHTML'        : 'HTML dosyasÄ±',
			'kindJS'          : 'Javascript dosyasÄ±',
			'kindRTF'         : 'RTF dosyasÄ±',
			'kindC'           : 'C dosyasÄ±',
			'kindCHeader'     : 'C baÅŸlÄ±k dosyasÄ±',
			'kindCPP'         : 'C++ dosyasÄ±',
			'kindCPPHeader'   : 'C++ baÅŸlÄ±k dosyasÄ±',
			'kindShell'       : 'Unix shell dosyasÄ±',
			'kindPython'      : 'Python dosyasÄ±',
			'kindJava'        : 'Java dosyasÄ±',
			'kindRuby'        : 'Ruby dosyasÄ±',
			'kindPerl'        : 'Perl dosyasÄ±',
			'kindSQL'         : 'SQL dosyasÄ±',
			'kindXML'         : 'XML dosyasÄ±',
			'kindAWK'         : 'AWK dosyasÄ±',
			'kindCSV'         : 'CSV dosyasÄ±',
			'kindDOCBOOK'     : 'Docbook XML dosyasÄ±',
			// images
			'kindImage'       : 'Resim',
			'kindBMP'         : 'BMP Resim',
			'kindJPEG'        : 'JPEG Resim',
			'kindGIF'         : 'GIF Resim',
			'kindPNG'         : 'PNG Resim',
			'kindTIFF'        : 'TIFF Resim',
			'kindTGA'         : 'TGA Resim',
			'kindPSD'         : 'Adobe Photoshop Resim',
			'kindXBITMAP'     : 'X bitmap Resim',
			'kindPXM'         : 'Pixelmator Resim',
			// media
			'kindAudio'       : 'Ses DosyasÄ±',
			'kindAudioMPEG'   : 'MPEG ses',
			'kindAudioMPEG4'  : 'MPEG-4 ses',
			'kindAudioMIDI'   : 'MIDI ses',
			'kindAudioOGG'    : 'Ogg Vorbis ses',
			'kindAudioWAV'    : 'WAV ses',
			'AudioPlaylist'   : 'MP3 Ã‡alma Listesi',
			'kindVideo'       : 'Video DosyasÄ±',
			'kindVideoDV'     : 'DV video',
			'kindVideoMPEG'   : 'MPEG video',
			'kindVideoMPEG4'  : 'MPEG-4 video',
			'kindVideoAVI'    : 'AVI video',
			'kindVideoMOV'    : 'Quick Time video',
			'kindVideoWM'     : 'Windows Media video',
			'kindVideoFlash'  : 'Flash video',
			'kindVideoMKV'    : 'Matroska video',
			'kindVideoOGG'    : 'Ogg video'
		}
	}
}