/**
 * Japanese translation
 * @author Tomoaki Yoshida <info@yoshida-studio.jp>, Naoki Sawada <hypweb@gmail.com>
 * @version 2012-08-15
 */
if (elFinder && elFinder.prototype && typeof(elFinder.prototype.i18) == 'object') {
	elFinder.prototype.i18.jp = {
		translator : 'Tomoaki Yoshida &lt;info@yoshida-studio.jp&gt;',
		language   : 'Japanese',
		direction  : 'ltr',
		dateFormat : 'Y/m/d h:i A', // 2012/04/11 05:27 PM
		fancyDateFormat : '$1 h:i A', // will produce smth like: ä»Šæ—¥ 12:25 PM
		messages   : {
			
			/********************************** errors **********************************/
			'error'                : 'ã‚¨ãƒ©ãƒ¼',
			'errUnknown'           : 'ä¸æ˜Žãªã‚¨ãƒ©ãƒ¼ã§ã™',
			'errUnknownCmd'        : 'ä¸æ˜Žãªã‚³ãƒžãƒ³ãƒ‰ã§ã™',
			'errJqui'              : 'ç„¡åŠ¹ãªjQuery UI ã‚³ãƒ³ãƒ•ã‚£ã‚°ãƒ¬ãƒ¼ã‚·ãƒ§ãƒ³ã§ã™ã€‚ã‚»ãƒ¬ã‚¯ã‚¿ãƒ–ãƒ«ã‚³ãƒ³ãƒãƒ¼ãƒãƒ³ãƒˆã€ãƒ‰ãƒ©ãƒƒã‚¬ãƒ–ãƒ«ã‚³ãƒ³ãƒãƒ¼ãƒãƒ³ãƒˆã€ãƒ‰ãƒ­ãƒƒãƒ‘ãƒ–ãƒ«ã‚³ãƒ³ãƒãƒ¼ãƒãƒ³ãƒˆãŒã‚ã‚‹ã‹ã‚’ç¢ºèªã—ã¦ä¸‹ã•ã„',
			'errNode'              : 'elFinderã¯DOM ElementãŒå¿…è¦ã§ã™',
			'errURL'               : 'ç„¡åŠ¹ãªelFinder ã‚³ãƒ³ãƒ•ã‚£ã‚°ãƒ¬ãƒ¼ã‚·ãƒ§ãƒ³ã§ã™! URLã‚’è¨­å®šã—ã¦ãã ã•ã„',
			'errAccess'            : 'ã‚¢ã‚¯ã‚»ã‚¹ãŒæ‹’å¦ã•ã‚Œã¾ã—ãŸ',
			'errConnect'           : 'ãƒãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ã¨ã®æŽ¥ç¶šãŒã§ãã¾ã›ã‚“',
			'errAbort'             : 'æŽ¥ç¶šãŒä¸­æ–­ã•ã‚Œã¾ã—ãŸ',
			'errTimeout'           : 'æŽ¥ç¶šãŒã‚¿ã‚¤ãƒ ã‚¢ã‚¦ãƒˆã—ã¾ã—ãŸ.',
			'errNotFound'          : 'ãƒãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ãŒè¦‹ã¤ã‹ã‚Šã¾ã›ã‚“',
			'errResponse'          : 'ç„¡åŠ¹ãªãƒãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ã‚³ãƒ³ãƒ•ã‚£ã‚°ãƒ¬ãƒ¼ã‚·ãƒ§ãƒ³ã§ã™',
			'errConf'              : 'ç„¡åŠ¹ãªãƒãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ã‚³ãƒ³ãƒ•ã‚£ã‚°ãƒ¬ãƒ¼ã‚·ãƒ§ãƒ³ã§ã™',
			'errJSON'              : 'PHP JSON ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«ãŒã‚¤ãƒ³ã‚¹ãƒˆãƒ¼ãƒ«ã•ã‚Œã¦ã„ã¾ã›ã‚“',
			'errNoVolumes'         : 'èª­ã¿è¾¼ã¿å¯èƒ½ãªãƒœãƒªãƒ¥ãƒ¼ãƒ ãŒå…¥æ‰‹ã§ãã¾ã›ã‚“',
			'errCmdParams'         : 'ã‚³ãƒžãƒ³ãƒ‰ "$1"ã®ãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ¼ãŒç„¡åŠ¹ã§ã™',
			'errDataNotJSON'       : 'JSONãƒ‡ãƒ¼ã‚¿ã§ã¯ã‚ã‚Šã¾ã›ã‚“',
			'errDataEmpty'         : 'ç©ºã®ãƒ‡ãƒ¼ã‚¿ã§ã™',
			'errCmdReq'            : 'ãƒãƒƒã‚¯ã‚¨ãƒ³ãƒ‰ãƒªã‚¯ã‚¨ã‚¹ãƒˆãŒã‚³ãƒžãƒ³ãƒ‰åã‚’è¦æ±‚ã—ã¦ã„ã¾ã™',
			'errOpen'              : '"$1"ã‚’é–‹ãã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errNotFolder'         : 'ã‚ªãƒ–ã‚¸ã‚§ã‚¯ãƒˆãŒãƒ•ã‚©ãƒ«ãƒ€ãƒ¼ã§ã¯ã‚ã‚Šã¾ã›ã‚“',
			'errNotFile'           : 'ã‚ªãƒ–ã‚¸ã‚§ã‚¯ãƒˆãŒãƒ•ã‚¡ã‚¤ãƒ«ã§ã¯ã‚ã‚Šã¾ã›ã‚“',
			'errRead'              : '"$1"ã‚’èª­ã‚€ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errWrite'             : '"$1"ã«æ›¸ãã“ã‚€ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errPerm'              : 'æ¨©é™ãŒã‚ã‚Šã¾ã›ã‚“',
			'errLocked'            : '"$1" ã¯ãƒ­ãƒƒã‚¯ã•ã‚Œã¦ã„ã‚‹ã®ã§åå‰ã®å¤‰æ›´ã€ç§»å‹•ã€å‰Šé™¤ãŒã§ãã¾ã›ã‚“',
			'errExists'            : '"$1"ã¨ã„ã†ãƒ•ã‚¡ã‚¤ãƒ«åã¯ã™ã§ã«å­˜åœ¨ã—ã¦ã„ã¾ã™',
			'errInvName'           : 'ç„¡åŠ¹ãªãƒ•ã‚¡ã‚¤ãƒ«åã§ã™',
			'errFolderNotFound'    : 'ãƒ•ã‚©ãƒ«ãƒ€ãƒ¼ãŒè¦‹ã¤ã‹ã‚Šã¾ã›ã‚“',
			'errFileNotFound'      : 'ãƒ•ã‚¡ã‚¤ãƒ«ãŒè¦‹ã¤ã‹ã‚Šã¾ã›ã‚“',
			'errTrgFolderNotFound' : 'ã‚¿ãƒ¼ã‚²ãƒƒãƒˆã¨ã™ã‚‹ãƒ•ã‚©ãƒ«ãƒ€ãƒ¼ "$1" ãŒè¦‹ã¤ã‹ã‚Šã¾ã›ã‚“',
			'errPopup'             : 'ãƒãƒƒãƒ—ã‚¢ãƒƒãƒ—ã‚¦ã‚£ãƒ³ãƒ‰ã‚¦ãŒé–‹ã‘ã¾ã›ã‚“ã€‚ãƒ•ã‚¡ã‚¤ãƒ«ã‚’é–‹ãã«ã¯ãƒ–ãƒ©ã‚¦ã‚¶ã®è¨­å®šã‚’å¤‰æ›´ã—ã¦ãã ã•ã„',
			'errMkdir'             : '"$1"ãƒ•ã‚©ãƒ«ãƒ€ãƒ¼ã‚’ä½œæˆã™ã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errMkfile'            : '"$1"ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ä½œæˆã™ã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errRename'            : '"$1"ã®åå‰ã‚’å¤‰æ›´ã™ã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errCopyFrom'          : '"$1"ã‹ã‚‰ã®ãƒ•ã‚¡ã‚¤ãƒ«ã‚³ãƒ”ãƒ¼ãŒè¨±å¯ã•ã‚Œã¦ã„ã¾ã›ã‚“',
			'errCopyTo'            : '"$1"ã¸ã®ãƒ•ã‚¡ã‚¤ãƒ«ã‚³ãƒ”ãƒ¼ãŒè¨±å¯ã•ã‚Œã¦ã„ã¾ã›ã‚“',
			'errUpload'            : 'ã‚¢ãƒƒãƒ—ãƒ­ãƒ¼ãƒ‰ã‚¨ãƒ©ãƒ¼',  // old name - errUploadCommon
			'errUploadFile'        : '"$1"ãŒã‚¢ãƒƒãƒ—ãƒ­ãƒ¼ãƒ‰ã§ãã¾ã›ã‚“', // old name - errUpload
			'errUploadNoFiles'     : 'ã‚¢ãƒƒãƒ—ãƒ­ãƒ¼ãƒ‰ã•ã‚ŒãŸãƒ•ã‚¡ã‚¤ãƒ«ãŒã‚ã‚Šã¾ã›ã‚“',
			'errUploadTotalSize'   : 'ãƒ‡ãƒ¼ã‚¿ãŒè¨±å®¹ã‚µã‚¤ã‚ºã‚’è¶…ãˆã¦ã„ã¾ã™', // old name - errMaxSize
			'errUploadFileSize'    : 'ãƒ•ã‚¡ã‚¤ãƒ«ãŒè¨±å®¹ã‚µã‚¤ã‚ºã‚’è¶…ãˆã¦ã„ã¾ã™', //  old name - errFileMaxSize
			'errUploadMime'        : 'è¨±å¯ã•ã‚Œã¦ã„ãªã„ãƒ•ã‚¡ã‚¤ãƒ«å½¢å¼ã§ã™',
			'errUploadTransfer'    : '"$1" è»¢é€ã‚¨ãƒ©ãƒ¼ã§ã™', 
			'errNotReplace'        : 'ã‚¢ã‚¤ãƒ†ãƒ  "$1" ã¯ã€ã™ã§ã«ã“ã®å ´æ‰€ã«ã‚ã‚Šã¾ã™ãŒã‚¢ã‚¤ãƒ†ãƒ ã®ã‚¿ã‚¤ãƒ—ãŒé•ã†ã®ã§ç½®ãæ›ãˆã‚‹ã“ã¨ã¯ã§ãã¾ã›ã‚“', // new
			'errReplace'           : '"$1"ã‚’ç½®ãæ›ãˆã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errSave'              : '"$1"ã‚’ä¿å­˜ã™ã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errCopy'              : '"$1"ã‚’ã‚³ãƒ”ãƒ¼ã™ã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errMove'              : '"$1"ã‚’ç§»å‹•ã™ã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errCopyInItself'      : '"$1"ã‚’ãã‚Œè‡ªèº«ã®ä¸­ã«ã‚³ãƒ”ãƒ¼ã™ã‚‹ã“ã¨ã¯ã§ãã¾ã›ã‚“',
			'errRm'                : '"$1"ã‚’å‰Šé™¤ã™ã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errRmSrc'             : 'Unable remove source file(s).',
			'errExtract'           : '"$1"ã‚’è§£å‡ã™ã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errArchive'           : 'ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–ã‚’ä½œæˆã™ã‚‹ã“ã¨ãŒã§ãã¾ã›ã‚“',
			'errArcType'           : 'ã‚µãƒãƒ¼ãƒˆå¤–ã®ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–å½¢å¼ã§ã™',
			'errNoArchive'         : 'ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–ã§ãªã„ã‹ã‚µãƒãƒ¼ãƒˆã•ã‚Œã¦ã„ãªã„ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–å½¢å¼ã§ã™',
			'errCmdNoSupport'      : 'ã‚µãƒãƒ¼ãƒˆã•ã‚Œã¦ã„ãªã„ã‚³ãƒžãƒ³ãƒ‰ã§ã™',
			'errReplByChild'       : 'ãƒ•ã‚©ãƒ«ãƒ€ "$1" ã«å«ã¾ã‚Œã¦ã‚‹ã‚¢ã‚¤ãƒ†ãƒ ã‚’ç½®ãæ›ãˆã‚‹ã“ã¨ã¯ã§ãã¾ã›ã‚“',
			'errArcSymlinks'       : 'ã‚·ãƒ³ãƒœãƒªãƒƒã‚¯ãƒªãƒ³ã‚¯ã¾ãŸã¯è¨±å®¹ã•ã‚Œãªã„ãƒ•ã‚¡ã‚¤ãƒ«åã‚’å«ã‚€ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–ã¯ã‚»ã‚­ãƒ¥ãƒªãƒ†ã‚£ä¸Šã€è§£å‡ã§ãã¾ã›ã‚“', // edited 25.06.2012
			'errArcMaxSize'        : 'ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–ãŒè¨±å®¹ã•ã‚ŒãŸã‚µã‚¤ã‚ºã‚’è¶…ãˆã¦ã„ã¾ã™',
			'errResize'            : '"$1"ã‚’ãƒªã‚µã‚¤ã‚ºã§ãã¾ã›ã‚“',
			'errUsupportType'      : 'ã“ã®ãƒ•ã‚¡ã‚¤ãƒ«ã‚¿ã‚¤ãƒ—ã¯ã‚µãƒãƒ¼ãƒˆã•ã‚Œã¾ã›ã‚“',
			'errNotUTF8Content'    : 'ãƒ•ã‚¡ã‚¤ãƒ« "$1" ã«ã¯ UTF-8 ä»¥å¤–ã®æ–‡å­—ãŒå«ã¾ã‚Œã¦ã„ã‚‹ã®ã§ç·¨é›†ã§ãã¾ã›ã‚“',  // added 9.11.2011
			'errNetMount'          : '"$1"ã‚’ãƒžã‚¦ãƒ³ãƒˆã§ãã¾ã›ã‚“', // added 17.04.2012
			'errNetMountNoDriver'  : 'ã‚µãƒãƒ¼ãƒˆã•ã‚Œã¦ã„ãªã„ãƒ—ãƒ­ãƒˆã‚³ãƒ«ã§ã™',     // added 17.04.2012
			'errNetMountFailed'    : 'ãƒžã‚¦ãƒ³ãƒˆã«å¤±æ•—ã—ã¾ã—ãŸ',         // added 17.04.2012
			'errNetMountHostReq'   : 'ãƒ›ã‚¹ãƒˆåã¯å¿…é ˆã§ã™', // added 18.04.2012
			/******************************* commands names ********************************/
			'cmdarchive'   : 'ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–ä½œæˆ',
			'cmdback'      : 'æˆ»ã‚‹',
			'cmdcopy'      : 'ã‚³ãƒ”ãƒ¼',
			'cmdcut'       : 'ã‚«ãƒƒãƒˆ',
			'cmddownload'  : 'ãƒ€ã‚¦ãƒ³ãƒ­ãƒ¼ãƒ‰',
			'cmdduplicate' : 'è¤‡è£½',
			'cmdedit'      : 'ãƒ•ã‚¡ã‚¤ãƒ«ç·¨é›†',
			'cmdextract'   : 'ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–ã‚’è§£å‡',
			'cmdforward'   : 'é€²ã‚€',
			'cmdgetfile'   : 'ãƒ•ã‚¡ã‚¤ãƒ«é¸æŠž',
			'cmdhelp'      : 'ã“ã®ã‚½ãƒ•ãƒˆã‚¦ã‚§ã‚¢ã«ã¤ã„ã¦',
			'cmdhome'      : 'ãƒ›ãƒ¼ãƒ ',
			'cmdinfo'      : 'æƒ…å ±',
			'cmdmkdir'     : 'æ–°è¦ãƒ•ã‚©ãƒ«ãƒ€ãƒ¼',
			'cmdmkfile'    : 'æ–°è¦ãƒ†ã‚­ã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«',
			'cmdopen'      : 'é–‹ã',
			'cmdpaste'     : 'ãƒšãƒ¼ã‚¹ãƒˆ',
			'cmdquicklook' : 'ãƒ—ãƒ¬ãƒ“ãƒ¥ãƒ¼',
			'cmdreload'    : 'ãƒªãƒ­ãƒ¼ãƒ‰',
			'cmdrename'    : 'ãƒªãƒãƒ¼ãƒ ',
			'cmdrm'        : 'å‰Šé™¤',
			'cmdsearch'    : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’æŽ¢ã™',
			'cmdup'        : 'è¦ªãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒªãƒ¼ã¸ç§»å‹•',
			'cmdupload'    : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚¢ãƒƒãƒ—ãƒ­ãƒ¼ãƒ‰',
			'cmdview'      : 'ãƒ“ãƒ¥ãƒ¼',
			'cmdresize'    : 'ãƒªã‚µã‚¤ã‚ºã¨å›žè»¢',
			'cmdsort'      : 'ã‚½ãƒ¼ãƒˆ',
			'cmdnetmount'  : 'ãƒãƒƒãƒˆãƒ¯ãƒ¼ã‚¯ãƒœãƒªãƒ¥ãƒ¼ãƒ ã‚’ãƒžã‚¦ãƒ³ãƒˆ', // added 18.04.2012
			
			/*********************************** buttons ***********************************/ 
			'btnClose'  : 'é–‰ã˜ã‚‹',
			'btnSave'   : 'ä¿å­˜',
			'btnRm'     : 'å‰Šé™¤',
			'btnApply'  : 'é©ç”¨',
			'btnCancel' : 'ã‚­ãƒ£ãƒ³ã‚»ãƒ«',
			'btnNo'     : 'ã„ã„ãˆ',
			'btnYes'    : 'ã¯ã„',
			'btnMount'  : 'ãƒžã‚¦ãƒ³ãƒˆ',  // added 18.04.2012
			/******************************** notifications ********************************/
			'ntfopen'     : 'ãƒ•ã‚©ãƒ«ãƒ€ãƒ¼ã‚’é–‹ã',
			'ntffile'     : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’é–‹ã',
			'ntfreload'   : 'ãƒ•ã‚©ãƒ«ãƒ€ãƒ¼ã‚’å†èª­è¾¼',
			'ntfmkdir'    : 'ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒªãƒ¼ã‚’ä½œæˆ',
			'ntfmkfile'   : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ä½œæˆ',
			'ntfrm'       : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’å‰Šé™¤',
			'ntfcopy'     : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ã‚³ãƒ”ãƒ¼',
			'ntfmove'     : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ç§»å‹•',
			'ntfprepare'  : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚³ãƒ”ãƒ¼ã‚’æº–å‚™',
			'ntfrename'   : 'ãƒ•ã‚¡ã‚¤ãƒ«åã‚’å¤‰æ›´',
			'ntfupload'   : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ã‚¢ãƒƒãƒ—ãƒ­ãƒ¼ãƒ‰',
			'ntfdownload' : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ãƒ€ã‚¦ãƒ³ãƒ­ãƒ¼ãƒ‰',
			'ntfsave'     : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ä¿å­˜',
			'ntfarchive'  : 'ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–ä½œæˆ',
			'ntfextract'  : 'ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–ã‚’è§£å‡',
			'ntfsearch'   : 'ãƒ•ã‚¡ã‚¤ãƒ«æ¤œç´¢',
			'ntfresize'   : 'ãƒªã‚µã‚¤ã‚ºã—ã¦ã„ã¾ã™',
			'ntfsmth'     : 'ä½•ã‹ã—ã¦ã„ã¾ã™ >_<',
      		'ntfloadimg'  : 'ã‚¤ãƒ¡ãƒ¼ã‚¸ã‚’èª­ã¿è¾¼ã‚“ã§ã„ã¾ã™',
      		'ntfnetmount' : 'ãƒãƒƒãƒˆãƒ¯ãƒ¼ã‚¯ãƒœãƒªãƒ¥ãƒ¼ãƒ ã‚’ãƒžã‚¦ãƒ³ãƒˆã—ã¦ã„ã¾ã™', // added 18.04.2012
			
			/************************************ dates **********************************/
			'dateUnknown' : 'ä¸æ˜Ž',
			'Today'       : 'ä»Šæ—¥',
			'Yesterday'   : 'æ˜¨æ—¥',
			'Jan'         : '1æœˆ',
			'Feb'         : '2æœˆ',
			'Mar'         : '3æœˆ',
			'Apr'         : '4æœˆ',
			'May'         : '5æœˆ',
			'Jun'         : '6æœˆ',
			'Jul'         : '7æœˆ',
			'Aug'         : '8æœˆ',
			'Sep'         : '9æœˆ',
			'Oct'         : '10æœˆ',
			'Nov'         : '11æœˆ',
			'Dec'         : '12æœˆ',

			/******************************** sort variants ********************************/
			'sortname'          : 'åå‰é †', 
			'sortkind'          : 'ç¨®é¡žé †', 
			'sortsize'          : 'ã‚µã‚¤ã‚ºé †',
			'sortdate'          : 'æ—¥ä»˜é †',
			'sortFoldersFirst'  : 'ãƒ•ã‚©ãƒ«ãƒ€å„ªå…ˆ', // added 21.06.2012

			/********************************** messages **********************************/
			'confirmReq'      : 'ç¢ºèªå¿…é ˆã§ã™',
			'confirmRm'       : 'æœ¬å½“ã«ãƒ•ã‚¡ã‚¤ãƒ«ã‚’å‰Šé™¤ã—ã¾ã™ã‹?<br/>ã“ã®æ“ä½œã¯å–ã‚Šæ¶ˆã›ã¾ã›ã‚“!',
			'confirmRepl'     : 'å¤ã„ãƒ•ã‚¡ã‚¤ãƒ«ã‚’æ–°ã—ã„ãƒ•ã‚¡ã‚¤ãƒ«ã§ä¸Šæ›¸ãã—ã¾ã™ã‹?',
			'apllyAll'        : 'å…¨ã¦ã«é©ç”¨ã—ã¾ã™',
			'name'            : 'åå‰',
			'size'            : 'ã‚µã‚¤ã‚º',
			'perms'           : 'æ¨©é™',
			'modify'          : 'æ›´æ–°',
			'kind'            : 'ç¨®é¡ž',
			'read'            : 'èª­ã¿å–ã‚Š',
			'write'           : 'æ›¸ãè¾¼ã¿',
			'noaccess'        : 'ã‚¢ã‚¯ã‚»ã‚¹ç¦æ­¢',
			'and'             : ',',
			'unknown'         : 'ä¸æ˜Ž',
			'selectall'       : 'å…¨ã¦ã®ãƒ•ã‚¡ã‚¤ãƒ«ã‚’é¸æŠž',
			'selectfiles'     : 'ãƒ•ã‚¡ã‚¤ãƒ«é¸æŠž',
			'selectffile'     : 'æœ€åˆã®ãƒ•ã‚¡ã‚¤ãƒ«ã‚’é¸æŠž',
			'selectlfile'     : 'æœ€å¾Œã®ãƒ•ã‚¡ã‚¤ãƒ«ã‚’é¸æŠž',
			'viewlist'        : 'ãƒªã‚¹ãƒˆå½¢å¼ã§è¦‹ã‚‹',
			'viewicons'       : 'ã‚¢ã‚¤ã‚³ãƒ³å½¢å¼ã§è¦‹ã‚‹',
			'places'          : 'Places',
			'calc'            : 'è¨ˆç®—', 
			'path'            : 'ãƒ‘ã‚¹',
			'aliasfor'        : 'ã‚¨ã‚¤ãƒªã‚¢ã‚¹',
			'locked'          : 'ãƒ­ãƒƒã‚¯ã•ã‚Œã¦ã„ã¾ã™',
			'dim'             : 'ã‚µã‚¤ã‚º',
			'files'           : 'ãƒ•ã‚¡ã‚¤ãƒ«',
			'folders'         : 'ãƒ•ã‚©ãƒ«ãƒ€ãƒ¼',
			'items'           : 'ã‚¢ã‚¤ãƒ†ãƒ ',
			'yes'             : 'ã¯ã„',
			'no'              : 'ã„ã„ãˆ',
			'link'            : 'ãƒªãƒ³ã‚¯',
			'searcresult'     : 'æ¤œç´¢çµæžœ',  
			'selected'        : 'é¸æŠžã•ã‚ŒãŸã‚¢ã‚¤ãƒ†ãƒ ',
			'about'           : 'ã‚¢ãƒã‚¦ãƒˆ',
			'shortcuts'       : 'ã‚·ãƒ§ãƒ¼ãƒˆã‚«ãƒƒãƒˆ',
			'help'            : 'ãƒ˜ãƒ«ãƒ—',
			'webfm'           : 'ã‚¦ã‚§ãƒ–ãƒ•ã‚¡ã‚¤ãƒ«ãƒžãƒãƒ¼ã‚¸ãƒ£ãƒ¼',
			'ver'             : 'ãƒãƒ¼ã‚¸ãƒ§ãƒ³',
			'protocolver'     : 'ãƒ—ãƒ­ãƒˆã‚³ãƒ«ãƒãƒ¼ã‚¸ãƒ§ãƒ³',
			'homepage'        : 'ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆãƒ›ãƒ¼ãƒ ',
			'docs'            : 'ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒ†ãƒ¼ã‚·ãƒ§ãƒ³',
			'github'          : 'Github ã§ãƒ•ã‚©ãƒ¼ã‚¯',
			'twitter'         : 'Twitter ã§ãƒ•ã‚©ãƒ­ãƒ¼',
			'facebook'        : 'Facebookã‚°ãƒ«ãƒ¼ãƒ— ã«å‚åŠ ',
			'team'            : 'ãƒãƒ¼ãƒ ',
			'chiefdev'        : 'ãƒãƒ¼ãƒ•ãƒ‡ãƒ™ãƒ­ãƒƒãƒ‘ãƒ¼',
			'developer'       : 'ãƒ‡ãƒ™ãƒ­ãƒƒãƒ‘ãƒ¼',
			'contributor'     : 'ã‚³ãƒ³ãƒˆãƒªãƒ“ãƒ¥ãƒ¼ã‚¿',
			'maintainer'      : 'ãƒ¡ã‚¤ãƒ³ãƒ†ãƒŠãƒ¼',
			'translator'      : 'ç¿»è¨³è€…',
			'icons'           : 'ã‚¢ã‚¤ã‚³ãƒ³',
			'dontforget'      : 'ã‚¿ã‚ªãƒ«å¿˜ã‚Œã¡ã‚ƒã ã‚ã‚ˆãƒ¼ã€‚',
			'shortcutsof'     : 'ã‚·ãƒ§ãƒ¼ãƒˆã‚«ãƒƒãƒˆã¯åˆ©ç”¨ã§ãã¾ã›ã‚“',
			'dropFiles'       : 'ã“ã“ã«ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ãƒ‰ãƒ­ãƒƒãƒ—',
			'or'              : 'ã¾ãŸã¯',
			'selectForUpload' : 'ã‚¢ãƒƒãƒ—ãƒ­ãƒ¼ãƒ‰ã™ã‚‹ãƒ•ã‚¡ã‚¤ãƒ«ã‚’é¸æŠž',
			'moveFiles'       : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ç§»å‹•',
			'copyFiles'       : 'ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ã‚³ãƒ”ãƒ¼',
			'rmFromPlaces'    : 'ã“ã“ã‹ã‚‰å‰Šé™¤',
			'aspectRatio'     : 'ç¸¦æ¨ªæ¯”ç¶­æŒ',
			'scale'           : 'è¡¨ç¤ºç¸®å°º',
			'width'           : 'å¹…',
			'height'          : 'é«˜ã•',
			'resize'          : 'ãƒªã‚µã‚¤ã‚º',
			'crop'            : 'åˆ‡ã‚ŠæŠœã',
			'rotate'          : 'å›žè»¢',
			'rotate-cw'       : '90åº¦å·¦å›žè»¢',
			'rotate-ccw'      : '90åº¦å³å›žè»¢',
			'degree'          : 'åº¦',
			'netMountDialogTitle' : 'ãƒãƒƒãƒˆãƒ¯ãƒ¼ã‚¯ãƒœãƒªãƒ¥ãƒ¼ãƒ ã®ãƒžã‚¦ãƒ³ãƒˆ', // added 18.04.2012
			'protocol'            : 'ãƒ—ãƒ­ãƒˆã‚³ãƒ«', // added 18.04.2012
			'host'                : 'ãƒ›ã‚¹ãƒˆå', // added 18.04.2012
			'port'                : 'ãƒãƒ¼ãƒˆ', // added 18.04.2012
			'user'                : 'ãƒ¦ãƒ¼ã‚¶ãƒ¼å', // added 18.04.2012
			'pass'                : 'ãƒ‘ã‚¹ãƒ¯ãƒ¼ãƒ‰', // added 18.04.2012

			/********************************** mimetypes **********************************/
			'kindUnknown'     : 'ä¸æ˜Ž',
			'kindFolder'      : 'ãƒ•ã‚©ãƒ«ãƒ€ãƒ¼',
			'kindAlias'       : 'åˆ¥å',
			'kindAliasBroken' : 'å®›å…ˆä¸æ˜Žã®åˆ¥å',
			// applications
			'kindApp'         : 'ã‚¢ãƒ—ãƒªã‚±ãƒ¼ã‚·ãƒ§ãƒ³',
			'kindPostscript'  : 'Postscript ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒˆ',
			'kindMsOffice'    : 'Microsoft Office ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒˆ',
			'kindMsWord'      : 'Microsoft Word ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒˆ',
			'kindMsExcel'     : 'Microsoft Excel ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒˆ',
			'kindMsPP'        : 'Microsoft Powerpoint ãƒ—ãƒ¬ã‚¼ãƒ³ãƒ†ãƒ¼ã‚·ãƒ§ãƒ³',
			'kindOO'          : 'Open Office ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒˆ',
			'kindAppFlash'    : 'Flash ã‚¢ãƒ—ãƒªã‚±ãƒ¼ã‚·ãƒ§ãƒ³',
			'kindPDF'         : 'PDF',
			'kindTorrent'     : 'Bittorrent ãƒ•ã‚¡ã‚¤ãƒ«',
			'kind7z'          : '7z ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–',
			'kindTAR'         : 'TAR ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–',
			'kindGZIP'        : 'GZIP ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–',
			'kindBZIP'        : 'BZIP ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–',
			'kindZIP'         : 'ZIP ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–',
			'kindRAR'         : 'RAR ã‚¢ãƒ¼ã‚«ã‚¤ãƒ–',
			'kindJAR'         : 'Java JAR ãƒ•ã‚¡ã‚¤ãƒ«',
			'kindTTF'         : 'True Type ãƒ•ã‚©ãƒ³ãƒˆ',
			'kindOTF'         : 'Open Type ãƒ•ã‚©ãƒ³ãƒˆ',
			'kindRPM'         : 'RPM ãƒ‘ãƒƒã‚±ãƒ¼ã‚¸',
			// texts
			'kindText'        : 'Text ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒˆ',
			'kindTextPlain'   : 'ãƒ—ãƒ¬ã‚¤ãƒ³ãƒ†ã‚­ã‚¹ãƒˆ',
			'kindPHP'         : 'PHP ã‚½ãƒ¼ã‚¹',
			'kindCSS'         : 'Cascading style sheet',
			'kindHTML'        : 'HTML ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒˆ',
			'kindJS'          : 'Javascript ã‚½ãƒ¼ã‚¹',
			'kindRTF'         : 'Rich Text ãƒ•ã‚©ãƒ¼ãƒžãƒƒãƒˆ',
			'kindC'           : 'C ã‚½ãƒ¼ã‚¹',
			'kindCHeader'     : 'C ãƒ˜ãƒƒãƒ€ãƒ¼ã‚½ãƒ¼ã‚¹',
			'kindCPP'         : 'C++ ã‚½ãƒ¼ã‚¹',
			'kindCPPHeader'   : 'C++ ãƒ˜ãƒƒãƒ€ãƒ¼ã‚½ãƒ¼ã‚¹',
			'kindShell'       : 'Unix shell ã‚¹ã‚¯ãƒªãƒ—ãƒˆ',
			'kindPython'      : 'Python ã‚½ãƒ¼ã‚¹',
			'kindJava'        : 'Java ã‚½ãƒ¼ã‚¹',
			'kindRuby'        : 'Ruby ã‚½ãƒ¼ã‚¹',
			'kindPerl'        : 'Perl ã‚¹ã‚¯ãƒªãƒ—ãƒˆ',
			'kindSQL'         : 'SQL ã‚½ãƒ¼ã‚¹',
			'kindXML'         : 'XML ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒˆ',
			'kindAWK'         : 'AWK ã‚½ãƒ¼ã‚¹',
			'kindCSV'         : 'CSV',
			'kindDOCBOOK'     : 'Docbook XML ãƒ‰ã‚­ãƒ¥ãƒ¡ãƒ³ãƒˆ',
			// images
			'kindImage'       : 'ã‚¤ãƒ¡ãƒ¼ã‚¸',
			'kindBMP'         : 'BMP ã‚¤ãƒ¡ãƒ¼ã‚¸',
			'kindJPEG'        : 'JPEG ã‚¤ãƒ¡ãƒ¼ã‚¸',
			'kindGIF'         : 'GIF ã‚¤ãƒ¡ãƒ¼ã‚¸',
			'kindPNG'         : 'PNG ã‚¤ãƒ¡ãƒ¼ã‚¸',
			'kindTIFF'        : 'TIFF ã‚¤ãƒ¡ãƒ¼ã‚¸',
			'kindTGA'         : 'TGA ã‚¤ãƒ¡ãƒ¼ã‚¸',
			'kindPSD'         : 'Adobe Photoshop ã‚¤ãƒ¡ãƒ¼ã‚¸',
			'kindXBITMAP'     : 'X bitmap ã‚¤ãƒ¡ãƒ¼ã‚¸',
			'kindPXM'         : 'Pixelmator ã‚¤ãƒ¡ãƒ¼ã‚¸',
			// media
			'kindAudio'       : 'ã‚ªãƒ¼ãƒ‡ã‚£ã‚ªãƒ¡ãƒ‡ã‚£ã‚¢',
			'kindAudioMPEG'   : 'MPEG ã‚ªãƒ¼ãƒ‡ã‚£ã‚ª',
			'kindAudioMPEG4'  : 'MPEG-4 ã‚ªãƒ¼ãƒ‡ã‚£ã‚ª',
			'kindAudioMIDI'   : 'MIDI ã‚ªãƒ¼ãƒ‡ã‚£ã‚ª',
			'kindAudioOGG'    : 'Ogg Vorbis ã‚ªãƒ¼ãƒ‡ã‚£ã‚ª',
			'kindAudioWAV'    : 'WAV ã‚ªãƒ¼ãƒ‡ã‚£ã‚ª',
			'AudioPlaylist'   : 'MP3 ãƒ—ãƒ¬ã‚¤ãƒªã‚¹ãƒˆ',
			'kindVideo'       : 'ãƒ“ãƒ‡ã‚ªãƒ¡ãƒ‡ã‚£ã‚¢',
			'kindVideoDV'     : 'DV ãƒ ãƒ¼ãƒ“ãƒ¼',
			'kindVideoMPEG'   : 'MPEG ãƒ ãƒ¼ãƒ“ãƒ¼',
			'kindVideoMPEG4'  : 'MPEG-4 ãƒ ãƒ¼ãƒ“ãƒ¼',
			'kindVideoAVI'    : 'AVI ãƒ ãƒ¼ãƒ“ãƒ¼',
			'kindVideoMOV'    : 'Quick Time ãƒ ãƒ¼ãƒ“ãƒ¼',
			'kindVideoWM'     : 'Windows Media ãƒ ãƒ¼ãƒ“ãƒ¼',
			'kindVideoFlash'  : 'Flash ãƒ ãƒ¼ãƒ“ãƒ¼',
			'kindVideoMKV'    : 'Matroska ãƒ ãƒ¼ãƒ“ãƒ¼',
			'kindVideoOGG'    : 'Ogg ãƒ ãƒ¼ãƒ“ãƒ¼'
		}
	};
}

