<?php require_once PATH_VIEW . 'layouts/partials/header.php' ?>


<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/client/css/account.css">
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
			<h1>Thông tin tài khoản</h1>
		</div>
		<?php
		if (isset($_SESSION['user'])) {
			extract($_SESSION['user']);
		}
		?>
		<?php if (isset($_SESSION['error'])) : ?>
			<div class="alert alert-danger">
				<?= $_SESSION['error'] ?>
			</div>
			<?php unset($_SESSION['error']); ?>
		<?php endif; ?>
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="success alert alert-success alert-dismissible fade show">
				<?= $_SESSION['success'] ?>
			</div>
			<?php unset($_SESSION['success']); ?>
		<?php endif; ?>
		<!-- /page_header -->
		<div class="col-xl-6 col-lg-6 col-md-8">
			<div class="box_account">
				<h3 class="new_client">Cập nhật thông tin tài khoản</h3> <small class="float-right pt-2">**Vui lòng điền đầy đủ thông tin !!</small>
				<div class="form_container">
					<form action="" method="post">
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" value="<?= $TaiKhoan['email'] ?>" disabled>
						</div>
						<div class="form-group">
							<input type="text" required class="form-control" name="name" id="user" value="<?= $TaiKhoan['name'] ?>">
							<?php
							if (isset($thongbao2) && ($thongbao2 != "")) {
								echo $thongbao2;
							} ?>
						</div>
						<div class="form-group">
							<input type="text" required class="form-control" name="hoten_user" id="hoten_user" value="<?= $TaiKhoan['hoten_user'] ?>" placeholder="Họ tên...">
						</div>
						<div class="form-group">
							<input type="text" required class="form-control" name="diachi" id="diachi" value="<?= $TaiKhoan['diachi'] ?>" placeholder="Địa chỉ...">
						</div>
						<div class="form-group">
						<input type="number" required class="form-control" name="tel" id="tel" value="<?= $TaiKhoan['tel'] ?>" placeholder="Số điện thoại..." oninput="validatePhoneNumber(this)" min="0">
						</div>
						<hr>
						<input type="hidden" name="id" value="<?= $id ?>">
						<div class="text-center"><button type="submit" class="btn_1 full-width">Cập nhật</button></div>
					</form>
					<?php
					if (isset($thongbao) && ($thongbao != "")) {
						echo $thongbao;
					} ?>
				</div>
				<!-- /form_container -->
			</div>
			<!-- /box_account -->
		</div>
	</div>
	<!-- /row -->
	</div>
	<!-- /container -->
</main>

<script>
function validatePhoneNumber(input) {
    // Xoá bất kỳ ký tự không phải số nào khỏi giá trị nhập vào
    input.value = input.value.replace(/\D/g, '');

    // Kiểm tra xem giá trị nhập vào có phải là số dương và có 10 chữ số không
    if (input.value < 0 || input.value.length !== 10) {
        input.setCustomValidity("Số điện thoại phải là số dương và phải chứa đúng 10 chữ số.");
    } else {
        input.setCustomValidity('');
    }
}
</script>
<!--/main-->

<?php require_once PATH_VIEW . 'layouts/partials/footer.php' ?>