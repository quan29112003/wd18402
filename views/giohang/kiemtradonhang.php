<?php require_once PATH_VIEW . 'layouts/partials/header.php' ?>


<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/client/css/cart.css">
<main class="bg_gray">
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="<?= BASE_URL ?>">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
			<h1>Đơn hàng của <?= $name ?> </h1>
		</div>
		<?php
		if (isset($_SESSION['user'])) {
			extract($_SESSION['user']);
		} ?>
		<!-- /page_header -->
		<?php if (isset($_SESSION['error'])) : ?>
			<div class="alert alert-danger">
				<?= $_SESSION['error'] ?>
			</div>
			<?php unset($_SESSION['error']); ?>
		<?php endif; ?>
		<div class="box_general summary">
		<table class="table table-striped cart-list kiemtradonhang ">
			<thead>
				<tr>
					<th>
						Họ tên
					</th>
					<th>
						SĐT
					</th>
					<th>
						Địa chỉ
					</th>
					<th>
						Thanh toán
					</th>
					<th>
						Ngày đặt hàng
					</th>
					<th>
						Trạng thái
					</th>
					<th>
						Tổng tiền
					</th>
					<th>
						Action
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$displayedOrderIds = []; // Initialize an array to keep track of displayed order_ids
				foreach ($DonHangDaMua as $item) :
					if (!in_array($item['order_id'], $displayedOrderIds)) : // Check if order_id is not yet displayed
						$displayedOrderIds[] = $item['order_id']; // Add the order_id to the displayed list
				?>
						<tr>
							<td>
								<h8 class="item_cart"><?= $item['user_name'] ?></h8>
							</td>
							<td>
								<h8 class="item_cart"><?= $item['user_phone'] ?></h8>
							</td>
							<td>
								<h8 class="item_cart"><?= $item['user_address'] ?></h8>
							</td>
							<td>
								<strong><?php
										if ($item['status_payment'] == 0) {
											echo "Trả tiền khi nhận hàng";
										} elseif ($item['status_payment'] == 1) {
											echo "Chuyển khoản";
										} else {
											// Handle unexpected values
											echo "Unknown payment method";
										}
										?></strong>
							</td>
							<td>
								<strong><?= $item['created_at'] ?></strong>
							</td>

							<td>
								<strong><?php
										if ($item['status_delivery'] == 0) {
											echo "Chờ xác nhận";
										} elseif ($item['status_delivery'] == 1) {
											echo "Chờ lấy hàng";
										} elseif ($item['status_delivery'] == 2) {
											echo "Chờ giao hàng";
										} elseif ($item['status_delivery'] == 3) {
											echo "Đã giao hàng";
										} else {
											// Handle unexpected values
											echo "Unknown payment method";
										}
										?></strong>
							</td>

							<td class="options">
								<strong>$<?= number_format($item['total_bill']) ?>đ</strong>
							</td>
							<td class="options">
								<a href="<?= BASE_URL ?>?act=xemspdonhang&id=<?= $item['order_id'] ?>"><input type="button" class="btn_1" value="Xem đơn hàng"></a>
							</td>

						</tr>
				<?php endif;
				endforeach ?>

			</tbody>
		</table>
		</div>
	</div>
	<!-- /cart_actions -->

	</div>
	<!-- /container -->

	<!-- /box_cart -->

</main>
<!--/main-->
<?= require_once PATH_VIEW . 'layouts/partials/footer.php' ?>