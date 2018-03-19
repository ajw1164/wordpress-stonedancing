<?php 
/*
* 
*/

get_header(); ?>
    <?php while(have_posts()): the_post(); ?>
    <div class="container-fluid sd-course">
        <div class="row align-items-start justify-content-center pt-5">
            <div class="col-12 col-md-5 col-xl-4 px-4">
                <h1 class=""><?php the_title(); ?></h1>
                <h3 class="pt-2">Prerequisites: <?php the_field('prerequisits'); ?></h3>
                <div class="pt-2 sd-course-description">
                    <?php the_content(); ?>
                </div>
                <div class="sd-post-list pb-5">
                   <?php the_field('bottom_bold_list'); ?>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->

    <?php endwhile; ?>
<?php get_footer(); ?>