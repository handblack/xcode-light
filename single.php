<?php get_header(); ?>
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Contacts</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contacts</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>



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

<?php get_footer();?>