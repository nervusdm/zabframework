
$(document).ready(function($) {

$('#liste_articlet').on('click','.pcategorie li a', function()

{
$('#sous_gamme_produit').val('');
$('#gamme_produit').val($(this).attr('data-id'));
$('#fournisseur_commande').change(); 
return false;

}
                      );


$('#liste_articlet').on('click','.psouscategorie li a', function()

{
$('#sous_gamme_produit').val($(this).attr('data-id'));
$('#fournisseur_commande').change();
return false;

}
                      );

$('body').on('focus','.ui-autocomplete-input',function() {    $(this).select(); });



$('body').on('click','.submit_me',function() {

$(this).parents('form').submit();

return false;
                                                });

$('html').on('submit','.submit_ajax',function(e) {


  formdata = new FormData($( this )[0]);
      e.preventDefault();
ajaxpro($(this).attr('action'),formdata,null,false,false);

return false;
});

if ($('#news_div').length > 0) 
{

var news_offset = $('.news_carry:last').offset();
var load_news = false;
  page_news = $('#news_div').attr('page');

  $(window).scroll(function() 
{ 

 if(page_news=='fin') { return true;} 
  page_news = $('#news_div').attr('page');
if( page_news !='fin' && (news_offset.top-$(window).height() <= $(window).scrollTop()) && load_news==false){
load_news = true;

$('#news_div').attr('page',parseInt($('#news_div').attr('page'))+1) ;
//$('#news_div').append("<div class='load_news_div col-1-1' ></div>"); bloquerq($('.load_news_div'));
categorie_news=$('#news_div').attr('categorie');
ajaxp('lecture_news_suite=true&page='+page_news+"&categorie="+categorie_news);
load_news = false;
news_offset = $('.news_carry:last').offset();

}


});
}

$('#liste_articlet').on('click', '.filtre_select_cmd', function() {
 bloquerq('#liste_articlet');ajaxa('commande_filtre=' + $(this).attr('data-value') + '&le_fournisseur='+ $('#fournisseur_commande :selected').val())

});

$('body').on('click', '.cnewsli', function() {
bloquerq($(this).parents('.cnews'));
$(this).parents('.bossn').removeClass('col-4-12').removeClass('col-3-12').removeClass('col-6-12').addClass('col-1-1').find('.proz_content').removeClass('dejalue');
$('#news_link_'+$(this).attr('data-id')).remove();
 ajaxp('lecture_news_rapide='+$(this).attr('data-id')) ;
 return false;


});


$('#t_commande').click(function() { divalert('non','Cliquez dans le menu ci-dessous votre type de commande, « Commande de produit » ou « Commande de catalogue »') ; }); 
  charge_event();

action_fenetre();
    zimg();
if ($('#slider').length>0) {
$("#slider ul").responsiveSlides( { auto: true, pause:true,nav:true, prevText: "&laquo;",nextText: "&raquo;", timeout:3000     });
                            }


if ($('#lien_partenaire_content').length>0) {
$('#lien_partenaire_content ul').responsiveSlides();
                                             }



$('body').on('click','#scrollToTop a', function(event){
  event.preventDefault();
  $('html,body').animate({scrollTop: 0}, 'slow');
});


   $('.quantite_cat').keypress(function(e) {
          if (e.keyCode == '13') {
             e.preventDefault();
$(this).change();
           }
        });

$('body').on('click','.bougeable_close',function() {

$(this).parents().eq(1).fadeOut('slow',function(){
        $(this).remove(); });

});
    $(document).on('ready readyAgain', function() {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll-to-top').fadeIn();
        } else {
            $('#scroll-to-top').fadeOut();
        }
    });

    $('#scroll-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});





                                });

