<!-- Category section -->
<section class="category-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 order-2 order-lg-1">
				<div class="filter-widget">
					<h2 class="fw-title">Danh Mục</h2>
					<ul class="category-menu">
						<?php foreach ($cateAll as $rowAllCate) { ?>
							<?php $count = 0; ?>
							<?php foreach ($ledAll as $rowLedAll) {
								if ($rowLedAll['categori_id'] == $rowAllCate['id']) {
									$count += 1;
								}
							}
							?>
							<?php if ($count > 0) { ?>
								<li>
									<a href="/Leds/categori/<?php echo $rowAllCate['id']; ?>">
										<?php echo $rowAllCate['name']; ?>
										<span><?php echo $count; ?></span>
									</a>
								</li>
							<?php } ?>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
				<h2 class="fw-title">
					<?php if (isset($message)) {
						echo $message;
					} else {
						echo $cateMessage['name'];
					}
					?>
				</h2>

				<div class="row">
					<?php foreach ($led as $rowLed) { ?>
						<div class="col-lg-4 col-sm-6">
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
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Category section end -->

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