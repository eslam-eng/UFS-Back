


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
	jQuery(document).ready(function ($) {
		"use strict";

		$("#frontend_customizer_button").on('click', function () {
			if ($("#frontend_customizer").hasClass('open')) {
				$("#frontend_customizer").removeClass('open');
				$(this).find('.fa').removeClass('fa-spin');
			} else {
				$("#frontend_customizer").addClass('open');
				$(this).find('.fa').addClass('fa-spin');
			}
		});

		$('#main').on('click', function (kik) {
			if (!$(kik.target).is('#frontend_customizer, #frontend_customizer *') && $('#frontend_customizer').is(':visible')) {
				$("#frontend_customizer").removeClass('open');
				$(this).find('.fa').removeClass('fa-spin');
			}
		});

		$("#skin_color span").on('click', function () {
			var style_id = $(this).attr('id');
			$("#skin_color .active").removeClass("active");
			$(this).addClass("active");
			$("#custom_style").remove();
			$.removeCookie( 'site_style', {path: '/'} );
			if( style_id != 'site_style_default' ){
				$("#custom_style").remove();
				$("head").append('<link rel="stylesheet" id="custom_style" href="https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/css/'+style_id+'.css" type="text/css" media="all">');
				if( $.cookie('header_style') == 'header_style_1' || $.cookie('header_style') == 'header_style_3' ){
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-'+style_id+'.svg' );
				}else{
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-'+style_id+'-white.svg' );
				}
				$("#footer .widgets_row .footer_logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-footer-'+style_id+'.svg' );
				$.cookie('site_style', style_id, {expires: 7, path: '/'});
			}else{
				if( $.cookie('header_style') == 'header_style_1' || $.cookie('header_style') == 'header_style_3' ){
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-site_style_blue.svg' );
				}else{
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-site_style_blue-white.svg' );
				}
				$("#footer .widgets_row .footer_logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-footer-site_style_blue.svg' );
				$.cookie('site_style', style_id, {expires: 7, path: '/'});
			}
		});

		if ( $.cookie('site_style') ) {
			$("#skin_color #" + $.cookie('site_style')).addClass("active");
			if( $.cookie('site_style') != 'site_style_default' ){
				$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-'+$.cookie('site_style')+'-white.svg' );
				$("#footer .widgets_row .footer_logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-footer-'+$.cookie('site_style')+'.svg' );
			}else{
				$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-site_style_blue.svg' );
				$("#footer .widgets_row .footer_logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-footer-site_style_blue.svg' );
			}
			if( $.cookie('site_style') != 'site_style_default' ){
				$("head").append('<link rel="stylesheet" id="custom_style" href="https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/css/'+$.cookie('site_style')+'.css" type="text/css" media="all">');
			}
			$("#skin_color #" + $.cookie('site_style') ).addClass("active");
		}else{
			$("#skin_color #site_style_default").addClass("active");
		}


		if ($.cookie('navigation_type') && $.cookie('navigation_type') == 'sticky_header') {
			$("body").addClass('sticky_header');
		}else{
			$("body").removeClass('sticky_header');
		}

		$("#navigation_type").on("click", function () {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$("body").removeClass('sticky_header');
				$.cookie('navigation_type', 'static_header', {expires: 7, path: '/'});
			} else {
				$(this).addClass('active');
				$("body").addClass('sticky_header');
				$.cookie('navigation_type', 'sticky_header', {expires: 7, path: '/'});
			}
		});

		if($("body").hasClass("sticky_header")){
			$("#navigation_type").addClass("active");
		}

		if( $.cookie('site_layout') && $.cookie('site_layout') == 'boxed' ){
			$("#site_layout").addClass('active');
			$("body").addClass('boxed_layout');
			$(".customizer_bg_image").slideDown();
			$('body').removeClass('boxed_bg_image_default boxed_bg_image_pattern');
			if( $("#bg_images span.active").hasClass('image_type') ){
				$('body').addClass('boxed_bg_image_default');
			}else{
				$('body').addClass('boxed_bg_image_pattern');
			}
			$('body').css({'background-image' : 'url(' + $("#bg_images span.active").attr('data-image') + ')'});
			if (window.location.href == 'index.html') {
				window.location.href = 'home-boxed/index.html';
			}
		}

		$("#site_layout").on("click", function () {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$("body").removeClass('boxed_layout');
				$.removeCookie( 'site_layout', {path: '/'} );
				$(".customizer_bg_image").slideUp();
				if (window.location.href == 'home-boxed/index.html') {
					window.location.href = 'index.html';
				}
			} else {
				$(this).addClass('active');
				$("body").addClass('boxed_layout');
				$.cookie('site_layout', 'boxed', {expires: 7, path: '/'});
				$(".customizer_bg_image").slideDown();
				$('body').removeClass('boxed_bg_image_default boxed_bg_image_pattern');
				if( $("#bg_images span.active").hasClass('image_type') ){
					$('body').addClass('boxed_bg_image_default');
				}else{
					$('body').addClass('boxed_bg_image_pattern');
				}
				$('body').css({'background-image': 'url(' + $("#bg_images span.active").attr('data-image') + ')'});

				if (window.location.href == 'index.html') {
					window.location.href = 'home-boxed/index.html';
				}
			}
		});

		$("#bg_images span").on('click', function () {
			$("#bg_images .active").removeClass("active");
			$(this).addClass("active");
			$('body').removeClass('boxed_bg_image_default boxed_bg_image_pattern');
			if( $(this).hasClass('image_type') ){
				$('body').addClass('boxed_bg_image_default');
			}else{
				$('body').addClass('boxed_bg_image_pattern');
			}
			$('body').css({'background-image' : 'url(' + $(this).attr('data-image') + ')'});
		});

		$("select[name='header_style']").on("change", function () {
			$("body").removeClass("header_style_1 header_style_2 header_style_3 header_style_4");
			$("body").addClass($(this).val());
			$.cookie('header_style', $(this).val(), {expires: 7, path: '/'});
			if ($(this).val() == 'header_style_3' || $(this).val() == 'header_style_1') {
				if( $.cookie('site_style') != 'site_style_default' ){
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-'+$.cookie('site_style')+'.svg' );
					$("#footer .widgets_row .footer_logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-footer-'+$.cookie('site_style')+'.svg' );
				}else{
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-site_style_blue.svg' );
					$("#footer .widgets_row .footer_logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-footer-site_style_blue.svg' );
				}
			}else{
				if( $.cookie('site_style') != 'site_style_default' ){
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-'+$.cookie('site_style')+'-white.svg' );
					$("#footer .widgets_row .footer_logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-footer-'+$.cookie('site_style')+'.svg' );
				}else{
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-site_style_blue-white.svg' );
					$("#footer .widgets_row .footer_logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-footer-site_style_blue.svg' );
				}
			}
		});

		if ($.cookie('header_style')) {
			$("body").removeClass("header_style_1 header_style_2 header_style_3 header_style_4");
			$("body").addClass($.cookie('header_style'));
			$("select[name='header_style'] option[value='"+$.cookie('header_style')+"']").attr("selected", "selected");
			if ($.cookie('header_style') == 'header_style_3' || $.cookie('header_style') == 'header_style_1') {
				if( $.cookie('site_style') && $.cookie('site_style') != 'site_style_default' ){
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-'+$.cookie('site_style')+'.svg' );
					$("#footer .widgets_row .footer_logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-footer-'+$.cookie('site_style')+'.svg' );
				}else{
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-site_style_blue.svg' );
					$("#footer .widgets_row .footer_logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-footer-site_style_blue.svg' );
				}
			}else{
				if( $.cookie('site_style') && $.cookie('site_style') != 'site_style_default' ){
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-'+$.cookie('site_style')+'-white.svg' );
					$("#footer .widgets_row .footer_logo a img").attr( 'src', 'https://logistics.stylemixthemes.com/wp-content/themes/transcargo/assets/images/logos/logo-footer-'+$.cookie('site_style')+'.svg' );
				}else{
					$(".top_nav_wr .top_nav .logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-site_style_blue-white.svg' );
					$("#footer .widgets_row .footer_logo a img").attr( 'src', 'wp-content/themes/transcargo/assets/images/logos/logo-footer-site_style_blue.svg' );
				}
			}
		}else{
			$("select[name='header_style'] option[value='header_style_4']").attr("selected", "selected");
		}

	});

</script></div> <!--#main-->
<script>(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();</script><script type="text/html" id="wpb-modifications"></script><link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

		<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				jQuery(sliderID).show().html(err);
			}
		}
		</script>


<link rel='stylesheet' id='vc_google_fonts_abril_fatfaceregular-css'  href='{{ url("/") }}/https://fonts.googleapis.com/css?family=Abril+Fatface%3Aregular&amp;subset=latin&amp;ver=6.4.1' type='text/css' media='all' />


<style id='transcargo-inline-style-inline-css' type='text/css'>
#icon_184760572002ef8d0{height: 64px;
width: 65px;
stroke: #ffffff;
}
#icon_852160572002efe7f{height: 68px;
width: 64px;
stroke: #ffffff;
}
#icon_934560572002f0352{height: 67px;
width: 52px;
stroke: #ffffff;
}
#icon_373860572002f07b3{height: 67px;
width: 68px;
stroke: #ffffff;
}
#icon_6057200305d3c{height: 71px;
width: 68px;
}
#icon_60572003061b8{height: 64px;
width: 71px;
}
#icon_60572003066ee{height: 51px;
width: 72px;
}
#icon_6057200306b1d{height: 50px;
width: 77px;
}
</style>


