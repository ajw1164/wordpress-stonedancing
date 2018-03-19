<?php 
/*
* 
*/

get_header(); ?>
    <?php while(have_posts()): the_post(); ?>
    <div class="container-fluid sd-instructor">
        <div class="row align-items-start justify-content-center pt-5">
            <div class="col-12 col-md-5 col-xl-4 px-4">
                <h1 class=""><?php the_title(); ?></h1>
                <h3 class="pt-2"><?php the_field('post_nominal_initials'); ?></h3>
                <h4 class="py-3"><?php the_field('subheading'); ?></h4>
                <div class="pt-2 sd-instructor-description">
                    <?php the_content(); ?>
                </div>
            </div>
           
            <div class="col-12 col-md-5 col-xl-4">
                <div class="d-flex justify-content-center">
                <picture>
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid center-block')); ?>
                </picture>
                </div>
                <div class="py-5 px-3 sd-instructor-sub-descript text-center">
                    <?php the_field('small_paragraph_under_picture'); ?>
                </div>
                <div class="sd-instructor-contact text-center pb-md-3">
                    <h5>Contact Information</h5>
                    <p>
                        Located in: <?php the_field('located_in'); ?><br>
                        E-mail: <a 
                        href="mailto:<?php the_field('email'); ?>">
                        <?php the_field('email'); ?></a><br>
                        <?php the_field('time_zone'); ?><br>
                        <?php the_field('phone'); ?><br>
                    </p>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->
    <?php endwhile; ?>
<?php get_footer(); ?>