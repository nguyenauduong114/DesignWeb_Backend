<?php
include "libs/database.php";
?>
 
<?php
class brand
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
    public function insert_brand($danhmuc_id, $loaisanpham_ten){
            $query = "INSERT INTO nad_loaisanpham (danhmuc_id, loaisanpham_ten) VALUES ('$danhmuc_id','$loaisanpham_ten')";
            $result = $this ->db ->insert($query);
            header('Location:brandlist.php'); // sau khi thực thi insert song sẽ trả về 
            return $result;   
       }
    public function show_brand(){
     //  $query = "SELECT * FROM nad_loaisanpham ORDER BY loaisanpham_id DESC";
            $query = "SELECT nad_loaisanpham.*, nad_danhmuc.danhmuc_ten
            from nad_loaisanpham inner join nad_danhmuc on nad_loaisanpham.danhmuc_id = nad_danhmuc.danhmuc_id
            order by nad_loaisanpham.loaisanpham_id desc ";
            $result = $this -> db ->select($query);  // lấy 2 bảng để được thông tin danh mục tên = danh mục id. 2 trường trùng với bảng 
       return $result;
    }
   public function get_brand($brand_id){
       $query = "SELECT * FROM nad_loaisanpham WHERE loaisanpham_id = '$brand_id'";
       $result = $this -> db ->select($query);
       return $result;
    }
   public function update_brand($danhmuc_id, $loaisanpham_ten, $brand_id) {
               $query = "UPDATE nad_loaisanpham SET danhmuc_id = '$danhmuc_id', loaisanpham_ten = '$loaisanpham_ten' WHERE loaisanpham_id = '$brand_id'";
               $result = $this ->db ->update($query);
               header('Location:brandlist.php');
               return $result;
               
      }
    public function  delete_brand($brand_id){
       $query = "DELETE  FROM nad_loaisanpham WHERE loaisanpham_id = '$brand_id'";
       $result = $this -> db ->delete($query);
       header('Location:brandlist.php');
               return $result;
     
    }
 
}
 
?>
