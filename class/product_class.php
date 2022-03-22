<?php
include "libs/database.php";
?>
 
<?php
class product
{
 
    private $db;
 
    public function __construct()
    {
       $this ->db = new Database();
    } 
   
    public function show_cartegory(){
    $query = "SELECT * FROM nad_danhmuc ORDER BY danhmuc_id DESC";
    $result = $this -> db ->select($query);
    return $result;
    }

    public function show_color(){
        $query = "SELECT * FROM nad_mausac ORDER BY mau_id DESC";
        $result = $this -> db ->select($query);
        return $result;
        }

    public function show_loaisanpham_ajax($danhmuc_id){
        $query = "SELECT * FROM nad_loaisanpham where danhmuc_id = $danhmuc_id ORDER BY loaisanpham_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
 
   public function inser_product($_post, $_files){
        //var_dump($_post);
        $sanpham_tieude = $_post['sanpham_tieude'];
        $sanpham_ma = $_post['sanpham_ma'];
        $danhmuc_id = $_post['danhmuc_id'];
        $loaisanpham_id = $_post['loaisanpham_id'];
        $color_id = $_post['color_id'];
        $sanpham_gia = $_post['sanpham_gia'];
        $sanpham_chitiet= $_post['sanpham_chitiet'];
        $sanpham_baoquan = $_post['sanpham_baoquan'];
        $file_name = $_FILES['sanpham_anh']['name'];               // tên ảnh (biến $_files = name)
        $file_temp = $_FILES['sanpham_anh']['tmp_name'];           // lưu tạm
        $div = explode('.',$file_name);                            // tách tên và đuôi ảnh .png ..
        $file_ext = strtolower(end($div));                         // lấy đuôi ảnh
        $sanpham_anh = substr(md5(time()),0,10).'.'.$file_ext;     // tạo một biến tên ngẫu nhiên
        $upload_image = "uploads/".$sanpham_anh;                   // chuyển ảnh vào file uploads
        move_uploaded_file($file_temp,$upload_image);              //chuyển đường dẩn tạm qua file uploads
            
        $query = "INSERT INTO nad_sanpham(sanpham_tieude, sanpham_ma, danhmuc_id, loaisanpham_id, color_id, sanpham_gia,
            sanpham_chitiet, sanpham_baoquan, sanpham_anh) VALUES ('$sanpham_tieude','$sanpham_ma','$danhmuc_id','$loaisanpham_id','$color_id','$sanpham_gia',' $sanpham_chitiet','$sanpham_baoquan','$sanpham_anh')";
            $result = $this ->db ->insert($query);
            // header('Location:productlist.php'); // sau khi thực thi insert song sẽ trả về 
            return $result;   
       }
//  public function show_cartegory(){
//        $query = "SELECT * FROM nad_danhmuc ORDER BY danhmuc_id DESC";
//        $result = $this -> db ->select($query);
//        return $result;
//    }
//    public function get_cartegory($danhmuc_id){
//        $query = "SELECT * FROM nad_danhmuc WHERE danhmuc_id = '$danhmuc_id'";
//        $result = $this -> db ->select($query);
//        return $result;
//    }
//    public function update_cartegory($danhmuc_ten,$danhmuc_id) {
//                $query = "UPDATE nad_danhmuc SET danhmuc_ten = '$danhmuc_ten' WHERE danhmuc_id = '$danhmuc_id'";
//                $result = $this ->db ->update($query);
//                header('Location:cartegorylist.php');
//                return $result;
               
    
 
//    }
//    public function delete_cartegory($danhmuc_id){
//        $query = "DELETE  FROM nad_danhmuc WHERE danhmuc_id = '$danhmuc_id'";
//        $result = $this -> db ->delete($query);
//        header('Location:cartegorylist.php');
//                return $result;
     
//    }
 
}
 
?>
