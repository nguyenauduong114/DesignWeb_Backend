<?php 
include "header.php";
include "leftside.php";
include "class/color_class.php";
?>
<?php 
    $color = new color;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $mau_ten = $_POST['mau_ten']; // đổi thành mau_ten để bắt sự kiện nầm trong thẻ from
        $file_name = $_FILES['anh_ten']['name']; // tên ảnh (biến $_files = name)
        $file_temp = $_FILES['anh_ten']['tmp_name']; // lưu tạm
        $div = explode('.',$file_name); // tách tên và đuôi ảnh .png ..
        $file_ext = strtolower(end($div)); // lấy đuôi ảnh
        $color_anh = substr(md5(time()),0,10).'.'.$file_ext; // tạo một biến tên ngẫu nhiên
        $upload_image = "uploads/".$color_anh; // chuyển ảnh vào file uploads
        move_uploaded_file($file_temp,$upload_image); //chuyển đường dẩn tạm qua file uploads

        $insert_img = $color ->insert_img($mau_ten, $color_anh); //ham da duoc dinh nghia ben beand_class

        }
?>
<body>
        <div class="admin-content-right">
            <div class="cartegory-add-content">
                <form action="" method="POST" enctype="multipart/form-data" >
                <!-- action file chèn biến bên dưới vào -->
                    <label for="">Tên Màu<span style="color: red;">*</span></label> <br>
                    <input type="text" name="mau_ten">
                    <br><br>
                    <label for="">Vui lòng chọn ảnh<span style="color: red;">*</span></label> <br>
                    <input type="file" name="anh_ten">
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