<link rel="stylesheet" href="css/product_page.css">
<main>
	    <div class="container margin_30">
	        <div class="countdown_inner"> <div class="countdown"></div>
	        </div>
	        <div class="row">
	            <div class="col-lg-6 magnific-gallery">
	                <p>
	                    <?php
						extract($anhsp);
							foreach ($anhsp as $anhsp) {
								$img = $anhsp['img_sp'];
								$hinhpath ="../upload/".$img;
						 echo '<a href="img/products/shoes/large/1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="'.$hinhpath.'" alt="" class="img-fluid"></a>';}
						?>
	                </p>
	            </div>
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="breadcrumbs">
	                    <ul>
	                        <li><a href="#">Home</a></li>
	                        <li><a href="#">Category</a></li>
	                        <li>Page active</li>
	                    </ul>
	                </div>
	                <!-- /page_header -->
	                <div class="prod_info">
					<?php
                    extract($onesp);
                    $hinhpath ="../upload/".$img;?>
	                    <h1><?=$name?></h1>
	                    <span class="rating"></span>
	                    <p><small>Mã sản phẩm : <?=$id?></small><br><?=$mota?>
	                    <div class="prod_options">
	                        <div class="row">
	                            <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Số Lượng</strong></label>
	                            <div class="col-xl-4 col-lg-5 col-md-6 col-6">
	                                <div class="numbers-row">
	                                    <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-lg-5 col-md-6">
	                            <div class="price_main"><span class="new_price">$<?=$price?></span></div>
	                        </div>
	                        <div class="col-lg-4 col-md-6">
							<button data-id="'.$id.'" class="btn_1" onclick="addToCart(<?=$id?>,'<?=$name?>',<?=$price?>)" >Thêm vào giỏ hàng </button>
						</form>
	                        </div>
	                    </div>
							</div>
	                <!-- /prod_info -->
	                <div class="product_actions">
	                    <ul>
	                        <li>
	                        </li>
	                    </ul>
	                </div>
	                <!-- /product_actions -->
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	    
	    <div class="tabs_product">
	        <div class="container">
	            <ul class="nav nav-tabs" role="tablist">
	                <li class="nav-item">
	                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Tổng Quát Sản Phẩm</a>
	                </li>
	                <li class="nav-item">
	                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Bình luận</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	    <!-- /tabs_product -->
	    <div class="tab_content_wrapper">
	        <div class="container">
	            <div class="tab-content" role="tablist">
	                <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
	                    <div class="card-header" role="tab" id="heading-A">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
	                                Thông tin về sản phẩm
	                            </a>
	                        </h5>
	                    </div>
	                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <h3>Tổng quan</h3>
	                                    <?php echo '<p>'.$mota.'</p>'?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
	                    <div class="card-header" role="tab" id="heading-B">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
	                                Bình Luận
	                            </a>
	                        </h5>
	                    </div>
	                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
	                        <div class="card-body">
	                            <div class="row justify-content-between">
									<?php
									foreach ($binhluan_cung_sp as $binhluan_cung_sp ) {
										extract($binhluan_cung_sp);
										echo '<div class="col-lg-6">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><h4 style= color:red;>'.$user.'</h4></span>
	                                            <em>'.$ngaybinhluan.'</em>
	                                        </div>
	                                        <h4>"'.$tieude.'"</h4>
	                                        <p>'.$noidung.'</p>
	                                    </div>
	                                </div>';
									}?>
	                                <!-- <div class="col-lg-6">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><h4 style= color:red;>Commpletely satisfied</h4></span>
	                                            <em>Published 54 minutes ago</em>
	                                        </div>
	                                        <h4>"Commpletely satisfied"</h4>
	                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div> -->
	                            </div>
	                            <!-- /row -->
	                            <!-- /row -->
	                            <p class="text-end"><?php
                    			extract($onesp);
								echo '<a href="index.php?act=binhluan&&idsp='.$id.'" class="btn_1">Bình Luận</a>'?></p>
	                        </div>
	                        <!-- /card-body -->
	                    </div>
	                </div>
	            </div>
	            <!-- /tab-content -->
	        </div>
	    </div>

	    <div class="container margin_60_35">
	        <div class="main_title">
	            <h2>Sản phẩm cùng hãng</h2>
	            <span>Products</span>
	            <p>Sản phẩm cùng hãng </p>
	        </div>
	        <div class="owl-carousel owl-theme products_carousel">
				<?php
                        foreach ($sp_cung_loai as $sp_cung_loai ) :
                            extract($sp_cung_loai);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
							$hinhpath ="../upload/".$img;?>
                            <div class="item">
							<div class="grid_item">
								<figure>
									<a href="<?=$linksp?>">
										<img class="owl-lazy" src="<?=$hinhpath?>" data-src="<?=$hinhpath?>" alt="">
									</a>
								</figure>
								<a href="<?=$linksp?>">
									<h3><?=$name?></h3>
								</a>
								<div class="price_box">
									<span class="new_price">$<?=$price?></span>
								</div>
								<ul>
								</ul>
								<button data-id="'.$id.'" class="btn_1" onclick="addToCart(<?=$id?>,'<?=$name?>',<?=$price?>)" >Thêm vào giỏ hàng </button>
							</form>
							</div>
						</div>
						<?php endforeach;?>
	            <!-- <div class="item">
	                <div class="grid_item">
	                    <span class="ribbon new">New</span>
	                    <figure>
	                        <a href="product-detail-1.html">
	                            <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4.jpg" alt="">
	                        </a>
	                    </figure>
	                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
	                    <a href="product-detail-1.html">
	                        <h3>ACG React Terra</h3>
	                    </a>
	                    <div class="price_box">
	                        <span class="new_price">$110.00</span>
	                    </div>
	                    <ul>
	                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
	                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
	                    </ul>
	                </div>
	            </div> -->
	            <!-- /item -->
	            <!-- /item -->
	            <!-- /item -->
	            <!-- /item -->
	            <!-- /item -->
	        </div>
	        <!-- /products_carousel -->
	    </div>
	    <!-- /container -->

	    <div class="feat">
			<div class="container">
				<ul>
					<li>
						<div class="box">
							<i class="ti-gift"></i>
							<div class="justify-content-center">
							<h3>Sản phẩm bảo đảm chính hãng</h3>
								<p>Hàng chính hãng 100%</p>
							</div>
						</div>
					</li>
					<li>
						<div class="box">
							<i class="ti-wallet"></i>
							<div class="justify-content-center">
								<h3>Thanh toán an toàn</h3>
								<p>100% bảo mật thanh toán người dùng</p>
							</div>
						</div>
					</li>
					<li>
						<div class="box">
							<i class="ti-headphone-alt"></i>
							<div class="justify-content-center">
								<h3>Hỗ trợ 24/7</h3>
								<p>Liên hệ với chúng tôi ngay để được hỗ trợ</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!--/feat-->

	</main>
	<script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <!-- SPECIFIC SCRIPTS -->
	<script src="js/sticky_sidebar.min.js"></script>
	<script>
		// Sticky sidebar
		$('#sidebar_fixed').theiaStickySidebar({
			minWidth: 991,
			updateSidebarHeight: false,
			additionalMarginTop: 90
		});
	</script>
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