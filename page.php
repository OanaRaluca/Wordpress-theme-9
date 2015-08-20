<?php

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <main itemtype="http://schema.org/Blog" itemscope="itemscope" itemprop="mainContentOfPage" role="main">

                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    get_template_part( 'content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                    // End the loop.
                endwhile;
                ?>

            </main><!-- main -->
        </div><!-- .col-lg-8 -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
