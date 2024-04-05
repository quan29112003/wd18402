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
		<h1>Đăng nhập hoặc tạo một tài khoản</h1>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="client">Đã có tài khoản?</h3>
					<div class="form_container">

					
					<?php if (isset($_SESSION['error'])) : ?>
						<div class="alert alert-danger">
							<?= $_SESSION['error'] ?>
						</div>
						<?php unset($_SESSION['error']); ?>
					<?php endif; ?>
					
						<form action="index.php?act=login" method="post">
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email...">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password...">
						</div>
						<div class="clearfix add_bottom_15">
							<div class="checkboxes float-start">
								<label class="container_check">Remember me
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="float-end"><a id="forgot" href="javascript:void(0);">Quên Mật Khẩu?</a></div>
						</div>
						<div class="text-center"><button type="submit" class="btn_1 full-width">Đăng Nhập</button></div>
						</form>
						<?php
						    if(isset($thongbao1)&&($thongbao1!="")){
                        echo $thongbao1;
                    }?>
						<div id="forgot_pw">
							<div class="form-group">
								<input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Nhập Email của bạn...">
							</div>
							<p>A new password will be sent shortly.</p>
							<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
						</div>
					</div>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
				<!-- /row -->
			</div>
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">Đăng ký ngay</h3> <small class="float-right pt-2">**Vui lòng điền đầy đủ thông tin !!</small>
					<div class="form_container">
						<form action="index.php?act=dangky" method="post">
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email..">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="user" id="user" value="" placeholder="Tên đăng nhập...">
							<?php
						    if(isset($thongbao2)&&($thongbao2!="")){
                        echo $thongbao2;
                    }?>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" id="password" value="" placeholder="Password...">
							<?php
						    if(isset($thongbao3)&&($thongbao3!="")){
                        echo $thongbao3;
                    }?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="hoten_user" id="hoten_user" value="" placeholder="Họ và tên...">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" id="address" value="" placeholder="Địa chỉ...">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="tel" id="tel" value="" placeholder="Số điện thoại...">
						</div>
						<hr>
						<div class="form-group">
							<label class="container_check">Tôi đồng ý với<a href="#0"> Thỏa thuận và Điều khoản</a>
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="text-center"><input type="submit" value="Đăng ký" class="btn_1 full-width" name="dangky"></div>
						</form>
						<?php
						    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }?>
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
	<!--/main-->
	
<?php require_once PATH_VIEW . 'layouts/partials/footer.php' ?>
