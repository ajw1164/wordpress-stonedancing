<?php 
/*
* Template name: Instructor list
*/
get_header(); ?>
<?php
    $post_id = 66;
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
?>
    <div class="container-fluid sd-instructors">
        <div class="row">
            <div class="col-12">
                <h1 class="py-4"><?php echo $title; ?></h1>
                <h5 class="pb-3"><?php echo $queried_post->tag_line; ?></h5>
            </div>
            <div class="col-12 col-md-5 offset-md-1 col-lg-4 offset-lg-2 pb-5 px-4">
                <p>
                    <?php echo $queried_post->heading_left; ?>
                </p>
            </div>
            <div class="col-12 col-md-5 col-lg-4 pb-5 px-4">
                <p>
                    <?php echo $queried_post->heading_right; ?> 
                </p> 
            </div>  
            <div class="col-12 pb-5">
                <h3><?php echo $queried_post->heading_bottom; ?> </h3>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->
    <div class="container-fluid sd-us-instructors">
        <div class="row align-items-center no-gutters">
            <div class="col-12 col-md-4 offset-md-2 col-lg-3 offset-lg-3 col-xl-2 offset-lx-4 ">
                <h3 class="py-5">United States Instructors</h3>
            </div>
            <div class="col-12 col-md-6 py-md-5 col-lg-4 px-1 col-lx-2">
                <div class="sd-left-vertical">
                    <ul>
                        <li><a href="#marynelson">Mary Nelson, Arizona</a></li>
                        <li><a href="#jara">Luis Jara, Arizona and Mexico</a></li>
                        <li><a href="#damers">Lawrence Damers, Colorado</a></li>
                        <li><a href="#bucinell">Tonya Bucinell, Florida</a></li>
                        <li><a href="#alimboyoguen">Michelle Alimboyoguen, Hawaii</a></li>
                        <li><a href="#keller">Debra Keller, Ohio</a></li>
                        <li><a href="#maryroberts">Mary Roberts, Massachusetts and Florida</a></li>
                        <li><a href="#lapinski">Wayne Lapinski, Massachusetts</a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->
    <div class="container-fluid sd-other-country-instructors">
        <div class="row align-items-center no-gutters">
            <div class="col-12 col-md-4 offset-md-2 col-lg-3 offset-lg-3 col-xl-2 offset-lx-4 ">
                <h3 class="py-5">Other Countries Instructors</h3>
            </div>
            <div class="col-12 col-md-6 py-md-5 col-lg-4 px-1 col-lx-2">
                <div class="sd-left-vertical">
                    <ul>
                        <li><a href="#takami">Masako Takami, Asia/Japan</a></li>
                        <li>Melanie Boileau, Australia</li>
                        <li>Cindy Baker, Canada</li>
                    </ul>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="py-4">Coming Soon</h1>
                <h5 class="pb-3">Melanie Boileau, Australia</h5>
                <h5 class="pb-3">Cindy Baker, Canada</h5>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->

<?php get_footer(); ?>