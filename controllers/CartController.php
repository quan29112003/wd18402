
<?php
// Assuming $dbConnection is your database connection object
function cartAdd($productID, $quantity = 1)
{
    // B1: Lấy dữ liệu của Product theo $productID
    $product = showOne2table('sanpham', 'anhsanpham', 'SanPhamID', 'ID_SanPham', 'SanPhamID', $productID);

    
    // $cartID = getCartID($_SESSION['user']['id']);


    // $_SESSION['cartID'] = $cartID;

    // B3: Thêm vào session, dùng productID để làm key cho từng item cart
    if (!isset($_SESSION['cart'][$productID])) {

        $_SESSION['cart'][$productID] = $product;
        $_SESSION['cart'][$productID]['quantity'] = $quantity;

    
            //Thêm vào cart items
            // insert('cart_items', [
            //     'cart_id' => $cartID,
            //     'product_id' => $productID,
            //     'quantity' => $quantity
            // ]);


    } else {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] += $quantity;

        // updateQuantityByCartIDAndProductID($cartID, $productID, $qtyTMP);
    }

    // $data = list3table('cart_items', 'sanpham','anhsanpham', 'product_id', 'SanPhamID', 'product_id', 'ID_SanPham');

    // B4: Trả về view giỏ hàng
    header('Location: ' . BASE_URL . '?act=cart-list');
}

function cartList()
{
    
    $dataDanhMuc = listAll('danhmuc');
    require_once PATH_VIEW . 'giohang/giohang.php';
}

function cartInc($productID)
{
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('sanpham', 'SanPhamID', $productID);


    if (empty($product)) {
        debug('404 Not found');
    }

    // Tăng số lượng lên 1
    if (isset($_SESSION['cart'][$productID]) && $_SESSION['cart'][$productID]['quantity'] < $product['SoLuong']) {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] += 1;

        updateQuantityByCartIDAndProductID($_SESSION['cartID'], $productID, $qtyTMP);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart-list');
}

function cartDec($productID)
{
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('sanpham', 'SanPhamID', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // giảm số lượng lên 1
    if (isset($_SESSION['cart'][$productID]) && $_SESSION['cart'][$productID]['quantity'] > 1) {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] -= 1;

        updateQuantityByCartIDAndProductID($_SESSION['cartID'], $productID, $qtyTMP);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart-list');
}

function cartDelete($productID)
{
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('sanpham', 'SanPhamID', $productID);


    if (empty($product)) {
        debug('404 Not found');
    }

    // Xóa bản ghi trong session và cart_items
    if (isset($_SESSION['cart'][$productID])) {
        unset($_SESSION['cart'][$productID]);

        deleteCartItemByCartIDAndProductID($_SESSION['cartID'], $productID);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart-list');
}