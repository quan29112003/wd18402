<main class="app-main"><!--begin::App Content Header-->
    <div class="app-content-header"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">quản lý user</h3>
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
                            <h3 class="card-title">Danh Mục</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Trường dữ liệu</th>
                                    <th>Dữ liệu</th>
                                </tr>
                                <?php foreach($user as $fieldName => $value): ?>
                                    <tr>
                                         <th><?= ucfirst($fieldName) ?></th>
                                         <th><?= $value ?></th>
                                    </tr>
                                   <?php endforeach; ?>
                            </table>
                            
                        </div><!-- /.card-body -->
                    </div>
                </div><!-- /.col -->

            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->

