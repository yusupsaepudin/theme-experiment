<?php get_header(); ?>

<section id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

</section>

<?php get_footer(); ?>