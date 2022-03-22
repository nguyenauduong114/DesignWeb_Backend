<?php 
include "header.php";
include "leftside.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand;
$show_brand = $brand -> show_brand();
?>
        <div class="admin-content-right">
            <div class="table-content">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID loại sản phẩm</th>
                        <th>Danh Mục</th>
                        <th>Loại Sản Phẩm</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <!-- dùng vòng lập để đổ dữ liệu ra -->
                    <?php 
                        if($show_brand){$i=0; while($result = $show_brand -> fetch_assoc()){
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i?> </td>
                        <td><?php echo $result['loaisanpham_id']?> </td>
                        <td><?php echo $result['danhmuc_ten']?> </td>
                        <td><?php echo $result['loaisanpham_ten']?> </td>
                        <td>
                            <a href="brandedit.php?brand_id=<?php echo $result['loaisanpham_id']?>">Sửa</a>|<a href="branddelete.php?brand_id=<?php echo $result['loaisanpham_id']?>">Xóa</a>
                        </td>
                    </tr>
                    <!-- Nếu đúng lập lại 3 lần -->
                    <?php
                        }}
                    ?>
                </table>
            </div>
         </div>
     </section>
     <script src="script.js"></script>
</body>