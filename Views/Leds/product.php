<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Chi Tiết Sản Phẩm</h4>
    </div>
</div>
<!-- Page info end -->


<!-- product section -->
<section class="product-section">
    <div class="container">
        <div class="back-link">
            <a href="/Leds/categori/all"> &lt;&lt; Trở lại trang sản phẩm</a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php
                $arrImg = [];
                foreach ($img as $key => $rowImg) {
                    if ($led['id'] == $rowImg['led_id']) {

                        $arrImg[] = $rowImg['name'];
                    }
                }
                ?>
                <div class="product-pic-zoom">
                    <img class="product-big-img" src="/Views/Layouts/img/product/<?php echo $arrImg['0']; ?>" class="thumbnail" alt="<?php echo $arrImg['0']; ?>">
                </div>
                <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                    <div class="product-thumbs-track">

                        <div class="pt active" data-imgbigurl="/Views/Layouts/img/product/<?php echo $arrImg['0']; ?>"><img src="/Views/Layouts/img/product/<?php echo $arrImg['0']; ?>" alt="<?php echo $arrImg[$i]; ?>"></div>
                        <?php $totall = count($arrImg); ?>

                        <?php if ($totall > 1) { ?>
                            <?php for ($i = 1; $i < $totall; $i++) { ?>
                                <div class="pt" data-imgbigurl="/Views/Layouts/img/product/<?php echo $arrImg[$i]; ?>">
                                    <img src="/Views/Layouts/img/product/<?php echo $arrImg[$i]; ?>" alt="<?php echo $arrImg[$i]; ?>">
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 product-details">
                <h2 class="p-title"><?php echo $led['name']; ?></h2>
                <h3 class="p-price"><?php echo number_format($led['price'], 0, ',', '.'); ?><sup>đ</sup></h3>
                <h4 class="p-stock">Tình trạng: <span>Còn hàng</span></h4>
                <div class="p-rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o fa-fade"></i>
                </div>

                <div class="p-review">
                    <a href="">3 Đánh giá</a>|<a href="">Thêm đánh giá</a>
                </div>

                <div class="quantity">
                    <p>Số Lượng</p>
                    <div class="pro-qty">
                        <form id="my_form" action="" method="post">
                            <input id="quantity" type="text" name="quantity" value="1">
                        </form>
                    </div>
                </div>

                <a href="" id="btn-cart" class="site-btn" onclick="cart();">Thêm Giỏ Hàng</a>

                <div id="accordion" class="accordion-area">
                    <div class="panel">
                        <div class="panel-header" id="headingOne">
                            <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Thông tin sản phẩm</button>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="panel-body">
                                <p><?php echo $led['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingTwo">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Chi tiết sản phẩm </button>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="panel-body">
                                <img src="/Views/Layouts/img/cards.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingThree">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Thanh toán & Giao hàng</button>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="panel-body">
                                <h4>7 Days Returns</h4>
                                <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-sharing">
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-pinterest"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- product section end -->

<!-- RELATED PRODUCTS section -->
<section class="related-product-section">
    <div class="container">
        <div class="section-title">
            <h2>SẢN PHẨM LIÊN QUAN </h2>
        </div>
        <div class="product-slider owl-carousel">

            <?php foreach ($top as $rowTop) { ?>
                <?php
                $arrImgLed = [];
                foreach ($img as $key => $rowImg) {
                    if ($rowTop['id'] == $rowImg['led_id']) {

                        $arrImgLed[] = $rowImg['name'];
                    }
                }
                ?>
                <div class="product-item">
                    <div class="pi-pic">
                        <a href="/Leds/product/<?php echo $rowTop['id']; ?>">
                            <img class="product-big-img" src="/Views/Layouts/img/product/<?php echo $arrImgLed['0']; ?>" class="thumbnail" alt="<?php echo $arrImgLed['0']; ?>">
                        </a>
                        <div class="pi-links">
                            <a href="/Leds/cart/<?php echo $rowTop['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>Giỏ Hàng</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6><?php echo number_format($rowTop['price'], 0, ',', '.'); ?><sup>đ</sup></h6>
                        <a href="/Leds/product/<?php echo $rowTop['id']; ?>">
                            <p><?php echo $rowTop['name']; ?></p>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- RELATED PRODUCTS section end -->