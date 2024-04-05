<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title>AllaiaPhone</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="views/img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="views/img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="views/img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="views/img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="<?= BASE_URL ?>assets/client/client/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= BASE_URL ?>assets/client/client/css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="<?= BASE_URL ?>assets/client/client/css/home_1.css" rel="stylesheet">

	<script>
        let submit = document.querySelector('#submit');
        let catalog = document.querySelector('#catalog');
        let keyword = document.querySelector('#keyword');

        submit.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = "<?= BASE_URL ?>?act=search&keyword=" + keyword.value + "&catalog=" + catalog.value;
        })
    </script>




</head>

<body>

	<div id="page">

		<header class="version_1">
			<div class="layer"></div><!-- Mobile menu overlay mask -->
			<div class="main_header">
				<div class="container">
					<div class="row small-gutters">
						<div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
							<div id="logo">
								<a href="index.php"><img src="views/img/logo.png" alt="" width="70" height=""></a>
							</div>
						</div>
						<nav class="col-xl-6 col-lg-7">
							<a class="open_close" href="javascript:void(0);">
								<div class="hamburger hamburger--spin">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
							</a>
							<!-- Mobile menu button -->
							<div class="main-menu">
								<div id="header_menu">
									<a href="index2.html"><img src="views/img/logo.png" alt="" width="100" height="35"></a>
									<a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
								</div>
								<ul>
									<li>
										<a href="index.php" class="show-submenu">Trang Chủ</a>
									</li>
									<li class="submenu">
										<a href="#" class="show-submenu">Danh Mục</a>
										<ul>
											<?php foreach ($dataDanhMuc as $item) : ?>
												<li><a href="<?= BASE_URL ?>?act=listdoc&id=<?= $item['DanhMucID'] ?>"><?= $item['TenDanhMuc'] ?></a></li>
											<?php endforeach ?>
										</ul>
									</li>
									<li>
										<a href="index.php?act=lienhe">Liên hệ</a>
									</li>
									<li>
										<a href="index.php?act=gioithieu">Giới Thiệu</a>
									</li>
								</ul>
							</div>
							<!--/main-menu -->
						</nav>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="main_nav Sticky">
				<div class="container">
					<div class="row small-gutters">
						<div class="col-xl-3 col-lg-3 col-md-3">
							<nav class="categories">
								<ul class="clearfix">
									<li><span>
											<a href="#">
												<span class="hamburger hamburger--spin">
													<span class="hamburger-box">
														<span class="hamburger-inner"></span>
													</span>
												</span>
												Tìm Kiếm Nhanh
											</a>
										</span>
										<div id="menu">
											<ul>
												<?php foreach ($dataDanhMuc as $item) : ?>
													<li>
														<a href="<?= BASE_URL ?>?act=san-pham&id=<?= $item['DanhMucID'] ?>"><?= $item['TenDanhMuc'] ?>
														</a>
													</li>
												<?php endforeach ?>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</div>
						<div class=" col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
							<div class="custom-search-input">

								<form action="index.php?act=search" method="post">
									<input type="text" placeholder="Tìm kiếm sản phẩm..." name="keyword" id="keyword">
									<button type="submit" id="submit"><i class="header-icon_search_custom"></i></button>
								</form>
							</div>
						</div>

						<div class="col-xl-3 col-lg-2 col-md-3">
							<ul class="top_tools">
								<li>
									<div class="dropdown dropdown-cart">
										<a href="index.php?act=cart-list" class="cart_bt">
											<strong id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></strong></a>
										<div class="dropdown-menu">
											<ul>
												<?php
												$sum_total = 0;
												if (!empty($_SESSION['cart'])) {
													foreach ($dataDb as $key => $product) :
														$quantityInCart = 0;
														foreach ($_SESSION['cart'] as $item) {
															if ($item['id'] == $product['id']) {
																$quantityInCart = $item['quantity'];
																break;
															}
														}
												?>
														<li>
															<a href="product-detail-1.html">
																<figure><img src="<?= $img_path, $product['img'] ?>" data-src="<?= $img_path, $product['img'] ?>" alt="" width="50" height="50" class="lazy"></figure>
																<strong><span><?= $item['name'] ?>x<?= $item['quantity'] ?></span>$<?= $item['quantity'] * $item['price'] ?></strong>
																<input type="hidden" value="'.$tonggia.'">
															</a>
														</li>
												<?php endforeach;
												} else {
													$dataDb = "";
												} ?>
											</ul>
											<div class="total_drop">
												<a href="index.php?act=cart-list" class="btn_1 outline">Xem giỏ hàng</a><a href="index.php?act=thanhtoan" class="btn_1">Thanh Toán</a>
											</div>
										</div>
									</div>
									<!-- /dropdown-cart-->
								</li>
								<li>
								</li>
								<li>
									<div class="dropdown dropdown-access">
										<a href="#" class="access_link"><span>Tài Khoản</span></a>
										<div class="dropdown-menu">
											<?php
											if (isset($_SESSION['user'])) {
												extract($_SESSION['user']);
											?>
												<div class="user_name">
													Xin Chào <?php echo $name ?>
												</div>
											<?php
											} else {
											?>
												<a href="index.php?act=login" class="btn_1">Đăng nhập hoặc Đăng ký</a>
											<?php } ?>
											<ul>
												<li>
													<a href="<?= BASE_URL . "?act=kiemtradonhang&id=" .$id ?>"><i class="ti-package"></i>Đơn hàng của tôi</a>
												</li>
												<li>
													<a href="<?= BASE_URL . "?act=updatetk&id=" .$id ?>"><i class="ti-user"></i>Cập nhật tài khoản</a>
												</li>
												<li>
													<a href="<?= BASE_URL . '?act=logout' ?>"><i class="ti-user"></i>Đăng Xuất</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- /dropdown-access-->
								</li>
								<li>
									<a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
								</li>
								<li>
									<a href="#menu" class="btn_cat_mob">
										<div class="hamburger hamburger--spin" id="hamburger">
											<div class="hamburger-box">
												<div class="hamburger-inner"></div>
											</div>
										</div>
										Categories
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /row -->
				</div>
				<div class="search_mob_wp">
					<input type="text" class="form-control" placeholder="Search over 10.000 products">
					<input type="submit" class="btn_1 full-width" value="Search">
				</div>
				<!-- /search_mobile -->
			</div>
			<!-- /main_nav -->
		</header>
		<!-- /header -->