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
                                        <th>Mã đơn hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>SĐT</th>
                                        <th>Thanh toán</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>
                                            Hành động
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $displayedOrderIds = []; // Initialize an array to keep track of displayed order_ids
                                    foreach ($donhang as $item) :
                                        if (!in_array($item['order_id'], $displayedOrderIds)) : // Check if order_id is not yet displayed
                                            $displayedOrderIds[] = $item['order_id']; // Add the order_id to the displayed list
                                    ?>
                                            <tr class="align-middle">
                                                <td><?= $item['order_id'] ?></td>

                                                <td><?= $item['user_name'] ?></td>

                                                <td><?= $item['user_email'] ?></td>

                                                <td><?= $item['user_address'] ?></td>

                                                <td><?= $item['user_phone'] ?></td>

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
                                    <?php endif;
                                    endforeach ?>


                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                </div><!-- /.col -->

            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->