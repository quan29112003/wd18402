<link rel="stylesheet" href="css/checkout.css">
<main class="bg_gray">
		<div class="container">
            <div class="row justify-content-center">
				<div class="col-md-5">
					<div id="confirm">
						<div class="icon icon--order-success svg add_bottom_15">
							<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
								<g fill="none" stroke="#8EC343" stroke-width="2">
									<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
									<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
								</g>
							</svg>
						</div>
					<h2>Đặt hàng thành công!</h2>
					</div>
				</div>
				<?php if(is_array($oneOrder)){
					extract($oneOrder);}?>
				<table class="table table-striped cart-list">
							<thead>
								<tr>
									<th>
										Thông tin người nhận
									</th>
									<th>
										Thanh toán
									</th>
									<th>
										Trạng thái
									</th>
									<th>
										Vận chuyển
									</th>
									<th>
										Tổng tiền
									</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
									if($pttt==0){
                                        $thanhtoan = "Nhận hàng trả tiền";
                                    }else{
                                        $thanhtoan= "Thanh toán QR";
                                    }
                                    if($ptvc==0){
                                        $vanchuyen = "Nhanh";
                                    }else{
                                        $vanchuyen = "Hỏa Tốc";
                                    }
                                    if($trangthai==0){
                                        $trangthai1="Chưa giao hàng";
                                    }elseif($trangthai==1){
                                        $trangthai1 = "Đang giao hàng";
                                    }else{
                                        $trangthai1= "Đã giao hàng";
                                    }
									$xemspdonhang = "index.php?act=xemspdonhang&id=".$id_order;?><tr>
									<td>
										<h8 class="item_cart"><?=$hoten?> -- <?=$email?> -- <?=$sdt?> -- <?=$diachi?></h8>
									</td>
									<td>
										<strong><?=$thanhtoan?></strong>
									</td>
									<td>
									<strong><?=$trangthai1?></strong>
									</td>
									<td>
										<strong><?=$vanchuyen?></strong>
									</td>
									<td class="options">
										<strong>$<?=$tongtien?></strong>
									</td>
									<td class="options">
									<a href="<?=$xemspdonhang?>"><input type="button" class="btn_1" value ="Xem đơn hàng"></a>
									</td>
								</tr>
							</tbody>
						</table>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>