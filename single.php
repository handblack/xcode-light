<?php get_header(); ?>
<div class="page-content p-5" id="content">
    <div class="content-wrapper">    
        <section class="content">
            <div class="container-fluid">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'the-bootstrap-blog' ); ?></p>

                <?php endif; ?>

            </div>
        </section>
    </div>    
</div>    

<?php get_footer();?>