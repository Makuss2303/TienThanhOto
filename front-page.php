<?php 
//main visual
    $mainvisual = get_field('mainvisual');
    $branch = get_field('branch');
    $view = get_field('viewing');

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
                            <img src="<?php echo($items_name['image']['url']);?>" alt="<?php echo($items_name['image']['alt']);?>">
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
                <button type="button" class="btn btn-danger"><i class="fa-regular fa-heart"></i>TƯ VẤN TRẢ GÓP</button>
                <button type="button" class="btn btn-danger"><i class="fa-regular fa-envelope"></i></i>ĐĂNG KÝ LÁI THỬ</button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-phone"></i>HOTLINE 0911 422 892</button>
            </div>   
        </div>
        <div class="our-product">
            <div class="container">
                <h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
                <figure class="divine-banner">
                    <img src="<?php echo get_template_directory_uri() ?>./assets/images/divider.png" alt="divider">
                </figure>
                <div class="list-item">
                    <div class="row">
                        <div class="single-item col-lg-4">
                            <figure>
                                <img src="./assets/images/product/alphard.-14.png" alt="">
                            </figure>
                            <div class="text-content">
                                <div class="name">Toyota Alphard</div>
                                <div class="price">4.280.000.000₫</div>
                            </div>
                        </div>
                        <div class="single-item col-lg-4">
                            <figure>
                                <img src="./assets/images/product/alphard.-14.png" alt="">
                            </figure>
                            <div class="text-content">
                                <div class="name">Toyota Alphard</div>
                                <div class="price">4.280.000.000₫</div>
                            </div>
                        </div>
                        <div class="single-item col-lg-4">
                            <figure>
                                <img src="./assets/images/product/alphard.-14.png" alt="">
                            </figure>
                            <div class="text-content">
                                <div class="name">Toyota Alphard</div>
                                <div class="price">4.280.000.000₫</div>
                            </div>
                        </div>
                        <div class="single-item col-lg-4">
                            <figure>
                                <img src="./assets/images/product/alphard.-14.png" alt="">
                            </figure>
                            <div class="text-content">
                                <div class="name">Toyota Alphard</div>
                                <div class="price">4.280.000.000₫</div>
                            </div>
                        </div>
                        <div class="single-item col-lg-4">
                            <figure>
                                <img src="./assets/images/product/alphard.-14.png" alt="">
                            </figure>
                            <div class="text-content">
                                <div class="name">Toyota Alphard</div>
                                <div class="price">4.280.000.000₫</div>
                            </div>
                        </div>
                        <div class="single-item col-lg-4">
                            <figure>
                                <img src="./assets/images/product/alphard.-14.png" alt="">
                            </figure>
                            <div class="text-content">
                                <div class="name">Toyota Alphard</div>
                                <div class="price">4.280.000.000₫</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact"> 
            <div class="container">
                <h3 class="contact-name">MUA XE TOYOTA GIÁ TỐT NHẤT GỌI NGAY Mr. THÀNH</h3>
                <div class="contact-link">
                    <div class="button-group">
                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-phone"></i>0911 422 892</button>
                        <button type="button" class="btn btn-danger"><i class="fa-regular fa-envelope"></i>NHẬN BÁO GIÁ</button>
                        <button type="button" class="btn btn-danger"><i class="fa-regular fa-clock"></i>ĐẶT LỊCH HẸN</button>
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
                <div class="owl-two owl-carousel owl-theme">
                    <a class="item" href="https://www.google.com.vn/" target="_blank">
                        <figure>
                            <img src="./assets/images/news/news-1.jpg" alt="news-1">
                        </figure>
                        <div class="item-description">
                            <h4>So sánh Toyota Corolla Altis Và Honda Civic – 2 đối thủ trong phân khúc Hạng C</h4>
                            <p>Toyota Corolla Altis và Honda Civic là 2 đối thủ nặng ký trong dòng xe phân khúc hạng C Thông số kỹ thuật Honda Civic và [...]</p>
                        </div>
                    </a>
                    <a class="item" href="https://www.google.com.vn/" target="_blank">
                        <figure>
                            <img src="./assets/images/news/news-2.jpg" alt="news-2">
                        </figure>
                        <div class="item-description">
                            <h4>Toyota Việt Nam công bố doanh số bán hàng tháng 8/2022</h4>
                            <p>Công ty Ô tô Toyota Việt Nam công bố tổng doanh số bán hàng trong tháng 8/2022 đạt 6.796 xe (bao gồm xe Lexus), tăng 195% [...]</p>
                        </div>
                    </a>
                    <a class="item" href="https://www.google.com.vn/" target="_blank">
                        <figure>
                            <img src="./assets/images/news/news-3.jpg" alt="news-3">
                        </figure>
                        <div class="item-description">
                            <h4>Chương trình ưu đãi từ hệ thống đại lý Toyota trên toàn quốc cho khách hàng mua xe Vios tháng 9/2022</h4>
                            <p>Thay lời tri ân tới những khách hàng đã góp phần đưa mẫu xe Vios trở thành chiếc xe quốc dân của Toyota tại Việt Nam, [...]</p>
                        </div>
                    </a>
                    <a class="item" href="https://www.google.com.vn/" target="_blank">
                        <figure>
                            <img src="./assets/images/news/news-1.jpg" alt="news-1">
                        </figure>
                        <div class="item-description">
                            <h4>So sánh Toyota Corolla Altis Và Honda Civic – 2 đối thủ trong phân khúc Hạng C</h4>
                            <p>Toyota Corolla Altis và Honda Civic là 2 đối thủ nặng ký trong dòng xe phân khúc hạng C Thông số kỹ thuật Honda Civic và [...]</p>
                        </div>
                    </a>
                    <a class="item" href="https://www.google.com.vn/" target="_blank">
                        <figure>
                            <img src="./assets/images/news/news-2.jpg" alt="news-2">
                        </figure>
                        <div class="item-description">
                            <h4>Toyota Việt Nam công bố doanh số bán hàng tháng 8/2022</h4>
                            <p>Công ty Ô tô Toyota Việt Nam công bố tổng doanh số bán hàng trong tháng 8/2022 đạt 6.796 xe (bao gồm xe Lexus), tăng 195% [...]</p>
                        </div>
                    </a>
                    <a class="item" href="https://www.google.com.vn/" target="_blank">
                        <figure>
                            <img src="./assets/images/news/news-3.jpg" alt="news-3">
                        </figure>
                        <div class="item-description">
                            <h4>Chương trình ưu đãi từ hệ thống đại lý Toyota trên toàn quốc cho khách hàng mua xe Vios tháng 9/2022</h4>
                            <p>Thay lời tri ân tới những khách hàng đã góp phần đưa mẫu xe Vios trở thành chiếc xe quốc dân của Toyota tại Việt Nam, [...]</p>
                        </div>
                    </a>
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
                    <div class="item">
                        <a 
                        data-src="./assets/images/customer/customer-1.jpg" 
                        data-fancybox="gallery"
                        data-caption="Khách hàng"
                        >
                            <figure>
                                <img src="./assets/images/customer/customer-1.jpg" alt="customer-1">
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a 
                        data-src="./assets/images/customer/customer-2.jpg" 
                        data-fancybox="gallery"
                        data-caption="Khách hàng"
                        >
                            <figure>
                                <img src="./assets/images/customer/customer-2.jpg" alt="customer-2">
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a 
                        data-src="./assets/images/customer/customer-3.jpg" 
                        data-fancybox="gallery"
                        data-caption="Khách hàng"
                        >
                            <figure>
                                <img src="./assets/images/customer/customer-3.jpg" alt="customer-3">
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a 
                        data-src="./assets/images/customer/customer-1.jpg" 
                        data-fancybox="gallery"
                        data-caption="Khách hàng"
                        >
                            <figure>
                                <img src="./assets/images/customer/customer-1.jpg" alt="customer-1">
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a 
                        data-src="./assets/images/customer/customer-2.jpg" 
                        data-fancybox="gallery"
                        data-caption="Khách hàng"
                        >
                            <figure>
                                <img src="./assets/images/customer/customer-2.jpg" alt="customer-2">
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a 
                        data-src="./assets/images/customer/customer-3.jpg" 
                        data-fancybox="gallery"
                        data-caption="Khách hàng"
                        >
                            <figure>
                                <img src="./assets/images/customer/customer-3.jpg" alt="customer-3">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>