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
                            <h3 class="card-title">Danh Mục</h3>

                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">ID danh mục</th>
                                        <th>tên danh mục</th>
                                        <th>
                                            <a href="<?= BASE_URL_ADMIN . '?act=danh-muc-create' ?>" class="btn btn-primary">
                                                <p>them moi danh muc</p>
                                            </a>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $item) : ?>
                                        <tr class="align-middle">
                                            <td><?= $item['DanhMucID'] ?></td>
                                            <td><?= $item['TenDanhMuc'] ?></td>
                                            <td>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=danh-muc-detail&id=<?= $item['DanhMucID'] ?>" class="btn btn-info">show</a>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=danh-muc-update&id=<?= $item['DanhMucID'] ?>" class="btn btn-success">update</a>
                                                <a href="<?= BASE_URL_ADMIN ?>?act=danh-muc-delete&id=<?= $item['DanhMucID'] ?>" onclick="return confirm('bạn có chắc muốn xóa không')" class="btn btn-danger">delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

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