/*! http://responsiveslides.com v1.54 by @viljamis */
(function(c,I,B){c.fn.responsiveSlides=function(l){var a=c.extend({auto:!0,speed:500,timeout:4E3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!0,prevText:"Previous",nextText:"Next",maxwidth:"",navContainer:"",manualControls:"",namespace:"rslides",before:c.noop,after:c.noop},l);return this.each(function(){B++;var f=c(this),s,r,t,m,p,q,n=0,e=f.children(),C=e.size(),h=parseFloat(a.speed),D=parseFloat(a.timeout),u=parseFloat(a.maxwidth),g=a.namespace,d=g+B,E=g+"_nav "+d+"_nav",v=g+"_here",j=d+"_on",
w=d+"_s",k=c("<ul class='"+g+"_tabs "+d+"_tabs' />"),x={"float":"left",position:"relative",opacity:1,zIndex:2},y={"float":"none",position:"absolute",opacity:0,zIndex:1},F=function(){var b=(document.body||document.documentElement).style,a="transition";if("string"===typeof b[a])return!0;s=["Moz","Webkit","Khtml","O","ms"];var a=a.charAt(0).toUpperCase()+a.substr(1),c;for(c=0;c<s.length;c++)if("string"===typeof b[s[c]+a])return!0;return!1}(),z=function(b){a.before(b);F?(e.removeClass(j).css(y).eq(b).addClass(j).css(x),
n=b,setTimeout(function(){a.after(b)},h)):e.stop().fadeOut(h,function(){c(this).removeClass(j).css(y).css("opacity",1)}).eq(b).fadeIn(h,function(){c(this).addClass(j).css(x);a.after(b);n=b})};a.random&&(e.sort(function(){return Math.round(Math.random())-0.5}),f.empty().append(e));e.each(function(a){this.id=w+a});f.addClass(g+" "+d);l&&l.maxwidth&&f.css("max-width",u);e.hide().css(y).eq(0).addClass(j).css(x).show();F&&e.show().css({"-webkit-transition":"opacity "+h+"ms ease-in-out","-moz-transition":"opacity "+
h+"ms ease-in-out","-o-transition":"opacity "+h+"ms ease-in-out",transition:"opacity "+h+"ms ease-in-out"});if(1<e.size()){if(D<h+100)return;if(a.pager&&!a.manualControls){var A=[];e.each(function(a){a+=1;A+="<li><a href='#' class='"+w+a+"'>"+a+"</a></li>"});k.append(A);l.navContainer?c(a.navContainer).append(k):f.after(k)}a.manualControls&&(k=c(a.manualControls),k.addClass(g+"_tabs "+d+"_tabs"));(a.pager||a.manualControls)&&k.find("li").each(function(a){c(this).addClass(w+(a+1))});if(a.pager||a.manualControls)q=
k.find("a"),r=function(a){q.closest("li").removeClass(v).eq(a).addClass(v)};a.auto&&(t=function(){p=setInterval(function(){e.stop(!0,!0);var b=n+1<C?n+1:0;(a.pager||a.manualControls)&&r(b);z(b)},D)},t());m=function(){a.auto&&(clearInterval(p),t())};a.pause&&f.hover(function(){clearInterval(p)},function(){m()});if(a.pager||a.manualControls)q.bind("click",function(b){b.preventDefault();a.pauseControls||m();b=q.index(this);n===b||c("."+j).queue("fx").length||(r(b),z(b))}).eq(0).closest("li").addClass(v),
a.pauseControls&&q.hover(function(){clearInterval(p)},function(){m()});if(a.nav){g="<a href='#' class='"+E+" prev'>"+a.prevText+"</a><a href='#' class='"+E+" next'>"+a.nextText+"</a>";l.navContainer?c(a.navContainer).append(g):f.after(g);var d=c("."+d+"_nav"),G=d.filter(".prev");d.bind("click",function(b){b.preventDefault();b=c("."+j);if(!b.queue("fx").length){var d=e.index(b);b=d-1;d=d+1<C?n+1:0;z(c(this)[0]===G[0]?b:d);if(a.pager||a.manualControls)r(c(this)[0]===G[0]?b:d);a.pauseControls||m()}});
a.pauseControls&&d.hover(function(){clearInterval(p)},function(){m()})}}if("undefined"===typeof document.body.style.maxWidth&&l.maxwidth){var H=function(){f.css("width","100%");f.width()>u&&f.css("width",u)};H();c(I).bind("resize",function(){H()})}})}})(jQuery,this,0);
 

            
// Toutes les fonctions autre que slider doivent être ici.
    var mouseX;
  var mouseY;
  document.onmousemove= getMousePos;
 function getMousePos(e) {
    if (!e)
    var e = window.event||window.Event;

    if('undefined'!=typeof e.pageX) {
        mouseX = e.pageX;
        mouseY = e.pageY;
    }
    else    {
        mouseX = e.clientX;
        mouseY = e.clientY;
    }
}
 
function fen_ferme_all() {
$( ".bougeable" ).hide().remove();;
$('#big_big_black').remove();

}

function fen_bouge(titre,html,taille,tailleh) {

$('body').append("<div class='bougeable' style='width:" + taille + ";height:" + tailleh+"'><div class='bougeable_handle'>" + titre + "<img src='https://www.hexaplus.fr/img/icon-close.png' class='bougeable_close'/></div><div class='bougeable_contenu'>" +html + "</div></div>") ;
$( ".bougeable" ).draggable({ handle: ".bougeable_handle" });

    

}



function zimg() {
$('img, .zoimg').each(function() {
        if (!$(this).attr('rel')) { return; }   
        $(this).css({'cursor':'pointer'});
        $(this).click(function () { 
$('body').append("<div id='znope1' style='width:100%;height:3000px; background:#333; opacity:0.7; position:fixed;z-index:1;top:0;left:0'></div><div id='znope2' style='position:fixed;left:50%;top:50%;z-index:200; float:left;  '><img id='znope3' style='display:none;z-index:2000;' onload='zcentreimg(this)' src='"+$(this).attr('rel') +"'/></div>").fadeIn(500);
new zimgferme();
} ); 
                                             });    
                       
     
}
function zimgferme() {
$('#znope1,#znope2,#znope3').click(function() { $('#znope1,#znope2,#znope3').stop().fadeOut(500,function() { $('this').remove() ;});} );   
    
}

function zcentreimg(t) {
    
var w = $(t).width() ;
var h = $(t).height() ;
$(t).parent().css({'margin-left':-w / 2,"margin-top": -h / 2,"width":w,"height":h,"overflow":'hidden'});
$(t).attr('width',w*2) ;
$(t).attr('height',h*2) ;
$(t).css({'margin-left':-w /2,'margin-top':-h /2});

$(t).fadeIn(1000);
$(t).animate({'width':w,'height':h,'margin-left':0,'margin-top':0 },1500);
}

