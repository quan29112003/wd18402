<?= require_once PATH_VIEW . 'layouts/partials/header.php' ?>

<main>
	<div class="top_banner">
		<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
			<div class="container">
				<div class="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Category</a></li>
						<li>Page active</li>
					</ul>
				</div>
			</div>
		</div><img src="uploads/banner10.jpg" class="img-fluid" alt="">
	</div>
	<!-- /top_banner -->
	<div id="stick_here"></div>
	<!-- /toolbox -->
	<div class="container margin_30">
		<div class="row">
		</div>
		</aside>
		<!-- /col -->
		<div class="col-lg-9">
			<!-- <?php
			foreach ($data as $item) : ?>
				<div class="row row_item">
					<div class="col-sm-4">
						<figure>
							<a href="<?= BASE_URL ?>?act=chi-tiet&id=<?= $item['SanPhamID'] ?>">
								<img class="img-fluid lazy" src="uploads/<?= $item['anhSP1'] ?>" data-src="uploads/<?= $item['anhSP1'] ?>" alt="">
							</a>
						</figure>
					</div>
					<div class="col-sm-8">
						<a href="<?= BASE_URL ?>?act=chi-tiet&id=<?= $item['SanPhamID'] ?>">
							<h3><?= $item['TenSanPham'] ?></h3>
						</a>
						<p><?= $item['SoLuong'] ?></p>
						<p><?= $item['MoTa'] ?></p>
						<div class="price_box">
							<span class="new_price">$<?= $item['GiaSP'] ?></span>
						</div>
						<br>
						<ul style="padding-left: 0;">
							<a href="<?= BASE_URL . "?act=cart-add&productID=" .$item['SanPhamID'] ?>"><button class="btn_1" >Thêm vào giỏ hàng </button></a>
						</ul>
					</div>
				</div>
			<?php endforeach ?> -->
			
			<?php foreach ($data as $item) : ?>

				<div class="row row_item">
					<div class="col-sm-4">
						<figure>
							<a href="<?= BASE_URL ?>?act=chi-tiet&id=<?= $item['SanPhamID'] ?>">
								<img class="img-fluid lazy" src="uploads/<?= $item['anhSP1'] ?>" data-src="uploads/<?= $item['anhSP1'] ?>" alt="">
							</a>
						</figure>
					</div>
					<div class="col-sm-8">
						<a href="<?= BASE_URL ?>?act=chi-tiet&id=<?= $item['SanPhamID'] ?>">
							<h3><?= $item['TenSanPham'] ?></h3>
						</a>
						<p>Số lượng: <?= $item['SoLuong'] ?></p>
						<p><?= $item['MoTa'] ?></p>
						<div class="price_box">
							<span class="new_price"><?= number_format($item['GiaSP']) ?>đ</span>
						</div>
						<br>
						<ul style="padding-left: 0;">
							<a href="<?= BASE_URL . "?act=cart-add&productID=" .$item['SanPhamID'] ?>"><button class="btn_1" >Thêm vào giỏ hàng </button></a>
						</ul>
					</div>
				</div>
            <?php endforeach; ?>
			<!-- <div class="row row_item">
	                    <div class="col-sm-4">
	                        <figure>
	                            <span class="ribbon off">-30%</span>
	                            <a href="product-detail-1.html">
	                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/1.jpg" alt="">
	                            </a>
	                            <div data-countdown="2019/05/15" class="countdown"></div>
	                        </figure>
	                    </div>
	                    <div class="col-sm-8">
	                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
	                        <a href="product-detail-1.html">
	                            <h3>Armor Air x Fear</h3>
	                        </a>
	                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
	                        <div class="price_box">
	                            <span class="new_price">$48.00</span>
	                            <span class="old_price">$60.00</span>
	                        </div>
	                        <ul>
	                            <li><a href="#0" class="btn_1">Add to cart</a></li>
	                            <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
	                            <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                        </ul>
	                    </div>
	                </div> -->
			<!-- /row_item -->
		</div>
		<!-- /col -->
	</div>
	<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!-- /main -->
<script src="js/specific_listing.js"></script>
<script>
	// Sticky sidebar
	$('#sidebar_fixed').theiaStickySidebar({
		minWidth: 991,
		updateSidebarHeight: true,
		additionalMarginTop: 90
	});
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
	let totalProduct = document.getElementById('totalProduct')

	function addToCart(productId, productName, productPrice) {
		// console.log(productId, productName, productPrice);
		$.ajax({
			type: 'POST',
			url: "./giohang/addToCart.php",
			data: {
				id: productId,
				name: productName,
				price: productPrice
			},
			success: function(response) {
				totalProduct.innerText = response;
				alert('Bạn đã thêm sản phẩm thành công!');
			},
			error: function(error) {
				console.log(error);
			}
		});
	}
</script>

<!-- footer --><?= require_once PATH_VIEW . 'layouts/partials/footer.php' ?>
