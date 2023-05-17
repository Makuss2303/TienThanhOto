<?php 
    $this_post_ID = get_the_ID();
?>
<?php get_header(); ?>
    <main id="single-post">
        <div class="container">
            <div class="post-content row">
                <div class="col-lg-9">
                    <?php if (have_posts()): 
                        while (have_posts()):  ?>
                                <h1 class="post-title"><?php echo get_the_title(); ?></h1>
                                <h5 class="post-create">Đăng ngày <?php echo get_the_date('d/m/y'); ?></h5>
                                <h5 class="post-create">Chuyên mục <?php echo(get_the_category()[0]->name); ?></h5>
                            <?php
                                the_post();
                                the_content(); 
                            endwhile;
                        endif; 
                    ?>
                </div>
                <div class="side-bar col-lg-3">
                    <h3>Bài đăng gần nhất</h3>
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_status' => 'publish',
                            'category_name' => 'tin-tuc',
                            'post__not_in' => array($this_post_ID)
                        );
                        $get_post = new WP_Query($args);
                        if ( $get_post-> have_posts() ) :
                            while ( $get_post->have_posts() ) : $get_post->the_post();
                                $feat_image_side_bar = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                                <a class="side-item" href="<?php echo get_the_permalink();?>">
                                    <figure>
                                        <img src="<?php echo $feat_image_side_bar;?>" alt="sidebar">
                                    </figure>
                                    <h4><?php echo get_the_title();?></h4>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
            <?php include 'social-share.php';?>
        </div>
    </main>
<?php get_footer(); ?>