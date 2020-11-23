   <!-- Hero section -->
   <section class="hero-section">
     <div class="hero-slider owl-carousel">
       <div class="hs-item set-bg" data-setbg="/Views/Layouts/img/images.jpg">
         <div class="container">
           <div class="row">
             <div class="col-xl-6 col-lg-7 text-white">
               <span>Sản phẩm mới</span>
               <h2>Đèn led BB</h2>
               <p>Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon</p>
               <a href="#" class="site-btn sb-line">XEM</a>
               <a href="#" class="site-btn sb-white">THÊM VÀO GIỎ HÀNG</a>
             </div>
           </div>
           <div class="offer-card text-white">
             <span>CHỈ TỪ</span>
             <h5>30.000<sup>đ</sup></h5>
             <p>MUA NGAY</p>
           </div>
         </div>
       </div>
       <div class="hs-item set-bg" data-setbg="/Views/Layouts/img/unnamed.jpg">
         <div class="container">
           <div class="row">
             <div class="col-xl-6 col-lg-7 text-white">
               <span>Sản phẩm mới</span>
               <h2>Đèn led BB</h2>
               <p>Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon</p>
               <a href="#" class="site-btn sb-line">XEM</a>
               <a href="#" class="site-btn sb-white">THÊM VÀO GIỎ HÀNG</a>
             </div>
           </div>
           <div class="offer-card text-white">
             <span>CHỈ TỪ</span>
             <h5>30.000<sup>đ</sup></h5>
             <p>MUA NGAY</p>
           </div>
         </div>
       </div>
     </div>
     <div class="container">
       <div class="slide-num-holder" id="snh-1"></div>
     </div>
   </section>
   <!-- Hero section end -->



   <!-- Features section -->
   <section class="features-section">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-4 p-0 feature">
           <div class="feature-inner">
             <div class="feature-icon">
               <img src="/Views/Layouts/img/icons/1.png" alt="#">
             </div>
             <h2>THANH TOÁN AN TOÀN</h2>
           </div>
         </div>
         <div class="col-md-4 p-0 feature">
           <div class="feature-inner">
             <div class="feature-icon">
               <img src="/Views/Layouts/img/icons/2.png" alt="#">
             </div>
             <h2>SẢN PHẨM CAO CẤP</h2>
           </div>
         </div>
         <div class="col-md-4 p-0 feature">
           <div class="feature-inner">
             <div class="feature-icon">
               <img src="/Views/Layouts/img/icons/3.png" alt="#">
             </div>
             <h2>GIAO HÀNG MIỄN PHÍ</h2>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- Features section end -->


   <!-- letest product section -->
   <section class="top-letest-product-section">
     <div class="container">
       <div class="section-title">
         <h2>SẢN PHẨM MỚI NHẤT</h2>
       </div>
       <div class="product-slider owl-carousel">

         <?php foreach ($top as $rowTop) { ?>
           <?php $arrImg = []; ?>
           <?php foreach ($img as $key => $rowImg) { ?>

             <?php if ($rowTop['id'] == $rowImg['led_id']) { ?>

               <?php $arrImg[] = $rowImg['name']; ?>

             <?php } ?>
           <?php } ?>
           <div class="product-item">
             <div class="pi-pic">

               <div class="tag-new">Mới</div>
               <a href="/Leds/product/<?php echo $rowTop['id']; ?>">
                 <img class="product-big-img" src="/Views/Layouts/img/product/<?php echo $arrImg['0']; ?>" class="thumbnail" alt="<?php echo $arrImg['0']; ?>">
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
   <!-- letest product section end -->



   <!-- Product filter section -->
   <section class="product-filter-section">
     <div class="container">
       <div class="section-title">
         <h2>DANH SÁCH SẢN PHẨM THEO DANH MỤC</h2>
       </div>

       <div class="row">
         <?php
          $arrName = [];
          $arrId = [];
          ?>
         <?php foreach ($cate as $rowCate) { ?>
           <?php
            $arrName[$rowCate['name']] = $rowCate['name'];
            $arrId[$rowCate['id']] = $rowCate['id'];
            ?>

           <div class="col-md-3 product-filter-menu">
             <a href="/Leds/categori/<?php echo $rowCate['id']; ?>" class="btn btn-info btn-lg">
               <?php echo $rowCate['name']; ?>
             </a>
           </div>
         <?php } ?>
       </div>
       <hr class="my-4">

       <div class="row mt-5">

         <div class="col-md-12 product-heading">
           <?php foreach ($cate as $rowCate) { ?>
             <?php $a = 0; ?>
             <?php foreach ($led as $rowLed) { ?>
               <?php if ($rowLed['categori_id'] == $rowCate['id']) { ?>
                 <?php $a += 1; ?>
                 <?php if ($a <= 1) { ?>
                   <div class="heading">
                     <div class="heading-title">
                       <a href="/Leds/categori/<?php echo $rowCate['id']; ?>" role="button">
                         <h2>
                           <span>
                             <?php echo $rowCate['name']; ?>
                           </span>
                         </h2>
                       </a>
                     </div>
                   </div>
                 <?php } ?>
               <?php } ?>
             <?php } ?>

             <div class="row">

               <?php $b = 0; ?>
               <?php foreach ($led as $rowLed) { ?>
                 <?php if ($rowLed['categori_id'] == $rowCate['id']) { ?>
                   <?php $b += 1; ?>
                   <?php if ($b <= 4) { ?>

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
           <?php } ?>
         </div>
       </div>
     </div>
   </section>
   <!-- Product filter section end -->

   <!-- letest product section -->
   <section class="top-letest-product-section">
     <div class="container">
       <div class="section-title">
         <h2>SẢN PHẨM MỚI NHẤT</h2>
       </div>
       <div class="product-slider owl-carousel">

         <?php foreach ($top as $rowTop) { ?>
           <?php $arrImg = []; ?>
           <?php foreach ($img as $key => $rowImg) {
              if ($rowTop['id'] == $rowImg['led_id']) {

                $arrImg[] = $rowImg['name'];
              }
            }
            ?>
           <div class="product-item">
             <div class="pi-pic">

               <div class="tag-new">Mới</div>
               <a href="/Leds/product/<?php echo $rowTop['id']; ?>">
                 <img class="product-big-img" src="/Views/Layouts/img/product/<?php echo $arrImg['0']; ?>" class="thumbnail" alt="<?php echo $arrImg['0']; ?>">
               </a>

               <div class="pi-links">
                 <a href="/Leds/cart/<?php echo $rowTop['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                 <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
               </div>
             </div>
             <div class="pi-text">
               <h6><?php echo number_format($rowTop['price'], 0, ',', '.'); ?><sup>đ</sup></h6>
               <p><?php echo $rowTop['name']; ?></p>
             </div>
           </div>

         <?php } ?>

       </div>
     </div>
   </section>
   <!-- letest product section end -->


   <!-- Banner section -->
   <section class="banner-section">
     <div class="container">
       <div class="banner set-bg" data-setbg="img/banner-bg.jpg">
         <div class="tag-new">MỚI</div>
         <span>SẢN PHẨM MỚI NHẤT</span>
         <h2>THEO DANH MỤC</h2>
         <a href="/Leds/categori/all" class="site-btn">XEM NGAY</a>
       </div>
     </div>
   </section>
   <!-- Banner section end  -->