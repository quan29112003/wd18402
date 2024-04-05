<link rel="stylesheet" href="css/leave_review.css">
<main>
		<?php
		extract( $_SESSION['user']);
		$idsp = $_GET['idsp'];
		?>
	<div class="container margin_60_35">
	
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="write_review">
						<h1>Bình luận về </h1>
						<div class="rating_submit">
							<div class="form-group">
							<label class="d-block">Đánh giá cảm nghĩ của bạn</label>
						<form action="index.php?act=binhluan" method="post">
							</div>
						</div>
						<!-- /rating_submit -->
						<div class="form-group">
							<label>Tiêu đề</label>
							<input class="form-control" type="text" name="tieude" placeholder="Tiêu đề sản phẩm...">
						</div>
						<div class="form-group">
							<label>Bình luận</label>
							<textarea class="form-control" style="height: 180px;" placeholder="Cảm nghĩ của bạn về sản phẩm.." name="binhluan"></textarea>
						</div>
						<div class="form-group">
						<input type="hidden" name="idsp" value='<?=$_GET['idsp']?>'>
						<?php
						extract( $_SESSION['user']);
						echo'
						<input type="hidden" name="username" value="'.$user.'">';
						?>
						</div>
						<input type="submit" class="btn_1" name="dangbinhluan" value="Đăng bình luận">
						</form>
						<?php
						echo 
						'<a href="index.php?act=sanphamct&&idsp='.$idsp.'" class="btn_1">Quay lại sản phẩm</a>'?>
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