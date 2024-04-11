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
                            <div class="card-title">Thêm mới User</div>
                        </div><!--end::Header--><!--begin::Form-->

                        <!-- form them moi -->
                        <form action="" method="POST"><!--begin::Body-->
                            <?php if (isset($_SESSION['errors'])) :  ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach ($_SESSION['errors'] as $error) : ?>
                                            <li><?= $error ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php unset($_SESSION['errors']); ?>
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['name'] : null  ?>" placeholder="Name">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['email'] : null  ?>" placeholder="Email">
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" id="hoten_user" name="hoten_user" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['hoten_user'] : null  ?>" placeholder="họ và tên">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="diachi" name="diachi" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['diachi'] : null  ?>" placeholder="địa chỉ">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Số điện thoại</label>
                                    <input type="number" class="form-control" id="tel" name="tel" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['tel'] : null  ?>" placeholder="số điện thoại">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['password'] : null  ?>" placeholder="password">
                                </div>

                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="1" <?= isset($_SESSION['data']) && $_SESSION['data']['type'] == 1 ? 'selected'  : null  ?>>Admin</option>
                                        <option value="0" <?= isset($_SESSION['data']) && $_SESSION['data']['type'] == 0 ? 'selected'  : null  ?>>Member</option>
                                    </select>

                                </div>
                            </div><!--end::Body--><!--begin::Footer-->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= BASE_URL_ADMIN . '?act=users' ?>" class="btn btn-danger">back</a>
                            </div><!--end::Footer-->

                        </form><!--end::Form-->


                    </div><!--end::Quick Example-->
                    <!--begin::Input Group-->
                </div><!--end::Col--><!--begin::Col-->
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->

    <?php if (isset($_SESSION['data'])) {
        unset($_SESSION['data']);
    } ?>