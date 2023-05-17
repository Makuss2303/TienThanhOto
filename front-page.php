<?php 
//main visual
    $mainvisual = get_field('mainvisual');
    $branch = get_field('branch');
    $view = get_field('viewing');
    $customer = get_field('khach_hang');
?>
<?php get_header(); ?>
    <main id="homepage">
        <div class="mainvisual">
            <div class="owl-one owl-carousel owl-theme">
                <?php
                if (!empty($mainvisual)) {
                    foreach ($mainvisual as $items_name) {
                ?>
                        <a class="item" href="#">
                            <img src="<?php echo($items_name['image']['url']);?>" alt="<?php if (!empty($items_name['image']['alt'])) echo($items_name['image']['alt']);?>">
                        </a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="banner-first"> 
            <div class="container">
                <h1><?php if (!empty($branch)) { echo $branch; }?></h1>
            </div>   
        </div>
        <div class="banner-second"> 
            <div class="container">
                <a href="https://www.google.com/" target="_blank" class="btn btn-danger"><i class="fa-regular fa-heart"></i>TƯ VẤN TRẢ GÓP</a>
                <a href="https://www.google.com/" target="_blank" class="btn btn-danger"><i class="fa-regular fa-envelope"></i></i>ĐĂNG KÝ LÁI THỬ</button>
                <a href="https://www.google.com/" target="_blank" class="btn btn-danger"><i class="fa-solid fa-phone"></i>HOTLINE 0911 422 892</a>
            </div>   
        </div>
        <div class="our-product">
            <div class="container">
                <h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
                <figure class="divine-banner">
                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/divider.png" alt="divider">
                </figure>
                <?php
                    $args = array(
                        'post_type' => 'san-pham',
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'ignore_sticky_posts' => 1,
                    );
                    $get_post = new WP_Query($args);
                ?>
                <div class="list-item">
                    <div class="row">
                        <?php 
                        if ( $get_post-> have_posts() ) :
                        while ( $get_post->have_posts() ) : $get_post->the_post(); 
                            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            $link_post = $post->guid;
                        ?>
                        <div class="single-item col-lg-4">
                            <a href="<?php echo $link_post; ?>" target="_blank">
                                <figure><img src="<?php echo $feat_image; ?>" alt="san-pham"></figure>
                            </a>
                            <div class="text-content">
                                <div class="name"><?php echo get_the_title(); ?></div>
                                <?php $variable = get_field('thong_tin_san_pham', $post->ID); ?>
                                <div class="price"><?php echo $variable['gia'] ? $variable['gia'] : '-'; ?></div>
                            </div>
                        </div>
                        <?php
                        endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>
                    </div>
                    <div class="read-more">
                        <a href="<?php echo get_post_type_archive_link('san-pham');?>" class="btn btn-danger">Xem thêm...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact"> 
            <div class="container">
                <h3 class="contact-name">MUA XE TOYOTA GIÁ TỐT NHẤT GỌI NGAY Mr. THÀNH</h3>
                <div class="contact-link">
                    <div class="button-group">
                        <a href="https://www.google.com/" target="_blank" class="btn btn-danger"><i class="fa-solid fa-phone"></i>0911 422 892</a>
                        <a href="https://www.google.com/" target="_blank" class="btn btn-danger"><i class="fa-regular fa-envelope"></i>NHẬN BÁO GIÁ</a>
                        <a href="https://www.google.com/" target="_blank" class="btn btn-danger"><i class="fa-regular fa-clock"></i>ĐẶT LỊCH HẸN</a>
                    </div>
                </div>
            </div>   
        </div>
        <div class="introduction">
            <div class="container">
                <div class="banner">
                    <h2><?php echo $branch;?></h2>
                    <h3>ĐẠI LÝ TOYOTA CHÍNH HÃNG</h3>
                </div>  
                <div class="content">
                    <div class="row">
                        <div class="content-single col-lg">
                            <div class="content-single-cover">
                                <h4 class="content-single-title">TIÊU CHUẨN</h4>
                                <div class="content-single-description">
                                    Đại lý Toyota Biên Hòa được đầu tư đồng bộ và hiện đại theo tiêu chuẩn đại lý 3S của Toyota Việt Nam: Showroom, Service, Spare Parts
                                    <div class="special">“Chất lượng – Tận tâm – Chuyên nghiệp”</div>
                                    Toyota Biên Hòa khằng định sẽ là người bạn đồng hành tin cậy của quý khách trên mọi chặng đường
                                </div>
                            </div>
                        </div>
                        <div class="content-single col-lg">
                            <div class="content-single-cover">
                                <h4 class="content-single-title">GIÁ ƯU ĐÃI – GIAO XE SỚM</h4>
                                <div class="content-single-description">
                                    Đại lý Toyota Biên Hòa cam kết mức giá ưu đãi nhất cho khách hàng với thời gian giao xe sớm nhất
                                </div>
                                <h4 class="content-single-title">MUA TRẢ GÓP LÃI THẤP</h4>
                                <div class="content-single-description">
                                    Hỗ trợ khách hàng tính toán mức trả góp tốt nhất và thủ tục nhanh gọn nhất, ưu đãi vay đến 80% giá trị xe
                                </div>
                            </div>
                        </div>
                        <div class="content-single col-lg">
                            <div class="content-single-cover">
                                <h4 class="content-single-title">HẾT LÒNG VÌ KHÁCH HÀNG</h4>
                                <div class="content-single-description">
                                    Đội ngũ tư vấn bán hàng luôn sẵn lòng giúp tư vấn để tìm ra chiếc xe ưng ý cho quý khách hàng. Hỗ trợ 24/7 tận tâm, nhiệt tình, có trách nhiệm.
                                </div>
                                <h4 class="content-single-title">BẢO HÀNH TẠI TOÀN ĐẠI LÝ</h4>
                                <div class="content-single-description">
                                    Bảo hành, bảo dưỡng và sửa chữa theo tiêu chuẩn chất lượng của Toyota Việt Nam tại các Đại lý trong 3 năm hoặc 100.000km. Cung cấp phụ tùng ô tô Toyota chính hãng
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="viewing">
            <div class="container">
                <div class="row">
                    <?php
                    if (!empty($view)) {
                        foreach ($view as $items_name) {
                    ?>
                            <div class="content col-lg">
                                <img src="<?php echo($items_name['url']);?>" alt="<?php echo($items_name['alt']);?>">
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="container">
                <h2>TIN TỨC & KHUYẾN MÃI</h2>
                <figure class="divine-banner">
                    <img src="./assets/images/divider.png" alt="">
                </figure>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'category_name' => 'tin-tuc',
                    );
                    $get_post = new WP_Query($args);
                    if ( $get_post-> have_posts() ) :
                ?>
                <div class="owl-two owl-carousel owl-theme">
                    <?php 
                        while ( $get_post->have_posts() ) : $get_post->the_post();
                            $feat_image_news = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>                
                        <a class="item" href="<?php echo get_the_permalink();?>" target="_blank">
                            <div class="badge absolute top post-date badge-outline">
                                <div class="badge-inner">
                                    <span class="post-date-day"><?php echo get_the_date('d');?></span>
                                    <span class="post-date-month is-xsmall">Th<?php echo get_the_date('m');?></span>
                                </div>
                            </div>
                            <div class="badge-inneryear"><?php echo get_the_date('Y');?></div>
                            <figure>
                                <img src="<?php echo $feat_image_news;?>" alt="news">
                            </figure>
                            <div class="item-description">
                                <h4><?php echo get_the_title();?></h4>
                                <p><?php echo get_the_excerpt();?></p>
                            </div>
                        </a>
                    <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="our-customer">
            <div class="container">
                <h2>KHÁCH HÀNG CỦA CHÚNG TÔI</h2>
                <figure class="divine-banner">
                    <img src="./assets/images/divider.png" alt="">
                </figure>
                <div class="owl-three owl-carousel owl-theme">
                    <?php
                    if (!empty($customer)) {
                        foreach ($customer as $items_name) {
                    ?>
                            <div class="item">
                                <a 
                                data-src="<?php echo ($items_name['image']['url'] ? $items_name['image']['url'] : '');?>" 
                                data-fancybox="gallery"
                                data-caption="Khách hàng"
                                >
                                    <figure>
                                        <img src="<?php echo ($items_name['image']['url'] ? $items_name['image']['url'] : ''); ?>" alt="<?php echo ($items_name['image']['alt'] ? $items_name['image']['alt'] : ''); ?>">
                                    </figure>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>