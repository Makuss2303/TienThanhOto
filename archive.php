<?php get_header(); ?>
    <main id="news">
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
                        <a class="single-item col-lg-4" href="<?php echo get_permalink();?>">
                            <div class="badge absolute top post-date badge-outline">
                                <div class="badge-inner">
                                    <span class="post-date-day"><?php echo get_the_date('d');?></span>
                                    <span class="post-date-month is-xsmall">Th<?php echo get_the_date('m');?></span>
                                </div>
                            </div>
                            <div class="badge-inneryear"><?php echo get_the_date('Y');?></div>
                            <figure>
                                <img src="<?php echo $feat_image; ?>" alt="sanpham">
                            </figure>
                            <div class="text-content">
                                <div class="name"><?php echo $post->post_title; ?></div>
                                <div class="is-divider"></div>
                                <p class="describe">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                            </div>
                        </a>
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