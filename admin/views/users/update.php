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
                            <div class="card-title">Cập nhật User</div>
                        </div><!--end::Header--><!--begin::Form-->

                        <!-- form them moi -->
                        <form action="" method="POST"><!--begin::Body-->
                            <div class="card-body">
                                <?php if (isset($_SESSION['success'])) :  ?>
                                    <div class="alert alert-success">
                                        <?= $_SESSION['success'] ?>
                                    </div>
                                    <?php unset($_SESSION['success']); ?>
                                <?php endif; ?>
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
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" value="<?= $user['name'] ?>" name="name">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" value="<?= $user['email'] ?>" name="email">
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" id="hoten_user" value="<?= $user['hoten_user'] ?>" name="hoten_user">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="diachi" value="<?= $user['diachi'] ?>" name="diachi">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Điện thoại</label>
                                    <input type="text" class="form-control" id="tel" value="<?= $user['tel'] ?>" name="tel">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="type" class="form-control" id="password" value="<?= $user['password'] ?>" name="password">
                                </div>

                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="1" <?= $user['type'] == 1 ? 'selected' : null ?>>Admin</option>
                                        <option value="0" <?= $user['type'] == 0 ? 'selected' : null ?>>Member</option>
                                    </select>

                                </div>
                            </div><!--end::Body--><!--begin::Footer-->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="<?= BASE_URL_ADMIN . '?act=users' ?>" class="btn btn-danger">back</a>
                            </div><!--end::Footer-->

                        </form><!--end::Form-->


                    </div><!--end::Quick Example-->
                    <!--begin::Input Group-->
                </div><!--end::Col--><!--begin::Col-->
            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->