<?php
/*
Template Name: Services
*/
get_header();
get_template_part('templates/headers/header-wrapper'); ?>
<!--  Content -->
<div class="content">
    <section>
        <!--  container -->
        <div class="container">
            <!--  services-holder -->
            <div class="services-holder">
                <!-- services-item -->
                <div class="services-item">
                    <div class="serv-img lft-img">
                        <div class="bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
                    </div>
                    <div class="services-box-info rft-info">
                        <h3 class="dec-text"><?php the_title(); ?></h3><br>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <!-- services-item  end-->
                <!-- services-item  -->
                <div class="services-item">
                    <div class="serv-img rft-img">
                        <div class="bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
                    </div>
                    <div class="services-box-info lft-info">
                        <h3 class="dec-text"><?php the_title(); ?></h3><br>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <!-- services-item  end-->
                <!-- services-item  end-->
                <div class="services-item">
                    <div class="serv-img lft-img">
                        <div class="bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
                    </div>
                    <div class="services-box-info rft-info">
                        <h3 class="dec-text"><?php the_title(); ?></h3><br>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <!-- services-item  end-->
            </div>
            <!-- services-holder  end-->
        </div>
        <!-- Container-->
    </section>
</div>
<!--  Content  end -->
<?php
get_footer(); ?>