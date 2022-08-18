    <!--=============== content-holder ===============-->
    <div class="content-holder elem transition3">
        <!-- Page title -->
        <div class="dynamic-title"><?php the_title(); ?></div>
        <!-- Page title  end-->
        <!--  Navigation -->
        <div class="nav-overlay"></div>
        <div class="nav-inner isDown">
            <nav>
                <ul>
                <?php wp_nav_menu( $args ); ?>
                </ul>
            </nav>
        </div>
        <!--  Navigation end -->