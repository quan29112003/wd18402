<link rel="stylesheet" href="css/account.css">
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
    if(isset($_SESSION['user'])){
        extract($_SESSION['user']);
    }
    ?>
	<!-- /page_header -->
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">Cập nhật thông tin tài khoản</h3> <small class="float-right pt-2">**Vui lòng điền đầy đủ thông tin !!</small>
					<div class="form_container">
						<form action="index.php?act=updatetk" method="post">
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" value="<?=$email?>" disabled>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="user" id="user" value="<?=$user?>" disabled>
							<?php
						    if(isset($thongbao2)&&($thongbao2!="")){
                        echo $thongbao2;
                    }?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="hoten_user" id="hoten_user" value="<?=$hoten_user?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" id="address" value="<?=$address?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="tel" id="tel" value="<?=$tel?>" disabled>
						</div>
						<hr>
                        <input type="hidden" name="id" value="<?=$id?>">
						<div class="text-center"><input type="submit" value="Cập nhật" class="btn_1 full-width" name="capnhat"></div>
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
	