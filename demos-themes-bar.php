  <?php
        /*
        Plugin Name: NextNews Themes Bar
        Plugin URI: https://themeforest.net
        Description: NextNews Theme Bar settings
        Author: Madars Bitenieks
        Version: 1.2
        Author URI: https://themeforest.net
        */

        function magazine_themes_bar() { ?>
          <div class="mtc-d hide-mobile mt-d-off">
            <div class="mtc-d-close"></div>
            <div class="mtc-d-open"><strong>13+ </strong> Demos</div>
            <div class="mtc-d-buy"><a target="_blank" href="https://themeforest.net/item/nextnews-wordpress-theme-for-blog-magazine-newspaper/19695864">Buy Now!</a></div>
            <div class="mtc-d-in">
              <div class="mtc-d-text">
                <h3>NEXTNEWS</h3>
                <h4>See All Installable Demos</h4>
                <p>
                  With easy <strong>one click install</strong> and fully customizable options, our demos are the best start you'll ever get!!
                </p>
              </div>
              <div>
                <a class="mtc-demo" href="https://nextnews01.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo.jpg"/></div></a>
                <a class="mtc-demo" href="https://nextnews02.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_y.jpg"/></div></a>
                <a class="mtc-demo" href="https://nextnews03.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_06.jpg"/></div></a>
              </div>
              <div>
                <a class="mtc-demo" href="https://nextnews04.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_04.jpg"/></div></a>
                <a class="mtc-demo" href="https://nextnews05.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_z.jpg"/></div></a>
                <a class="mtc-demo" href="https://nextnews06.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_03.jpg"/></div></a>
              </div>
              <div>
                <a class="mtc-demo" href="https://nextnews07.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_x.jpg"/></div></a>
                <a class="mtc-demo" href="https://nextnews08.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_08.jpg"/></div></a>
                <a class="mtc-demo" href="https://nextnews09.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_08.jpg"/></div></a>
              </div>
              <div>
                <a class="mtc-demo" href="https://nextnews10.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_x.jpg"/></div></a>
                <a class="mtc-demo" href="https://nextnews11.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_08.jpg"/></div></a>
                <a class="mtc-demo" href="https://nextnews12.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_08.jpg"/></div></a>
              </div>
              <div>
                <a class="mtc-demo" href="https://nextnews13.madzathemes.com"><div><img src="http://nextnewsdemos.tophot.staging.wpengine.com/wp-content/uploads/sites/37/2017/07/demo_08.jpg"/></div></a>
                <div class="mtc-demo mtc-soon"><div>Coming Soon</div></div>
                <div class="mtc-demo mtc-soon"><div>Coming Soon</div></div>
              </div>
            </div>
          </div>


        <?php }





function mt_hide_script() {
		wp_enqueue_script('mt-bar', get_template_directory_uri() . '/inc/js/bar.js', array('jquery'), '1.0', true);
		if(!is_user_logged_in()){ wp_add_inline_script( 'mt-bar', 'if ( top !== self ) top.location.replace( self.location.href );', 'after' ); }
	}
add_action('wp_enqueue_scripts', 'mt_hide_script');

?>
