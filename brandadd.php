<?php 
include "header.php";
include "leftside.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand;
if ($_SERVER['REQUEST_METHOD'] === 'POST') // nếu suất hiện câu lênh = post
{
    $danhmuc_id = $_POST['danhmuc_id']; // đổi thành danhmuc_ten để bắt sự kiện nầm trong thẻ from
    $loaisanpham_ten = $_POST['loaisanpham_ten']; 
    $insert_brand = $brand -> insert_brand($danhmuc_id, $loaisanpham_ten); //ham da duoc dinh nghia ben beand_class

}
?>

<body>
<div class="admin-content-right">
    <div class="cartegory-add-content">
        <form action="" method="POST" >
        <!-- action file chèn biến bên dưới vào -->
            <label for="">Vui lòng chọn danh mục<span style="color: red;">*</span></label> <br>
            <select name="danhmuc_id" id="">
                <option value="">Vui Lòng chọn danh mục</option> <br>
                <?php
                $show_cartegory = $brand -> show_cartegory();
                if ($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){ 
                ?>
                <option value="<?php echo $result['danhmuc_id'] ?>"><?php echo $result['danhmuc_ten'] ?></option>
                <?php 
                    }}
                ?>
            </select> 
            <br>
            <label for="">Vui lòng điền loại sản phẩm<span style="color: red;">*</span></label> <br>
            <input type="text" name="loaisanpham_ten">
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