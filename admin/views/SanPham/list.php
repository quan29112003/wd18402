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
                                        <th>mô tả</th>
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
                                                        <img src="<?= BASE_URL ?>uploads/<?= $value['anhSP1'] ?>" alt="" width="70">
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </td>
                                            <td><?= $item['SanPhamID'] ?></td>

                                            <td><?= $item['TenDanhMuc'] ?></td>

                                            <td><?= $item['TenSanPham'] ?></td>

                                            <td><?= $item['GiaSP'] ?></td>
                                            <td><?= $item['SoLuong'] ?></td>

                                            <td><?= $item['MoTa'] ?></td>
                                            <td>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=san-pham-detail&id=<?= $item['SanPhamID'] ?>" class="btn btn-info">show</a>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=san-pham-update&id=<?= $item['SanPhamID'] ?>" class="btn btn-success">update</a>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=san-pham-delete&id=<?= $item['SanPhamID'] ?>" onclick="return confirm('bạn có chắc muốn xóa không')" class="btn btn-danger">delete</a>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=anh-san-pham&id=<?= $item['SanPhamID'] ?>" class="btn btn-dark">upload ảnh</a>

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