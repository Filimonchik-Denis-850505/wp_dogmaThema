<?php
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
            ?>

        </div>
        <!-- вынести в отдельный файл -->
        <!-- pagination   -->
        <div class="pagination-blog">
            <div class="pagination-blog-inner">
                <?php
                global $wp_query;

                $args = array(
                    'base'    => get_pagenum_link(1) . '%_%',
                    'format'  => '/page/%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total'   => $wp_query->max_num_pages,
                    'prev_text'    => __('<'),
                    'next_text'    => __('>'),
                );

                $result = paginate_links($args);

                echo $result;
                ?>
            </div>
        </div>
        <!--  pagination end -->
    </div>
</div>
<?php
get_footer(); ?>