$('.divalertcroix').click(function() {
$('#divalert').slideUp('slow');

});
function supprimer_panier() {
apprise('Etes vous sur de vouloir supprimer votre panier ?', {'verify':true}, function(r) {

        if(r) { 
        ajaxa('supprimer_panier=y');
        } else { 
    
            // user clicked 'No'
            
                    }
    });
}
function supprimer_panier_cat() {
apprise('Etes vous sur de vouloir supprimer votre panier catalogue ?', {'verify':true}, function(r) {

        if(r) { 
        ajaxa('supprimer_panier_cat=y');
        } else { 
    
            // user clicked 'No'
            
                    }
    });
}

function bloquerq(t) {
 $(t).block({ 
                message: '<div class="load_div"></div>', 
                css: { border: '1px dashed grey' } 
            }); 
}

function refresh_panier_cat(t,a) {
        $('#m_load_bar').css({'width':'5px'}).show();

 bloquerq('#votre_panier');   
if (a=='0') {    
$(t).val(parseInt(0));
}
$.ajax({
url: 'ajax.php',
data:'refresh_panier_cat=y&'+$('#panier_qj_cat').serialize(),
cache: false,
success: function(data) {
             $('#m_load_bar').hide();

var obj = eval( data) ;
 $('#panier_qj_cat').unblock();


}
});


}


window.onbeforeunload = function (e) {
    $('#m_load_bar').css({'width':'5px'}).show();

};



function lance_counter(t)
{
    $('.counter_show').remove();
    $(t).each(function() {

        if ($(this).attr('id').length<1) { return false ;}
        id = $(this).attr('id');
        $('#'+id).counter({
            goal: 'sky',
            msg: ' caractères'
        });

    });

}





function refresh_panier(t,a) {

    $('#m_load_bar').css({'width':'5px'}).show();


if (a=='+') {    
$(t).val(parseInt($(t).val())+1);

}
else if (a=='-') {    
$(t).val(parseInt($(t).val())-1);
}
else if (a=='0') {    
$(t).val(parseInt(0));
}
 $('#panier_qj').block({ 
                message: '<img src="./img/ajax-load.gif"/>', 
                css: { border: '3px solid #a00' } 
            }); 

$.ajax({
url: 'ajax.php',
data:'refresh_panier=y&'+$('#panier_qj').serialize(),
cache: false,
success: function(data) {
         $('#m_load_bar').hide();

var obj = eval( data) ;
 $('#panier_qj').unblock();
//eval( obj.script ) ; 

}
});


}




function ajaxa(t,di) {
 $(di).prop('disabled', true);
var qsdt=setTimeout(function(){$(di).prop('disabled', false); },3000)
$.ajax({
url: lien_projet+'/ajax.php',
data:t,
cache: false,
success: function(data) {
         $('#m_load_bar').hide();

if (typeof data != "undefined") {

var obj = eval(data);
}
if (typeof obj != "undefined") {

eval( obj.script ) ; 


}

}
});
}


function ajaxpf(t,datab) {
         $('#m_load_bar').css({'width':'5px'}).show();

         $(t).ajaxSubmit({url:lien_projet+'/ajax.php',type:'post',data: datab ,

success: function(data) {
     $('#m_load_bar').hide();

if (typeof data != "undefined") {

var obj = eval( data) ;
}
if (typeof obj != "undefined") {

eval( obj.script ) ; 


}

}

});
}

function charge_event()
{


}
function ajaxp(t,di)
{
ajaxpro(lien_projet + '/ajax.php',t,di);
}

function ajaxp_mdr(t,di) {
 $(di).prop('disabled', true);
var qsdt=setTimeout(function(){$(di).prop('disabled', false); },1500)
 if ( $(di).is("a") ) {
$(di).hide();
var qsdtb=setTimeout(function(){$(di).show(); },1500);

 }


$.ajax({
type: "POST",    
url: lien_projet +'/ajax-mdr.php',
data:t,
cache: false,
success: function(data) {

if (typeof data != "undefined") {

var obj = eval( data) ;
}
if (typeof obj != "undefined") {

eval( obj.script ) ; 
    charge_event();


}

}
});
}


function ajaxpro(t,data,di,processData  ,contentType) {
 $(di).prop('disabled', true);
console.log(contentType );
 $('#m_load_bar').css({'width':'5px'}).show();
var qsdt=setTimeout(function(){$(di).prop('disabled', false); },3000)
$.ajax({
type: "POST",    
url: t,
data:data,
 processData: processData,
contentType: contentType,
success: function(data)
{
 $('#m_load_bar').hide();

if (typeof data != "undefined") {

var obj = eval( data) ;
}
if (typeof obj != "undefined") {

eval( obj.script ) ; 
}

}
});
                      }

function ajaxr(t) {
     $('#m_load_bar').css({'width':'5px'}).show();

$.ajax({
url: 'recherche.php',
data:t,
cache: false,
type: "POST",
success: function(data) {
         $('#m_load_bar').hide();

if (typeof data != "undefined") {

var obj = eval( data) ;
}
if (typeof obj != "undefined") {

eval( obj.script ) ; 
  charge_event();


}

}
});
}

function temp_disabled(t) {



}

function action_fenetre()
{
$(".titreajb").unbind('click');
$(".titreajb").click(function() {


$(this).height($(this).height());
$(this).next('.divfenetrecontenu').stop().slideToggle('slow');
});

}

