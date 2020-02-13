<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <link href="https://fonts.googleapis.com/css?family=Bellefair&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
        function openBurger() {
            document.getElementById("menu-burger").style.display = "block";
        }

        function closeBurger() {
            document.getElementById("menu-burger").style.display = "none";
        }

    </script>


    <div id="menu-burger" class="menu-burger position-absolute h-100 w-100">
        <div onclick="closeBurger()">
            <img src="<?php echo get_template_directory_uri(); ?>/images/croix.png" alt="croix-fermer" class="closeBurger m-3">
        </div>
        <div class="h-100 d-flex flex-column pt-5">
          <?php
            wp_nav_menu( array( 
                'theme_location' => 'my-custom-menu', 
            ) ); 
            ?>
            <div class="d-flex justify-content-center">
            <?php if ( is_active_sidebar( 'logomenu' ) ) : ?>
            <?php dynamic_sidebar( 'logomenu' ); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>



    <div class="contenu">

        <!-- header -->
        <header class="vh-100">
            <div class="opacity-header w-100 h-100">

                <div class="container h-90 position-relative">

                    <div class="openBurger d-sm-none d-md-none d-lg-none d-xl-none position-absolute">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="menuburger" id="openBurger" onclick="openBurger()">
                    </div>


                    <nav
                        class="w-100 mt-5 row mx-auto justify-content-lg-between justify-content-xl-between d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">

                        <div class="menu mx-lg-0 mx-md-auto">
                        <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'my-custom-menu', 
                            'container_class' => 'custom-menu-class' ) ); 
                        ?>
                        </div>
                        
                        <div class="row d-none d-lg-flex d-xl-flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/call.png" alt="logo-phone" width="28" height="28" class="atel">
                            <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
                            <?php dynamic_sidebar( 'custom-side-bar' ); ?>
                            <?php endif; ?>
                        </div>
                    </nav>


                    <div class="text-center d-flex flex-column h-90 justify-content-center mt-5 mt-md-0 ">
                        <div>
                            <?php the_post_thumbnail(); ?>
                            <p class="charme text-center"><?php bloginfo('description'); ?></p>
                        </div>

                        <div class="row d-none d-lg-flex d-xl-flex w-100 m-auto">
                            <div class="row w-100 justify-content-lg-between m-auto">
                                <div class="col-12 d-flex justify-content-between">                            
                                    <?php if ( is_active_sidebar( 'test-side-bar' ) ) : ?>
                                    <?php dynamic_sidebar( 'test-side-bar' ); ?>
                                    <?php endif; ?></div>
                            </div>
                        </div>

                        <div class="d-none d-sm-block d-lg-none d-xl-none">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/call.png" alt="logo-phone" width="28" height="28" class="atel">
                            <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
                            <?php dynamic_sidebar( 'custom-side-bar' ); ?>
                            <?php endif; ?>
                        </div>

                        <div class="d-flex d-sm-none flex-column-reverse align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/call.png" alt="logo-phone" width="28" height="28" class="atel">
                            <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
                            <?php dynamic_sidebar( 'custom-side-bar' ); ?>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </header>
    </div>
    <?php wp_body_open(); ?>