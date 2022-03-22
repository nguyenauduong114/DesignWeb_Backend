<?php 
include "header.php";
include "leftside.php";
include "class/color_class.php";
?>
<?php
$color = new color;
$show_color = $color -> show_color();
?>
        <div class="admin-content-right">
            <div class="table-content">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên màu</th>
                        <th>Màu</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                    <!-- dùng vòng lập để đổ dữ liệu ra -->
                    <?php
                    if($show_color){$i=0; while($result = $show_color -> fetch_assoc()){
                        $i++;
                    ?>
                    <tr>
                        <td> <?php echo $i?></td>
                        <td><?php echo $result["mau_id"]?></td>
                        <td><?php echo $result["mau_ten"]?></td>
                        <td><img style="width: 50px"; height="50px" src="uploads/<?php echo $result["anh_ten"] ?>" alt=""></td>
                        <td>
                            <a href="coloredit.php?mau_id=<?php echo $result["mau_id"]?>">Sửa</a>
                            <a href="colordelete.php?mau_id=<?php echo $result["mau_id"]?>">Xóa</a>
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