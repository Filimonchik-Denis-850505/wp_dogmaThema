<?php
/*
Template Name: About
*/
get_header();
get_template_part('templates/headers/header-wrapper'); ?>
<!-- TODO: дописать запись Об  -->
<!--  Content -->
<div class="content full-height">
    <!--  fixed-column -->
    <div class="fixed-column">
        <div class="bg" style="background-image:url(<?php the_post_thumbnail_url();?>)"></div>
    </div>
    <!--  fixed-column end-->
    <!--  wrapper-inner -->
    <div class="wrapper-inner">
        <!--  align-content -->
        <div class="align-content">
            <section>
                <div class="container small-container">
                    <h3 class="dec-text"><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                    <a href="portfolio.html" class="ajax btn anim-button   trans-btn   transition  fl-l" target="_blank"><span>Our projects</span><i class="fa fa-eye"></i></a>
                </div>
            </section>
        </div>
        <!--  align-content end-->
    </div>
    <!--  wrapper-inner end-->
    <!--  Content  end -->
</div>
<?php
get_footer(); ?>