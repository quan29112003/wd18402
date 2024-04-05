<main>
	<div id="carousel-home">
		<div class="owl-carousel owl-theme">
			<div class="owl-slide cover" style="background-image: url(uploads/banner1.jpg);">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<div class="container">
						<div class="row justify-content-center justify-content-md-end">
							<div class="col-lg-6 static">
								<div class="slide-text text-end white">
									<h2 class="owl-slide-animated owl-slide-title">ĐỒNG HỒ SEIKO</h2>
									<p class="owl-slide-animated owl-slide-subtitle">
										Sản phẩm mới nhất!!
									</p>
									<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="index.php?act=sanphamct&idsp=28" role="button">Xem ngay</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/owl-slide-->
			<div class="owl-slide cover" style="background-image: url(uploads/banner5.jpg);">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<div class="container">
						<div class="row justify-content-center justify-content-md-end">
							<div class="col-lg-6 static">
								<div class="slide-text text-end white">
									<h2 class="owl-slide-animated owl-slide-title">ĐỒNG HỒ CITIZEN</h2>
									<p class="owl-slide-animated owl-slide-subtitle">
										Sản phẩm mới nhất!!
									</p>
									<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="index.php?act=sanphamct&idsp=28" role="button">Xem ngay</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/owl-slide-->
			<div class="owl-slide cover" style="background-image: url(uploads/banner6.jpg);">
				<div class="opacity-mask d-flex align-items-center">
					<div class="container">
						<div class="row justify-content-center justify-content-md-start">
							<div class="col-lg-12 static">
								<div class="slide-text text-center white">
									<h2 class="owl-slide-animated owl-slide-title">Xem thêm sản phẩm tại shop đồng hồ</h2>
									<p class="owl-slide-animated owl-slide-subtitle">
										Ở đây chúng tôi bán hàng rẻ nhưng mà chất !!
									</p>
									<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="index.php?act=sanpham&iddm=0" role="button">Xem Ngay !</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
			</div>
		</div>
		<div id="icon_drag_mobile"></div>
	</div>
	<!--/carousel-->

	<ul id="banners_grid" class="clearfix">
		<li>
			<a href="#0" class="img_container">
				<img src="uploads/banner3.jpg" data-src="uploads/banner3.jpg" alt="" class="lazy">
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>ĐỒNG HỒ THỤY SỸ</h3>
				</div>
			</a>
		</li>
		<li>
			<a href="#0" class="img_container">
				<img src="uploads/banner4.jpg" data-src="uploads/banner4.jpg" alt="" class="lazy">
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>ĐỒNG HỒ NAM HIỆN ĐẠI</h3>
				</div>
			</a>
		</li>
		<li>
			<a href="#0" class="img_container">
				<img src="uploads/banner7.jpg" data-src="uploads/banner7.jpg" alt="" class="lazy">
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>ĐỒNG HỒ NỮ ĐẸP</h3>
				</div>
			</a>
		</li>
	</ul>
	<!--/banners_grid -->

	<div class="container margin_60_35">
		<div class="main_title">
			<h2>Các thương hiệu hiện đã có tại cửa hàng</h2>
		</div>
		<div class="owl-carousel owl-theme products_carousel">
			<?php
			foreach ($dataSanPham as $item) : ?>
				<div class="item">
					<div class="grid_item">
						<a href="<?= BASE_URL ?>?act=chi-tiet&id=<?= $item['SanPhamID'] ?>">
							<div style="color: black;">
								<figure>
									<img class="img-fluid lazy" src="uploads/<?= $item['anhSP1'] ?>" alt="">
								</figure>
								<?= $item['TenSanPham'] ?>
							</div>
							<div class="price_box">
								<span class="new_price"><?= number_format($item['GiaSP']) ?>đ</span>
							</div>
						</a>
						<a href="<?= BASE_URL . "?act=cart-add&productID=" .$item['SanPhamID'] ?>"><abutton class="btn_1">Thêm vào giỏ hàng</button></a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- /products_carousel -->
	</div>
	<!-- /container -->

	<div class="featured lazy" data-bg="url(uploads/banner9.jpg)">
		<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
			<div class="container margin_60">
				<div class="row justify-content-center justify-content-md-start">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<h3>ĐỒNG HỒ<br>NAM, NỮ</h3>
						<p>Ưu đãi lớn, mua ngay!!</p>
						<div class="feat_text_block">
							<div class="price_box">
								<span class="new_price">$90.00</span>
								<span class="old_price">$170.00</span>
							</div>
							<a class="btn_1" href="index.php?act=sanphamct&idsp=32" role="button">Mua ngay</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /featured -->
	<div class="container margin_60_35">
		<div class="main_title">
			<h2>Sản phẩm được yêu thích</h2>
		</div>
		<div class="owl-carousel owl-theme products_carousel">
			<?php
			foreach ($dataSanPham as $item) : ?>
				<div class="item">
					<div class="grid_item">
						<a href="<?= BASE_URL ?>?act=chi-tiet&id=<?= $item['SanPhamID'] ?>">
							<div style="color: black;">
								<figure>
									<img class="img-fluid lazy" src="uploads/<?= $item['anhSP1'] ?>" alt="">
								</figure>
								<?= $item['TenSanPham'] ?>
							</div>
							<div class="price_box">
								<span class="new_price"><?= number_format($item['GiaSP']) ?>đ</span>
							</div>
						</a>
						<a href="<?= BASE_URL . "?act=cart-add&productID=" .$item['SanPhamID'] ?>"><button class="btn_1">Thêm vào giỏ hàng</button></a>
					</div>
				</div>
			<?php endforeach; ?>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
	<div class="featured lazy" data-bg="url(uploads/banner10.jpg)">
		<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
			<div class="container margin_60">
				<div class="row justify-content-center justify-content-md-start">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<h3>ĐỒNG HỒ<br>ĐÔI</h3>
						<p>Giá hủy diệt!!</p>
						<div class="feat_text_block">
							<div class="price_box">
								<span class="new_price">$90.00</span>
								<span class="old_price">$170.00</span>
							</div>
							<a class="btn_1" href="index.php?act=sanphamct&idsp=33" role="button">Mua ngay</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /featured -->

	<div class="container margin_60_35">
		<div class="main_title">
			<h2>Sản phẩm mới về</h2>
			<span>New Deal</span>
			<p>Sản phẩm mới về!!</p>
		</div>
		<div class="owl-carousel owl-theme products_carousel">
			<?php
			foreach ($SanPhamNew as $item) : ?>
				<div class="item">
					<div class="grid_item">
					<span class="ribbon new">New</span>
						<a href="<?= BASE_URL ?>?act=chi-tiet&id=<?= $item['SanPhamID'] ?>">
							<div style="color: black;">
								<figure>
									<img class="img-fluid lazy" src="uploads/<?= $item['anhSP1'] ?>" alt="">
								</figure>
								<?= $item['TenSanPham'] ?>
							</div>
							<div class="price_box">
								<span class="new_price"><?= number_format($item['GiaSP']) ?>đ</span>
							</div>
						</a>
						<a href="<?= BASE_URL . "?act=cart-add&productID=" .$item['SanPhamID'] ?>"><button class="btn_1">Thêm vào giỏ hàng</button></a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- /products_carousel -->
	</div>
	<!-- /container -->

	<!-- /container -->
</main>
<!-- /main -->
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