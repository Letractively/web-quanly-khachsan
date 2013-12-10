<?php
require ("Connectsql.php");
require ("TaiKhoan.php");
session_start();
class TaiKhoanSQL{
    
    function Lay_Taikhoan($TenTK,$MatKhau){
        
      $sql= mysql_query("SELECT * FROM TaiKhoan WHERE TenTK='$TenTK' MatKhau='$MatKhau'");
      if(mysql_num_rows($sql>0)){
          $row=mysql_fetch_array($sql);
          $_SESSION['currUser']=$row['TenTK'];
          if($row['$Quyen'==1]){
              $_SESSION['currAdmin']=$row['Quyen'];
              header("location:admin.php");
          } else {
              header("location:index.php");
          }
          
      }
 else {
          echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>";    
      }
    }
    
    }

?>
