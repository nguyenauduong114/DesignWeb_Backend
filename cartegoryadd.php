<?php 
include "header.php";
include "leftside.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if ($_SERVER['REQUEST_METHOD'] === 'POST') // nếu suất hiện câu lênh = post
{
    $danhmuc_ten = $_POST['danhmuc_ten']; // đổi thành danhmuc_ten để bắt sự kiện nầm trong thẻ from
    $insert_cartegory = $cartegory ->insert_cartegory($danhmuc_ten);
}
?>

<body>
<div class="admin-content-right">
    <div class="cartegory-add-content">
        <form action="" method="POST" >
        <!-- action file chèn biến bên dưới vào -->
            <label for="">Vùi lòng Điền danh mục<span style="color: red;">*</span></label> <br>
            <input type="text" name="danhmuc_ten">
            <button class="admin-btn" type="submit">Thêm</button>       
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