<?php
function exam_register_post_type()
{
	$labels = array(
		'name'                  => _x('시험', 'Post type general name', 'textdomain'),
		'singular_name'         => _x('시험', 'Post type singular name', 'textdomain'),
		'menu_name'             => _x('시험', 'Admin Menu text', 'textdomain'),
		'name_admin_bar'        => _x('시험', 'Add New on Toolbar', 'textdomain'),
		'add_new'               => __('새로운 시험 추가', 'textdomain'),
		'add_new_item'          => __('새로운 시험 추가', 'textdomain'),
		'new_item'              => __('새로운 시험', 'textdomain'),
		'edit_item'             => __('시험 수정', 'textdomain'),
		'view_item'             => __('시험 보기', 'textdomain'),
		'all_items'             => __('시험 목록', 'textdomain'),
		'search_items'          => __('시험 검색', 'textdomain'),
		'parent_item_colon'     => __('상위 시험:', 'textdomain'),
		'not_found'             => __('현재 입력된 시험을 찾을 수 없습니다.', 'textdomain'),
		'not_found_in_trash'    => __('휴지통에 시험을 찾을 수 없습니다.', 'textdomain'),
		'featured_image'        => _x('시험 이미지', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
		'set_featured_image'    => _x('시험 이미지 지정 ', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'remove_featured_image' => _x('시험 이미지 제거', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'use_featured_image'    => _x('시험 이미지 사용', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'archives'              => _x('시험 보관함', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
		'insert_into_item'      => _x('시험 추가', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
		'uploaded_to_this_item' => _x('업로드 시험', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
		'filter_items_list'     => _x('시험 리스트 필터', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
		'items_list_navigation' => _x('시험 리스트 네비게이터', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
		'items_list'            => _x('시험 리스트', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 3,
		'menu_icon' => 'dashicons-text-page',
		'has_archive' => true,
	);
	register_post_type('exam', $args);
}
add_action('init', 'exam_register_post_type');

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('exam-style', get_stylesheet_uri());
});

add_action('after_setup_theme', function () {
	add_theme_support('title-tag');
	add_theme_support( 'automatic-feed-links' );
});
