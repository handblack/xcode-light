<?php get_header(); ?>

<main class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title">
             
                    <span class="page-description"><?php echo get_search_query(); ?></span>
                </h1>
            </header><!-- .page-header -->

            <?php
            // Start the Loop.
            while ( have_posts() ) :
                the_post();

                /*
                * Include the Post-Format-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Format name) and that
                * will be used instead.
                */
                get_template_part( 'template-parts/content/content', 'excerpt' );

                // End the loop.
            endwhile;

            // Previous/next page navigation.
           
            // If no content, include the "No posts found" template.
            else :
            get_template_part( 'template-parts/content/content', 'none' );

            endif;
            ?>
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

 

<?php get_footer(); ?>