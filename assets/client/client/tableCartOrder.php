<?php
session_start();
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../global.php";
if(!empty($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
    $productId = array_column($cart,'id');
    // var_dump($productId);
    $idList = implode(',',$productId);

    $dataDb = loadone_sanphamCart($idList);?>
	<main class="bg_gray">
	<!-- /page_header -->
						<tbody id="order">
							<?php
								$sum_total = 0;
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
										<img src="<?=$img_path,$product['img']?>" data-src="<?= $img_path,$product['img']?>" class="lazy" alt="Image">
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
									<a href="'.$xoasp.'"><i class="ti-trash"></i></a>
								</td>
								<td class="options">
								<input type="hidden" name="idsp" value="'.$idsp.'">
								</form>
								</td>
							</tr>
							<?php
							$sum_total += ((int)$product['price'] * (int)$quantityInCart);

							$_SESSION['resultTotal'] = $sum_total;
							endforeach;?>
						</tbody>
					<div class="row add_top_30 flex-sm-row-reverse cart_actions">
					<div class="col-sm-4 text-end">
				</div>
				<!-- /cart_actions -->

	</div>
	<!-- /container -->
	
	<!-- /box_cart -->
	
</main>
            <?php
}

?>