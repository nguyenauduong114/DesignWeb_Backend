<?php 
include "header.php";
include "leftside.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand;
if (isset($_GET['brand_id'])|| $_GET['brand_id']!=null){
    $brand_id = $_GET['brand_id'];
    //echo $danhmuc_id;
    }
    //$_Get lấy danhmuc_id và thưc thi câu lệnh được nầm trong carttegoru_class
    $get_brand = $brand -> get_brand($brand_id);
    if($get_brand){
        $resultA = $get_brand -> fetch_assoc(); 
    }
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') // nếu suất hiện câu lênh = post
{
    $danhmuc_id = $_POST['danhmuc_id']; // đổi thành danhmuc_ten để bắt sự kiện nầm trong thẻ from
    $loaisanpham_ten = $_POST['loaisanpham_ten']; 
    $update_brand = $brand -> update_brand($danhmuc_id, $loaisanpham_ten, $brand_id); //ham da duoc dinh nghia ben beand_class

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
                <option <?php if($result['danhmuc_id']==$resultA['danhmuc_id']){echo "selected";}?> value="<?php echo $result['danhmuc_id'] ?>"><?php echo $result['danhmuc_ten'] ?></option>
                <?php 
                    }}
                ?>
            </select> 
            <br>
            <label for="">Vui lòng sửa loại sản phẩm<span style="color: red;">*</span></label> <br>
            <input type="text" value="<?php echo $resultA['loaisanpham_ten'] ?>" name="loaisanpham_ten">
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