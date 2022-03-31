<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo('charset') ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <h1 class="home-h1"><?php echo get_bloginfo('name'); ?></h1>
        <?php 
global $post;       
// add 'post_name' to the $post_class                
$post_class = $post->post_name;
?>
        <nav
            class="navbar navbar-expand-lg navbar-light bg-light navbar-light pb-0"
        >
            <div class="container">
                <a href="/wp-main" class="navbar-brand" aria-hidden="true"
                    >Revelation Cabinetry L.L.C. logo</a
                >
                <button
                    class="navbar-toggler collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbar-content"
                >
                    <div class="hamburger-toggle">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </button>

                <div class="collapse navbar-collapse" id="navbar-content">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a
                                class="nav-link <?php if($post_class == 'home')echo 'current'; ?>"
                                aria-current="page"
                                href="/wp-main"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="/wp-main/about" class="nav-link <?php if($post_class == 'about')echo 'current'; ?>">About</a>
                        </li>
                        <li
                            class="nav-item dropdown dropdown-mega position-static"
                        >
                            <a
                                class="nav-link dropdown-toggle <?php if($post_class == 'services')echo 'current'; ?>"
                                href="/wp-main/services"
                                data-bs-toggle="dropdown"
                                data-bs-auto-close="outside"
                                >Services</a
                            >
                            <div class="dropdown-menu shadow mt-0">
                                <div class="container">
                                    <h5 class="pt-4 mt-1 pb-md-3">Services</h5>
                                    <div class="row">
                                        <div
                                            class="col-12 col-md-3 col-lg-4 col-xxl-3 pt-4 py-md-5"
                                        >
                                            <div class="list-group">
                                                <a
                                                    class="list-group-item mb-2"
                                                    href="/wp-main/services/#commercial-residential"
                                                    >Commercial & Residential</a
                                                >
                                                <a
                                                    class="list-group-item"
                                                    href="/wp-main/services/#kitchens"
                                                    >Kitchens</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 col-md-4 col-xxl-5 pt-0 py-md-5"
                                        >
                                            <div class="list-group">
                                                <a
                                                    class="list-group-item mb-2"
                                                    href="/wp-main/services/#bathrooms"
                                                    >Bathrooms</a
                                                >
                                                <a
                                                    class="list-group-item"
                                                    href="/wp-main/services/#built-ins-bookcases"
                                                    >Built-ins/Bookcases</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 col-md-5 col-lg-4 py-4"
                                        >
                                            <img
                                                src="/img/services-menu.jpg"
                                                class="img-fluid"
                                                alt="image"
                                            />
                                        </div>
                                        <!-- <div
                                                class="col-12 col-sm-4 col-md-3 py-4"
                                            >
                                                <h5>Title</h5>
                                                <p>Description goes here...</p>
                                            </div> -->
                                        <!-- <div
                                                class="col-12 col-sm-12 col-md-3 py-4"
                                            >
                                                <h5>Title</h5>
                                                <div class="list-group">
                                                    <a
                                                        class="list-group-item"
                                                        href="#"
                                                        >Menu Link</a
                                                    >
                                                    <a
                                                        class="list-group-item"
                                                        href="#"
                                                        >Menu Link</a
                                                    >
                                                    <a
                                                        class="list-group-item"
                                                        href="#"
                                                        >Menu Link</a
                                                    >
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="/wp-main/recent-projects" class="nav-link <?php if ( is_home() )echo 'current'; ?>">Recent Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="/wp-main/contact" class="nav-link <?php if($post_class == 'contact')echo 'current'; ?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <?php if ( is_front_page() ) :?>
        <section class="banner fadeIn">
            <h2>
                Revelation: <br />
                <span>n. The act of making your vision known.</span>
            </h2>
        </section>
        <section class="gray-bar">
            <div class="container">
                <p class="fadeIn">
                    <strong>35+</strong> years in the cabinetry business.
                </p>
            </div>
            <div class="orange-box action loadUp-scroll">
                <p>Need custom cabinets?</p>
                <a href="/wp-main/contact" class="btn">Schedule an Appointment</a>
            </div>
        </section>
        <?php else: ?>
            <section class="title py-3 py-lg-4">
            <div class="container">
    
                <h1 class="fadeIn my-lg-2">
                    <?php if ( is_home() ) :
    echo 'Recent Projects';
    else: 
    echo the_title(); 
    endif;
    ?></h1>
            </div>
        </section>
        <section class="gray-bar">
            <div class="container">
                <p class="fadeIn">
                    <strong>35+</strong> years in the cabinetry business.
                </p>
            </div>
        </section>
        <?php
      endif;
      ?>