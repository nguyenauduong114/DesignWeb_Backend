<?php
include "libs/database.php";
?>
 
<?php
class color
{
 
    private $db;
 
    public function __construct()
    {
       $this ->db = new Database();
    }
    // public function show_cartegory(){
    // $query = "SELECT * FROM nad_danhmuc ORDER BY danhmuc_id DESC";
    // $result = $this -> db ->select($query);
    // return $result;
    // }
//     public function insert_color($danhmuc_id, $loaisanpham_ten){
//             $query = "INSERT INTO nad_loaisanpham (danhmuc_id, loaisanpham_ten) VALUES ('$danhmuc_id','$loaisanpham_ten')";
//             $result = $this ->db ->insert($query);
//             header('Location:colorlist.php'); // sau khi thực thi insert song sẽ trả về 
//             return $result;   
//        }
    // public function show_color(){
    //  //  $query = "SELECT * FROM nad_loaisanpham ORDER BY loaisanpham_id DESC";
    //         $query = "SELECT nad_loaisanpham.*, nad_danhmuc.danhmuc_ten
    //         from nad_loaisanpham inner join nad_danhmuc on nad_loaisanpham.danhmuc_id = nad_danhmuc.danhmuc_id
    //         order by nad_loaisanpham.loaisanpham_id desc ";
    //         $result = $this -> db ->select($query);  // lấy 2 bảng để được thông tin danh mục tên = danh mục id. 2 trường trùng với bảng 
    //    return $result;
    // }
//    public function get_color($color_id){
//        $query = "SELECT * FROM nad_loaisanpham WHERE loaisanpham_id = '$color_id'";
//        $result = $this -> db ->select($query);
//        return $result;
//     }
   public function update_img($mau_ten, $color_anh, $mau_id) {
               $query = "UPDATE nad_mausac SET mau_ten = '$mau_ten', anh_ten = '$color_anh' WHERE mau_id = '$mau_id'";
               $result = $this ->db ->update($query);
               header('Location:colorlist.php');
               return $result;
               
      }
    public function  delete_color($mau_id){
       $query = "DELETE  FROM nad_mausac WHERE mau_id = '$mau_id'";
       $result = $this -> db ->delete($query);
       header('Location:colorlist.php');
               return $result;
     
    }
    public function insert_img($mau_ten, $color_anh){
        $query = "INSERT INTO nad_mausac (mau_ten, anh_ten) VALUES ('$mau_ten','$color_anh')";
        $result = $this ->db ->insert($query);
        header('Location:colorlist.php'); // sau khi thực thi insert song sẽ trả về 
        return $result;   
   }
   public function show_color(){
    $query = "SELECT * FROM nad_mausac ORDER BY mau_id DESC";
    $result = $this -> db ->select($query);
    return $result;
   }

   public function get_mau($mau_id){
    $query = "SELECT * FROM nad_mausac where mau_id = $mau_id ";
    $result = $this -> db ->select($query);
    return $result;
   }

}
 
?>
