<?php get_header(); ?>
<div class="page-content p-5" id="content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
            <p class="lead"><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'the-bootstrap-blog' ); ?></p>
        <?php endif; ?>
    </article>        
</div>    

<?php get_footer();?>