<?php require_once PATH_VIEW . 'layouts/partials/header.php' ?>


<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/client/css/leave_review.css">
<main>
		<?php
		extract( $_SESSION['user']);
		$id = $_GET['id'];
		?>
	<div class="container margin_60_35">
	
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="write_review">
						<h1>Bình luận</h1>
						<div class="rating_submit">
							<div class="form-group">
							<label class="d-block">Đánh giá cảm nghĩ của bạn</label>
						<form action="" method="post">
							</div>
						</div>
						<!-- /rating_submit -->

						<input type="hidden" value="<?= $_GET['id']?>" name="idsanpham" id="">

						<div class="form-group">
							<label>Bình luận</label>
							<textarea class="form-control" style="height: 180px;" placeholder="Cảm nghĩ của bạn về sản phẩm.." name="noidung"></textarea>
						</div>
						<div class="form-group">
						<input type="hidden" name="id" value='<?=$_GET['id']?>'>
						<?php
						extract( $_SESSION['user']);
						echo'
						<input type="hidden" name="username" value="'.$name.'">';
						?>
						</div>
						<input type="submit" class="btn_1" value="Đăng bình luận">
						</form>
						<a href="<?= BASE_URL ?>?act=chi-tiet&id=<?= $_GET['id'] ?>" class="btn_1">Quay lại sản phẩm</a>
						<?php
						    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }?>
					</div>
				</div>
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
<?php require_once PATH_VIEW . 'layouts/partials/footer.php' ?>
