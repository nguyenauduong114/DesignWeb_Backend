<?php 
include "header.php";
include "leftside.php";
include "class/cartegory_class.php";
?>
<!-- delete dữ liệu -->
<?php
$cartegory = new cartegory;
if (isset($_GET['danhmuc_id'])|| $_GET['danhmuc_id']!=null){
    $danhmuc_id = $_GET['danhmuc_id'];
    //echo $danhmuc_id;
    }
    //$_Get lấy danhmuc_id và thưc thi câu lệnh được nầm trong carttegoru_class
    $delete_cartegory = $cartegory -> delete_cartegory($danhmuc_id)
?>