<?php add_theme_support( 'menus' ); ?>
<?php

/* Custom Menus */
function register_my_menus() {
  register_nav_menus();
}
add_action( 'init', 'register_my_menus' );

/* Sidebars */
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	register_sidebar(
		array(
			'id' => 'front-sidebar',
			'name' => __( 'front-sidebar' ),
			'description' => __( 'This is the sidebar for the landing page of Wesward.' ),
			'before_widget' => '<article class="block">',
			'after_widget' => '</article>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'calendar-sidebar',
			'name' => __( 'Calendar' ),
			'description' => __( 'This is the sidebar for calendar component of Wesward.' ),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => ''
		)
	);

	register_sidebar(
		array(
			'id' => 'voice-page-sidebar',
			'name' => __( 'Sidebar - Voices' ),
			'description' => __( 'This is the sidebar for Voices page of Wesward.' ),
			'before_widget' => '<article class="block">',
			'after_widget' => '</article>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);

	register_sidebar(
		array(
			'id' => 'footer-sidebar',
			'name' => __( 'Footer Sidebar' ),
			'description' => __( 'This is for the Footer of Wesward.' ),
			'before_widget' => '<aside class="fourcol">',
			'after_widget' => '</aside>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);

}

/* Enable Thumbnails */
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 200, 130, true);

/* Enable 'Read More' */
function new_excerpt_more($more) {
       global $post;
  return ' <a href="'. get_permalink($post->ID) . '">Continue reading...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* Excerpt Word Count limit */
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
return 20; }

/* Disqus */
function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}

?>
