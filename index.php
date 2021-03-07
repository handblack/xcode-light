<?php get_header(); ?>
<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <a href="<?php the_permalink(); ?>">
                            <h4 style="font-weight: normal;" class="blog-post-title border border-top-0 border-left-0 border-right-0 border-succes">
                            <?php the_title(); ?> </h4>
                        </a>

            <p class="lead"><?php echo esc_html ( get_the_excerpt() ); ?></a>
        </article>
    <?php endwhile; else: ?>
        <h4><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'the-bootstrap-blog' ); ?></h4>
    <?php endif; ?>
</div>
<!-- 
#################################################
Content Wrapper. Contains page content -->

<?php get_footer();?>