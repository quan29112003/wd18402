<main>
		<div id="carousel-home">
			<div class="owl-carousel owl-theme">
				<div class="owl-slide cover" style="background-image: url(img/iphone-14-pro-max.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-end">
								<div class="col-lg-6 static">
									<div class="slide-text text-end white">
										<h2 class="owl-slide-animated owl-slide-title">Iphone<br>15 Pro MAX</h2>
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
				<div class="owl-slide cover" style="background-image: url(img/oppo-find-x.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-6 static">
									<div class="slide-text white">
										<h2 class="owl-slide-animated owl-slide-title">Oppo<br>find X</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Oppo new limited!!
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="index.php?act=sanphamct&idsp=33" role="button">Xem ngay</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover" style="background-image: url(img/smart.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center black">
										<h2 class="owl-slide-animated owl-slide-title">Xem thêm sản phẩm tại<br>Shop của Allaia</h2>
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
					<img src="img/banners_cat_placeholder.jpg" data-src="img/iphone-12.png" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Iphone zone</h3>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/banner-samsung.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Samsung zone</h3>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/oppo-banner.png" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Oppo zone</h3>
					</div>
				</a>
			</li>
		</ul>
		<!--/banners_grid -->
		
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Các thương hiệu hiện đã có tại cửa hàng</h2>
				<p>Iphone - Samsung - Xiaomi và nhiều hơn thế nữa !!</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
			<?php
                     foreach ($dsdm as $dm) {
                        extract($dm);
                        $hinh = $img_path.$img_danhmuc;
                        $linkdm ="index.php?act=sanpham&iddm=".$id;
                        echo'<div class="item">
						<div class="grid_item">
							<figure>
								<a href="'.$linkdm.'">
									<img class="img-fluid lazy" src="'.$hinh.'" alt="">
								</a>
							</figure>
							<a href="'.$linkdm.'">
								<h3>'.$name.'</h3>
							</a>
						</div>
					</div>';
				 }?>
			</div>
			<!-- /products_carousel -->
		</div>
		<!-- /container -->

		<div class="featured lazy" data-bg="url(img/samsung-galaxy-flip.jpg)">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				<div class="container margin_60">
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-lg-6 wow" data-wow-offset="150">
							<h3>Samsung<br>Z flip</h3>
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
				<p>Sản phẩm đang có lượt xem đứng đầu</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
			<?php
                     foreach ($spyeuthich as $sp):
                        extract($sp);
                        $hinh = $img_path.$img;
                        $linksp ="index.php?act=sanphamct&idsp=".$id?>
                    <div class="item">
						<div class="grid_item">
							<figure>
								<a href="<?=$linksp?>">
									<img class="img-fluid lazy" src="<?php echo $hinh?>"  alt="">
								</a>
							</figure>
							<div class="rating"></div>
							<a href="'.$linksp.'">
								<h3><?=$name?></h3>
							</a>
							<div class="price_box">
								<span class="new_price"><?=$price?></span>
							</div>
							
							<button class="btn_1" onclick="addToCart(<?=$id?>,'<?=$name?>',<?=$price?>)" >Thêm vào giỏ hàng</button>;
						</div>
					</div>
						<?php endforeach; ?>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
        <div class="featured lazy" data-bg="url(img/oppo-find-x.jpg)">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				<div class="container margin_60">
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-lg-6 wow" data-wow-offset="150">
							<h3>Oppo<br>find x</h3>
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
                     foreach ($spnew as $sp):
                        extract($sp);
                        $hinh = $img_path.$img;
                        $linksp ="index.php?act=sanphamct&idsp=".$id;?>
                        <div class="item">
						<div class="grid_item">
							<span class="ribbon new">New</span>
							<figure>
								<a href="<?=$linksp?>">
									<img class="img-fluid lazy" src="<?=$hinh?>" alt="">
								</a>
							</figure>
							<div class="rating"></div>
							<a href="<?=$linksp?>">
								<h3><?=$name?></h3>
							</a>
							<div class="price_box">
								<span class="new_price"><?=$price?></span>
							</div>
							<div>
								<button data-id="'.$id.'" class="btn_1" onclick="addToCart(<?=$id?>,'<?=$name?>',<?=$price?>)" >Thêm vào giỏ hàng </button>
							</div>
						</div>
					</div>
						<?php endforeach;?>
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
		function addToCart(productId, productName, productPrice){
			// console.log(productId, productName, productPrice);
			$.ajax({
				type: 'POST',
				url: "./giohang/addToCart.php",
				data: {
					id: productId,
					name: productName,
					price: productPrice
				},
				success: function(response){
					totalProduct.innerText = response;
					alert('Bạn đã thêm sản phẩm thành công!');
				},
				error: function(error){
					console.log(error);
				}
			});
		}
	</script>