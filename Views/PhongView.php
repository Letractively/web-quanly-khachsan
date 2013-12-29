<?php
include '../Datalayers/PhongSQL.php';
 
  
    $a = new PhongSQL();
    if($a->KetNoi()){
        
    mysql_select_db("QuanLyKhachSan");
    $result = mysql_query("SELECT * FROM Phong");
 
   
   echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
    echo "<p class='style4' align ='center'>Quản Lý Phòng</p>";
    echo "<table id ='tablephong1' border='1' width ='700' align='center' cellspacing='2' cellpadding='2' class='style14' >";
        echo "<tr>";
        echo "<td >Mã Phòng</td>";
        echo "<td >Tên Phòng</td>";
        echo "<td >Loại Phòng</td>";
        echo "<td >Hình Ảnh</td>";
        echo "<td >Tình Trạng</td>";
    echo "</tr>";
  
    while ($row =  mysql_fetch_row($result)) {
    $maphong = $row[0];
    $tenphong =$row[1];
    $loaiphong =$row[2];
    $hinhAnh = $row[3];
    $tinhrang =$row[4];
    
    echo "<tr>";
        echo"<td>$maphong</td>";
        echo"<td>$tenphong</td>";
        echo"<td>$loaiphong</td>";
        echo"<td>$hinhAnh</td>";
         echo"<td>$tinhrang</td>";
   echo "</tr>";
    }
   
   echo "</table>";
 echo "<tr>";
        echo " Tìm Kiếm Phòng Theo Mã <br><input type='text' name ='TimTheoMaPhong' method ='post'><br>";
        echo "<input type ='submit' name ='submitTimPhongTheoMa' value='Tìm'>";
    echo "</tr>";
}


class PhongView {
 
}

?>
<html>
    <head>
        <style type ="text/css">
            p{
                color: navy;
                font-size: 45;
                text-align: center;
            }
        </style>
    </head>
</html>

