<main class="app-main"><!--begin::App Content Header-->
    <div class="app-content-header"><!--begin::Container-->
        <div class="container-fluid"><!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">quản lý đơn hàng</h3>
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
                            <h3 class="card-title">Tất cả đơn hàng</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>thông tin người đặt</th>
                                        <th>id đơn hàng</th>
                                        <th>tên sản phẩm</th>
                                        <th>Thanh toán</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>
                                            Hành động
                                        </th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                $j = 1;
                                foreach ($user as $item) {
                                    foreach ($datadonhang as $value) {
                                        if ($item['id'] == $value['user_id']) {
                                            $i++;
                                        }
                                    }
                                    if ($i > 1) {
                                ?>
                                        <!-- thông tin người đặt -->
                                        <tr class="align-middle">
                                            <td rowspan="<?= $i + 1 ?>">
                                                <strong>id: </strong><?= $item['id'] ?><br>
                                                <strong>tên người dùng: </strong><?= $item['hoten_user'] ?><br>
                                                <strong>email: </strong><?= $item['email'] ?><br>
                                                <strong>địa chỉ: </strong><?= $item['diachi'] ?><br>
                                                <strong>số điện thoại: </strong><?= $item['tel'] ?><br>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    if ($i > 1) {
                                        foreach ($donhang as $value) {
                                            foreach ($datadonhang as $value1) {
                                                if ($value['id'] == $value1['order_id'])
                                                    $j++;
                                            }

                                            if ($item['id'] == $value['user_id']) {

                                                if ($j > 2) {
                                        ?>
                                                    <tr>
                                                        <td rowspan="<?= $j ?>"><?= $value['id'] ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                if ($j > 2) {
                                                    foreach ($datadonhang as $value1) {
                                                        if ($value['id'] == $value1['order_id']) {
                                                    ?>
                                                            <tr>
                                                                <td><?= $value1['product_name'] ?></td>
                                                                <td>
                                                                    <?php
                                                                    if ($value['status_payment'] == 0) {
                                                                        echo "Trả tiền khi nhận hàng";
                                                                    } elseif ($value['status_payment'] == 1) {
                                                                        echo "Chuyển khoản";
                                                                    } else {
                                                                        // Handle unexpected values
                                                                        echo "Unknown payment method";
                                                                    }
                                                                    ?>
                                                                </td>

                                                                <td>
                                                                    <?= $value['created_at'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $value1['quantity'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= number_format($value['total_bill']) ?>đ
                                                                </td>

                                                                <form action="index.php?act=don-hang-update&id=<?= $value1['order_id'] ?>" class="d-flex" enctype="multipart/form-data" method="post">
                                                                    <td> <!-- <label for="" class="form-label">Trạng thái</label> -->
                                                                        <?php if ($value['status_delivery'] == -1) : ?>
                                                                            <span>Đã hủy</span>
                                                                        <?php elseif ($value['status_delivery'] == 3) : ?>
                                                                            <span>Đã giao hàng</span>
                                                                        <?php else : ?>
                                                                            <select name="status_delivery" id="" class="form-select">

                                                                                <option value="0" <?php if ($value['status_delivery'] == 0) echo "selected"; ?>>Chờ xác nhận</option>
                                                                                <option value="1" <?php if ($value['status_delivery'] == 1) echo "selected"; ?>>Chờ lấy hàng</option>
                                                                                <option value="2" <?php if ($value['status_delivery'] == 2) echo "selected"; ?>>Chờ giao hàng</option>
                                                                                <option value="3" <?php if ($value['status_delivery'] == 3) echo "selected"; ?>>Đã giao hàng</option>
                                                                                <option value="-1" <?php if ($value['status_delivery'] == -1) echo "selected"; ?>>Đã Hủy</option>

                                                                            </select>
                                                                        <?php endif; ?>
                                                                    </td>

                                                                    <td>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=don-hang-detail&id=<?= $value1['order_id'] ?>" class="btn btn-info">Detail</a>
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </td>
                                                                </form>
                                                            </tr>
                                                        <?php
                                                        }
                                                    }
                                                } else {
                                                    foreach ($datadonhang as $value1) {
                                                        if ($value['id'] == $value1['order_id']) {
                                                        ?>
                                                            <tr>
                                                                <td><?= $value['id'] ?></td>
                                                                <td><?= $value1['product_name'] ?></td>
                                                                <td>
                                                                    <?php
                                                                    if ($value['status_payment'] == 0) {
                                                                        echo "Trả tiền khi nhận hàng";
                                                                    } elseif ($value['status_payment'] == 1) {
                                                                        echo "Chuyển khoản";
                                                                    } else {
                                                                        // Handle unexpected values
                                                                        echo "Unknown payment method";
                                                                    }
                                                                    ?>
                                                                </td>

                                                                <td>
                                                                    <?= $value['created_at'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $value1['quantity'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= number_format($value['total_bill']) ?>đ
                                                                </td>

                                                                <form action="index.php?act=don-hang-update&id=<?= $value1['order_id'] ?>" class="d-flex" enctype="multipart/form-data" method="post">
                                                                    <td> <!-- <label for="" class="form-label">Trạng thái</label> -->
                                                                        <?php if ($value['status_delivery'] == -1) : ?>
                                                                            <span>Đã hủy</span>
                                                                        <?php elseif ($value['status_delivery'] == 3) : ?>
                                                                            <span>Đã giao hàng</span>
                                                                        <?php else : ?>
                                                                            <select name="status_delivery" id="" class="form-select">

                                                                                <option value="0" <?php if ($value['status_delivery'] == 0) echo "selected"; ?>>Chờ xác nhận</option>
                                                                                <option value="1" <?php if ($value['status_delivery'] == 1) echo "selected"; ?>>Chờ lấy hàng</option>
                                                                                <option value="2" <?php if ($value['status_delivery'] == 2) echo "selected"; ?>>Chờ giao hàng</option>
                                                                                <option value="3" <?php if ($value['status_delivery'] == 3) echo "selected"; ?>>Đã giao hàng</option>
                                                                                <option value="-1" <?php if ($value['status_delivery'] == -1) echo "selected"; ?>>Đã Hủy</option>

                                                                            </select>
                                                                        <?php endif; ?>
                                                                    </td>

                                                                    <td>
                                                                        <a href="<?= BASE_URL_ADMIN ?>?act=don-hang-detail&id=<?= $value1['order_id'] ?>" class="btn btn-info">Detail</a>
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </td>
                                                                </form>
                                                            </tr>
                                <?php
                                                        }
                                                    }
                                                }
                                            }

                                            $j = 1;
                                        }
                                        $i = 1;
                                    }
                                }
                                ?>

                                <!-- test -->
                                <?php
                                $i = 1;
                                $j = 1;
                                foreach ($user as $item) {
                                    foreach ($datadonhang as $value) {
                                        if ($item['id'] == $value['user_id']) {
                                            $i++;
                                        }
                                    }
                                    echo "<pre>";
                                    echo $i;
                                    if ($i > 1) {
                                        echo "name " . $item['name'];
                                        foreach ($donhang as $value) {
                                            foreach ($donhang_items as $value1) {
                                                if ($value['id'] == $value1['order_id'])
                                                    $j++;
                                            }
                                            echo "<pre>";

                                            if ($item['id'] == $value['user_id']) {
                                                if ($j > 2) {
                                                    echo " order id " . $value['id'];
                                                    echo "<br>";
                                                    echo $j;
                                                    foreach ($donhang_items as $value1) {
                                                        if ($value['id'] == $value1['order_id'])
                                                            echo " id " . $value1['id'];
                                                    }
                                                } else {
                                                    echo " order id " . $value['id'];
                                                    echo "<br>";
                                                    foreach ($donhang_items as $value1) {
                                                        if ($value['id'] == $value1['order_id'])
                                                            echo " id " . $value1['id'];
                                                    }
                                                }
                                            }



                                            $j = 1;
                                            echo "</pre>";
                                        }
                                        $i = 1;

                                        echo "</pre>";
                                    }
                                }
                                ?>
                                <!-- test -->
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                </div><!-- /.col -->

            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->