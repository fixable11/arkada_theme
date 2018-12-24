<?php 

add_action('wp_enqueue_scripts', 'arkada_styles');
add_action('wp_enqueue_scripts', 'arkada_scripts');
add_action('init', 'register_post_types');

add_filter( 'image_size_names_choose', 'my_custom_thumb_sizes' );


add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

add_image_size('house_thumbnail', 270, 200, true);
add_image_size('examples_of_works_thumb', 380, 230, true );


function my_custom_thumb_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'examples_of_works_thumb' => 'Секция "примеры работ"',
	) );
}

function register_post_types(){
	register_post_type('extra_posts', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Дополнительная запись', // основное название для типа записи
			'singular_name'      => 'Дополнительная запись', // название для одной записи этого типа
			'add_new'            => 'Добавить запись', // для добавления новой записи
			'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Новая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать запись', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Дополнительные записи', // название меню
		),
		'description'         => 'Дополнительные записи',
		'public'              => true,
		'publicly_queryable'  => false, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('category'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}


function arkada_styles(){
    wp_enqueue_style('main-style', get_stylesheet_uri()); 
}

function arkada_scripts(){

	if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");
    }
	wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', [], null, true);
}

add_filter('get_sample_permalink_html', function($return){

	return $return;
});