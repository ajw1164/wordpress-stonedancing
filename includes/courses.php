<?php 

// Register Custom Post Type Courses
function stonedancing_courses() {
	$labels = array(
		'name'                  => _x( 'Courses', 'Post Type General Name', 'stonedancing' ),
		'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'stonedancing' ),
		'menu_name'             => __( 'Courses', 'stonedancing' ),
		'name_admin_bar'        => __( 'Courses', 'stonedancing' ),
		'archives'              => __( 'Courses Archives', 'stonedancing' ),
		'attributes'            => __( 'Courses Attributes', 'stonedancing' ),
		'parent_item_colon'     => __( 'Parent:', 'stonedancing' ),
		'all_items'             => __( 'All Courses', 'stonedancing' ),
		'add_new_item'          => __( 'Add New Course', 'stonedancing' ),
		'add_new'               => __( 'Add New Course', 'stonedancing' ),
		'new_item'              => __( 'New Course', 'stonedancing' ),
		'edit_item'             => __( 'Edit Course', 'stonedancing' ),
		'update_item'           => __( 'Update Course', 'stonedancing' ),
		'view_item'             => __( 'View Course', 'stonedancing' ),
		'view_items'            => __( 'View Courses', 'stonedancing' ),
		'search_items'          => __( 'Search Course', 'stonedancing' ),
		'not_found'             => __( 'Not found', 'stonedancing' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'stonedancing' ),
		'featured_image'        => __( 'Featured Image', 'stonedancing' ),
		'set_featured_image'    => __( 'Set featured image', 'stonedancing' ),
		'remove_featured_image' => __( 'Remove featured image', 'stonedancing' ),
		'use_featured_image'    => __( 'Use as featured image', 'stonedancing' ),
		'insert_into_item'      => __( 'Insert into Course', 'stonedancing' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Course', 'stonedancing' ),
		'items_list'            => __( 'Course list', 'stonedancing' ),
		'items_list_navigation' => __( 'Course list navigation', 'stonedancing' ),
		'filter_items_list'     => __( 'Course items list', 'stonedancing' ),
	);
	$args = array(
		'label'                 => __( 'Course', 'stonedancing' ),
		'description'           => __( 'StoneDancing Courses', 'stonedancing' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'has_archive'           => false,
	);
	register_post_type( 'courses', $args );

}
add_action( 'init', 'stonedancing_courses', 0 );

// Shortcode to dispaly courses [stonedancing_courses]
function stonedancing_courses_shortcode() {
    $args = array(
        'posts_per_page' => 20,
        'post_type' => 'courses',
        'orderby' => 'post_id',
        'order' => 'ASC'
    );
    $courses = new WP_Query($args);
    while($courses->have_posts()): $courses->the_post(); ?>

	<div class="container-fluid sd-list-pages">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 flex-column col-md-10 col-lg-8 justify-content-center">
                <h1 class="pt-4"><?php the_title(); ?></h1>
                <h3 class="pt-2"><?php the_field('prerequisits'); ?></h3>
                <p><?php the_field('short_description'); ?>
                    <span class="readmore"><a href="<?php the_permalink(); ?>">Full description...</a></span></p>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->

    <?php 
        endwhile; wp_reset_postdata();
    }   
add_shortcode( 'stonedancing_courses', 'stonedancing_courses_shortcode');

