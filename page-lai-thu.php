<?php get_header(); ?>
    <main id="driving-test">
        <div class="container">
            <h2><?php echo get_the_title(); ?></h2>
            <div class="content">
                <?php 
                if (have_posts()): 
                    while (have_posts()):
                        the_post();
                        the_content(); 
                    endwhile;
                endif; 
                ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>