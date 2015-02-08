jQuery(document).ready(function ($) {
	"use strict";
	jQuery.browser={};(function(){jQuery.browser.msie=false;
	jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)\./)){
	jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();
	jQuery("#layout").fitVids();
	if ($(".textwidget")[0]) {
		jQuery('.textwidget').addClass('clearfix');
	}
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 0
	});

	// Nav
	if ($(".res_mode")[0]) {
		if ($("#mymenu")[0]) {
			jQuery('#mymenu').before('<a class="btn_canvas" href="#mymenu"><i class="fa fa-bars"></i></a>');
			jQuery('#mymenu').mmenu({
				position: "left",
				zposition: "next"
			}, {
				clone  : true
			});
		}
		jQuery('.mm-menu .mm-list').removeClass('sf-menu res_mode sf-js-enabled sf-shadow');
	}
	if ($(".sf-menu")[0]) {
		$('.selectedLava').parents('li').addClass('current selectedLava');
		$('.sf-menu').superfish({
			delay: 100,
			animation: {
				opacity: 'show', height: 'show'
			},
			speed: 100,
			autoArrows: true
		}).lavaLamp({
			fx: "easeOutExpo", 
			speed: 600,
			setOnClick: false,
			click: function(event, menuItem) {
				return true;
			}
		});
		$('a.sf-with-ul .sub').before('<span class="sf-sub-indicator"><i class="fa fa-angle-down"></i></span>');
	}

	// Login
	jQuery('#popupLogin .submit:not(.disabled)').click(function() {
		$(this).parent('form').submit();
		return false;
	});
	jQuery('.login-form form').submit(function() {
		if (jQuery.trim($('#T20_username').val()) === '') {
			$('#T20_username').select();
			return false;
		} else if (jQuery.trim($('#T20_password').val()) === '') {
			$('#T20_password').select();
			return false;
		} else {
			var form=$(this);
			var loader=form.find('.login_load');
			var message=$(this).parent().find('.login_error');
			var data = {
				action: 'T20_login',
				username: form.find('#T20_username').val(),
				password: form.find('#T20_password').val(),
				nonce: form.find('#T20_nonce').val()
			};
	
			loader.css('display', 'inline-block');
			message.slideUp(300);
	
			$.post(ajaxurl_T20, data, function(response) {
				if(response.match('success') != null) {
					loader.html('<i class="fa fa-check"></i>');
					window.location.reload(true);
				} else {
					message.html(response).slideDown(300);
					loader.hide();
				}			
			});
			
			return false;
		}
	});

	// Tabs
	var tabs = jQuery('.widget ul.tabs');
	tabs.each(function (i) {
		var tab = jQuery(this).find('> li > a');
		tab.click(function (e) {
			var contentLocation = jQuery(this).attr('href');
			if (contentLocation.charAt(0) === "#") {
				e.preventDefault();
				tab.removeClass('active');
				jQuery(this).addClass('active');
				jQuery(contentLocation).fadeIn(500).addClass('active').siblings().hide().removeClass('active');
			}
		});
	});

	// Others
	if ($(".tagcloud")[0]) {
		$('.tagcloud a').prepend('<i class="fa fa-tag mi"></i>');
	}
	if ($(".big_slider")[0]) {
	 	var headdown_h = $('#header').height();
		$('.big_slider').css('margin-top', - headdown_h + 'px');
	}
	jQuery('#toTop').click(function () {
		jQuery('body,html').animate({
			scrollTop: 0
		}, 800);
	});
	$(".notification-close").click(function () {
		$(this).parent().slideUp("slow");
		return false;
	});

	// Owl
	if ($("[class^='gallery_']")[0]) {
		$("[class^='gallery_']").owlCarousel({
			slideSpeed : 600,
			paginationSpeed : 1000,
			items : 1,
			singleItem:true,
			autoPlay: true,
			stopOnHover: true,
			autoHeight: false,
			responsive: true,
			navigation : true,
			pagination: false,
			paginationNumbers: false,
			navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
		});
	}
	if ($("[class^='slideshow_']")[0]) {
		$("[class^='slideshow_']").owlCarousel({
			slideSpeed : 500,
			paginationSpeed : 1500,
			autoPlay: true,
			autoHeight: true,
			stopOnHover: true,
			transitionStyle : "goDown",
			singleItem:true,
			navigation : false,
			rewindNav : true,
			scrollPerPage : false,
			pagination : true
		});
	}
	if ($("[class^='carousel_posts_']")[0]) {
		$(".grid_2 [class^='carousel_posts_'], .grid_3 [class^='carousel_posts_']").owlCarousel({
			slideSpeed : 600,
			paginationSpeed : 1000,
			items : 1,
			autoPlay: true,
			stopOnHover: true,
			autoHeight: false,
			responsive: true,
			pagination: true,
			paginationNumbers: false
		});
		$(".grid_4 [class^='carousel_posts_']").owlCarousel({
			slideSpeed : 600,
			paginationSpeed : 1000,
			items : 2,
			autoPlay: true,
			stopOnHover: true,
			autoHeight: false,
			responsive: true,
			pagination: true,
			paginationNumbers: false
		});
		$(".grid_6 [class^='carousel_posts_'], .grid_7 [class^='carousel_posts_'], .grid_5 [class^='carousel_posts_']").owlCarousel({
			slideSpeed : 600,
			paginationSpeed : 1000,
			items : 3,
			autoPlay: true,
			stopOnHover: true,
			autoHeight: false,
			responsive: true,
			pagination: true,
			paginationNumbers: false
		});
		$(".grid_10 [class^='carousel_posts_'], .grid_9 [class^='carousel_posts_'], .grid_8 [class^='carousel_posts_']").owlCarousel({
			slideSpeed : 600,
			paginationSpeed : 1000,
			items : 4,
			autoPlay: true,
			stopOnHover: true,
			autoHeight: false,
			responsive: true,
			pagination: true,
			paginationNumbers: false
		});
		$(".grid_11 [class^='carousel_posts_'], .grid_12 [class^='carousel_posts_']").owlCarousel({
			slideSpeed : 600,
			paginationSpeed : 1000,
			items : 5,
			autoPlay: true,
			stopOnHover: true,
			autoHeight: false,
			responsive: true,
			pagination: true,
			paginationNumbers: false
		});
	}

	// Login Popup
	var popupStatus = 0;
	$("#Login_PopUp_Link").click(function() {
		var windowWidth = document.documentElement.clientWidth;
		var windowHeight = document.documentElement.clientHeight;
		var popupHeight = $("#popupLogin").height();
		var popupWidth = $("#popupLogin").width();
		$("#popupLogin").css({
			"top": windowHeight / 2 - popupHeight / 2,
			"left": windowWidth / 2 - popupWidth / 2
		});
		$("#LoginBackgroundPopup").css({"height": windowHeight});
	
		if (popupStatus == 0) {
			$("#LoginBackgroundPopup").css({"opacity": "0.7"});
			$("#LoginBackgroundPopup").fadeIn("slow");
			$("#popupLogin").addClass('zigmaIn').fadeIn("slow");
			popupStatus = 1;
		}
	});

	// Close Popup
	$("#popupLoginClose").click(function() {
		if (popupStatus == 1) {
			$("#LoginBackgroundPopup").fadeOut("slow");
			$("#popupLogin").removeClass('zigmaIn').fadeOut("slow");
			popupStatus = 0;
		}
	});
	$("body").click(function() {
		$("#LoginBackgroundPopup").fadeOut("slow");
		$("#popupLogin").removeClass('zigmaIn').fadeOut("slow");
		popupStatus = 0;
	});
	$('#popupLogin, #Login_PopUp_Link').click(function(e) {
		e.stopPropagation();
	});

	// Tabs widget
	(function() {
		var $tabsNav       = $('.T20-tabs-nav'),
			$tabsNavLis    = $tabsNav.children('li'),
			$tabsContainer = $('.T20-tabs-container');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.T20-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).show();
			$this.children('li').first().addClass('active').stop(true,true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);

			$this.siblings().removeClass('active').end()
			.addClass('active');
			
			$this.parent().next().children('.T20-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).fadeIn();
			e.preventDefault();
		}).children( window.location.hash ? 'a[href=' + window.location.hash + ']' : 'a:first' ).trigger('click');

	})();

	// Gallery
	if ($("#tp-grid")[0]) {
		var $grid = $( '#tp-grid' ),
			$name = $( '#name' ),
			$oldname = $( '#name' ).html(),
			$close = $( '#close' ),
			$loader = $( '<div class="loader"><i></i><i></i><i></i><i></i><i></i><i></i><span>Loading...</span></div>' ).insertBefore( $grid ),
		stapel = $grid.stapel( {
			randomAngle : true,
			delay : 100,
			gutter : 0,
			pileAngles : 3,
			onLoad : function() {
				$loader.remove();
			},
			onBeforeOpen : function( pileName ) {
				$name.html( pileName );
			},
			onAfterOpen : function( pileName ) {
				$("a[data-gal^='photo']").prettyPhoto({theme: 'dark_rounded',social_tools: null});
				$close.show();
			}
		});
		$close.on( 'click', function() {
			$("a[data-gal^='photo']").prettyPhoto().unbind();
			$close.hide();
			$name.html($oldname);
			stapel.closePile();
		});
	}

	// prettyPhoto
	$("a[data-gal^='photo']").prettyPhoto({theme: 'dark_rounded',social_tools: null});
	/*
	$('.inside_single a').has('img').addClass('prettyPhoto');
	$(".inside_single a[class^='prettyPhoto']").prettyPhoto();
	$('.inside_single a').has('img').attr('rel', 'gallery'); 
	$('.inside_single a').click(function () {
		var desc = $(this).attr('title');
		$('.inside_single a').has('img').attr('title', desc, 'rel', 'gallery' ); 
	});
	$(".inside_single a.prettyPhoto").prettyPhoto();
	*/

	// Tipsy
	$('.toptip').tipsy({fade: true,gravity: 's'});
	$('.bottomtip').tipsy({fade: true,gravity: 'n'});
	$('.righttip').tipsy({fade: true,gravity: 'w'});
	$('.lefttip').tipsy({fade: true,gravity: 'e'});
	$('input').tipsy({trigger: 'focus', gravity: 'w'});

	// Sticky
		$('.my_sticky').before('<div class="Corpse_Sticky"></div>');
		$(window).scroll(function(){
			var wind_scr = $(window).scrollTop();
			var window_width = $(window).width();
			var head_w = $('.my_sticky').height();
			if (window_width >= 959) {
			 	var headdown_h = $('#header').height();
				$('.big_slider').css('margin-top', - headdown_h + 'px');
				if(wind_scr < 200){
				 	var headdown_h = $('#header').height();
					$('.big_slider').css('margin-top', - headdown_h + 'px');
					if($('.my_sticky').data('ssticky') === true){
						$('.my_sticky').data('ssticky', false);
						$('.my_sticky').stop(true).animate({opacity : 0}, 300, function(){
							$('.my_sticky').removeClass('ssticky');
							$('.my_sticky').stop(true).animate({opacity : 1}, 300);
							$('.Corpse_Sticky').css('padding-top', '');
						});
					}
				} else {
				 	var headdown_h = $('#header').height();
					$('.big_slider').css('margin-top', - headdown_h + 'px');
					if($('.my_sticky').data('ssticky') === false || typeof $('.my_sticky').data('ssticky') === 'undefined'){
						$('.my_sticky').data('ssticky', true);
						$('.my_sticky').stop(true).animate({opacity : 0},300,function(){
							$('.my_sticky').addClass('ssticky');
							$('.my_sticky.ssticky').stop(true).animate({opacity : 1}, 300);
							$('.Corpse_Sticky').css('padding-top', head_w + 'px');
						});
					}
				}
			}
		});
		$(window).resize(function(){
			var window_width = $(window).width();
			if (window_width <= 959) {
			 	var headdown_h = $('#header').height();
				$('.big_slider').css('margin-top', - headdown_h + 'px');
				if($('.my_sticky').hasClass('ssticky')){
					$('.my_sticky').removeClass('ssticky');
					$('.my_sticky').stop(true).animate({opacity : 0}, 300, function(){
						$('.my_sticky').removeClass('ssticky');
						$('.my_sticky').stop(true).animate({opacity : 1}, 300);
						$('.Corpse_Sticky').css('padding-top', '');
					});
				}
			}
		});

	// Custom
	$('.my_vol_h').on({
		mouseenter: function () {
			jQuery('.tt_vol').fadeIn();
		},
		mouseleave: function () {
			jQuery('.tt_vol').fadeOut();
		}
	});
	$(".jp-current-time").live("click", function() {
		jQuery('.jp-current-time').fadeOut();
		jQuery('.jp-duration').addClass('in_view_duration').fadeIn();
	});
	$(".in_view_duration").live("click", function() {
		jQuery('.jp-duration').removeClass('in_view_duration').fadeOut();
		jQuery('.jp-current-time').fadeIn();
	});

	// OnePage
	if ($(".OneNav")[0]){
		$('body').plusAnchor({
			easing: 'easeInOutExpo',
			speed:  1800
		});
		$('.OneNav li').click(function(){
			$(this).delay(1000).queue(function(next){
				$(this).find('li.current').removeClass("current").delay(1000).queue(function(next){
					$(this).addClass('current');
					next();
				});
			});
		});

		// Bind to scroll
		$(window).scroll(function(){
			var lastId,
				topMenu = $(".OneNav"),
				topMenuHeight = topMenu.outerHeight()+15,
				menuItems = topMenu.find("a"),
			scrollItems = menuItems.map(function(){
				var item = $($(this).attr("href"));
				if (item.length) { return item; }
			});
			var fromTop = $(this).scrollTop()+topMenuHeight;
			var cur = scrollItems.map(function(){
			if ($(this).offset().top < fromTop)
				return this;
			});
			// Get the id of the current element
			cur = cur[cur.length-1];
			var id = cur && cur.length ? cur[0].id : "";
		   
			if (lastId !== id) {
				lastId = id;
				// Set/remove active class
				menuItems
				.parent().removeClass("current")
				.end().filter("[href=#"+id+"]").parent().addClass("current");
			}                   
		});
	}
});

