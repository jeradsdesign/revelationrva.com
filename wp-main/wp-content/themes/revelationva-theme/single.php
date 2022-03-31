<?php get_header(); ?>
        <section
            class="main-content container mt-5 mt-md-4 mt-lg-5 pt-5 action fadeIn"
        >

        <?php if(have_posts()) : while(have_posts()) :  the_post();?>

<?php the_content() ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no pages match your criteria.'); ?></p>

<?php
endif;
?>
           
           <p class="mt-5 pt-lg-5 project-types"><?php the_tags('Project types: ', ', ', ''); ?></p>
           <hr>
        </section>
<?php get_footer(); ?>