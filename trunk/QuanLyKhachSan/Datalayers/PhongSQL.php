<?php

class PhongSQL {

    function  KetNoi(){
        
        $db = mysql_connect("localhost", "root","");
        if (!$db) {
            echo  "Không Thể Kết nối CSDL";
            exit();
            return FALSE;
        }
        return true;
    }
    //Lấy Thông Tin
    function LayID(){
      $ketquaid = mysql_query("select * frome")  
        
    }
    function LayTenPhong(){
        
    }
    function LayTinhTrang(){
        
    }
    
  
}

?>

