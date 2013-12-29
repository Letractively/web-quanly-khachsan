<?php
$db = mysql_connect("localhost", "root", "");
if (!$db) {
    echo "Không thể kết nối";
    exit();
    
}
mysql_select_db("quanlykhachsan");
?>
<div id="staffprofile">
    <fieldset>
        <legend>TRANG THÔNG TIN CÁ NHÂN</legend>
        <table id="staffprofile-info">
        <form action="index.php?act=profile" method ="post">
        <tr>
            <td><label>Mã Nhân Viên :</label></td>
            <td> <select name="manv" id="manv" class="cbb">
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
                <input style="width: 120px;" type="submit" name="submit" value="Tìm Thông Tin" class="btn">
            </td>
        </tr>
        </form>
    </table>
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
                 while($row = mysql_fetch_row($result)){
                     $hoten = $row[1];
                 $cmnd = $row[2];
                 $ngaysinh = $row[3];
                 $sdt = $row[4];
                 $email = $row[5];
                 
                 echo '<table>';
           echo '<tr>';
               echo '<td><label>Họ tên : </lable></td>';
               echo "<td><p>$hoten</p></td>";
           echo '</tr>';
           echo '<tr>';
               echo '<td><label>Chứng minh thư : </lable></td>';
               echo "<td><p>$cmnd</p></td>";
           echo '</tr>';
           echo '<tr>';
              echo  '<td><label>Ngày sinh : </lable></td>';
               echo "<td><p>$ngaysinh</p></td>";
           echo '</tr>';
           echo '<tr>';
               echo '<td><label>Số điện thoại : </lable></td>';
               echo "<td><p>$sdt</p></td>";
           echo '</tr>';
           echo '<tr>';
               echo '<td><label>Thư điện tử : </lable></td>';
               echo "<td><p>$email</p></td>";
           echo '</tr>';
       echo '</table>';
           }}}
                 ?>
        <a href="index.php?act=profile&w=changepro"><input type="button" class="btn" value="Đổi thông tin"></a>
    </fieldset>
</div>
