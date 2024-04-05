<link rel="stylesheet" href="css/checkout.css">
<main class="bg_gray">
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
		</div>
		<h1>Thanh toán đơn hàng</h1>
			
	</div>
	<!-- /page_header -->
	<?php
                    					if(isset($_SESSION['user'])){
                        					extract($_SESSION['user']);
											}
											?>
			<div class="row">
				<div class="col-lg-4 col-md-6">
				<form action="index.php?act=confirmthanhtoan" method="post">
					<div class="step first">
						<h3>1. Kiểm tra thông tin nhận hàng và thanh toán</h3>
					<div class="tab-content checkout">
						<div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
							<div class="form-group">
								Email của bạn :
								<input type="email" class="form-control" value="<?=$email?>" name="email">
							</div>
							<div class="form-group">
								Họ và Tên :
								<input type="text" class="form-control" value="<?=$hoten_user?>" name="tenuser">
							</div>
							<!-- /row -->
							<div class="form-group">
								Địa chỉ :
								<input type="text" class="form-control" value="<?=$address?>" name="address">
							</div>
							<!-- /row -->
							<!-- /row -->
							<div class="form-group">
								Số điện thoại :
								<input type="text" class="form-control" value="<?=$tel?>" name="tel">
							</div>
							<div id="other_addr_c" class="pt-2">
							<!-- /row -->
							<!-- /row -->
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Telephone">
							</div>
							</div>
							<!-- /other_addr_c -->
					
							<hr>
						</div>
						<!-- /tab_1 -->
						<!-- /tab_2 -->
					</div>
					</div>
					<!-- /step -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="step middle payments">
						<h3>2. Phương thức thanh toán và vận chuyển</h3>
							<ul>
								<li>
									<label class="container_radio">Trả tiền khi nhận hàng<a href="#0" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="ptthanhtoan" value="0" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Chuyển khoản<a href="#0" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="ptthanhtoan" value="1">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
							
							<h6 class="pb-2">Vận chuyển</h6>
							
						
						<ul>
								<li>
									<label class="container_radio">Nhanh<a href="#0" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="ptvanchuyen" value="0" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Hỏa Tốc<a href="#0"  data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="ptvanchuyen" value="1" >
										<span class="checkmark"></span>
									</label>
								</li>
								
							</ul>
						
					</div>
					<!-- /step -->
					
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="step last">
						<h3>3. Đơn hàng của bạn</h3>
					<div class="box_general summary">
						<ul>
							<?php
							foreach ($cart as $item):?>
								<li class="clearfix"><em><?=$item['quantity']?>x <?=$item['name']?></em>  <span>$<?=$item['quantity']*$item['price']?></span></li>
							<?php endforeach;?>
							<!-- <li class="clearfix"><em>1x Armor Air X Fear</em>  <span>$145.00</span></li>
							<li class="clearfix"><em>2x Armor Air Zoom Alpha</em> <span>$115.00</span></li> -->
						</ul>
						<ul>
							<li class="clearfix"><em><strong>Giá của <?=$item['quantity']?> sản phẩm</strong></em>  <span>$<?=$item['quantity']*$item['price']?></span></li>
							
						</ul>
						<div class="total clearfix">Cần thanh toán<span>$<?=$_SESSION['resultTotal']?></span></div>
						<div class="form-group">
							</div>
						<input type="submit" class="btn_1 full-width" name="confirmthanhtoan" value="Xác nhận thanh toán">
						</form>
					</div>
					<!-- /box_general -->
					</div>
					<!-- /step -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->