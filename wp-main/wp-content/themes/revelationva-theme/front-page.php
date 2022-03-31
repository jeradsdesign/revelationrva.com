<?php get_header(); ?>
        <section
            class="main-content container mt-5 mt-md-4 mt-lg-5 pt-5 action fadeIn"
        >
            <div class="row md-mt-3">
                <div class="col-12">
                    <h3>CABINETS WHEREVER YOU NEED THEM</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-7 col-xl-8 pb-4">
                    <div
                        id="carouselExampleSlidesOnly"
                        class="carousel slide carousel-fade"
                        data-bs-ride="carousel"
                    >
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img
                                    src="<?php the_field('home_image_1'); ?>"
                                    class="d-block w-100"
                                    alt="photo of cabinets"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                src="<?php the_field('home_image_2'); ?>"
                                    class="d-block w-100"
                                    alt="photo of cabinets"
                                />
                            </div>
                            <?php if(get_field('home_image_3') != '') : ?>
                            <div class="carousel-item">
                                <img
                                src="<?php the_field('home_image_3'); ?>"
                                    class="d-block w-100"
                                    alt="photo of cabinets"
                                />
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div
                    class="col-md-12 col-lg-5 col-xl-4 d-flex flex-column ps-lg-5"
                >
                <?php
            if(have_posts() ){
                while(have_posts()){
                    the_post();
                    the_content();
                }
            }
        ?>
                    <a href="/recent-projects" class="btn dark-teal two-tone mt-md-4"
                        >Learn More</a
                    >
                </div>
            </div>
        </section>
<?php get_footer(); ?>
       