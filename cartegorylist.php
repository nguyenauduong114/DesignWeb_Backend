<?php 
include "header.php";
include "leftside.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory -> show_cartegory();
?>
        <div class="admin-content-right">
            <div class="table-content">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh Mục</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <!-- dùng vòng lập để đổ dữ liệu ra -->
                    <?php
                    if($show_cartegory){$i=0; while($result = $show_cartegory -> fetch_assoc()){
                        $i++;
                    ?>
                    <tr>
                        <td> <?php echo $i?></td>
                        <td><?php echo $result["danhmuc_id"]?></td>
                        <td><?php echo $result["danhmuc_ten"]?></td>
                        <td>
                            <a href="cartegoryedit.php?danhmuc_id=<?php echo $result["danhmuc_id"]?>">Sửa</a>
                            <a href="cartegorydelete.php?danhmuc_id=<?php echo $result["danhmuc_id"]?>">Xóa</a>
                        </td>
                    </tr>
                    <!-- Nếu đúng lập lại 6 lần -->
                    <?php
                    }}
                    ?>
                </table>
            </div>
         </div>
     </section>
     <script src="script.js"></script>
</body>