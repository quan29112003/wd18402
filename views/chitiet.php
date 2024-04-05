<?= require_once PATH_VIEW . 'layouts/partials/header.php' ?>

<main>
    <div class="container margin_30">
        <!-- <div class="countdown_inner">
            <div class="countdown"></div>
        </div> -->
        <div class="row">
            <div class="col-lg-6 magnific-gallery">
                <p>
                    <img src="uploads/<?= $dataSanPham['anhSP1'] ?>" alt="" class="img-fluid">
                </p>
            </div>
            <div class="col-lg-6" id="sidebar_fixed">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li>Page active</li>
                    </ul>
                </div>
                <!-- /page_header -->
                <div class="prod_info">
                    <h1><?= $dataSanPham['TenSanPham'] ?></h1>
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="price_main"><span class="new_price">Giá: <?= number_format($dataSanPham['GiaSP']) ?>đ</span></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="<?= BASE_URL . "?act=cart-add&productID=" . $dataSanPham['SanPhamID'] ?>"><button class="btn_1">Thêm vào giỏ hàng </button></a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /prod_info -->
                <div class="product_actions">
                    <!-- <ul>
                        <li>
                        </li>
                    </ul> -->
                </div>
                <!-- /product_actions -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="tabs_product">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Thông tin Sản Phẩm</a>
                </li>
                <li class="nav-item">
                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Bình luận</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /tabs_product -->
    <div class="tab_content_wrapper">
        <div class="container">
            <div class="tab-content" role="tablist">
                <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                    <div class="card-header" role="tab" id="heading-A">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                                Thông tin về sản phẩm
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Chi tiết</h3>
                                    <p><?= $dataSanPham['MoTa'] ?></p>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                    <div class="card-header" role="tab" id="heading-B">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                Bình Luận
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
            <!-- /tab-content -->
        </div>
    </div>

    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Sản phẩm cùng loại</h2>
            <span>Products</span>
            <p>Sản phẩm cùng loại </p>
        </div>
        <div class="owl-carousel owl-theme products_carousel">
            <?php
            foreach ($SanPhamCungLoai as $item) : ?>
                <div class="item">
                    <div class="grid_item">
                        <figure>
                            <a href="<?= BASE_URL ?>?act=chi-tiet&id=<?= $item['SanPhamID'] ?>">
                                <img class="owl-lazy" src="uploads/<?= $item['anhSP1'] ?>" alt="">
                            </a>
                        </figure>
                        <a href="">
                            <h3><?= $item['TenSanPham'] ?></h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$<?= $item['GiaSP'] ?></span>
                        </div>
                        <ul>
                        </ul>
                        <button data-id="'.$id.'" class="btn_1" onclick="addToCart(<?= $id ?>,'<?= $name ?>',<?= $price ?>)">Thêm vào giỏ hàng </button>
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- <div class="item">
	                <div class="grid_item">
	                    <span class="ribbon new">New</span>
	                    <figure>
	                        <a href="product-detail-1.html">
	                            <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4.jpg" alt="">
	                        </a>
	                    </figure>
	                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
	                    <a href="product-detail-1.html">
	                        <h3>ACG React Terra</h3>
	                    </a>
	                    <div class="price_box">
	                        <span class="new_price">$110.00</span>
	                    </div>
	                    <ul>
	                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
	                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
	                    </ul>
	                </div>
	            </div> -->
            <!-- /item -->
            <!-- /item -->
            <!-- /item -->
            <!-- /item -->
            <!-- /item -->
        </div>
        <!-- /products_carousel -->
    </div>
    <!-- /container -->

    <div class="feat">
        <div class="container">
            <ul>
                <li>
                    <div class="box">
                        <i class="ti-gift"></i>
                        <div class="justify-content-center">
                            <h3>Sản phẩm bảo đảm chính hãng</h3>
                            <p>Hàng chính hãng 100%</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-wallet"></i>
                        <div class="justify-content-center">
                            <h3>Thanh toán an toàn</h3>
                            <p>100% bảo mật thanh toán người dùng</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-headphone-alt"></i>
                        <div class="justify-content-center">
                            <h3>Hỗ trợ 24/7</h3>
                            <p>Liên hệ với chúng tôi ngay để được hỗ trợ</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/feat-->

</main>
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>
<!-- SPECIFIC SCRIPTS -->
<script src="js/sticky_sidebar.min.js"></script>
<script>
    // Sticky sidebar
    $('#sidebar_fixed').theiaStickySidebar({
        minWidth: 991,
        updateSidebarHeight: false,
        additionalMarginTop: 90
    });
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct')

    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        $.ajax({
            type: 'POST',
            url: "./giohang/addToCart.php",
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm thành công!');
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
<!-- footer --><?= require_once PATH_VIEW . 'layouts/partials/footer.php' ?>
