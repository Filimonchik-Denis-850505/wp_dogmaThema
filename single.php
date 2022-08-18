<?php
get_header();
get_template_part('templates/headers/header-wrapper');
the_post();
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
                        <div class="custom-slider owl-carousel">
                            <!-- 1 -->
                            <div class="item">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <!-- 2 -->
                            <div class="item">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <!-- 3 -->
                            <div class="item">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  blog-media  end-->
                <!--  blog-text  -->
                <!-- доделать получение категорий -->
                <div class="blog-text">
                    <?php the_content(); ?>
                    <ul class="taglist">
                        <li><a href="#"><?php echo the_tags('Tags: ', '', ''); ?></a></li>
                    </ul>
                </div>
            </article>
        </div>
    </section>
</div>

<?php get_footer(); ?>