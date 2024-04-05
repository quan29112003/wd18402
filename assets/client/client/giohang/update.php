<?php
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $productId = $_POST['id'];
    $newQuantity = $_POST['quantity'];
	if(!empty($_SESSION['cart'])){
	$index = array_search($productId,array_column($_SESSION['cart'],'id'));
	if($index !== false){
		$_SESSION['cart'][$index]['quantity'] = $newQuantity;
	}else{
		echo 'Không tồn tại trong giỏ hàng';
	}
}
}else{
    echo 'Yêu cầu không hợp lệ';
}
?>