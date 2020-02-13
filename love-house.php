<?php /* Template Name: template */ ?>
<?php get_header(); ?>

     <!-- presentation -->
     <section class="presentation container-fluid">
        <div class="container" id="presentation">
            <h2 class="mb-5 pt-5 text-pink"><?php echo get_post_field('post_title', '37'); ?><br/></h2>
            <div class="row p-0 justify-content-end">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-sm-none d-md-block d-lg-block d-xl-block radius-10">
                <?php if ( is_active_sidebar( 'image' ) ) : ?>
                    <?php dynamic_sidebar( 'image' ); ?>
                    <?php endif; ?>
                </div>
                
                <p class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                <?php echo get_post_field('post_content', '37'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- service -->
    <section class="container-fluid service bg-greendark d-none d-sm-none d-md-none d-lg-block  d-xl-block ">
        <div class="container" id="services">
            <h2 class="mb-5 pt-5 text-white"><?php echo get_post_field('post_title', '68'); ?></h2>

            <div class="row">
            <div class="col-4 p-5 mb-5 bg-greenlite bg-hoverwhite text-center radius-3 text-white">
            <?php if ( is_active_sidebar( 'rideau' ) ) : ?>
                    <?php dynamic_sidebar( 'rideau' ); ?>
                    <?php endif; ?>
                    <h3 class="py-3"><?php echo get_post_field('post_title', '43'); ?></h3>
                    <p><?php echo get_post_field('post_content', '43'); ?><p>
                </div>

                <div class="col-4 p-5 mb-5 text-center bg-hoverwhite radius-3 text-white">
                <?php if ( is_active_sidebar( 'decor' ) ) : ?>
                    <?php dynamic_sidebar( 'decor' ); ?>
                    <?php endif; ?>
                    <h3 class="py-3"><?php echo get_post_field('post_title', '45'); ?></h3>
                    <p><?php echo get_post_field('post_content', '45'); ?><p>
                </div>

                <div class="col-4 p-5 mb-5 bg-greenlite bg-hoverwhite text-center radius-3 text-white">
                <?php if ( is_active_sidebar( 'linge' ) ) : ?>
                    <?php dynamic_sidebar( 'linge' ); ?>
                    <?php endif; ?>
                    <h3 class="py-3"><?php echo get_post_field('post_title', '47'); ?></h3>
                    <p><?php echo get_post_field('post_content', '47'); ?><p>
                </div>

                <div class="col-lg-4 col-md-4 p-5 mb-5 text-center bg-hoverwhite radius-3 text-white">
                <?php if ( is_active_sidebar( 'bain' ) ) : ?>
                    <?php dynamic_sidebar( 'bain' ); ?>
                    <?php endif; ?>
                    <h3 class="py-3"><?php echo get_post_field('post_title', '49'); ?></h3>
                    <p><?php echo get_post_field('post_content', '49'); ?><p>
                </div>

                <div class="col-lg-4 col-md-4 p-5 mb-5 bg-greenlite bg-hoverwhite text-center radius-3 text-white">
                <?php if ( is_active_sidebar( 'lit' ) ) : ?>
                    <?php dynamic_sidebar( 'lit' ); ?>
                    <?php endif; ?>
                    <h3 class="py-3"><?php echo get_post_field('post_title', '51'); ?></h3>
                    <p><?php echo get_post_field('post_content', '51'); ?><p>
                </div>

                <div class="col-lg-4 col-md-4 p-5 mb-5 text-center bg-hoverwhite radius-3 text-white">
                <?php if ( is_active_sidebar( 'prestation' ) ) : ?>
                    <?php dynamic_sidebar( 'prestation' ); ?>
                    <?php endif; ?>
                    <h3 class="py-3"><?php echo get_post_field('post_title', '53'); ?></h3>
                    <p><?php echo get_post_field('post_content', '53'); ?><p>
                </div>
            </div>
        </div>
    </section>

    <!-- service carousell 2X2X2-->
    <section class="container-fluid service bg-greendark d-none d-sm-block d-md-block d-lg-none d-xl-none">
        <div class="container">
            <h2 class="mb-5 pt-5 text-white"><?php echo get_post_field('post_title', '68'); ?></h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6 p-5 mb-5 text-center radius-3 text-white">
                            <?php if ( is_active_sidebar( 'rideau' ) ) : ?>
                            <?php dynamic_sidebar( 'rideau' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '43'); ?></h3>
                            <p><?php echo get_post_field('post_content', '43'); ?><p>
                            </div>

                            <div class="col-6 p-5 mb-5 text-center radius-3 text-white">
                            <?php if ( is_active_sidebar( 'decor' ) ) : ?>
                            <?php dynamic_sidebar( 'decor' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '45'); ?></h3>
                            <p><?php echo get_post_field('post_content', '45'); ?><p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6 p-5 mb-5 text-center radius-3 text-white">
                                <?php if ( is_active_sidebar( 'linge' ) ) : ?>
                                <?php dynamic_sidebar( 'linge' ); ?>
                                <?php endif; ?>
                                <h3 class="py-3"><?php echo get_post_field('post_title', '47'); ?></h3>
                                <p><?php echo get_post_field('post_content', '47'); ?><p>
                            </div>

                            <div class="col-6 p-5 mb-5 text-center radius-3 text-white">
                            <?php if ( is_active_sidebar( 'bain' ) ) : ?>
                            <?php dynamic_sidebar( 'bain' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '49'); ?></h3>
                            <p><?php echo get_post_field('post_content', '49'); ?><p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6 p-5 mb-5 text-center radius-3 text-white">
                            <?php if ( is_active_sidebar( 'lit' ) ) : ?>
                            <?php dynamic_sidebar( 'lit' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '51'); ?></h3>
                            <p><?php echo get_post_field('post_content', '51'); ?><p>
                            </div>

                            <div class="col-6 p-5 mb-5 text-center radius-3 text-white">
                                <?php if ( is_active_sidebar( 'prestation' ) ) : ?>
                            <?php dynamic_sidebar( 'prestation' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '53'); ?></h3>
                            <p><?php echo get_post_field('post_content', '53'); ?><p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- service carousell 1X6-->
    <section class="container-fluid service bg-greendark d-block d-sm-none d-md-none d-lg-none d-xl-none">
        <div class="container">
            <h2 class="mb-5 pt-5 text-white"><?php echo get_post_field('post_title', '68'); ?></h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 p-5 mb-5 text-center radius-3 text-white">
                            <?php if ( is_active_sidebar( 'rideau' ) ) : ?>
                            <?php dynamic_sidebar( 'rideau' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '43'); ?></h3>
                            <p><?php echo get_post_field('post_content', '43'); ?><p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 p-5 mb-5 text-center radius-3 text-white">
                            <?php if ( is_active_sidebar( 'decor' ) ) : ?>
                            <?php dynamic_sidebar( 'decor' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '45'); ?></h3>
                            <p><?php echo get_post_field('post_content', '45'); ?><p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 p-5 mb-5 text-center radius-3 text-white">
                            <?php if ( is_active_sidebar( 'linge' ) ) : ?>
                            <?php dynamic_sidebar( 'linge' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '47'); ?></h3>
                            <p><?php echo get_post_field('post_content', '47'); ?><p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 p-5 mb-5 text-center radius-3 text-white">
                                <img class="mb-2" src="images/bath-bathroom-bathtub-indoors-1.jpg" alt="" width="220"
                                    height="220">
                                    <?php if ( is_active_sidebar( 'bain' ) ) : ?>
                                    <?php dynamic_sidebar( 'bain' ); ?>
                                    <?php endif; ?>
                                    <h3 class="py-3"><?php echo get_post_field('post_title', '49'); ?></h3>
                                    <p><?php echo get_post_field('post_content', '49'); ?><p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 p-5 mb-5 text-center radius-3 text-white">
                            <?php if ( is_active_sidebar( 'lit' ) ) : ?>
                            <?php dynamic_sidebar( 'lit' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '51'); ?></h3>
                            <p><?php echo get_post_field('post_content', '51'); ?><p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 p-5 mb-5 text-center radius-3 text-white">
                            <?php if ( is_active_sidebar( 'prestation' ) ) : ?>
                            <?php dynamic_sidebar( 'prestation' ); ?>
                            <?php endif; ?>
                            <h3 class="py-3"><?php echo get_post_field('post_title', '53'); ?></h3>
                            <p><?php echo get_post_field('post_content', '53'); ?><p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact et acces -->
    <section class="container-fluid">
        <div class="container py-5" id="contact">
            <div class="row">
                <div
                    class="col-12 d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start">
                    <h2 class="pb-3"><?php echo get_post_field('post_title', '58'); ?></h2>
                    <img class="ml-4 d-none d-sm-none d-md-flex d-lg-flex" src="<?php echo get_template_directory_uri(); ?>/images/goutte.png"
                        alt="pictogramme goutte" width="24" height="36">
                </div>
            </div>
            <div class="row">
                <div
                    class="col-12 col-md-12 col-md-4 col-lg-4 d-flex flex-col flex-column justify-content-between  mb-5 mb-md-5 mb-lg-0 mt-3 mt-md-3 mt-lg-0">
                    <div class="text-contact px-5 pt-3 pb-4">
                        <div class="text-white">
                            <p>
                            <?php if ( is_active_sidebar( 'contact' ) ) : ?>
                            <?php dynamic_sidebar( 'contact' ); ?>
                            <?php endif; ?>
                            </p>
                        </div>
                        <div class="row align-items-center justify-content-around">
                            <?php if ( is_active_sidebar( 'reseauxsociaux' ) ) : ?>
                            <?php dynamic_sidebar( 'reseauxsociaux' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="text-horaire mt-5 mt-md-0 mt-lg-5 ">
                        <p class="text-center">Horaires</p>
                        <div class="d-flex justify-content-around">
                            <p class="mr-md-4  font-weight-bolder">                            
                            <?php if ( is_active_sidebar( 'horairejour' ) ) : ?>
                            <?php dynamic_sidebar( 'horairejour' ); ?>
                            <?php endif; ?></p>
                            <p class="ml-md-4"><?php if ( is_active_sidebar( 'horaireheure' ) ) : ?>
                            <?php dynamic_sidebar( 'horaireheure' ); ?>
                            <?php endif; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 d-flex align-items-center justify-content-center">
                <?php if ( is_active_sidebar( 'map' ) ) : ?>
                            <?php dynamic_sidebar( 'map' ); ?>
                            <?php endif; ?>
                </div>

            </div>
        </div>
    </section>


<?php get_footer(); ?>