<?php
include "libs/database.php";
?>
 
<?php
class cartegory
{
 
   private $db;
 
   public function __construct()
   {
       $this ->db = new Database();
   }
 
   public function insert_cartegory($danhmuc_ten){
            $query = "INSERT INTO nad_danhmuc (danhmuc_ten) VALUES ('$danhmuc_ten')";
            $result = $this ->db ->insert($query);
            header('Location:cartegorylist.php'); // sau khi thực thi insert song sẽ trả về 
            return $result;   
       }
 public function show_cartegory(){
       $query = "SELECT * FROM nad_danhmuc ORDER BY danhmuc_id DESC";
       $result = $this -> db ->select($query);
       return $result;
   }
   public function get_cartegory($danhmuc_id){
       $query = "SELECT * FROM nad_danhmuc WHERE danhmuc_id = '$danhmuc_id'";
       $result = $this -> db ->select($query);
       return $result;
   }
   public function update_cartegory($danhmuc_ten,$danhmuc_id) {
               $query = "UPDATE nad_danhmuc SET danhmuc_ten = '$danhmuc_ten' WHERE danhmuc_id = '$danhmuc_id'";
               $result = $this ->db ->update($query);
               header('Location:cartegorylist.php');
               return $result;
               
    
 
   }
   public function delete_cartegory($danhmuc_id){
       $query = "DELETE  FROM nad_danhmuc WHERE danhmuc_id = '$danhmuc_id'";
       $result = $this -> db ->delete($query);
       header('Location:cartegorylist.php');
               return $result;
     
   }
 
   }
 
?>
