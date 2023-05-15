<?php get_header(); ?>
    <main id="contact">
        <div class="container">
            <h2><?php echo get_the_title(); ?></h2>
            <div class="content row">
                <div class="col-lg-6">
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
            <div class="map">
                <?php 
                    $address = get_field('lien_he');
                    echo($address);
                ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>