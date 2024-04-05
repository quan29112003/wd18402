<?php require_once PATH_VIEW . 'layouts/partials/header.php' ?>
<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/client/css/checkout.css">
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
	<?php if(isset($_SESSION['user'])){ extract($_SESSION['user']); } ?>
			<div class="row">
				<div class="col-lg-4 col-md-6">
				<form action="index.php?act=order-purchase" method="post">
					<div class="step first">
						<h3>1. Kiểm tra thông tin nhận hàng và thanh toán</h3>
					<div class="tab-content checkout">
						<div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
							<div class="form-group">
								Email của bạn :
								<input type="email" class="form-control" value="<?= $_SESSION['user']['email'] ?>" required name="user_email" id="user_email">
							</div>
							<div class="form-group">
								Họ và Tên :
								<input type="text" class="form-control" value="<?= $_SESSION['user']['name'] ?>" required name="user_name" id="user_name" >
							</div>
							<!-- /row -->
							<div class="form-group">
								Địa chỉ :
								<input type="text" class="form-control" value="<?= $_SESSION['user']['diachi'] ?>" name="user_address" id="user_address" required>
							</div>
							<!-- /row -->
							<!-- /row -->
							<div class="form-group">
								Số điện thoại :
								<input type="text" class="form-control" required value="<?= $_SESSION['user']['tel'] ?>" name="user_phone" id="user_phone">
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
										<input type="radio" name="status_payment" value="0" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Chuyển khoản<a href="#0" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="status_payment" value="1">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
							
							<!-- <h6 class="pb-2">Vận chuyển</h6>
							
						
						<ul>
								<li>
									<label class="container_radio">Nhanh<a href="#0" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio"  value="0" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Hỏa Tốc<a href="#0"  data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio"  value="1" >
										<span class="checkmark"></span>
									</label>
								</li>
								
							</ul> -->
						
					</div> 
					<!-- /step -->
					
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="step last">
						<h3>3. Đơn hàng của bạn</h3>
					<div class="box_general summary">
					<?php $total=0; if (!empty($_SESSION['cart'])) :
                            foreach ($_SESSION['cart'] as $item) : ?>
						<ul>
						
								<li class="clearfix"><em><?=$item['quantity']?>x <?=$item['TenSanPham']?></em>  <span>$<?=number_format($item['quantity']*$item['GiaSP'])?></span></li>
							
						</ul>
						<ul>
							
							<div class="clearfix ">Cần thanh toán<span><?php
                                        $total = $item['GiaSP'] * $item['quantity'];
										// $sum_total += $total;


                                        echo number_format($total);
                                        ?>đ</span></div>
						</ul>
						
						<div class="form-group">
							</div>
							<?php
                            endforeach;
								endif;
								?>
								<div class="total clearfix"><span>Tổng tiền : <?= caculator_total_order() ?>đ</span></div>
						<!-- <input type="submit" class="btn_1 full-width" name="confirmthanhtoan" value="Xác nhận thanh toán"> -->
						<button type="submit" class="btn_1 full-width">Xác nhận thanh toán</button>

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
<?= require_once PATH_VIEW . 'layouts/partials/footer.php' ?>
