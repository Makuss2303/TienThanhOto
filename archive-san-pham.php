<?php get_header(); ?>
    <main id="products-list">
        <div class="container">
            <?php include 'breadcrumb.php';?>
            <div class="list-item">
                <div class="row">
                <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post(); 
                            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                ?>
                        <div class="single-item col-lg-4">
                            <a href="<?php echo get_permalink();?>" target="_blank">
                                <figure>
                                    <img src="<?php echo $feat_image; ?>" alt="sanpham">
                                </figure>
                            </a>
                            <div class="text-content">
                                <div class="name"><?php echo $post->post_title; ?></div>
                                <?php $variable = get_field('thong_tin_san_pham', $post->ID); ?>
                                <div class="price">
                                    <?php 
                                    echo $variable['gia'] ? $variable['gia'] : '-';
                                    ?>
                                </div>
                            </div>
                        </div>
                <?php            
                        endwhile; 
                    endif;
                ?>
                </div>
            </div>
            <?php pagination_bar($wp_query); ?>
        </div>
    </main>
<?php get_footer(); ?>