<?php 
include "header.php";
include "leftside.php";
include "class/brand_class.php";
?>
<!-- delete dữ liệu -->
<?php
$brand = new brand;
if (isset($_GET['brand_id'])|| $_GET['brand_id']!=null){
    $brand_id = $_GET['brand_id'];
    //echo $danhmuc_id;
    }
    //$_Get lấy danhmuc_id và thưc thi câu lệnh được nầm trong carttegoru_class
    $delete_brand = $brand -> delete_brand($brand_id)
?>