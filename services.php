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
                <?php $idx = 1;
                $data_slides = carbon_get_post_meta(get_the_ID(), 'service_post'); ?>
                <!-- services-item -->
                <?php foreach ($data_slides as $slide) {
                    if ($idx % 2 == 1) {
                ?>
                        <div class="services-item">
                            <div class="serv-img lft-img">
                                <div class="bg" style="background-image:url(<?php echo wp_get_attachment_image_url($slide['photo'], 'full') ?>)"></div>
                            </div>
                            <div class="services-box-info rft-info">
                                <h3 class="dec-text"><?php echo $slide['title'] ?></h3><br>
                                <p><?php echo $slide['text'] ?></p>
                            </div>
                        </div>
                    <?php } else {
                    ?>
                        <div class="services-item">
                            <div class="serv-img rft-img">
                                <div class="bg" style="background-image:url(<?php echo wp_get_attachment_image_url($slide['photo'], 'full') ?>)"></div>
                            </div>
                            <div class="services-box-info lft-info">
                                <h3 class="dec-text"><?php echo $slide['title'] ?></h3><br>
                                <p><?php echo $slide['text'] ?></p>
                            </div>
                        </div>
                <?php }
                    $idx++;
                } ?>
            </div>
            <!-- services-holder  end-->
        </div>
        <!-- Container-->
    </section>
</div>
<!--  Content  end -->
<?php
get_footer(); ?>