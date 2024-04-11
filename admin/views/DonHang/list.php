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
                                <tbody>
                                    <?php
                                    $displayedOrderIds = [];
                                    $i = 0;
                                    foreach ($user as $value) {
                                        foreach ($donhang as $item) {
                                            if ($item['user_id'] == $value['id']) {
                                                $i++;
                                            }
                                        }
                                        if ($i > 0) {
                                    ?>
                                            <!-- echo $value['TenSanPham'] . "<br>"; -->
                                            <tr class="align-middle">
                                                <td rowspan="<?= $i += 1 ?>">
                                                    <strong>id: </strong><?= $value['id'] ?><br>
                                                    <strong>tên người dùng: </strong><?= $value['hoten_user'] ?><br>
                                                    <strong>email: </strong><?= $value['email'] ?><br>
                                                    <strong>địa chỉ: </strong><?= $value['diachi'] ?><br>
                                                    <strong>số điện thoại: </strong><?= $value['tel'] ?><br>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        foreach ($donhang as $item) {
                                            if ($item['user_id'] == $value['id']) {
                                            ?>
                                                <tr>
                                                    <td><?= $item['order_id'] ?></td>
                                                    <td><?= $item['product_name'] ?></td>
                                                    <td><?php
                                                        if ($item['status_payment'] == 0) {
                                                            echo "Trả tiền khi nhận hàng";
                                                        } elseif ($item['status_payment'] == 1) {
                                                            echo "Chuyển khoản";
                                                        } else {
                                                            // Handle unexpected values
                                                            echo "Unknown payment method";
                                                        }
                                                        ?></td>

                                                    <td><?= $item['created_at'] ?></td>
                                                    <td><?= $item['quantity'] ?></td>
                                                    <td><?= number_format($item['total_bill']) ?>đ</td>

                                                    <form action="index.php?act=don-hang-update&id=<?= $item['order_id'] ?>" class="d-flex" enctype="multipart/form-data" method="post">
                                                        <td> <!-- <label for="" class="form-label">Trạng thái</label> -->
                                                            <?php if ($item['status_delivery'] == -1) : ?>
                                                                <span>Đã hủy</span>
                                                            <?php elseif ($item['status_delivery'] == 3) : ?>
                                                                <span>Đã giao hàng</span>
                                                            <?php else : ?>
                                                                <select name="status_delivery" id="" class="form-select">

                                                                    <option value="0" <?php if ($item['status_delivery'] == 0) echo "selected"; ?>>Chờ xác nhận</option>
                                                                    <option value="1" <?php if ($item['status_delivery'] == 1) echo "selected"; ?>>Chờ lấy hàng</option>
                                                                    <option value="2" <?php if ($item['status_delivery'] == 2) echo "selected"; ?>>Chờ giao hàng</option>
                                                                    <option value="3" <?php if ($item['status_delivery'] == 3) echo "selected"; ?>>Đã giao hàng</option>
                                                                    <option value="-1" <?php if ($item['status_delivery'] == -1) echo "selected"; ?>>Đã Hủy</option>

                                                                </select>
                                                            <?php endif; ?>
                                                        </td>

                                                        <td>
                                                            <a href="<?= BASE_URL_ADMIN ?>?act=don-hang-detail&id=<?= $item['order_id'] ?>" class="btn btn-info">Detail</a>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                    <?php
                                            }
                                        }
                                        $i = 0;
                                    } ?>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                </div><!-- /.col -->

            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->