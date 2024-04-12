<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/client/css/contact.css">
<main class="bg_gray">


	<div class="container margin_60">
		<div class="main_title">
			<h2>Liên hệ với WatchStore</h2>
			<p>Chúng tôi lắng nghe và đáp ứng yêu cầu của khách hàng.</p>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<div class="box_contacts">
					<i class="ti-support"></i>
					<h2>Hỏi đáp trực tiếp</h2>
					<a href="#0">-0943848769-</a>(hoặc)<a href="#0">abc@fpt.edu.vn</a>
					<small>Hỗ trợ liên hệ 24/7</small>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="box_contacts">
					<i class="ti-map-alt"></i>
					<h2>Showroom của chúng tôi</h2>
					<div>13 Trịnh Văn Bô - Nam Từ Liêm - Hà Nội</div>
					<small>Thứ Hai đến Thứ Sáu (9am-6pm) Thứ 7 /CN (9am-2pm)</small>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="box_contacts">
					<i class="ti-package"></i>
					<h2>Order tại</h2>
					<a href="#0">+94 423-23-221</a> - <a href="#0">order@allaia.com</a>
					<small>Thứ Hai đến Thứ Sáu (9am-6pm) Thứ 7 /CN (9am-2pm)</small>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	<div class="bg_white">
		<div class="container margin_60_35">
			<h4 class="pb-3">Để lại thông tin của bạn tại đây </h4>
			<p style="color:red">
				<?php if (isset($_SESSION['success'])) : ?>
			<div class="success alert alert-success alert-dismissible fade show">
				<?= $_SESSION['success'] ?>
			</div>
			<?php unset($_SESSION['success']); ?>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-4 col-md-6 add_bottom_25">
				<form action="index.php?act=lienhe" method="post">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Họ và Tên" name="hoten">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Số điện thoại" name="tel">
					</div>
					<div class="form-group">
						<textarea class="form-control" style="height: 150px;" placeholder="Thông tin liên hệ..." name="noidung"></textarea>
					</div>
					<div class="form-group">
						<input class="btn_1 full-width" type="submit" value="Gửi" name="guilienhe">
					</div>
				</form>
			</div>
			<div class="col-lg-8 col-md-6 add_bottom_25">
				<iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7447.4506090177865!2d105.74238420253363!3d21.043674509921335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1712578809941!5m2!1svi!2s" style="border: 0" allowfullscreen></iframe>
			</div>
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_white -->
</main>
<!--/main-->