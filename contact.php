<?php
/*
Template Name: Contacts
*/
get_header();
get_template_part('templates/headers/header-wrapper'); ?>
<!-- TODO: дописать запись под контакты  -->
<!--  Content -->
<div class="content full-height">
    <!--  wrapper-inner  -->
    <div class="wrapper-inner">
        <!--  align-content  -->
        <div class="align-content">
            <section>
                <div class="container small-container">
                    <h3 class="dec-text"><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                    <a href="#" class=" btn anim-button   trans-btn   transition  fl-l showform"><span>Write us</span><i class="fa fa-eye"></i></a>
                </div>
            </section>
        </div>
        <!--  align-content  end-->
        <!--  contact-form-holder  -->
        <div class="contact-form-holder">
            <div class="close-contact"></div>
            <div class="align-content">
                <section>
                    <div id="contact-form">
                        <div id="message"></div>
                        <?php echo do_shortcode('[contact-form-7 id="196" title="Без названия"]'); ?>
                    </div>
                </section>
            </div>
        </div>
        <!--  contact-form-holder end -->
    </div>
    <!--  fixed-column -->
    <div class="fixed-column">
        <div class="map-box">
            <div id="map-canvas"></div>
        </div>
    </div>
    <!--  fixed-column end-->
</div>
<!--  Content  end -->
<?php
get_footer(); ?>