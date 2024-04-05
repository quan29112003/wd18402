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
                            <div class="card-title">cập nhật danh mục</div>
                        </div><!--end::Header--><!--begin::Form-->

                        <form action="" method="post"><!--begin::Body-->
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="" class="form-label">Tên Danh Mục</label>
                                    <input type="text" class="form-control" value="<?=$DanhMuc['TenDanhMuc'] ?>" name="TenDanhMuc">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= BASE_URL_ADMIN . '?act=danh-muc' ?>" class="btn btn-danger">back</a>
                            </div>

                        </form><!--end::Form-->

                    </div><!--end::Quick Example-->
                    <!--begin::Input Group-->
                </div><!--end::Col--><!--begin::Col-->
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->