/*
Joints Scripts File

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

// Sticky Nav
var stickyNavTop = $('.main-nav-row').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.main-nav-row').addClass('sticky');
} else {
    $('.main-nav-row').removeClass('sticky'); 
}
};
 
stickyNav();
 
$(window).scroll(function() {
  stickyNav();
});


    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 481) {
        $('.postitem:not(.shown)').addClass('shown');

    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
            // Animation for posts
            //    This gets run both on document ready (in case we're loading the document already scrolled down) and window.scroll
        $('.postitem:in-viewport:not(.shown)').addClass('animate').addClass('shown');
        $(window).scroll(function(){
            $('.postitem:in-viewport:not(.shown)').addClass('animate').addClass('shown');
        });

    } /* end larger than 481px */
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
    
        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });

    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }
    
        // This is just so the search box and other purely JS links don't shift the page around.
    $('a[href^="#"]').removeAttr('href');


        // Activate/display the search bar when clicking a specific button.
    $('.nav-search').click(function(event) {
        $('.top-bar-search').removeClass('hide');
    });
    $('#close-search').click(function(event) {
        $('.top-bar-search').addClass('hide');
    });

/******************************************************************************

        // Alert handling stuff.
            // First, if the alert popup cookie doesn't exist, show the alert popup at the top of the screen.
    if($.cookie('effortlessgent-alertpopup')!=='closed') {
        $('#alert-header').delay(2000).slideDown(400, function(){
                // When it gets added, we have to modify the topbar height for the body content to be correct.
            var topbar_height = $('#topbar').height();
            $('body').css('padding-top', topbar_height);
        });
        $('#alert-header-mobile').delay(2000).slideDown(400);
        
    } else {
        console.log("Alert Header: " + $.cookie('effortlessgent-alertpopup'));
            // ONLY FOR TESTING PURPOSES
        $.removeCookie('effortlessgent-alertpopup');
    }
        // This is the trigger button that will close the alert for 14 days.
        //      It saves a local cookie so that the alert doesn't open again automatically for a while.
	$('#close-alert').click(function(event) {
        $('#alert-header').slideUp(400, function(){
            console.log('Alert Close');
                // We also need to re-get the topbar height and change it, since the padding needs to change on the body.
            var topbar_height = $('#topbar').height();
            $('body').css('padding-top', topbar_height);
                // Since we're closing the alert, we'll create a cookie here that expires two weeks from now (change with expires)       
            $.cookie('effortlessgent-alertpopup', 'closed', { expires: 14 });
        });
    });
        // This is the trigger for the mobile-size
    $('#close-alert-mobile').click(function(event){
        $('#alert-header-mobile').slideUp(400, function(){
            console.log('Mobile Alert Close');
            $.cookie('effortlessgent-alertpopup', 'closed', {expires: 14 });
        });
    });
******************************************************************************/

      // Take care of running all the refresh functions when we click the buttons inside of the archives filters navigation
    $('#filters li a').click(function(){
      event.preventDefault();
      $t = $(this);
        // We're only running the thing if the item isn't currently active.
      if(!$t.hasClass('active')) {
          // Get the URL of the link we're opening/loading.
        var query = $(this).attr('href');
          // We need to unbind the infinite scroll here -- otherwise it continues loading the default pages.
        $(window).unbind('.infscr');
          // We have an AJAX loading animation we can trigger here.
        $('.ajax-loader').addClass('animate');
          // Remove the active class from all navs.
        $('#filters li a').removeClass('active');
        $('#inner-content').load('http://effortlessgent.com' + query + ' #inner-content > *', function(){
          // Now that we've reloaded the #main section, including pagination, we can rerun the masonry/infinite scroll stuff
          //  But only if a .postitem actually exists!!
          if($('.postitem').length>0) {
            startMasonScroll('body.blog #main');
            $('.postitem:in-viewport:not(.shown)').addClass('animate').addClass('shown');
          }
          $('.ajax-loader').removeClass('animate');
          $t.addClass('active');
        }); 
      }
    });

}); /* end of as page load scripts */

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );


// Functionality for Alert Bar.
  // jQuery Cookie Plugin v1.3.1, https://github.com/carhartl/jquery-cookie, Copyright 2013 Klaus Hartl, Released under the MIT license
  (function(e){if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(jQuery)}})(function(e){function n(e){return e}function r(e){return decodeURIComponent(e.replace(t," "))}function i(e){if(e.indexOf('"')===0){e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\")}try{return s.json?JSON.parse(e):e}catch(t){}}var t=/\+/g;var s=e.cookie=function(t,o,u){if(o!==undefined){u=e.extend({},s.defaults,u);if(typeof u.expires==="number"){var a=u.expires,f=u.expires=new Date;f.setDate(f.getDate()+a)}o=s.json?JSON.stringify(o):String(o);return document.cookie=[s.raw?t:encodeURIComponent(t),"=",s.raw?o:encodeURIComponent(o),u.expires?"; expires="+u.expires.toUTCString():"",u.path?"; path="+u.path:"",u.domain?"; domain="+u.domain:"",u.secure?"; secure":""].join("")}var l=s.raw?n:r;var c=document.cookie.split("; ");var h=t?undefined:{};for(var p=0,d=c.length;p<d;p++){var v=c[p].split("=");var m=l(v.shift());var g=l(v.join("="));if(t&&t===m){h=i(g);break}if(!t){h[m]=i(g)}}return h};s.defaults={};e.removeCookie=function(t,n){if(e.cookie(t)!==undefined){e.cookie(t,"",e.extend({},n,{expires:-1}));return true}return false}});

/*
 * Load up Foundation
 */
// (function(jQuery) {
//   jQuery(document).foundation();
// })(jQuery);


// (function($){
//   startMasonScroll('body.blog #main');  
//   startMasonScroll('body.archive #main');  
//   startMasonScroll('body.search #main');  
// })(jQuery);

  function startMasonScroll(container){
    
    var $container = $(container);
    
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.postitem',
        isAnimated: false,
        transitionDuration: 0
      });
    });

    $container.infinitescroll({
      navSelector  : '.wp-prev-next',    // selector for the paged navigation 
      nextSelector : '.prev-link a',  // selector for the NEXT link (to page 2)
      itemSelector : '.postitem',     // selector for all items you'll retrieve
      binder       : $(window),
      debug        : false,
      pixelsFromNavToBottom: 200,
      animate      : true,
      extraScrollPx: 100,
      loading: {
          speed: 'fast',
          finishedMsg: 'No more posts to load.',
          img: 'http://effortlessgent.com/wp-content/themes/EffortlessGent/library/js/ajax-loader.gif',
          msgText: 'Loading Posts...'
        }
      },
      // trigger Masonry as a callback
      function( newElements ) {
        // hide new items while they are loading
        var $newElems = $( newElements ).css({ opacity: 0 });
        // ensure that images load before adding to masonry layout
        $newElems.imagesLoaded(function(){
          // show elems now they're ready
          // $newElems.addClass('animate').addClass('shown');
          $container.masonry( 'appended', $newElems, true ); 
            // Make sure to actually show elements when we load
            //    This takes care of the blinkies...
                /* getting viewport width */
             var responsive_viewport = $(window).width();
            /* if is below 481px */
            if (responsive_viewport < 481) {
              $('.postitem:not(.shown)').addClass('shown');
            } else {
              $('.postitem:in-viewport:not(.shown)').addClass('animate').addClass('shown');
            }
        });
      }
    );

  }