function ajaxb(t) {

//var queryString = t.formSerialize(); 
j = $(t).formSerialize();
alert(j);
$.get('ajax.php',j); 

return false;
// the data could now be submitted using $.get, $.post, $.ajax, etc 

}


function divalert(type,msg,stable) { // Message d'erreur. S'appelle ainsi : divalert('Ok','Texte à écrire') 


  let { icon, status } = '';
  let timeout = 5000;
  if (type=='oui') { status='success'; icon='success'; }
  else if (type == 'non') { status = 'danger'; }
  else if (type == 'info') { status = 'info'; icon = 'info'; timeout = 10000; }
  SnackBar({
    status:status,
    message: msg,
    dismissible: true,
    icon:icon,
    position:'bl',
    fixed: true,
    timeout: timeout,
});

return ;


if ($('#divalert').length == 0) { $('body').append('<div id="divalert" class="alertok"><div class="divalertcroix">X</div><i id="divalerttxt_icon">&nbsp;</i>&nbsp;&nbsp;<div style="display:inline-block" class="" id="divalerttxt"></div></div>'); 
$('.divalertcroix').click(function() {
$('#divalert').slideUp('slow');

});

}

if ($('#divalert').is(":visible")) { $('#divalert').hide(); }


if (type=='ok' || type=='oui') { $('#divalert').attr('class',"alertok") ;
$('#divalerttxt_icon').attr('class','icon-checkmark');

if (stable=='oui')
{

    ('Info',"<div class='alert alert-success notification success'>" + msg + "</div>");
}

} 
else if (type=='non') {

if (stable=='oui')
{
  fen_stable('Info',"<div class='alert alert-error notification error'>" + msg + "</div>");
}

 $('#divalert').attr('class',"alertnon") ; $('#divalerttxt_icon').attr('class','icon-warning');}
$('#divalerttxt').html(msg);



$('#divalert').slideDown('slow');



}

function addOption(txt, val,id) {
var s = document.getElementById(id);
var o = new Option(txt,val);
s.options[s.options.length]=o;

 var val = val, sel = document.getElementById(id);
    for(var i, j = 0; i = sel.options[j]; j++) {
        if(i.value == val) {
            sel.selectedIndex = j;
            break;
        }
    }

return true;
}








function scrolltoElm(id, top_diff){
  if  (!top_diff) { top_diff=0 ; }
  console.log($("#"+id).offset().top );
    if (!$("#"+id).length) { console.log('Pas de valeur'); return false ; }
    var topFinal = parseInt($("#"+id).offset().top) + parseInt(top_diff);
    console.log(topFinal);
       $('html,body').animate({scrollTop: topFinal },'slow');
    console.log('scrolling');
   }

