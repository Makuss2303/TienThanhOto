<?php
    $single_product_slide = get_field('slide_san_pham');
    $single_product_info = get_field('thong_tin_san_pham');
?>
<?php get_header(); ?>
    <main id="single-product">
        <div class="container">
            <div class="product-info">
                <div class="row">
                    <div class="col-lg">
                        <div class="info-pic">
                            <div class="rs01">
                                <?php
                                    if (!empty($single_product_slide)) {
                                        foreach ($single_product_slide as $items_name) {
                                    ?>
                                        <a class="rs01imgback" href="<?php echo($items_name['image']['url']);?>">Sản phẩm</a>
                                    <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="info-content">
                            <?php include 'breadcrumb.php';?>
                            <h2 class="title"><?php echo get_the_title(); ?></h2>
                            <div class="is-divider small"></div>
                            <p><bdi><?php echo ($single_product_info['gia']); ?></bdi></p>
                            <div classs="description">
                                <?php echo ($single_product_info['thong_tin_them']); ?>
                            </div>
                            <?php include 'social-share.php';?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-detail">
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