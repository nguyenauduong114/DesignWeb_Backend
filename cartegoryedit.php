<?php 
include "header.php";
include "leftside.php";
include "class/cartegory_class.php";
?>
<!-- Get dữ liệu -->
<?php
$cartegory = new cartegory;
if (isset($_GET['danhmuc_id'])|| $_GET['danhmuc_id']!=null){
    $danhmuc_id = $_GET['danhmuc_id'];
    //echo $danhmuc_id;
    }
    //$_Get lấy danhmuc_id và thưc thi câu lệnh được nầm trong carttegoru_class
    $get_cartegory = $cartegory -> get_cartegory($danhmuc_id);
    if($get_cartegory){
        $result = $get_cartegory -> fetch_assoc();
    }
?>

<!-- Post dữ liệu -> sửa  -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') // nếu suất hiện câu lênh = post
{
    $danhmuc_ten = $_POST['danhmuc_ten']; // đổi thành danhmuc_ten để bắt sự kiện nầm trong thẻ from
    $update_cartegory = $cartegory -> update_cartegory($danhmuc_ten,$danhmuc_id);
    // gọi và đi vào hàm
}
?>

<body>
<div class="admin-content-right">
    <div class="cartegory-add-content">
        <form action="" method="POST" >
        <!-- action file chèn biến bên dưới vào -->
            <label for="">Vùi lòng Điền danh mục<span style="color: red;">*</span></label> <br>
            <input type="text" name="danhmuc_ten" value="<?php echo $result['danhmuc_ten'] ?>">
            <button class="admin-btn" type="submit">Sửa</button>       
            <!-- khi ấn submit đồng nghĩa với thực hiện câu lệnh post    -->
        </form>
        
    </div>           
</div>
</section>
<section>
</section>
<script src="script.js"></script>
</body>
</html>                       