<?php get_header();?>

<main class="container">
    <div class="row">
        <div class="col-md-8">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <p class="lead"><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'the-bootstrap-blog' ); ?></p>
                <?php endif; ?>
            </article> 
        </div>
        <div class="col-md-4">
        </div>
    </div>
</main>
<?php get_footer();?>