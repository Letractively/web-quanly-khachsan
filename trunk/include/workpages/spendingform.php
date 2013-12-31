<?php
//kết nối csdl
$db = mysql_connect("localhost", "root", "");
if (!$db) {
    echo "Không thể kết nối";
    exit();
    
}
mysql_select_db("quanlykhachsan");

?>
<div id="spendingform">
    <div id="spendingform-addcustomer">
     <?php
     require_once './Views/KhachHangView.php';
     ?>
    </div>
    <div id="spendingform-form">
       <fieldset id="spendingform-form-info">
       <legend>Thuê phòng</legend>
       <form action ="index.php?act=profile&w=spending" method="post">
                <table>
                    <tr>
                        <td><label>Mã khách hàng :</label></td>
                        <td> <select name="makh" id="makh" class="cbb">
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
                        <td><label>Mã Phòng :</label></td>
                        <td> <select name="room" id="room" class="btn">
                                   <?php
                                    $sql = "select * from phong";
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
                    <!--<tr>
                        <td><label>Ngày đặt :</label></td>
                        <td><input class="text" type="date" name="cdate" ></td>
                    </tr>-->
                    <tr>
                        <td><label>Ngày nhận :</label></td>
                        <td><input class="text" type="date" name="cdate"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn" type="reset" value="Huỷ" name="reset" action="null">
                            <input class="btn" type="submit" value="Thêm" name="submit">
                        </td>
                    </tr>
             </table>
      </form>
       
       <?php
       if (isset($_POST["makh"]) && isset($_POST["room"])) {
           $makh = $_POST["makh"];
           $room = $_POST["room"];
           $ngaydat = $_POST["cdate"];
           $ngaynhan = $_POST["cdate"];
           
           if (!is_numeric($makh) ){
               echo "Kiểm tra thông tin";
               exit();
           }
           $sql = "INSERT INTO thuephong VALUES
               ('','$room','$makh','$ngaydat','$ngaynhan')";
          
           
           $result = mysql_query($sql,$db);
          
           if ($result) {
               echo "".mysql_error();
               echo "<p align ='center'>Thành Công</p>";
           }
       }
  ?>
       
</fieldset>
        <a href="Views/printHD.php"><input type="button" value="In phiếu" class="btn" name="prtspending"></a>
        
    </div>
</div>
