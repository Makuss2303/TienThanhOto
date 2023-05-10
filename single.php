<?php 
//main visual


?>
<?php get_header(); ?>
    <main id="single-post">
        <div class="container">
            <div class="post-content row">
                <?php if (have_posts()): 
                    while (have_posts()):  ?>
                        <div class="col-lg-9">
                            <h1 class="post-title"><?php echo get_the_title(); ?></h1>
                            <h5 class="post-create">Đăng ngày <?php echo get_the_date('d/m/y'); ?></h5>
                            <h5 class="post-create">Đăng ngày <?php echo(get_the_category()[0]->name); ?></h5>
                        <?php
                            the_post();
                            the_content(); 
                        endwhile;
                    endif; 
                        ?>
                        </div>
                <div class="side-bar col-lg-3">
                    So sánh Toyota Corolla Altis Và Honda Civic – 2 đối thủ trong phân khúc Hạng C
                </div>
            </div>
            <div class="post-share">
                <!-- <div class="post-share-text">CHIA SẺ NGAY!</div> -->
                <figure><img src="<?php echo get_template_directory_uri() ?>./assets/images/share-icon.png" alt=""></figure>
                <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>