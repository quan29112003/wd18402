<main class="app-main"><!--begin::App Content Header-->
    <div class="app-content-header"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Quản lý bình luận</h3>
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
                            <h3 class="card-title">Bình luận</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ID sản phẩm</th>
                                        <th>Nội dung</th>
                                        <th>Username</th>
                                        <th>Ngày bình luận</th>
                                        <th>Hidden</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $item) : ?>
                                        <tr class="align-middle">
                                            <td><?= $item['id']?></td>
                                            <td><?= $item['idsanpham'] ?></td>

                                            <td><?= $item['noidung'] ?></td>

                                            <td><?= $item['username'] ?></td>

                                            <td><?= $item['ngaybinhluan'] ?></td>

                                            <td><?= $item['Hidden'] ?></td>

                                            <td>
                                                <!-- <div class="row"> -->
                                                    <div class="col-md-6">
                                                        <a href="<?= BASE_URL_ADMIN ?>?act=binh-luan-detail&id=<?= $item['id'] ?>" class="btn btn-info btn-block mb-2">Xem</a>
                                                        <a href="<?= BASE_URL_ADMIN ?>?act=binh-luan-hien&id=<?= $item['id'] ?>" onclick="return confirm('Bạn có chắc muốn hiện không')" class="btn btn-success btn-block mb-2">Hiện</a>
                                                        <a href="<?= BASE_URL_ADMIN ?>?act=binh-luan-an&id=<?= $item['id'] ?>" onclick="return confirm('Bạn có chắc muốn ẩn không')" class="btn btn-danger btn-block mb-2">Ẩn</a>
                                                    <!-- </div> -->
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