(function(c){var b={};var a={init:function(f){var g={minfactor:20,distribution:1.5,scalethreshold:0,staticbelowthreshold:false,titleclass:"itemTitle",selectedclass:"selectedItem",scrollactive:true,step:{limit:4,width:8,scale:true},bendamount:2,movecallback:function(){},clicked:false};b=g;var h=false;if(f){c.extend(g,f)}return this.each(function(){var k=c(this);if(g.items){var m=k.find(g.items)}else{var m=k.find("img")}if(m.length<=g.scalethreshold){g.minfactor=0;g.distribution=0.95}k.css({position:"relative"});m.css({position:"absolute","-webkit-transition":"all 0.5s ease-in-out","-moz-transition":"all 0.5s ease-in-out","-o-transition":"all 0.5s ease-in-out","-ms-transition":"all 0.5s ease-in-out",transition:"all 0.5s ease-in-out"});var l=Math.ceil(m.length/2-1);d(k,m,l);if(m.length<=g.scalethreshold&&g.staticbelowthreshold){m.each(function(n){c(this).unbind("click.coverscroll");c(this).bind("click.coverscroll",function(){if(c(this).hasClass(g.selectedclass)){return false}e(k,this)})})}else{m.each(function(n){c(this).unbind("click.coverscroll");c(this).bind("click.coverscroll",function(){if(c(this).hasClass(g.selectedclass)){return false}d(k,m,n)})})}if(!g.scrollactive){return true}var j=function(n){var o=n||window.event,p=0;o=c.event.fix(o);if(!h){if(o.wheelDelta){p=o.wheelDelta/120}if(o.detail){p=-o.detail/3}if(p>0){k.find("."+g.selectedclass+":eq(0)").next().trigger("click")}else{k.find("."+g.selectedclass+":eq(0)").prev().trigger("click")}}if(o.preventDefault){o.preventDefault()}o.returnValue=false};if(k.get(0).addEventListener&&!k.get(0).onmousewheel){k.get(0).removeEventListener("DOMMouseScroll",j,false);k.get(0).addEventListener("DOMMouseScroll",j,false)}k.get(0).onmousewheel=j});function d(k,o,v){var w=c(o.get(v));var s=(k.height()>250)?250:k.height();var p={width:s,height:s,top:0,left:Math.round(k.width()/2-s/2)};if(c.browser.msie){h=true;w.animate(p,500,function(){h=false})}else{w.css(p)}w.fadeIn(80);var u=g.minfactor===0||g.minfactor>0?g.minfactor:15;var j=g.distribution?g.distribution:2;var m=g.titleclass?g.titleclass:"itemTitle";if(!g.bendamount){g.bendamount=2}e(k,w,true);var l=s,t=0;sf=false;var q=true;var r=Math.round(k.width()/2-s/2);for(i=v-1;i>=0;i--){var n=c(o.get(i));l=l-u;if(!sf){r=Math.round(r-l/j+u)}else{l=g.step.scale?l:l+u;r=Math.round(r-g.step.width);t++}if(r>=0&&q&&t<=g.step.limit){n.show()}else{if(!sf){r=Math.round(r+(l/j)-u-g.step.width);sf=true;t++;n.show()}else{n.hide();q=false}}var p={width:l,height:l,top:Math.round(k.height()/g.bendamount-l/g.bendamount),left:r};if(c.browser.msie){h=true;n.animate(p,500,function(){h=false})}else{n.css(p)}}var l=s,t=0;sf=false;var r=Math.round(k.width()/2-s/2);var q=true;for(i=v+1;i<o.length;i++){var n=c(o.get(i));l=l-u;if(!sf){r=Math.round(r+l/j)}else{l=g.step.scale?l:l+u;r=Math.round(r+g.step.width+(g.step.scale?u:0));t++}if((r+l)<k.width()&&q&&t<=g.step.limit){n.show()}else{if(!sf){sf=true;t++;r=Math.round((r-l/j)+g.step.width+u);n.show()}else{n.hide();q=false}}var p={width:l,height:l,top:Math.round(k.height()/g.bendamount-l/g.bendamount),left:r};if(c.browser.msie){h=true;n.animate(p,500,function(){h=false})}else{n.css(p)}}setTimeout(function(){var x=100;o.each(function(y){if(y<=v){x=x+y}else{x=x-y}c(this).css("z-index",x)})},100)}function e(l,m,j){m=c(m);var o=(l.outerHeight()>250)?250:l.outerHeight();var n=false;if(n=m.attr("title")){l.find("."+g.titleclass).remove();if(j){var k=Math.round(l.width()/2-o/2)}else{var k=parseInt(m.css("left"))}c('<div style="position:absolute;text-align:center;top:'+o+"px;left:"+(k-o/2)+"px;width:"+(o*2)+'px" class="'+g.titleclass+'">'+n+"</div>").appendTo(l);setTimeout(function(){g.movecallback.call(this,m)},600)}else{if(n=m.find("."+g.titleclass+":eq(0)")){l.find("."+g.titleclass).hide();n.css({position:"absolute",width:(o*2),"text-align":"center",top:o,left:Math.round(0-(o/2))});setTimeout(function(){n.show();g.movecallback.call(this,m)},500)}}if(g.items){var p=l.find(g.items)}else{var p=l.find("img")}setTimeout(function(){p.removeClass(g.selectedclass);m.addClass(g.selectedclass)},100)}},next:function(d){return this.each(function(){var e=c(this);e.find("."+b.selectedclass+":eq(0)").next().trigger("click")})},prev:function(){return this.each(function(){var d=c(this);d.find("."+b.selectedclass+":eq(0)").prev().trigger("click")})}};c.fn.coverscroll=function(d){if(a[d]){return a[d].apply(this,Array.prototype.slice.call(arguments,1))}else{if(typeof d==="object"||!d){return a.init.apply(this,arguments)}else{c.error("Method "+d+" does not exist on this plugin")}}}})(jQuery);

function gerer_annonce(quoi,id) {
$('#que_faire_echange').val(quoi);
$('#que_faire_echange_id').val(id);
$('#que_faire_echange_form').submit();




}


$(document).on('ready readyAgain',function() {
sort_table();
$(".tablesorter").tablesorter();

});
function sort_table()
{



        $(".sort_table").tablesorter(
{



      widgets : [ "filter","columnSelector","group",'reflow'  ],
          widthFixed : true,
 widgetOptions : 
    {
      filter_saveFilters : false,
      filter_reset : ".reset",
      filter_cssFilter: "form-control",

      filter_formatter : 
      {

        '.filter-date' : function($cell, indx){
          return $.tablesorter.filterFormatter.uiDatepicker( $cell, indx, {
            // from : '08/01/2013', // default from date
            // to   : '1/18/2014',  // default to date
            changeMonth : true,
            changeYear : true

          });

                                            },




        },

        columnSelector_container : $('#columnSelector'),
        // column status, true = display, false = hide
        // disable = do not display on list
        columnSelector_columns : {
            0: 'disable' /* set to disabled; not allowed to unselect it */
        },
        // remember selected columns (requires $.tablesorter.storage)
        columnSelector_saveColumns: true,

        // container layout
        columnSelector_layout : '<label><input type="checkbox">{name}</label>',
        // layout customizer callback called for each column
        // function($cell, name, column){ return name || $cell.html(); }
        columnSelector_layoutCustomizer : null,
        // data attribute containing column name to use in the selector container
        columnSelector_name  : 'data-selector-name',

        /* Responsive Media Query settings */
        // enable/disable mediaquery breakpoints
        columnSelector_mediaquery: true,
        // toggle checkbox name
        columnSelector_mediaqueryName: 'Auto: ',
        // breakpoints checkbox initial setting
        columnSelector_mediaqueryState: true,
        // hide columnSelector false columns while in auto mode
        columnSelector_mediaqueryHidden: true,

        // set the maximum and/or minimum number of visible columns; use null to disable
        columnSelector_maxVisible: null,
        // responsive table hides columns with priority 1-6 at these breakpoints
        // see http://view.jquerymobile.com/1.3.2/dist/demos/widgets/table-column-toggle/#Applyingapresetbreakpoint
        // *** set to false to disable ***
        columnSelector_breakpoints : [ '20em', '30em', '40em', '50em', '60em', '70em' ],
        // data attribute containing column priority
        // duplicates how jQuery mobile uses priorities:
        // http://view.jquerymobile.com/1.3.2/dist/demos/widgets/table-column-toggle/
        columnSelector_priority : 'data-priority',

        // class name added to checked checkboxes - this fixes an issue with Chrome not updating FontAwesome
        // applied icons; use this class name (input.checked) instead of input:checked
        columnSelector_cssChecked : 'checked'



    },    
  filter_placeholder : {
        from : 'De...',
        to   : 'à...'
      }



});

if ($('.table_pager').length > 0)
{
  var pagerOptions = {size:20,    container: $(".pager")};
  $('.table_pager').tablesorterPager(pagerOptions);
}



}






