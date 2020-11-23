<section class="category-section spad">
    <div class="container">
        <h2 class="fw-title mb-5">
            <?php if (isset($message)) {
                echo 'Từ khóa: ' . $message;
            } else {
                echo $cateMessage['name'];
            }
            ?>
        </h2>
        <div class="row">
            <?php foreach ($cate as $rowCate) { ?>
                <?php foreach ($led as $rowLed) { ?>
                    <?php if ($rowLed['categori_id'] == $rowCate['id']) { ?>
                        <div class="col-lg-3 col-sm-6 product-index">
                            <div class="product-item">
                                <div class="pi-pic">

                                    <?php $arrImg = []; ?>
                                    <?php foreach ($img as $key => $rowImg) {
                                        if ($rowLed['id'] == $rowImg['led_id']) {

                                            $arrImg[] = $rowImg['name'];
                                        }
                                    }
                                    ?>
                                    <div class="carousel-inner-img">
                                        <a href="/Leds/product/<?php echo $rowLed['id']; ?>">
                                            <img src="/Views/Layouts/img/product/<?php echo $arrImg['0']; ?>" alt="<?php echo $arrImg['0']; ?>">
                                        </a>
                                    </div>

                                    <div class="pi-links">
                                        <a href="/Leds/cart/<?php echo $rowLed['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>Giỏ Hàng</span></a>
                                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6><?php echo number_format($rowLed['price'], 0, ',', '.'); ?><sup>đ</sup></h6>
                                    <a href="/Leds/product/<?php echo $rowLed['id']; ?>">
                                        <p><?php echo $rowLed['name']; ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>