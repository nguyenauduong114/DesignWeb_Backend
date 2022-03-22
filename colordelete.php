<?php 
include "header.php";
include "leftside.php";
include "class/color_class.php";
?>
<!-- delete dữ liệu -->
<?php
$color = new color;
if (isset($_GET['mau_id'])|| $_GET['mau_id']!=null){
    $mau_id = $_GET['mau_id'];
    //echo $danhmuc_id;
    }
    //$_Get lấy danhmuc_id và thưc thi câu lệnh được nầm trong carttegoru_class
    $delete_color = $color -> delete_color($mau_id)
?>