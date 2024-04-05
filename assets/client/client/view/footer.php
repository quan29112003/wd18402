<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_1">Xem Nhanh</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="index.php?act=sanphamyeuthich">Hàng được yêu thích</a></li>
							<li><a href="index.php?act=sanphamnew">Hàng mới về</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_2">Danh Mục</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
						<?php
                        				foreach ($dsdm as $dm) {
                            				extract($dm);
                            				$linkdm = "index.php?act=sanpham&iddm=".$id;
                            				echo'<li>
                            				<li><a href="'.$linkdm.'">'.$name.'</a></li>
                        						</li>';
                        				}
                        			?>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_3">Liên hệ</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="ti-home"></i>13 Trịnh văn bô - Nam từ liêm - Hà nội</li>
							<li><i class="ti-headphone-alt"></i>0943848769</li>
							<li><i class="ti-email"></i><a href="#0">abc@fpt.edu.vn</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_4">Thông báo sản phẩm mới</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
						    <div class="form-group">
						        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Nhập mail của bạn...">
						        <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
						    </div>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
	<script>
	if($(window).width() >= 1024) {
		$('footer.revealed').footerReveal({
		shadow: false,
		opacity:0.6,
		zIndex: 1
	});
	};
	</script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/carousel-home.min.js"></script>
	<script src="js/specific_listing.js"></script>
	<script>
		// Sticky sidebar
		$('#sidebar_fixed').theiaStickySidebar({
		minWidth: 991,
		updateSidebarHeight: true,
		additionalMarginTop: 90
	});
	</script>
</body>
</html>