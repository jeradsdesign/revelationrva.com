<?php get_header(); ?>
        <section
            class="main-content container mt-5 mt-md-4 mt-lg-5 pt-5 pb-lg-5 action fadeIn"
        >

        <?php if(have_posts()) : while(have_posts()) :  the_post();?>

<h2 class="mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt() ?>
<p class="mt-5 pt-lg-3 project-types"><?php the_tags('Project types: ', ', ', ''); ?></p>
<hr class="mt-5 mb-5">
<?php endwhile; else: ?>
<p><?php _e('Sorry, no pages match your criteria.'); ?></p>

<?php
endif;
?>
           
           
        </section>
<?php get_footer(); ?>