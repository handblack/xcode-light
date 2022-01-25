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
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div class="p-4">
                    
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <?php wp_get_archives(); ?>
                        
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Categorias</h4>
                    <ol class="list-unstyled">
                        <?php 
                            $categories = get_categories();
                            foreach($categories as $category) {
                            echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
                            }
                        ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>