<?php get_header(); ?>
<!-- 
#################################################
Content Wrapper. Contains page content -->
<div class="content-wrapper">    
    <section>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blog-post">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <h4 style="font-weight: normal;" class="blog-post-title border border-top-0 border-left-0 border-right-0 border-succes ">
                        <?php the_title(); ?> </h4>
                    </a>
                    <div class="text-center">
                    <?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-fluid mb-3 ')); ?>
                    </div>

                    <p><?php echo esc_html ( get_the_excerpt() ); ?>

                    <a href="<?php the_permalink(); ?>" 
                        rel="<?php esc_attr_e( 'bookmark', 'the-bootstrap-blog' ); ?>" 
                        title="<?php esc_attr_e( 'Permanent Link to:', 'the-bootstrap-blog' ); ?>&nbsp;<?php the_title_attribute(); ?>" >
                    <?php esc_html_e( '&rarr;Read&nbsp;more', 'the-bootstrap-blog' ); ?></a></p>
                    <?php trackback_rdf(); ?>
                </article>
            </div><!-- blog-post -->
        <?php endwhile; else: ?>
            <h4><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'the-bootstrap-blog' ); ?></h4>

        <?php endif; ?>
    </section>

</div>
<?php get_footer();?>