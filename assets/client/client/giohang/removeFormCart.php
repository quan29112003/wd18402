<?php
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $productId = $_POST['id'];
	if(!empty($_SESSION['cart'])){
	$index = array_search($productId,array_column($_SESSION['cart'],'id'));
	if($index !== false){
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
	    }else{
		echo 'Không tồn tại trong giỏ hàng';
	    }
    }
}else{
    echo 'Yêu cầu không hợp lệ';
}
?>