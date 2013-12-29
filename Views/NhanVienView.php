<?php
$db = mysql_connect("localhost", "root", "");
if (!$db) {
    echo "Không thể kết nối";
    exit();
    
}
mysql_select_db("quanlykhachsan");
?>
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     </head>
     <body>
         <form action="NhanVienView.php" method ="post">
    <table>
        <tr>
            <td><label>Mã Nhân Viên :</label></td>
            <td> <select name="manv" id="manv">
                                   <?php
                                    $sql = "select * from nhanvien";
                                    $result = mysql_query($sql,$db);
                                    $n = mysql_num_rows($result);
                                    if (mysql_num_rows($result)<>0) {
                                          while($row = mysql_fetch_row($result)){
                                              $manv =$row[2];
                                               echo "<option value ='$manv'>$manv</option>";
                                           }
                                    }
                                   ?>
                                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Tìm Thông Tin">
            </td>
        </tr>
    </table>
</form>
        <?php
           if (isset($_POST["manv"])) {
              $manv = $_POST["manv"];
             $sql = "select * from nhanvien where nhanvien.cmnd like '$manv'";
             $result = mysql_query($sql,$db);
             if (!$result) {
                 echo "error".mysql_error();
                 exit();
             }
             if (mysql_num_rows($result)) {
                 while($row = mysql_fetch_row($result))
                     $hoten = $row[1];
                 echo $hoten;
                    
//                     echo "<table>";
//                     echo "<tr>";
//                echo "<td>";
//                    echo "<label>Tên Nhân Viên:$hoten</label>";
//                echo "</td>";
//                
//                echo "</tr>";
//                echo "<tr>";
//                echo "<td>";
//                    echo "<label>giới tính :</label>";
//                echo "</td>";
//                echo "<td>";
//                    echo "<p>Nam</p>";
//                echo "</td>";
//                echo "</tr>";
//               echo " <tr>";
//                echo "<td>";
//                    echo "<label>chức vụ :</label>";
//                echo "</td>";
//                echo "<td>";
//                    echo "<p>Lễ tân</p>";
//                echo "</td>";
//                echo "</tr>";
//           echo " <tr>";
//                echo "<td>";
//                    echo "<label>Ngày sinh :</label>";
//                echo "</td>";
//                echo "<td>";
//                    echo "<p>30/09/1992</p>";
//                echo "</td>";
//            </tr>
//            <tr>
//                <td>
//                    <label>số điên thoại :</label>
//                </td>
//                <td>
//                    <p>0123456789</p>
//                </td>
//            </tr>
//            <tr>
//                <td>
//                    <label>Email :</label>
//                </td>
//                <td>
//                    <p>abc09@gmail.com</p>
//                </td>
//            </tr>
//            <tr>
//                <td>
//                    <label>địa chỉ :</label>
//                </td>
//                <td>
//                    <p>9/6 Hai Bà Tưng</p>
//                </td>
//            </tr>";
//                     echo "</table>";
                 }
                 
             
     }   
?>
</body>
</html>