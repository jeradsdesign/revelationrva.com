<section class="testimonials container mb-md-5 pb-5 mt-5">
            <div class="row md-mt-3 mb-md-5">
                <div class="col-12">
                    <h3>Testimonials</h3>
                </div>
            </div>
            <div
                id="testimonials"
                class="carousel slide"
                data-bs-ride="carousel"
            >
                <div class="carousel-inner">
                <?php $home_page = 14;
                $test2 = get_field('testimonial_main_2', $home_page);
                $test3 = get_field('testimonial_main_3', $home_page); ?>
                    <div
                        class="carousel-item active testimonial mt-4"
                        data-bs-interval="10000"
                    >
                        <img
                            src="<?php the_field('testimonial_photo_1', $home_page); ?>"
                            class="testimonial-photo"
                            alt=""
                        />
                        <p class="name ms-md-3 mt-2"><?php the_field('testimonial_name_1', $home_page); ?></p>
                        <p>
                        <?php the_field('testimonial_main_1', $home_page); ?>
                        </p>

                    </div>
                    <?php if($test2 != '') : ?>
                        
                        <div
                        class="carousel-item testimonial mt-4"
                        data-bs-interval="10000"
                    >
                        <img
                            src="<?php the_field('testimonial_photo_2', $home_page); ?>"
                            class="testimonial-photo"
                            alt=""
                        />
                        <p class="name ms-md-3 mt-2"><?php the_field('testimonial_name_2', $home_page); ?></p>
                        <p>
                        <?php the_field('testimonial_main_2', $home_page); ?>
                        </p>

                    </div>
                      <?php endif ?>
                      <?php if($test3 != '') : ?>
                        
                        <div
                        class="carousel-item testimonial mt-4"
                        data-bs-interval="10000"
                    >
                        <img
                            src="<?php the_field('testimonial_photo_3', $home_page); ?>"
                            class="testimonial-photo"
                            alt=""
                        />
                        <p class="name ms-md-3 mt-2"><?php the_field('testimonial_name_3', $home_page); ?></p>
                        <p>
                        <?php the_field('testimonial_main_3', $home_page); ?>
                        </p>

                    </div>
                      <?php endif ?>
                    
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#testimonials"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#testimonials"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <div class="footers-container">
            <footer class="pt-5 pb-4 pb-md-5 mt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 pb-3">
                            <h4 class="mb-4 mb-sm-5 pb-3">Contact Us:</h4>
                            <p class="phone mt-2 pt-2 pb-3">
                                <a href="tel:<?php the_field('phone_number_no_dashes', $home_page); ?>"><?php the_field('phone_number', $home_page); ?></a>
                            </p>
                            <p class="email mt-2 pt-2 pb-3">
                                <a href="mailto:<?php the_field('email', $home_page); ?>"
                                    ><?php the_field('email', $home_page); ?></a
                                >
                            </p>
                        </div>
                        <div class="col-lg-4 ps-lg-5 pb-4 pb-sm-5">
                            <div class="ps-xl-5 recent-projects-footer">
                                <h4 class="mb-4 mb-sm-5 pb-3">
                                    Recent Projects:
                                </h4>

                                <ul class="ps-0">
                                    <?php wp_get_archives( array(
            'type'            => 'postbypost',
            'limit'           => 3,
            'format'          => 'html',
            'show_post_count' => false,
            'echo'            => 1
           ) ); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 ps-lg-5 pb-sm-5 follow-us">
                            <div class="ps-lg-5">
                                <h4 class="mb-4 mb-sm-5 pb-3">Follow Us:</h4>
                                <a href="#"
                                    ><img
                                        src="/img/fb.svg"
                                        alt="link to Facebook"
                                        class="me-3"
                                /></a>
                                <a href="#"
                                    ><img
                                        src="/img/ig.svg"
                                        alt="link to Instagram"
                                        class="me-3"
                                /></a>
                                <a href="#"
                                    ><img
                                        src="/img/twitter.svg"
                                        alt="link to Twitter"
                                /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <section class="footer pt-3 pb-0 py-lg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 mb-4 mb-md-0">
                            <p>
                            &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?> All
                                Rights Reserved.
                            </p>
                        </div>
                        <div class="col-xl-7 d-flex justify-content-lg-end">

                            <?php
                                wp_nav_menu(
                                    array(
                                        'menu' => 'footer',
                                        'container' => '',
                                        'theme_location' => 'footer',
                                        'items_wrap' => '<ul class="list-group list-group-horizontal-lg">%3$s</ul>'
                                    )
                                );
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.footer-->
        </div>

        <?php
            wp_footer();
        ?>
    </body>
</html>