function tuto_deplacement_precis(t) {


                    return;



}
function tuto_fermeture() {
$('#presentation_div').fadeOut(1000);
$('#presentation_divtext').html('');



}
function tuto_deplacement(where,html) {
if (('#presentation_div').length = 0) { return false; }
var pos = $(where).offset();
var top = pos.top + 30;
var left = pos.left ;
$('#presentation_div').animate({

left: left,
top: top

}, 1000, function() {
});
$('#presentation_divtext').html(html)

}   



var isActualModal=false;
function fen_stable(titre,html,taille,retour1,retour2) {
  isActualModal=true;

   width = document.body.clientWidth;
fen_ferme_all();

  if (width > 1200)
  {
    taille = '800px';
  }
else
{
    taille = width + 'px';
}



$('body').append("<div id='big_big_black' style='background:rgba(0,0,0,0.6)  ;backdrop-filter: blur(7px);;opacity:0.5;  filter: alpha(opacity = 50);  position:fixed;width:100%;height:100%;top:0;left:0'></div><div class='bougeable' style='width:" + taille + ";margin-left:-" + parseInt(taille) / 2 +   "px;'><div class='bougeable_handle'>" + titre + "<img src='https://www.hexaplus.fr/img/icon-close.png' class='bougeable_close'/></div><div class='bougeable_contenu'>" +html + "<script>var retour1="+retour1 + ";"  +"var retour2=" + retour2 + ";</script></div></div>") ;

}



$(document).on('click','#big_big_black',function() {
  $('.bougeable_close').trigger('click');
  });
  
  $(document).on('click','.bougeable_close',function() {
    closeBackDrop();
    $(this).parents().eq(1).fadeOut('slow',function(){
            $(this).remove(); });
  isActualModal=false;
    });
$(document).keydown(function(e) {
  if (!isActualModal) { return ;}
  if (e.keyCode == 27) {
    console.log('fermeture modal');
    $('.bougeable_close').trigger('click');
  }
});







/**
 * jquery.filterTable
 *
 * This plugin will add a search filter to tables. When typing in the filter,
 * any rows that do not contain the filter will be hidden.
 *
 * Utilizes bindWithDelay() if available. https://github.com/bgrins/bindWithDelay
 *
 * @version v1.5.4
 * @author Sunny Walker, swalker@hawaii.edu
 * @license MIT
 */
