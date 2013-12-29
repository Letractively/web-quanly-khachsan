 <?php
//kết nối csdl
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
<legend>Phòng</legend>
            <form method="post">
                <table>
                    <tr>
                        <td><label>Mã khách hàng :</label></td>
                         <td> <select name="makh" id="makh">
                                   <?php
                                    $sql = "select * from khachhang";
                                    $result = mysql_query($sql,$db);
                                    $n = mysql_num_rows($result);
                                    if (mysql_num_rows($result)<>0) {
                                          while($row = mysql_fetch_row($result)){
                                              $makh =$row[0];
                                               echo "<option value ='$makh'>$makh</option>";
                                           }
                                    }
                                   ?>
                                </select>
                        </td>   
                    </tr>
                    <tr>
                        <td><label>Phòng sử dụng :</label></td>
                        <td> <select name="phong" id="phong">
                                   <?php
                                  
                                    $sql = "select * from thuephong ";
                                    $result = mysql_query($sql,$db);
                                    $n = mysql_num_rows($result);
                                    if (mysql_num_rows($result)<>0) {
                                          while($row = mysql_fetch_row($result)){
                                              $phong =$row[0];
                                               echo "<option value ='$phong'>$phong</option>";
                                           }
                                    }
                                   ?>
                                </select>
                        </td>   
                    </tr>
                    <tr>
                        <td><label>Ngày đến :</label></td>
                         <td> <select name="phong" id="makh">
                                   <?php
                                    $sql = "select * from thuephong";
                                    $result = mysql_query($sql,$db);
                                    $n = mysql_num_rows($result);
                                    if (mysql_num_rows($result)<>0) {
                                          while($row = mysql_fetch_row($result)){
                                              $phong =$row[2];
                                               echo "<option value ='$phong'>$phong</option>";
                                           }
                                    }
                                   ?>
                                </select>
                        </td>   
                    </tr>
                    <tr>
                        <td><label>Ngày trả :</label></td>
                          <td> <select name="phong" id="makh">
                                   <?php
                                    $sql = "select * from thuephong";
                                    $result = mysql_query($sql,$db);
                                    $n = mysql_num_rows($result);
                                    if (mysql_num_rows($result)<>0) {
                                          while($row = mysql_fetch_row($result)){
                                              $phong =$row[3];
                                               echo "<option value ='$phong'>$phong</option>";
                                           }
                                    }
                                   ?>
                                </select>
                        </td>     
                    </tr>
                    <tr>
                        <td><label>Thành tiền :</label></td>
                        <td> <select name="phong" id="makh">
                                  
                                </select>
                        </td>   
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn" type="submit" value="Thanh Toán"  name="thanhtoan">
                            <input class="btn" type="submit" value="In Hóa Đơn" name="inhoadon">
                        </td>
                    </tr>
             </table>
      </form>
<?php
                                        if (isset($_REQUEST["thanhtoan"])) {
                                      
                                        echo "dkm";
                                        }
                                        else if (isset($_REQUEST["inhoadon"])) {
                                        echo "<a href='javascript:void(0);' onClick='printPage(printsection.innerHTML)'>Print Preview</a>";
                                        }
?>

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <?php
      include_once 'HoaDonDichVuView.php';
      ?>
 
</body>
</html>