
<?php 
add_theme_support('title-tag');
// Theme css and jQuery File calling
function nice_css_js_file_calling(){
    wp_enqueue_style('nice-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),'5.0.2', 'nice');
    wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts', 'nice_css_js_file_calling');

    //Header Area Function
    
//Theme Function
function nice_customizer_register($wp_customize){
    $wp_customize->add_section('nice_header_area', array(
        'title' => __('Header Area', 'nizamuddin'),
        'description' => 'If you interested to update your header area, you can do it here.'
    ));
    $wp_customize->add_setting('nice_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/nice.png',
      ));
    $wp_customize-> add_control(new wp_customize_Image_control($wp_customize, 'nice_logo', array(
        'lable' => 'Logo Upload',
        'setting' => 'nice_logo',
        'section' => 'nice_header_area',
    )));

    
    register_nav_menu( 'main_menu', __('Main Menu', 'nizamuddin') );
// Walker Menu Properties
  function nice_nav_description( $item_output, $item, $args){
    if( !empty ($item->description)){
      $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }
    return $item_output;
  }
  add_filter('walker_nav_menu_start_el', 'nice_nav_description', 10, 3);
    
    

  $wp_customize->add_section('nice_menu_option', array(
    'title' => __('Menu Position Option', 'nizamuddin'),
    'description' => 'If you interested to change your menu position you can do it.'
  ));

  $wp_customize->add_setting('nice_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('nice_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'nice_menu_position',
    'section' => 'nice_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));
  


  // Footer Option
  $wp_customize->add_section('nice_footer_option', array(
    'title' => __('Footer Option', 'nizamuddin'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('nice_copyright_section', array(
    'default' => '&copy; Copyright 2021 | Freelancer Nizam All Right Reserved',
  ));

  $wp_customize-> add_control('nice_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'nice_copyright_section',
    'section' => 'nice_footer_option',
  ));

}


add_action('customize_register', 'nice_customizer_register');
add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size('post-thumbnails', 970, 350, true);

?>