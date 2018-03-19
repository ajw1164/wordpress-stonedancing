<?php 
// Register Custom Post Type Instructors
function stonedancing_instructors() {
	$labels = array(
		'name'                  => _x( 'Instructors', 'Post Type General Name', 'stonedancing' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'stonedancing' ),
		'menu_name'             => __( 'Instructors', 'stonedancing' ),
		'name_admin_bar'        => __( 'Instructors', 'stonedancing' ),
		'archives'              => __( 'Instructors Archives', 'stonedancing' ),
		'attributes'            => __( 'Instructors Attributes', 'stonedancing' ),
		'parent_item_colon'     => __( 'Parent:', 'stonedancing' ),
		'all_items'             => __( 'All Instructors', 'stonedancing' ),
		'add_new_item'          => __( 'Add New Instructor', 'stonedancing' ),
		'add_new'               => __( 'Add New Instructor', 'stonedancing' ),
		'new_item'              => __( 'New Instructor', 'stonedancing' ),
		'edit_item'             => __( 'Edit Instructor', 'stonedancing' ),
		'update_item'           => __( 'Update Instructor', 'stonedancing' ),
		'view_item'             => __( 'View Instructor', 'stonedancing' ),
		'view_items'            => __( 'View Instructors', 'stonedancing' ),
		'search_items'          => __( 'Search Instructor', 'stonedancing' ),
		'not_found'             => __( 'Not found', 'stonedancing' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'stonedancing' ),
		'featured_image'        => __( 'Featured Image', 'stonedancing' ),
		'set_featured_image'    => __( 'Set featured image', 'stonedancing' ),
		'remove_featured_image' => __( 'Remove featured image', 'stonedancing' ),
		'use_featured_image'    => __( 'Use as featured image', 'stonedancing' ),
		'insert_into_item'      => __( 'Insert into Instructor', 'stonedancing' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Instructor', 'stonedancing' ),
		'items_list'            => __( 'Instructor list', 'stonedancing' ),
		'items_list_navigation' => __( 'Instructor list navigation', 'stonedancing' ),
		'filter_items_list'     => __( 'Instructor items list', 'stonedancing' ),
	);
	$args = array(
		'label'                 => __( 'Instructor', 'stonedancing' ),
		'description'           => __( 'StoneDancing Instructors', 'stonedancing' ),
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
	register_post_type( 'instructors', $args );

}
add_action( 'init', 'stonedancing_instructors', 0 );

// Shortcode to dispaly instructors [stonedancing_instructors]
function stonedancing_instructors_shortcode() {
    $args = array(
        'posts_per_page' => 20,
        'post_type' => 'instructors',
        'orderby' => 'post_id',
        'order' => 'ASC'
    );
    $instructors = new WP_Query($args);
    while($instructors->have_posts()): $instructors->the_post(); ?>

    <div class="container-fluid sd-list-pages">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 p-2 col-md-4 col-lg-3 col-xl-2 d-flex justify-content-center">
                <a id="<?php echo get_the_ID(); ?>" class="sd-before"></a>
                <?php the_post_thumbnail('instructor_thumb', array('class' => 'img-fluid center-block')); ?>
                
            </div>
            <div class="col-12 px-4 col-md-6 col-lg-6 col-xl-6">
                <h1 class="pt-4"><?php the_title(); ?></h1>
                <h3 class="pt-2"><?php the_field('post_nominal_initials'); ?></h3>
                <h4 class="py-3"><?php the_field('subheading'); ?></h4>
                <p><?php the_field('short_description'); ?>
                    <span class="readmore">
                    <a href="<?php the_permalink(); ?>" >Read more...</a></span></p>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->

    <?php 
        endwhile; wp_reset_postdata();
    }   
add_shortcode( 'stonedancing_instructors', 'stonedancing_instructors_shortcode');

