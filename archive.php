<?php

/**
 Template Name: archive
 */

get_header();
get_template_part('templates/headers/header-wrapper'); ?>
<div class="content">
    <!--  blog-inner -->
    <div class="blog-inner">
        <!--  gallery-items  -->
        <div class="gallery-items    hid-port-info grid-small-pad">
            <?php
            // циклы вывода записей
            // если записи найдены
            if (have_posts()) {
                while (have_posts()) {
                    the_post();    ?>

                    <!-- 3 -->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <article>
                                <ul class="blog-title">
                                    <li><a href="#" class="tag"><?php the_time('d M Y'); ?></a></li>
                                    <li> - </li>
                                    <li><a href="#" class="tag"><?php the_category(); ?></a></li>
                                </ul>
                                <div class="blog-media">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="blog-text">
                                    <h3><?php the_title(); ?></h3>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="ajax btn anim-button   trans-btn   transition  fl-l" target="_blank"><span>read more</span><i class="fa fa-eye"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>

            <?php
                }
            }
            ?>

        </div>
        <!-- вынести в отдельный файл -->
        <!-- pagination   -->
        <div class="pagination-blog">
            <div class="pagination-blog-inner">
                <a href="#" class="prevposts-link transition"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="blog-page transition">1</a>
                <a href="#" class="blog-page current-page transition">2</a>
                <a href="#" class="blog-page transition">3</a>
                <a href="#" class="blog-page transition">4</a>
                <a href="#" class="nextposts-link transition"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
        <!--  pagination end -->
    </div>
</div>
<?php
get_footer(); ?>