<main class="app-main"><!--begin::App Content Header-->
    <div class="app-content-header"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">General Form</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Cập nhật
                        </li>
                    </ol>
                </div>
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content Header--><!--begin::App Content-->
    <div class="app-content"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row g-4"><!--begin::Col-->
                <div class="col"><!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4"><!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">cập nhật trạng thái</div>
                        </div><!--end::Header--><!--begin::Form-->

                        <form action="" method="POST"><!--begin::Body-->
                            <div class="card-body">
                                <input type="text" name="id" id="" hidden>
                                <div class="mb3">
                                    <label for="" class="form-label">Trạng thái</label>
                                    <select name="status_delivery" id="" class="form-select">
                                        
                                        <option value="0" <?php if ($item['status_delivery'] == 0) echo "selected"; ?>>Chờ xác nhận</option>
                                        <option value="1" <?php if ($item['status_delivery'] == 1) echo "selected"; ?>>Chờ lấy hàng</option>
                                        <option value="2" <?php if ($item['status_delivery'] == 2) echo "selected"; ?>>Chờ giao hàng</option>
                                        <option value="3" <?php if ($item['status_delivery'] == 3) echo "selected"; ?>>Đã giao hàng</option>
                                        
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Tên khách hàng</label>
                                    <input type="text" class="form-control" name="user_name" value="<?= $DonHangEdit['user_name'] ?>" disabled>
                                </div>

                                

                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="user_email" value="<?= $DonHangEdit['user_email'] ?>" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">SĐT</label>
                                    <input type="number" class="form-control" name="user_phone" value="<?= $DonHangEdit['user_phone'] ?>" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" name="user_address" value="<?= $DonHangEdit['user_address'] ?>" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Tổng tiền</label>
                                    <input type="text" class="form-control" name="total_bill" value="<?= number_format($DonHangEdit['total_bill']) ?>" disabled>
                                </div>
                            </div><!--end::Body--><!--begin::Footer-->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= BASE_URL_ADMIN . '?act=don-hang' ?>" class="btn btn-danger">back</a>
                            </div><!--end::Footer-->

                        </form><!--end::Form-->

                    </div><!--end::Quick Example-->
                    <!--begin::Input Group-->
                </div><!--end::Col--><!--begin::Col-->
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->