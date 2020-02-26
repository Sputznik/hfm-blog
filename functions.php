<?php
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('hfm-blog-style', get_stylesheet_directory_uri().'/assets/css/hfm-blog.css', array('sp-core-style'), time() ); //'1.0.8'
});

//Sidebar widget for navigation
add_action( 'widgets_init', function(){
  register_sidebar( array(
    'name' 			    => 'Navigation Sidebar',
    'id' 			      => 'navigation-sidebar',
    'description' 	=> 'Sidebar for navigation',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' 	=> '</aside>',
    'before_title' 	=> '<h3 class="widget-title explore">',
    'after_title' 	=> '</h3>',
  ) );

});

add_shortcode( 'sidebar',function(){

  $sidebar_id = 'navigation-sidebar';
  ob_start();
  if( is_active_sidebar( $sidebar_id ) ){
    dynamic_sidebar( $sidebar_id );
  }
  return ob_get_clean();
});

//Add google Comfortaa text font
add_filter( 'sp_list_google_fonts', function( $fonts ){

  // Josefin Sans similar to Brandon Grotesque
  $fonts[] = array(
      'slug'	=> 'montserrat',
      'name'	=> 'Montserrat',
      'url'	  => 'Montserrat'
    );
  return $fonts;
} );

//Excerpt
function excerpt( $limit ) {

	global $post;

	$excerpt = $post->post_excerpt;

	if( !$excerpt && !strlen( $excerpt ) ){

    $excerpt = $post->post_content;
		$excerpt = strip_shortcodes( $excerpt );
		$excerpt = excerpt_remove_blocks( $excerpt );
		$excerpt = str_replace( ']]>', ']]&gt;', $excerpt );

	}

	$excerpt = wp_trim_words( $excerpt, $limit, '...' );

	return $excerpt;
}
//Shortcode for contact icons
add_shortcode('contact_links',function(){

  $html = '';

  $icon_links = array(
    'linkedin' => array(
      'title' => 'Linkedin',
      'url'   => 'http://www.google.com',
      'icon'  => 'fa fa-linkedin'
    ),
    'youtube' => array(
      'title' => 'Youtube',
      'url'   => 'http://www.google.com',
      'icon'  => 'fa fa-youtube-play'
    ),
    'instagram' => array(
      'title' => 'Instagram',
      'url'   => 'http://www.google.com',
      'icon'  => 'fa fa-instagram'
    ),
    'facebook' => array(
      'title' => 'Facebook',
      'url'   => 'http://www.google.com',
      'icon'  => 'fa fa-facebook'
    ),
  );

  $html .= '<ul class="social-icons">';
  foreach( $icon_links as $icon ){
    $html .= '<a title="'.$icon['title'].'" target="_blank" href="'.$icon['url'].'" ><i class="'.$icon['icon'].'"></i></a>';
  }
  $html .= '</ul>';

  ob_start();
  echo $html;
  return ob_get_clean();

});
