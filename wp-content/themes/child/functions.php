<?
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts() {

 // Підключення стилів глоабально
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );

    // Підключення стилів та js файлів
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
   };

   // Дає можливість додавати лого з адмінки
add_theme_support("custom-logo");


// Дає можливість додавати привю зображень
      add_theme_support("post-thumbnails");


      // Добавляємо можливість керувати навігацією меню

add_theme_support("menus");

//Додаємо клас силкам навігації

add_filter("nav_menu_link_attributes", 'filter_nav_menu_link_attributes', 10, 3);

function filter_nav_menu_link_attributes($atts, $item, $args) {

 if($args->menu==="main") {
  $atts['class'] = "header__nav-item";

  if($item->current ) {
     $atts['class'] .= " header__nav-item-active";

  }
 }
 ;
 return $atts;

}
?>