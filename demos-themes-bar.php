<?php
/*
Plugin Name: NextNews Themes Bar
Plugin URI: https://themeforest.net
Description: NextNews Theme Bar settings
Author: Madars Bitenieks
Version: 1.2
Author URI: https://themeforest.net
*/

function magazine_themes_bar() { if(!is_user_logged_in()) { ?>
  <div class="mtc-d hide-mobile mt-d-on">
    <div class="mtc-d-close"></div>
    <div class="mtc-d-open"><strong>3+</strong> Demos</div>
    <div class="mtc-d-in">
      <div class="mtc-d-text">
        <h3>NextNews</h3>
        <h4>See All Installable Demos</h4>
        <p>
          With easy <strong>ONE CLICK INSTALL</strong> and fully customizable options, our demos are the best start you'll ever get!!
        </p>
      </div>
      <a class="mtc-demo-1" href="https://boomnews.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/bd-1-1.jpg"/></div></a>
      <a class="mtc-demo-2" href="https://boomnewscraft.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/d_craft2.jpg"/></div></a>
      <a class="mtc-demo-3" href="https://boomnewstech.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/d_tech.jpg"/></div></a>

    </div>
  </div>


<?php } }


function mt_hide_script() {
		wp_enqueue_script('mt-bar', get_template_directory_uri() . '/inc/js/bar.js', array('jquery'), '1.0', true);
		if(!is_user_logged_in()){ wp_add_inline_script( 'mt-bar', 'if ( top !== self ) top.location.replace( self.location.href );', 'after' ); }
	}
add_action('wp_enqueue_scripts', 'mt_hide_script');

?>