// Count plays
function ajax_favorite_plays(post_id, _post_type, _vote_type, $obj) {
		jQuery.ajax({
			url: ajaxurl_T20,
			data: { action: 'ajax_favorite_plays', vote_post_id: post_id, vote_post_type: _post_type, vote_type: _vote_type },
			cache: false,
			success: function(data) {
				//not integer returned, so error message
				if( parseInt(data,0) > 0 ){
					write_favorite_like_cookie(post_id);
					jQuery($obj);
					// jQuery("span.plays").html(data);
				} else {
					alert(data);
				}
			},
			error: function(MLHttpRequest, textStatus, errorThrown){  
				alert(errorThrown); 
			}  
		});
}
// Cookie checker
function check_favorite_like_cookie(post_id){
	var str = getCookieValue( "post_id" );
	if(str.indexOf("[" + post_id + "]") > -1) {
		return true;
	}
	
	return false;
}

// Cokie writer
function write_favorite_like_cookie(post_id){
	var now = new Date();
	now.setMonth( now.getYear() + 1 ); 
	post_id = "[" + post_id + "]," + getCookieValue("post_id");
	document.cookie="post_id=" + post_id + "; expires=" + now.toGMTString() + "; path=/; ";
}

// Read cookie
function getCookieValue(key){
    var currentcookie = document.cookie;
    if (currentcookie.length > 0)
    {
        var firstidx = currentcookie.indexOf(key + "=");
        if (firstidx !== -1)
        {
            firstidx = firstidx + key.length + 1;
            var lastidx = currentcookie.indexOf(";", firstidx);
            if (lastidx === -1)
            {
                lastidx = currentcookie.length;
            }
            return unescape(currentcookie.substring(firstidx, lastidx));
        }
    }
    return "";
}