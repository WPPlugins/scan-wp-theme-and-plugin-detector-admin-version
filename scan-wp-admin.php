<?php
/*
Plugin Name: Scan WP Theme and Plugin Detector - Admin Version
Plugin URI: http://scanwp.net/our-plugins
Description: This plugin adds your own theme and plugin detector page in your admin area in order to help you find a theme and plugins that others use.
Author: Avi Klein
Version: 0.2
Author URI: http://scanwp.net
*/



add_action('admin_menu', 'ScanWP_menu');

function ScanWP_menu(){
	add_menu_page('Scan WP Theme and Plugin Detector - Admin Version', 'Scan WP Theme Detector', 'manage_options', 'scan-wp-theme-and-plugin-detector-admin-version', 'scan_wp_function', 'dashicons-search');

}

function load_scan_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', plugins_url() . '/scan-wp-theme-and-plugin-detector-admin-version/css/style.css' );
        wp_enqueue_style( 'custom_wp_admin_css' );
        wp_enqueue_script( 'my_custom_script', 'http://scanwp.net/js/scanwp-search.js' );
        
}
add_action( 'admin_enqueue_scripts', 'load_scan_wp_admin_style' );



function scan_wp_function(){
		?>
		<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '566513566821789',
          xfbml      : true,
          version    : 'v2.3'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

		<div style="width:100%; text-align: left; direction: ltr;">
			<div style="width:50%; float:left;">
				<h1>Scan WP - Theme and Plugin Detector</h1>
				
				<div id="scanwp"></div>
			</div>
			<div class="scanwp-right-text" style="width:50%; float:left;">
				<h3>How Scan WP Can Help You</h3>
				<p>Scan WP is a Wordpress theme and plugin detector. This unique and one of a kind plugin will help you customize your website however you want</p>
				<p>All you have to do is find a site that you like and want to "imitate", enter the site's URL in the search area on the left and we will give you all the information you need about the site, such as:</p>
				<ul>
					<li>- Theme name</li>
					<li>- Theme version</li>
					<li>- Theme download link</li>
					<li>- Theme Price</li>
					<li>- Plugin names</li>
					<li>- Plugin price</li>
					<li>- Plugin download link</li>
				</ul>
				<p>Now all you need to do is install the theme you found, install the plugins used and you are good to go!</p>
				<h3>Follow us on Facebook</h3>
				<div class="fb-page" data-href="https://www.facebook.com/scanwp" data-width="300" data-height="130" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/scanwp"><a href="https://www.facebook.com/scanwp">Scan WP</a></blockquote></div></div>

			</div>
		</div>

		



		<?php
}

