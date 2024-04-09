<main class="app-main"><!--begin::App Content Header-->
    <div class="app-content-header"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">quản lý sản phẩm</h3>
                </div>
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content Header--><!--begin::App Content-->
    <div class="app-content"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sản Phẩm</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ảnh sản phẩm</th>
                                        <th>ID sản phẩm</th>
                                        <th>danh mục</th>
                                        <th>tên sản phẩm</th>
                                        <th>giá sản phẩm</th>
                                        <th>số lượng</th>
                                        <th style="width: 400px">mô tả</th>
                                        <th>IsHidden</th>
                                        <th>
                                            <a href="<?= BASE_URL_ADMIN . '?act=san-pham-create' ?>" class="btn btn-primary">
                                                <p>thêm mới sản phẩm</p>
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $item) : ?>
                                        <tr class="align-middle">
                                            <td>
                                                <?php foreach ($dataAnh as $value) : ?>
                                                    <?php if ($value['ID_SanPham'] == $item['SanPhamID']) : ?>
                                                        <div class="image-container position-relative">
                                                            <img src="<?= BASE_URL ?>uploads/<?= $value['anhSP1'] ?>" alt="" width="70" class="image">
                                                            <div class="position-absolute top-50 start-50 translate-middle hide-on-hover">
                                                                <a href="<?= BASE_URL_ADMIN ?>?act=anh-san-pham-update&id=<?= $item['SanPhamID'] ?>&idAnh=<?= $value['anhID'] ?>" class="btn btn-primary">Sửa</a>
                                                                <a href="<?= BASE_URL_ADMIN ?>?act=anh-san-pham-delete&id=<?= $value['anhID'] ?>" class="btn btn-danger">Xóa</a>
                                                            </div>
                                                        </div>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </td>
                                            <td><?= $item['SanPhamID'] ?></td>

                                            <td><?= $item['TenDanhMuc'] ?></td>

                                            <td><?= $item['TenSanPham'] ?></td>

                                            <td><?= $item['GiaSP'] ?></td>

                                            <td><?= $item['SoLuong'] ?></td>

                                            <td style="width: 400px"><?= $item['MoTa'] ?></td>
                                            <td><?= $item['IsHidden'] ?></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="<?= BASE_URL_ADMIN ?>?act=san-pham-detail&id=<?= $item['SanPhamID'] ?>" class="btn btn-info btn-block mb-2">Xem</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="<?= BASE_URL_ADMIN ?>?act=san-pham-delete&id=<?= $item['SanPhamID'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn btn-danger btn-block mb-2">Xóa</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="<?= BASE_URL_ADMIN ?>?act=san-pham-an&id=<?= $item['SanPhamID'] ?>" onclick="return confirm('Bạn có chắc muốn ẩn không')" class="btn btn-danger btn-block mb-2">Ẩn</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="<?= BASE_URL_ADMIN ?>?act=san-pham-hien&id=<?= $item['SanPhamID'] ?>" onclick="return confirm('Bạn có chắc muốn hiện không')" class="btn btn-warning btn-block mb-2">Hiện</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="<?= BASE_URL_ADMIN ?>?act=san-pham-update&id=<?= $item['SanPhamID'] ?>" class="btn btn-success btn-block mb-2">Sửa</a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="<?= BASE_URL_ADMIN ?>?act=anh-san-pham&id=<?= $item['SanPhamID'] ?>" class="btn btn-dark btn-block">ảnh</a>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                </div><!-- /.col -->

            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->