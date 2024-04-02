<main class="app-main"><!--begin::App Content Header-->
    <div class="app-content-header"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">quản lý danh mục</h3>
                </div>
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content Header--><!--begin::App Content-->
    <div class="app-content"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">chi tiet</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ảnh sản phẩm</th>
                                        <th style="width: 10px">ID sản phẩm</th>
                                        <th>tên danh mục</th>
                                        <th>tên sản phẩm</th>
                                        <th>giá sản phẩm</th>
                                        <th>mô tả</th>
                                        <th>
                                            <a href="<?= BASE_URL_ADMIN ?>?act=san-pham" class="btn btn-info">back</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <td><img src="<?= BASE_URL ?>views/img/<?= $data['anhSP1'] ?>" alt="" width="70"></td>
                                    <td><?=$data['SanPhamID'] ?></td>
                                    <td><?=$data['TenDanhMuc'] ?></td>
                                    <td><?=$data['TenSanPham'] ?></td>
                                    <td><?=$data['GiaSP'] ?></td>
                                    <td><?=$data['SoLuong'] ?></td>
                                    <td><?=$data['MoTa'] ?></td>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col -->

            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->