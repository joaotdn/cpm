<?php
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

//Get new images formats
if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'videos-thumb', 278, 206, true );
  add_image_size( 'news-thumb', 280, 225, true );
  add_image_size( 'events-thumb', 205, 150, true );
}

add_filter( 'jpeg_quality', 'tgm_image_full_quality' );
add_filter( 'wp_editor_set_quality', 'tgm_image_full_quality' );
/**
 * Filters the image quality for thumbnails to be at the highest ratio possible.
 *
 * Supports the new 'wp_editor_set_quality' filter added in WP 3.5.
 *
 * @since 1.0.0
 *
 * @param int $quality The default quality (90)
 * @return int $quality Amended quality (100)
 */
function tgm_image_full_quality( $quality ) {
 
    return 100;
 
}

//Register menu
/*
function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Main Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

function my_wp_nav_menu_args( $args = '' ) {
  $args['container'] = false;
  return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
*/

//Get jQuery
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'my_scripts_method');


/**
 * Post type : Trabalhos
 */

/*
function works_init() {
  $labels = array(
    'name'               => 'Trabalhos',
    'singular_name'      => 'Trabalho',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar novo trabalho',
    'edit_item'          => 'Editar Trabalho',
    'new_item'           => 'Novo Trabalho',
    'all_items'          => 'Todos os Trabalhos',
    'view_item'          => 'Ver Trabalho',
    'search_items'       => 'Buscar Trabalhos',
    'not_found'          => 'N�o encontrado',
    'not_found_in_trash' => 'N�o encontrado',
    'parent_item_colon'  => '',
    'menu_name'          => 'Trabalhos'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'trabalhos' ),
    'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'menu_position'      => 1,
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
  );

  register_post_type( 'trabalhos', $args );

  $labels = array(
    'name'              => __( 'Clientes'),
    'singular_name'     => __( 'Cliente'),
    'search_items'      =>  __( 'Buscar' ),
    'popular_items'     => __( 'Mais usados' ),
    'all_items'         => __( 'Todos os clientes' ),
    'parent_item'       => null,
    'parent_item_colon' => null,
    'edit_item'         => __( 'Add novo' ),
    'update_item'       => __( 'Atualizar' ),
    'add_new_item'      => __( 'Adicionar novo cliente' ),
    'new_item_name'     => __( 'Novo' )
    );

  register_taxonomy("clientes", array("trabalhos"), array(
    "hierarchical"      => true, 
    "labels"            => $labels, 
    "singular_label"    => "Cliente", 
    "rewrite"           => true,
    "add_new_item"      => "Adicionar novo cliente",
    "new_item_name"     => "Novo cliente",
  ));
}
add_action( 'init', 'works_init' );
*/

//Get Custom term inside loop
/*
function custom_taxonomies_terms_links() {
  global $post, $post_id;
  $post = &get_post($post->ID);
  $post_type = $post->post_type;
  $taxonomies = get_object_taxonomies($post_type);
  foreach ($taxonomies as $taxonomy) {
    $terms = get_the_terms( $post->ID, $taxonomy );
    if ( !empty( $terms ) ) {
      $out = array();
      foreach ( $terms as $term )
        $out[] = $term->name;
      $return = join( ', ', $out );
    }
  }
  return $return;
}
*/

function returnId() {
  global $post, $post_id;
  return $post->ID;
}

function returnContent() {
  $my_postid =  returnId();//This is page id or post id
  $content_post = get_post($my_postid);
  $content = $content_post->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

/*
function getTotalPosts() {
  $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1, 'post_status' => 'publish' ) );
  $count = $query->post_count;

  return $count;
}
*/

/**
 * get_excerpt
 * @param  [Number] $l Limit excerpt cut
 * @return [String]    Excerpt cuted
 */
function get_excerpt($l) {
  $e = substr(get_the_excerpt(), 0,$l);
  return $e;
}

/**
 * Request video
 */
add_action( 'wp_ajax_nopriv_get_video', 'get_video' );
add_action( 'wp_ajax_get_video', 'get_video' );

function get_video() {
  $postid = $_GET['postid'];
  $video = get_post_custom_values('video', $postid);

  if($video[0] !== '') {
    ?>
        <div class="flex-video">
          <?php echo $video[0]; ?>
        </div>
    <?php
  }
  
  exit();
};

/**
 * Theme Options
 */
require_once ( get_stylesheet_directory() . '/theme-options.php' );

?>