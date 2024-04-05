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
                            General Form
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
                            <div class="card-title">cập nhật sản phẩm</div>
                        </div><!--end::Header--><!--begin::Form-->

                        <form action="" method="POST"><!--begin::Body-->
                            <div class="card-body">
                                <input type="text" name="SanPhamID" id="" hidden>
                                <div class="mb-3">
                                    <label for="" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="TenSanPham" value="<?= $SanPham['TenSanPham'] ?>">
                                </div>

                                <div class="mb3">
                                    <label for="" class="form-label">danh muc san pham</label>
                                    <select name="ID_DanhMuc" id="" class="form-select">
                                        <?php foreach ($dataDanhMuc as $value) : ?>
                                            <option value="<?= $value['DanhMucID'] ?>"<?= ($value['DanhMucID'] === $SanPham['ID_DanhMuc']) ? 'selected' : '' ?>><?= $value['TenDanhMuc'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Giá sản phẩm</label>
                                    <input type="text" class="form-control" name="GiaSP" value="<?= $SanPham['GiaSP'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">số lượng</label>
                                    <input type="number" class="form-control" name="SoLuong" value="<?= $SanPham['SoLuong'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Mô tả</label>
                                    <input type="text" class="form-control" name="MoTa" value="<?= $SanPham['MoTa'] ?>">
                                </div>
                            </div><!--end::Body--><!--begin::Footer-->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= BASE_URL_ADMIN . '?act=san-pham' ?>" class="btn btn-danger">back</a>
                            </div><!--end::Footer-->

                        </form><!--end::Form-->

                    </div><!--end::Quick Example-->
                    <!--begin::Input Group-->
                </div><!--end::Col--><!--begin::Col-->
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->