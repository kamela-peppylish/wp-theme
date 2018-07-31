function load_scripts_styles(){
wp_enqueue_style("bootstrap",get_stylesheet_directory_uri()."/css/bootstrap.min.css");
wp_enqueue_style("font-awesome",get_stylesheet_directory_uri()."/fonts/font-awesome.min.css");
wp_enqueue_style("font-palanquin-bold",get_stylesheet_directory_uri()."/fonts/palanquin-bold-webfont.woff", array(), '', true);
wp_enqueue_style("font-palanquin-lite",get_stylesheet_directory_uri()."/fonts/palanquin-light-webfont.woff", array(), '', true);
wp_enqueue_style("font-palanquin-normal",get_stylesheet_directory_uri()."/fonts/palanquin-regular-webfont.woff", array(), '', true);
wp_enqueue_style("flexslider",get_stylesheet_directory_uri()."/css/flexslider.css", array(), '', true);
 if ( is_page('portfolio') ){wp_enqueue_style("lightbox-css",get_stylesheet_directory_uri()."/css/lightbox.min.css", array(), '', trues);}
 }
add_action('wp_enqueue_scripts','load_scripts_styles');
function reg_my_scripts(){
wp_enqueue_script('jquery','',true);
wp_enqueue_script('bootstrap-min',get_stylesheet_directory_uri().'/js/bootstrap.min.js');        
wp_enqueue_script('flexslider-js',get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js',array( 'jquery' ),'',true);      
wp_enqueue_script('shivprint-js',get_stylesheet_directory_uri().'/js/html5shiv-printshiv.min.js',array( 'jquery' ),'',true);
 if ( is_page('portfolio') ){wp_enqueue_script('lightbox-js',get_stylesheet_directory_uri().'/js/lightbox.min.js','','',true);}
}
add_action('wp_enqueue_scripts','reg_my_scripts');
// Register navigation menus
function register_my_menus(){
register_nav_menus(array( 
    'header-menu' => __('Site Menu','twentyfifteen'),
    'fr-menu' => __('French Menu','twentyfifteen'),
    'nl-menu' => __('Dutch Menu','twentyfifteen'),
    'social-menu' => __('Social Icons menu','twentyfifteen')));
}
add_action('init','register_my_menus');
