<link rel="stylesheet" href="css/cart.css">
<?php
if(is_array($oneOrder)){
	extract($oneOrder);
}
?>
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
			<h1>Đơn hàng <?=$id_order?> của <?=$hoten_user?></h1>
		</div>
		<?php
                    					if(isset($_SESSION['user'])){
                        					extract($_SESSION['user']);
											}?>
		<!-- /page_header -->
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="step first">
						<h3>1. Thông tin nhận hàng</h3>
					<div class="tab-content checkout">
						<div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
							<div class="form-group">
								Email của bạn :
								<input type="email" class="form-control" value="<?=$email?>"disabled >
							</div>
							<div class="form-group">
								Họ và Tên :
								<input type="text" class="form-control" value="<?=$hoten_user?>"disabled>
							</div>
							<!-- /row -->
							<div class="form-group">
								Địa chỉ :
								<input type="text" class="form-control" value="<?=$address?>"disabled>
							</div>
							<!-- /row -->
							<!-- /row -->
							<div class="form-group">
								Số điện thoại :
								<input type="text" class="form-control" value="<?=$tel?>"disabled>
							</div>
							<div id="other_addr_c" class="pt-2">
							<!-- /row -->
							<!-- /row -->
							</div>
							<!-- /other_addr_c -->
					
							<hr>
						</div>
						<!-- /tab_1 -->
						<!-- /tab_2 -->
					</div>
					</div>
					<!-- /step -->
					<?php
					if($pttt==0){
						$thanhtoan = "Nhận hàng trả tiền";
					}else{
						$thanhtoan = "Thanh toán QR";
					}
					if($ptvc==0){
						$vanchuyen = "Nhanh";
					}else{
						$vanchuyen ="Hỏa tốc";
					}
					?>
				</div>
				<div class="col-lg-4 col-md-6">
					<form action="index.php?act=confirmthanhtoan" method="post">
					<div class="step middle payments">
						<h3>2. Thanh toán và vận chuyển</h3>
						<h6 class="pb-2">Thanh toán</h6>
							<ul>
									<label class="container_radio"><?php echo $thanhtoan?><a href="#0" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="ptthanhtoan" value="0" checked>
										<span class="checkmark"></span>
									</label>
							</ul>
							
							<h6 class="pb-2">Vận chuyển</h6>
							
						
						<ul>
									<label class="container_radio"><?php echo $vanchuyen?><a href="#0"  data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="ptvanchuyen" value="1" checked>
										<span class="checkmark"></span>
									</label>
								
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
							$tongsoluong =0;
							foreach ($listPro as $pro):
							$tongsoluong += $pro['soluong'];
							?>
								<li class="clearfix"><em><?=$pro['soluong']?>x <?=$pro['name_pro']?></em>  <span style="color:red;">$<?=$pro['soluong']*$pro['giamua']?></span></li>
							<?php endforeach;?>
							<!-- <li class="clearfix"><em>1x Armor Air X Fear</em>  <span>$145.00</span></li>
							<li class="clearfix"><em>2x Armor Air Zoom Alpha</em> <span>$115.00</span></li> -->
						</ul>
						<ul>
							<li class="clearfix"><em><strong>Giá của <?=$tongsoluong?> sản phẩm</strong></em>  <span style="color:red;">$<?=$item['quantity']*$item['price']?></span></li>
							
						</ul>
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
		<!-- /box_cart -->
		
	</main>
	<!--/main-->