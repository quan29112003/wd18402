<?php
	if(empty($dataDb)){
		$thongbao = 'chưa có sản phẩm nào';
	}else{
		$thongbao ="";
	}
?>
<link rel="stylesheet" href="css/cart.css">
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
			<h1>Đơn hàng <?=$thongbao?></h1>
		</div>
		<!-- /page_header -->
		<table class="table table-striped cart-list">
							<thead>
								<tr>
									<th>
										Sản phẩm
									</th>
									<th>
										Giá tiền
									</th>
									<th>
										Số lượng
									</th>
									<th>
										Tổng
									</th>
									<th>
										
									</th>
								</tr>
							</thead>
							<tbody id="order">
								<?php
									$sum_total = 0;
									if(!empty($_SESSION['cart'])){
									foreach ($dataDb as $key => $product):
										$quantityInCart = 0;
										foreach ($_SESSION['cart'] as $item) {
											if($item['id'] == $product['id']){
												$quantityInCart = $item['quantity'];
												break;
											}
										}
								?>
									<tr>
									<td>
										<div class="thumb_cart">
											<img src="img/products/product_placeholder_square_small.jpg" data-src="<?= $img_path,$product['img']?>" class="lazy" alt="Image">
										</div>
										<span class="item_cart"><?=$product['name']?></span>
									</td>
									<td>
										<strong>$<?=$product['price']?></strong>
									</td>
									<td>
										<input type="number" value="<?=$quantityInCart?>" min="1" id="quantity_<?=$product['id']?>" oninput="updateQuantity(<?=$product['id']?>,<?=$key?>)">
								</td>
								<td>
									<strong>$<?= (int)$product['price'] * (int)$quantityInCart ?></strong>
								</td>
									<td class="options">
										<i class="ti-trash" onclick="removeFormCart(<?=$product['id']?>)"></i></a>
									</td>
									<td class="options">
									<input type="hidden" name="idsp" value="'.$idsp.'">
									</form>
									</td>
								</tr>
								<?php
								$sum_total += ((int)$product['price'] * (int)$quantityInCart);

								$_SESSION['resultTotal'] = $sum_total;
								endforeach;}
								else{
									$dataDb ="";
									}?>
							</tbody>
							
						</table>
						<div class="row add_top_30 flex-sm-row-reverse cart_actions">
						<div class="col-sm-4 text-end">
						</div><div class="box_cart">
			<div class="container">
			<div class="row justify-content-end">
				<div class="col-xl-4 col-lg-4 col-md-6">
			<ul>
				<li>
					<span>Tổng tiền :</span> $<?=$sum_total?>
				</li>
			</ul>
			<a href="index.php?act=thanhtoan" class="btn_1 full-width cart">Đi tới thanh toán</a>
					</div>
				</div>
			</div>
		</div>
					<!-- /cart_actions -->
	
		</div>
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
		<!-- /container -->
		<!-- /box_cart -->
		
	</main>
	<!--/main-->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script>
		function updateQuantity(id,index){
			let newQuantity = $('#quantity_'+id).val();
			if(newQuantity <=0){
				newQuantity = 1
			}
			$.ajax({
				type: 'POST',
				url: './giohang/update.php',
				data: {
					id: id,
					quantity: newQuantity
				},
				success: function(response){
					$.post('./tableCartOrder.php',function (data){
						$('#order').html(data);
					})
				},
				error: function(error){
					console.log(error);
				},
			})
		}
		function removeFormCart(id){
			if(confirm("Bạn đồng ý xóa sản phẩm này không?")){
				$.ajax({
				type: 'POST',
				url: './giohang/removeFormCart.php',
				data: {
					id: id
				},
				success: function(response){
					$.post('./tableCartOrder.php',function (data){
						$('#order').html(data);
					})
				},
				error: function(error){
					console.log(error);
				},
			})
			}
		}
	</script>