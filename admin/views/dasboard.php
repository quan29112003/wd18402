<main class="app-main"><!--begin::App Content Header-->
    <div class="app-content-header"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard v2</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard v2
                        </li>
                    </ol>
                </div>
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div>
    <div class="app-content"><!--begin::Container-->
        <div class="container-fluid"><!-- Info boxes -->
            <div class="row"><!-- /.col --><!-- fix for small devices only --><!-- <div class="clearfix hidden-md-up"></div> -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"><span class="info-box-icon text-bg-success shadow-sm"><i class="bi bi-bag-fill"></i></span>
                        <div class="info-box-content">

                            <span class="info-box-text">tổng số lượng sản phẩm</span>
                            <span class="info-box-number"><?= number_format($TongSoLuongSPTonKho + $TongSoLuongSPBanRa) ?></span>

                            <span class="info-box-text">tổng số lượng sản phẩm tồn kho</span>
                            <span class="info-box-number"><?= number_format($TongSoLuongSPTonKho) ?></span>

                            <span class="info-box-text">tổng số lượng sản phẩm bán ra</span>
                            <span class="info-box-number"><?= number_format($TongSoLuongSPBanRa) ?></span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"><span class="info-box-icon text-bg-success shadow-sm"><i class="bi bi-cart-fill"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">đơn hàng đang xử lý</span>
                            <span class="info-box-number"><?= number_format($DonHangDangXuLy) ?></span>

                            
                            <span class="info-box-text">đơn hàng đã giao</span>
                            <span class="info-box-number"><?= number_format($DonHangDaGiao) ?></span>

                            <span class="info-box-text">đơn hàng đã hủy</span>
                            <span class="info-box-number"><?= number_format($DonHangDaHuy) ?></span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-success shadow-sm"><i class="bi bi-cash-coin"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">doanh số</span>
                            <span class="info-box-number"><?= number_format($TongDoanhSo) ?></span>
                            <!-- <p><?php foreach ($doanhSo as $item) {
                                        echo $item['created_at'];
                                    } ?></p> -->
                            <form action="" method="post">
                                <input type="date" name="created_at1" class="form-control">
                                <input type="date" name="created_at2" class="form-control">
                                <input type="submit" class="btn" value="tìm">
                            </form>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->



                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"><span class="info-box-icon text-bg-warning shadow-sm"><i class="bi bi-people-fill"></i></span>
                        <div class="info-box-content"><span class="info-box-text">số lượng khách hàng</span><span class="info-box-number"><?= $TongMember ?></span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"><span class="info-box-icon text-bg-warning shadow-sm"><i class="bi bi-people-fill"></i></span>
                        <div class="info-box-content"><span class="info-box-text">tổng bình luận</span><span class="info-box-number"><?= $TongBinhLuan ?></span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->

            </div><!-- /.row --><!--begin::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->