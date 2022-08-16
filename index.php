<?php

/**
 * The main template file
 */
get_header(); ?>

<!--  Content -->
<div class="content full-height no-padding home-content ">
    <!--full-height wrap -->
    <div class="full-height-wrap">
        <div class="customNavigation fhsln">
            <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
            <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
        </div>
        <!--slideshow-holder -->
        <div class="synh-slider-holder">
            <div class="overlay"></div>
            <div class="synh-slider owl-carousel">
                <?php $catquery = new WP_Query('cat=5&posts_per_page=3'); ?>
                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <div class="item">
                        <div class="bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <!--slideshow-holder end -->
        <!-- synh-wrap-holder -->
        <div class="synh-wrap-holder">
            <div class="synh-wrap">
            <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="item">
                    <h3> <?php the_title(); ?> </h3>
                    <h4> <?php the_excerpt(); ?> </h4>
                    <a href="<?php the_permalink(); ?>" class="ajax btn anim-button   trans-btn   transition  fl-l"><span>View Project</span><i class="fa fa-eye"></i></a>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <!-- synh-wrap-holder end  -->
    </div>
    <!-- full-height-wrap end  -->
</div>
<!-- Content   end -->
<?php
get_footer(); ?>