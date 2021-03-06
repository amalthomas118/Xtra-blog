<?php
function load_title(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'load_title');


// checking for acf plugin 
// if( function_exists('acf_add_options_page') ) {
	
// 	acf_add_options_page();
	
// }






function load_stylesheet(){

    wp_register_style('font',get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('styles',get_template_directory_uri() . '/css/templatemo-xtra-blog.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('custom',get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

}

add_action('wp_enqueue_scripts', 'load_stylesheet');


// Load scripts
function addjs()
{

wp_register_scripts('jquery',get_template_directory_uri() . '/js/jquery.min.js', array(), 1, 1, 1);
wp_enqueue_script('jquery');

wp_register_scripts('templatemo',get_template_directory_uri() . '/js/templatemo-script.js', array(), 1, 1, 1);
wp_enqueue_script('templatemo');

wp_register_scripts('custom',get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
wp_enqueue_script('custom');



}

//theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');




//Menus

register_nav_menus(
    array(
    'side-bar' => 'Side Bar Location',
    'mobile-menu' => 'Mobile Menu Location',
    )
);



//custom image size
add_image_size('blog-small', 434, 217, false);

function wpb_comment_count() { 

    $comments_count = wp_count_comments();
    $message =  'There are <strong>'.  $comments_count->approved . '</strong> comments posted by our users.';
    
    return $message; 
    
    } 
    
    add_shortcode('wpb_total_comments','wpb_comment_count'); 
    add_filter('widget_text','do_shortcode');

    
    
    
    
    // To customize the header(sidebar)
function add_class_li($classes, $item, $args){
        if(isset($args->li_class)){
            $classes[] = $args->li_class;
    
        }
        if(isset($args->active_class) && in_array('current-menu-item', $classes)){
            $classes[] = $args->active_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_class_li', '10', 3);
    
    function add_anchor_class($attr, $item, $args){
        if(isset($args->a_class)){
            $attr['class'] = $args->a_class;
        }
        return $attr;
    }
    add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);



    
// gallery block
if (function_exists('acf_register_block_type')) {

    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types()
{

    acf_register_block_type(

        array(

            'name' =>'gallery',
            'title' => __('Gallery'),
            'description' => __('A custom gallery block'),
            'render_template' => 'gallery.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('gallery', 'image'),
        )
    );
}


//blockquote block

function mab_register_acf_block_types() {
    acf_register_block_type( [
        'name'            => 'blockquote',
        'title'           => __( 'Blockquote' ),
        'description'     => __( 'My blockquote block.' ),
        'render_template' => 'blockquote.php',
        'icon'            => 'format-quote',
    ] );
}

if ( function_exists( 'acf_register_block_type' ) ) {
    add_action( 'acf/init', 'mab_register_acf_block_types' );
}