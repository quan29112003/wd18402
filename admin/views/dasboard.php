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
                    <div class="info-box"><span class="info-box-icon text-bg-success shadow-sm"><i class="bi bi-cart-fill"></i></span>
                        <div class="info-box-content"><span class="info-box-text">tổng số lượng sản phẩm</span><span class="info-box-number"><?= number_format($TongSoLuongSP) ?></span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"><span class="info-box-icon text-bg-success shadow-sm"><i class="bi bi-cart-fill"></i></span>
                        <div class="info-box-content"><span class="info-box-text">tổng đơn hàng</span><span class="info-box-number"><?= number_format($TongDonHang) ?></span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"><span class="info-box-icon text-bg-success shadow-sm"><i class="bi bi-cart-fill"></i></span>
                        <div class="info-box-content"><span class="info-box-text">doanh số</span><span class="info-box-number"><?= number_format($TongDoanhSo) ?></span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"><span class="info-box-icon text-bg-warning shadow-sm"><i class="bi bi-people-fill"></i></span>
                        <div class="info-box-content"><span class="info-box-text">tổng tài khách hàng</span><span class="info-box-number"><?= $TongMember ?></span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->
            </div><!-- /.row --><!--begin::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->