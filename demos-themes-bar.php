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
    <div class="mtc-d-close">Close</div>
    <div class="mtc-d-open">Demos</div>
    <div class="mtc-d-in">
    <div class="mtc-d-text">
      <div class="mtc-d-o">SETTINGS</div>
      <a href="https://themeforest.net/item/magazine-a/17016507?ref=magazine-themes" target="_blank" title="Buy Now">Buy BoomNews Now</a>
      <h4>GET AN AWESOME START!</h4>
      <p>
        With easy <strong>ONE CLICK INSTALL</strong> and fully customizable options, our demos are the best start you'll ever get!!
      </p>
    </div>
    <a class="mtc-demo-1" href="https://boomnews.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/bd-1-1.jpg"/></div></a>
    <a class="mtc-demo-2" href="https://boomnewscraft.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/d_craft2.jpg"/></div></a>
    <a class="mtc-demo-3" href="https://boomnewstech.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/d_tech.jpg"/></div></a>
    <a class="mtc-demo-4" href="https://boomnewsfood.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/d_food.jpg"/></div></a>
    <a class="mtc-demo-5" href="https://boomnewssport.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/d_sport.jpg"/></div></a>
    <a class="mtc-demo-6" href="https://boomnewstravel.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/d_travel.jpg"/></div></a>
    <a class="mtc-demo-8" href="https://boomnewswedding.magazine-themes.net/"><div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/d_wedding.jpg"/></div></a>
    <div><img src="https://2xgsqf1rswon2n2te61220m2-wpengine.netdna-ssl.com/wp-content/uploads/2017/01/moredemo.jpg"/></div>
    <!--<a class="mtc-demo-7" href="http://boomnewsanimal.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_animal.jpg"/></div></a> -->
    <!--<a class="mtc-demo-9" href="http://boomnewslearn.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_school.jpg"/></div></a> -->
    </div>
  </div>


<?php } }


function mt_hide_script() {
		wp_enqueue_script('mt-bar', get_template_directory_uri() . '/inc/js/bar.js', array('jquery'), '1.0', true);
		if(!is_user_logged_in()){ wp_add_inline_script( 'mt-bar', 'if ( top !== self ) top.location.replace( self.location.href );', 'after' ); }
	}
add_action('wp_enqueue_scripts', 'mt_hide_script');

?>