!function($){var e=$.fn.jquery.split("."),t=parseFloat(e[0]),i=parseFloat(e[1]);$.expr[":"].filterTableFind=2>t&&8>i?function(e,t,i){return $(e).text().toUpperCase().indexOf(i[3].toUpperCase())>=0}:jQuery.expr.createPseudo(function(e){return function(t){return $(t).text().toUpperCase().indexOf(e.toUpperCase())>=0}}),$.fn.filterTable=function(e){var t={autofocus:!1,callback:null,containerClass:"filter-table  form-group",containerTag:"p",hideTFootOnFilter:!1,highlightClass:"alt",inputSelector:null,inputName:"",inputType:"text",label:"<i class='icon-binoculars'></i>  Recherche dans le tableau :",minRows:5,placeholder:"Chercher dans ce tableau",preventReturnKey:!0,quickList:[],quickListClass:"quick",quickListGroupTag:"",quickListTag:"a",visibleClass:"visible"},i=function(e){return e.replace(/&/g,"&amp;").replace(/"/g,"&quot;").replace(/</g,"&lt;").replace(/>/g,"&gt;")},n=$.extend({},t,e),a=function(e,t){var i=e.find("tbody");""===t?(i.find("tr").show().addClass(n.visibleClass),i.find("td").removeClass(n.highlightClass),n.hideTFootOnFilter&&e.find("tfoot").show()):(i.find("tr").hide().removeClass(n.visibleClass),n.hideTFootOnFilter&&e.find("tfoot").hide(),i.find("td").removeClass(n.highlightClass).filter(':filterTableFind("'+t.replace(/(['"])/g,"\\$1")+'")').addClass(n.highlightClass).closest("tr").show().addClass(n.visibleClass)),n.callback&&n.callback(t,e)};return this.each(function(){var e=$(this),t=e.find("tbody"),l=null,s=null,r=null,o=!0;"TABLE"===e[0].nodeName&&t.length>0&&(0===n.minRows||n.minRows>0&&t.find("tr").length>n.minRows)&&!e.prev().hasClass(n.containerClass)&&(n.inputSelector&&1===$(n.inputSelector).length?(r=$(n.inputSelector),l=r.parent(),o=!1):(l=$("<"+n.containerTag+" />"),""!==n.containerClass&&l.addClass(n.containerClass),l.prepend(n.label+" "),r=$('<input type="'+n.inputType+'" placeholder="'+n.placeholder+'" name="'+n.inputName+'" />'),n.preventReturnKey&&r.on("keydown",function(e){return 13===(e.keyCode||e.which)?(e.preventDefault(),!1):void 0})),n.autofocus&&r.attr("autofocus",!0),$.fn.bindWithDelay?r.bindWithDelay("keyup",function(){a(e,$(this).val())},200):r.bind("keyup",function(){a(e,$(this).val())}),r.bind("click search",function(){a(e,$(this).val())}),o&&l.append(r),n.quickList.length>0&&(s=n.quickListGroupTag?$("<"+n.quickListGroupTag+" />"):l,$.each(n.quickList,function(e,t){var a=$("<"+n.quickListTag+' class="'+n.quickListClass+'" />');a.text(i(t)),"A"===a[0].nodeName&&a.attr("href","#"),a.bind("click",function(e){e.preventDefault(),r.val(t).focus().trigger("click")}),s.append(a)}),s!==l&&l.append(s)),o&&e.before(l))})}}(jQuery);


/* CSV
*/


$(document).ready(function() {
to_csv_fn();


});
function to_csv_fn()
{
    txt = "<form method='post' action='" + lien_projet + '/to-csv.php' +"' class='no_submit form_csv'><input type='hidden' name='csv' class='csv_data' value=\"\"><a class='export_csv_go btn btn-primary btn-xs icon-download-alt' href='" + lien_projet + '/to-csv.php' + "' data-table='.tablesorter'>Télécharger au format CSV (excel)</a></form>";

    $('.table_csv').before(txt);
    $('body').on('click','.export_csv_go',function()
    {
        form = $(this).parents('.form_csv');
        element = $(this).attr('data-table') ;



        var csv= form.next(element).table2CSV({delivery:'value',separator : ';'});
        $(this).parents('.form_csv').find('.csv_data').val(csv);

        $(this).parents('.form_csv').submit()

        return false;

    });


}



jQuery.fn.table2CSV = function(options) {
    var options = jQuery.extend({
        separator: ',',
        header: [],
        delivery: 'popup' // popup, value
    },
    options);

    var csvData = [];
    var headerArr = [];
    var el = this;

    //header
    var numCols = options.header.length;
    var tmpRow = []; // construct header avalible array

    if (numCols > 0) {
        for (var i = 0; i < numCols; i++) {
            tmpRow[tmpRow.length] = formatData(options.header[i]);
        }
    } else {
        $(el).filter(':visible').find('th').each(function() {
            if ($(this).css('display') != 'none') tmpRow[tmpRow.length] = formatData($(this).html());
        });
    }

    row2CSV(tmpRow);

    // actual data
    $(el).find('tr').each(function() {
        var tmpRow = [];
        $(this).filter(':visible').find('th,td').each(function() {
            if ($(this).css('display') != 'none') { 
              tmp_html=$(this).html();

             tmp_html= $('<div/>').html("<td>" + tmp_html + "</td>").contents();

             tmp_html.find('input[type="text"], input:not([type]),textarea').each(function() {
                $(this).replaceWith($(this).val());
             });
        
              tmpRow[tmpRow.length] = formatData( tmp_html.text() );

                }
        });
        row2CSV(tmpRow);
    });
    if (options.delivery == 'popup') {
        var mydata = csvData.join("\n");
        return popup(mydata);
    } else {
        var mydata = csvData.join("**|_|**");
        return mydata;
    }

    function row2CSV(tmpRow) {
        var tmp = tmpRow.join('') // to remove any blank rows
        // alert(tmp);
        console.log(tmp);

        if (tmpRow.length > 0 && tmp != '') {
            var mystr = tmpRow.join(options.separator);
            csvData[csvData.length] = mystr;
        }
    }
    function formatData(input) {
        // replace " with â
        var regexp = new RegExp(/["]/g);
        var output = input.replace(regexp, "â");
        //HTML
        var regexp = new RegExp(/\<[^\<]+\>/g);
        var output = output.replace(regexp, "");
        if (output == "") return '';
        return '"' + output + '"';
    }
    function popup(data) {
        var generator = window.open('', 'csv', 'height=400,width=600');
        generator.document.write('<html><head><title>CSV</title>');
        generator.document.write('</head><body >');
        generator.document.write('<textArea cols=70 rows=15 wrap="off" >');
        generator.document.write(data);
        generator.document.write('</textArea>');
        generator.document.write('</body></html>');
        generator.document.close();
        return true;
    }
};


 




(function ( $ ) {
$.fn.sumTable = function() {
thead = $(this).children('thead');
var tds = thead.children('tr').children('th').length;
txt=null;

for (var i = 0 ; i < tds; i++) {
text_column =thead.children('tr').children('th:nth-child(' + (i+1) +')');
data_type = text_column.attr('data-type');
txt+= "<td><b>Total  " + text_column.text() +"</b><br/><span style='display:block' class='sum_total' data-type='"+data_type+"'></span></td>";
};
txt= "<tr>"+txt+"</tr>";
var s = $(window).scrollTop();
var foot = $(this).find('tfoot');
    if (!foot.length) foot = $('<tfoot>').appendTo($(this)); 
    foot.append($(txt));
      $('html, body').animate( { scrollTop: s }, 1 ); // Go
setInterval(sum_total, 3000,$(this));

};
}( jQuery ));

function sum_total(t)
{
  
t.find('.sum_total').each(function() {
index = $(this).parents('td').index();
$(this).text(index);
data_type = $(this).attr('data-type');
var tmp = 0;
  t.find("tbody td:nth-child(" + (index+1)+ "):visible").each(function()
  {
    if (data_type=='string') { tmp+=1;}
    else if (data_type=='no_calcul') { tmp='-';}
    else 
    {
        str = $(this).text();
        var str = str.replace(" ", ""); 
        if (str=='') { str=0;}
        tmp+= parseFloat(str);
    }
  
  });

if (data_type=='' || data_type =='undefined'  ) 
{  
tmp=parseFloat(tmp);
tmp=tmp.toFixed(2); 
if (isNaN(tmp)) { tmp='-' ; }
}

$(this).text( tmp);

});
return true;
}


function ajax_load(page,destination)
{
$(destination).load(page + " " + destination,function() {
  fen_ferme_all();
$(destination).fadeOut().fadeIn();
  $(document).trigger('readyAgain');


});

}


(function ( $ ) {
$.fn.export_table = function() {
  $('.export_table_btn').remove();
$(this).before("<span class='btn btn-primary export_table_btn mb-1'  ><i class='fas fa-file-excel'></i> Exporter</span>");
};


    $.fn.appendVal = function( TextToAppend,params={breakLine:true,dateDebut:true} ) {
        var end = '';
        if (params.breakLine) { end = '\n\r'; }


        var d = new Date();
        strDate = '';
        if (params.dateDebut) {         var strDate = new Date().toLocaleString() + ':'; }
        return $(this).val(
            strDate +
            $(this).val() + TextToAppend + end
        ).trigger('change');
    };
    $.fn.prependVal = function( TextToPrepend,params={breakLine:true,dateDebut:true} ) {
        var end ='';
        if (params.breakLine) { end = '\n'; }
        var d = new Date();
        strDate = '';
        if (params.dateDebut) {         var strDate = new Date().toLocaleString() + ':' ; }
        return $(this).val( end + strDate +
            TextToPrepend +
            $(this).val()
        ).trigger('change');
    };


}( jQuery ));




$(document).on('ready readyAgain',function() {
$('.export_table').export_table();
$('body').on('click','.export_table_btn',function()
 {


tablee = $(this).next('table');

if (tablee.floatThead)
{
  let reinit = tablee.floatThead('destroy'); // entraine un bug sur l'export vu que les tables sont décalées.
}


tablee.find(':hidden').addClass('markedForRemoval');

tablec = tablee.clone();


tablec.find('select').each(function()
{
  var tmp1 = $(this);
  console.log($(this).val());
  var tmp = $("option:selected",this).text();
  console.log(tmp);
  $(this).replaceWith(tmp);

});

tablec.find('.markedForRemoval').remove();


tablec.find('input').each(function()
{
  var tmp = $(this).val();

  $(this).replaceWith(tmp);

});



tableb = tablee.next('.floatThead-floatContainer').clone();
tableb.find('.tablesorter-ignoreRow').remove();
if (tablee.attr('data-ex-column-remove'))
{
var myarr = tablee.attr('data-ex-column-remove').split(":");



myarr.forEach(function(xx)
{

tablec.find("tr").find("td:eq(" + xx + ")").remove();
tablec.find("tr").find("th:eq(" + xx + ")").remove();
tableb.find("tr").find("th:eq(" + xx + ")").remove();
});
}
if (tableb)
{
 // tablec.find('thead').remove();
}


if (tablee.attr('data-ex-remove-link'))
{
  tablec.find('a').contents().unwrap();
}



html = tablec.prop('outerHTML');
htmlbefore=tableb.prop('outerHTML');



html = html ; 
if (typeof reinit !== undefined && tablee.floatThead)
{

  tablee.floatThead();
}

var postData = new FormData();
postData.append('table', JSON.stringify(html));

var xhr = new XMLHttpRequest();
xhr.open('POST', lien_projet+"/ra/to_excel/table_to_excel/", true);
xhr.responseType = 'blob';
xhr.onload = function (e) {
    var blob = e.currentTarget.response;
    var contentDispo = e.currentTarget.getResponseHeader('Content-Disposition');
    var fileName = contentDispo.match(/filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/)[1];
    var a = document.createElement('a');
    a.href = window.URL.createObjectURL(blob);
    a.download = fileName;
    a.dispatchEvent(new MouseEvent('click'));
}
xhr.send(postData);


//form.submit();
 });
$('.sum_table').sumTable();

});
