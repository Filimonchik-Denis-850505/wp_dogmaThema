<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

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
                <div class="blog-text">
                    <?php the_content(); ?>
                    <ul class="taglist">
                        <li><a href="#">Houses</a></li>
                        <li><a href="#">Construction</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Socials</a></li>
                    </ul>
                </div>
            </article>
            <!--  content navigation -->
            <div class="content-nav single-nav">
                <ul>
                    <!-- get the prev page link -->
                    <li><a href="<?php the_permalink(); ?>" class="ajax ln"><i class="fa fa fa-angle-left"></i></a></li>
                    <li>
                        <div class="list">
                            <!-- get archive blog link -->
                            <a href="<?php the_permalink(); ?>" class="ajax">
                                <span>
                                    <i class="b1 c1"></i><i class="b1 c2"></i><i class="b1 c3"></i>
                                    <i class="b2 c1"></i><i class="b2 c2"></i><i class="b2 c3"></i>
                                    <i class="b3 c1"></i><i class="b3 c2"></i><i class="b3 c3"></i>
                                </span>
                            </a>
                        </div>
                    </li>
                    <!-- get the next page link -->
                    <li><a href="<?php the_permalink(); ?>" class="ajax rn"><i class="fa fa fa-angle-right"></i></a></li>
                </ul>
            </div>
            <!--  content navigation end-->
        </div>
    </section>
</div>

<?php get_footer(); ?>