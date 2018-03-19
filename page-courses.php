<?php 
/*
*
*/
get_header(); ?>
<?php
    $post_id = 80;
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
    $content = $queried_post->post_content;
    $img = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'full' );
?>
<div class="sd-courses-header container-fluid">
        <div class="row">
            <div class="sd-courses-banner" style="background-image: linear-gradient(rgba(5, 5, 5, 0.35),rgba(5, 5, 5, 0.35)), 
					url(<?php echo $img[0]; ?>);">
                <h1 class="text-center py-4"><?php echo $title; ?></h1>
                <div class="text-center px-4 pb-5">
                    <?php echo $content; ?>
                </div>
            </div>
        </div> <!-- .row -->
    </div><!-- .sd-header-main -->
<?php
    $post_id = 98;
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
    $content = $queried_post->post_content;
?>
    <div class="container-fluid sd-courses">
        <div class="row">
            <h1 class="pt-5 text-center"><?php echo $title; ?></h1>
            <div class="col-12 py-4 col-md-6 offset-md-1 justify-content-center">
                <?php echo $content; ?>
            </div>  
            <div class="col-12 px-4 pt-4 col-md-4 sd-courses-sub-descript text-center">
                <picture>
                    <?php echo get_the_post_thumbnail($post_id, 'full', array('class' => 'img-fluid center-block')); ?>
                </picture>
                <div class="py-4">
                    <h5><?php echo $queried_post->small_heading; ?></h5>
                    <p>
                        <?php echo $queried_post->small_paragraph; ?>
                    </p>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->
    <?php 
        // From [stonedancing_instructors]
        while(have_posts()): the_post(); 
            the_content();
        endwhile;
    ?>
<?php get_footer(); ?>