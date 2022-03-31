<?php get_header(); ?>
<section class="main-content container mt-sm-4 mt-md-3 mt-lg-4 pt-sm-4 mb-3 mb-lg-5">
        <?php 
global $post;       
// add 'post_name' to the $post_class                
$post_class = $post->post_name;
?>
        <?php if($post_class == 'about'): ?>
            
                <div class="row mb-4 mb-lg-5 pb-lg-5">
                    <div class="col-md-6 ps-0 pe-0">
                        <img src="<?php the_field('about_image_1'); ?>" class="d-block pull-img-left load-left" alt="photo of cabinets">
                        
                    </div>

                    <div class="col-md-6 ps-lg-5 pt-lg-5 mt-4 mt-sm-5 mt-lg-3 mt-xl-6 mt-xxxl-14 load-up">
                    <?php
                if(have_posts() ){
                    while(have_posts()){
                        the_post();
                        the_content();
                    }
                }
            ?>
                    </div>
                </div>
                <div class="row mt-md-5 mb-md-5">
                <div
                    class="col-md-6 pe-lg-5 pt-lg-5 mt-4 mt-sm-5 mt-lg-3 mt-xl-2 mt-xxxl-14 order-2 order-sm-1 load-up"
                >
                    <?php the_field('about_text_2'); ?>
                    <a href="#" class="btn dark-teal two-tone mt-md-4"
                        >Contact Us</a
                    >
                </div>
                <div class="col-md-6 ps-0 pe-0 ps-lg-5 pe-0 order-1 order-sm-2">
                    <img
                        src="<?php the_field('about_image_2'); ?>"
                        class="d-block pull-img-right action slide-right"
                        alt="photo of cabinets"
                    />
                </div>
            </div>
           
            <?php elseif($post_class == 'contact'): ?>
            
                <div class="row mb-4 mb-lg-5 pb-lg-5">
                    <div class="col-md-6 ps-0 pe-0">
                    <?php
                if(have_posts() ){
                    while(have_posts()){
                        the_post();
                        the_content();
                    }
                }
            ?>
                    </div>
                    <div class="col-md-6 ps-0 pe-0">
                    <?php the_field('contact_page_text') ?>
                    
                    </div>
                </div>
           

              <?php else: ?>
            
            <?php
                if(have_posts() ){
                    while(have_posts()){
                        the_post();
                        the_content();
                    }
                }
            ?>

            
<?php
      endif;
      ?>
             
  </section>      
<?php get_footer(); ?> 