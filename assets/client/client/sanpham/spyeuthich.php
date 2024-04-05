<link rel="stylesheet" href="css/listing.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/jquery.mmenu.all.css">
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
	                <h1>Sản phẩm được yêu thích</h1>
	            </div>
	        </div>
			<?php
			if(is_array($dm)){
				extract($dm);
				$hinhpath ="../upload/".$img_danhmuc;
				if(is_file($hinhpath)){
					$hinh1= $hinhpath;
				}else{
					$hinh1 ="img/smart.jpg";
				}
				echo '<img src="'.$hinh1.'" class="img-fluid" alt="">';}
				?>
	    </div>
	    <!-- /top_banner -->
	    <div id="stick_here"></div>
	    <div class="toolbox elemento_stick">
	        <div class="container">
	            <ul class="clearfix">
	                <li>
	                    <div class="sort_select">
	                    </div>
	                </li>
	                <li>
	                    <a href="#0"><i class="ti-view-grid"></i></a>
	                    <a href="listing-row-1-sidebar-left.html"><i class="ti-view-list"></i></a>
	                </li>
	                <li>
	                    <a href="#0" class="open_filters">
	                        <i class="ti-filter"></i><span>Filters</span>
	                    </a>
	                </li>
	            </ul>
	        </div>
	    </div>
	    <!-- /toolbox -->
	    <div class="container margin_30">
	            <!-- /col -->
	            <div class="col-lg-9">
					<?php
					foreach ($spyeuthich as $sp) :
						extract($sp);
						$hinhpath ="../upload/".$img;
						$linksp ="index.php?act=sanphamct&&idsp=".$id;?>
						<div class="row row_item">
	                    <div class="col-sm-4">
	                        <figure>
	                            <a href="<?=$linksp?>">
	                                <img class="img-fluid lazy" src="<?=$hinhpath?>" data-src="<?=$hinhpath?>" alt="">
	                            </a>
	                        </figure>
	                    </div>
	                    <div class="col-sm-8">
	                        <a href="product-detail-1.html">
	                            <h3><?=$name?></h3>
	                        </a>
	                        <p><?=$mota?></p>
	                        <div class="price_box">
	                            <span class="new_price">$<?=$price?></span>
	                        </div>
	                        <ul>
                            <button data-id="'.$id.'" class="btn_1" onclick="addToCart(<?=$id?>,'<?=$name?>',<?=$price?>)" >Thêm vào giỏ hàng </button>
	                        </ul>
	                    </div>
	                </div>
                    <?php endforeach;?>
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
	