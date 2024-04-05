<?php require_once PATH_VIEW . 'layouts/partials/header.php' ?>
<?php
if (empty($_SESSION['cart'])) {
	$thongbao = 'chưa có sản phẩm nào';
} else {
	$thongbao = "";
}
?>
<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/client/css/cart.css">
<main class="bg_gray">
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
			<h1>Đơn hàng <?= $thongbao ?></h1>
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

				<?php $sum_total = 0;
				if (isset($_SESSION['cart'])) : ?>
					<?php foreach ($_SESSION['cart'] as $productID => $item) : ?>
						<tr>
							<td>
								<div class="thumb_cart">
									<img src="uploads/<?= $item['anhSP1'] ?>" width="20%" class="lazy" alt="Image">

								</div>
								<div class="item_cart"><?= $item['TenSanPham'] ?></div>

							</td>

							<td>
								<strong>$<?= number_format($item['GiaSP']) ?></strong>
							</td>
							<td>
								<a href="<?= BASE_URL . '?act=cart-dec&productID=' . $item['SanPhamID'] ?>" class="btn">-</a>
								<input type="text" disabled style="width: 30px;" value="<?= $item['quantity'] ?>">
								<a href="<?= BASE_URL . '?act=cart-inc&productID=' . $item['SanPhamID'] ?>" class="btn">+</a>
							</td>
							<td>
								<strong>$
									<?php
									$total = ((int)$item['GiaSP']) * (int)$item['quantity'];

									$sum_total += $total;

									echo number_format($total);
									$_SESSION['resultTotal'] = $sum_total;


									?>
								</strong>
							</td>
							<td class="options">
								<a href="<?= BASE_URL . '?act=cart-delete&productID=' . $item['SanPhamID'] ?>" class="btn"><i class="ti-trash"></i></a>
							</td>

							<td class=" options">
								<input type="hidden" name="idsp" value="'.$idsp.'">
								</form>
							</td>
						</tr>
					<?php endforeach ?>
				<?php endif ?>
			</tbody>

		</table>
		<div class="row add_top_30 flex-sm-row-reverse cart_actions">
			<div class="col-sm-4 text-end">
			</div>
			<div class="box_cart">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-xl-4 col-lg-4 col-md-6">
							<ul>
								<li>
									<span>Tổng tiền :</span> $<?= number_format($sum_total) ?>
								</li>
							</ul>
							<a href="index.php?act=order-checkout" class="btn_1 full-width cart">Đi tới thanh toán</a>
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

<?= require_once PATH_VIEW . 'layouts/partials/footer.php' ?>