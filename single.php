<?php
get_header();
get_template_part('templates/headers/header-wrapper');
?>
<div class="content">
    <section class="no-bg box-page">
        <div class="container">
            <article class="sinnle-post">
                <h2><?php the_title(); ?></h2>
                <ul class="blog-title">
                    <li><a href="#" class="tag"><?php the_time("d M Y"); ?></a></li>
                    <li> - </li>
                    <li><a href="#" class="tag"><?php the_category(); ?></a></li>
                </ul>
                <!--  blog-media  -->
                <div class="blog-media">
                    <div class="custom-slider-holder">
                        <div class="customNavigation">
                            <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                            <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                        </div>
                        <?php
                        $slider_slides = carbon_get_post_meta(get_the_ID(), 'slider1');
                        ?>
                        <div class="custom-slider owl-carousel">
                            <?php foreach ($slider_slides as $slide) { ?>
                                <div class="item">
                                    <?php echo wp_get_attachment_image($slide['photo'], 'full'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!--  blog-media  end-->
                <!--  blog-text  -->
                <!-- доделать получение категорий -->
                <div class="blog-text">
                    <?php the_content(); ?>
                    <ul class="taglist">
                        <?php the_tags('<li>', '', '</li>'); ?>
                    </ul>
                </div>
            </article>
        </div>
    </section>
</div>

<?php get_footer(); ?>