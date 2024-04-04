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
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">chi tiet đơn hàng</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        
                                        <th>Tên sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Tổng</th>
                                        <th>Ngày đặt hàng</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($DonHangShow as $item) : ?>

                                <td><?= $item['product_id']?></td>
                                    <td><?=$item['product_name'] ?></td>
                                    <td><?=number_format($item['price']) ?>đ</td>
                                    <td><?=$item['quantity'] ?></td>
                                    <td><?=number_format($item['price']*$item['quantity'])?></td>
                                    <td><?=$item['created_at'] ?></td>

                                   
                                </tbody>
                                <?php endforeach?>
                            </table>
                        </div>
                        <!-- <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>

            </div><!--end::Row-->
        </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->