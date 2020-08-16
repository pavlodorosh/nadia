<?php
update_option('siteurl','http://nadiya.biz/');
update_option('home','http://nadiya.biz/');

// function wp_corenavi() {

// global $wp_query, $wp_rewrite;
// $pages = '';
// $max = $wp_query->max_num_pages;
// if (!$current = get_query_var('paged')) $current = 1;
// $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
// $a['total'] = $max;
// $a['current'] = $current;

// $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
// $a['mid_size'] = 1; //сколько ссылок показывать слева и справа от текущей
// $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
// $a['prev_text'] = ''; //текст ссылки "Предыдущая страница"
// $a['next_text'] = ''; //текст ссылки "Следующая страница"

// if ($max > 1) echo '<nav class="navigation">';
// if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
// echo $pages . paginate_links($a);
// if ($max > 1) echo '</nav>';
// }


function nadiyatheme_enqueue_styles() {
//  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
//  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );

  //wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );

  wp_enqueue_style( 'bootstrapnew', get_template_directory_uri() . '/cssnew/bootstrap.min.css' );

  wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

  //wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/style.css' );

  wp_enqueue_style( 'themenew', get_template_directory_uri() . '/cssnew/style.css' );

  wp_enqueue_style( 'theme-info', get_stylesheet_uri());

  wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Limelight|PT+Sans:400,700|Open+Sans:400,300,600,700,800');

  wp_enqueue_style( 'font-style');




}
function nadiyatheme_enqueue_scripts () {
  wp_enqueue_script('jquery');
  wp_deregister_script('jquery');

  wp_register_script( 'jquery', '/jsnew/jquery-3.4.1.slim.min.js', array(), '', true);
  wp_enqueue_script( 'jquery' );

  // wp_register_script( 'jquerymin', get_template_directory_uri().'/jsnew/jquery-migrate.js', array(), '', true);
  // wp_enqueue_script( 'jquerymin' );

  //wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), '', true);
  wp_register_script( 'bootstrap', get_template_directory_uri() . '/jsnew/bootstrap.min.js', array(), '', true);
  wp_enqueue_script( 'bootstrap' );

  wp_register_script( 'popper',  get_template_directory_uri() . '/jsnew/popper.min.js', array(), '', true);
  wp_enqueue_script( 'popper' );

  wp_register_script( 'common',  get_template_directory_uri().'/jsnew/comon.js', array(), '', true);
  wp_enqueue_script( 'common' );

  // wp_register_script( 'all',  'https://use.fontawesome.com/releases/v5.0.13/js/all.js', array(), '', true);
  // wp_enqueue_script( 'all' );
//  wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true);

}

add_action('wp_enqueue_scripts', 'nadiyatheme_enqueue_styles');
add_action('wp_enqueue_scripts', 'nadiyatheme_enqueue_scripts');


// activate menu from admin panel
if (function_exists('add_theme_support')) {
  add_theme_support('menus');
}

// Чтобы редактор WordPress не добавил пустые параграфы
// в наш код в местах перевода строк
//remove_filter('the_content', 'wpautop');


// добавить возможность миниатюр для записей
if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}


// Change "more link" text
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
  return '<p class="text-right"><a class="more-link" href="' . get_permalink() . '">Читати далі... [+]</a></p>';
}

function go_setup() {
		// This theme uses wp_nav_menu() in four location.
		register_nav_menus( array(
			'primary'     => esc_html__( 'Primary Menu', 'education-hub' ),
			'footer'      => esc_html__( 'Footer Menu', 'education-hub' ),
		) );
}
add_action( 'after_setup_theme', 'go_setup' );

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

require_once('wp_bootstrap_navwalker.php');

?>