<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/logistics.stylemixthemes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/plugins/contact-form-7/includes/js/scripts9dff.js?ver=5.3.2' id='contact-form-7-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/jquery.cookie.min5152.js?ver=1.0' id='jquery.cookie-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/bootstrap.min5152.js?ver=1.0' id='bootstrap-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/select2.min5152.js?ver=1.0' id='select2-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/custom5152.js?ver=1.0' id='transcargo-custom.js-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/SmoothScroll5152.js?ver=1.0' id='SmoothScroll-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-includes/js/wp-embed.min40df.js?ver=5.6' id='wp-embed-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.minaec2.js?ver=6.4.1' id='wpb_composer_front_js-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/jquery.fancybox.pack5152.js?ver=1.0' id='jquery.fancybox-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/countUp.min5152.js?ver=1.0' id='countUp-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/jquery.appear5152.js?ver=1.0' id='jquery.appear-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/vivus.min5152.js?ver=1.0' id='vivus-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/themes/transcargo/assets/js/owl.carousel.min5152.js?ver=1.0' id='owl.carousel-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.minaec2.js?ver=6.4.1' id='vc_jquery_skrollr_js-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.minaec2.js?ver=6.4.1' id='vc_accordion_script-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/plugins/js_composer/assets/lib/vc-tta-autoplay/vc-tta-autoplay.minaec2.js?ver=6.4.1' id='vc_tta_autoplay_script-js'></script>
<script type='text/javascript' src='{{ url("/") }}/https://maps.googleapis.com/maps/api/js?v=3.31&amp;ver=1.0' id='gmap-js'></script>
<script type='text/javascript' src='{{ url("/") }}/wp-content/plugins/mailchimp-for-wp/assets/js/forms.mina288.js?ver=4.8.1' id='mc4wp-forms-api-js'></script>
<script type="text/javascript">(function(){window['__CF$cv$params']={r:'63367faefe7c102b',m:'5f93aea590d05c51e09bc363b437a7a2f9b1552e-1616322563-1800-Adryjj4IN44BQEsK7ZLU/gsFpKDe9PvOAyeku0YYGJ88B96LIuJATlTSgwyzCh1L/k8DEonXIjFkHyjr0RzF4UoEwhencKrJLZEKCogJ2MqVV4TFO2I3EmDn9vT6ASYnTQ==',s:[0xc745b04382,0xa06007ccd2],}})();</script></body>
