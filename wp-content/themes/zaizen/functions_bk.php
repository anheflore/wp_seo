<?php
add_action('wp_footer', 'enqueue_script', 5);
function enqueue_script(){
  $home = home_url().'/';
  global $post;
}
function enqueue_style() {
  if(is_home() || is_front_page()){
    wp_enqueue_style('home',get_stylesheet_directory_uri().'/assets/css/style.css');
  } else {
    wp_enqueue_style('page',get_stylesheet_directory_uri().'/assets/css/page.css');
  }
}
add_action('wp_head', 'enqueue_style', 5);
add_action( 'widgets_init', 'zaizen_widget_unit' );
function zaizen_widget_unit(){
  register_sidebar( array(
    'name'          => esc_html__( 'Ranking', 'zaizen' ),
    'id'            => 'Ranking',
    'description'   => esc_html__( 'Ranking', 'zaizen' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );
}
add_theme_support('post-thumbnails');
function get_id_by_slug($page_slug) {
  $page = get_page_by_path($page_slug);
  if ($page) {
    return $page->ID;
  } else {
    return null;
  }
}
function catch_thumbnail_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ // Defines a default image
    $first_img = get_template_directory_uri().'/no-image.jpg';
  }
return $first_img;
}

function action_taxo($taxo){
  $terms = get_terms(array(
    'taxonomy' => $taxo,
    'hide_empty' => false,
    'orderby' => 'ID',
    'order' => 'asc',
    'parent' => 0
  ));
  return $terms;
}
add_filter('list_taxo','action_taxo');

function action_list_columns($cat){
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $tax_querry = array();
  if($cat) {
    $ar_cat = array(
      'taxonomy' => 'kind',
      'terms' => $cat,
      'field' => 'slug',
    );
    array_push($tax_querry,$ar_cat);
  }
  $args = array(
    'post_type' => 'column',
    'orderby'   => 'id',
    'order'     => 'desc',
    'tax_query' => $tax_querry,
    'posts_per_page' => 10,
    'post_status' => 'publish',
    'paged' => $paged
  );
  $query = new WP_Query($args);
  return $query;
}
add_filter('get_list_columns','action_list_columns',10,1);


function per_page_for_page($query){
  if(is_tax('kind') || is_page('columns')) {
    $query->set('posts_per_page',10);
    return;
  }
}
add_action('pre_get_posts','per_page_for_page');

function action_service($get){
  $search_meta = array(
    'relation' => 'AND',
  );
  $method = array();
  $call = array();
  $price =  array();
  $consul = array(
    'relation' => 'OR',
  );
  $feature = array(
    'relation' => 'OR',
  );
  if(array_key_exists('method',$get)){
    if($get['method'] && $get['method']!='null') {
      $method = array(
        'key'	 	=> 'by_phone',
        'value'	  	=> $value,
        'compare' 	=> 'LIKE',
      );
      array_push($search_meta,$method);
    }
  }
  if(array_key_exists('call',$get)){
    if($get['call'] && $get['call']!='null') {
      $call = array(
        'key'	 	=> 'call_charge',
        'value'	  	=> $value,
        'compare' 	=> 'LIKE',
      );
      array_push($search_meta,$call);
    }
  }
  if(array_key_exists('price',$get)){
    if($get['price'] && $get['price']!='null') {
      $price = array(
        'key'	 	=> 'by_price_type',
        'value'	  	=> $value,
        'compare' 	=> 'LIKE',
      );
      array_push($search_meta,$price);
    }
  }
  if(array_key_exists('consul',$get)){
    if($get['consul']) {
      foreach ($get['consul'] as $value) {
        $t = array(
          'key'	 	=> 'consul',
          'value'	  	=> $value,
          'compare' 	=> 'LIKE',
        );
        array_push($consul,$t);
      }
      array_push($search_meta,$consul);
    }
  }
  if(array_key_exists('feature',$get)){
    if($get['feature']) {
      foreach ($get['feature'] as $value) {
        $t = array(
          'key'	 	=> 'feature',
          'value'	  	=> $value,
          'compare' 	=> 'LIKE',
        );
        array_push($feature,$t);
      }
      array_push($search_meta,$feature);
    }
  }
  $args = array(
    'post_type' => 'service',
    'orderby'   => 'id',
    'order'     => 'desc',
    'meta_query' => $search_meta,
    'posts_per_page' => -1,
    'post_status' => 'publish',
  );
  $query = new WP_Query($args);
  return $query;
}
add_filter('get_service','action_service',10,1);
?>