<?php
//kết nối csdl
$db = mysql_connect("localhost", "root", "");
if (!$db) {
    echo "Không thể kết nối";
    exit();
    
}
mysql_select_db("quanlykhachsan");
?>
<div id="changeprofile">
    <fieldset>
        <legend>ĐỔI THÔNG TIN CÁ NHÂN</legend>
        
        <table id="changeprofile-info">
            <form action ="index.php?act=profile&w=changepro" method="post">
            <tr>
                <td>
                    <label>Mã số nhân viên :</label>
                </td>
                <td> <select name="manv" id="manv" class="cbb">
                                   <?php
                                    $sql = "select * from nhanvien";
                                    $result = mysql_query($sql,$db);
                                    $n = mysql_num_rows($result);
                                    if (mysql_num_rows($result)<>0) {
                                          while($row = mysql_fetch_row($result)){
                                              $makh =$row[2];
                                               echo "<option value ='$makh'>$makh</option>";
                                           }
                                    }
                                   ?>
                                </select>
            </td>
            </tr>
            <tr>
                <td>
                    <label>Họ và tên :</label>
                </td>
                <td>
                    <input class="text" type="text" placeholder="Họ tên nhân viên..." name="changeinfo-name">
                </td>
            </tr>
<!--            <tr>
                <td>
                    <label>Giới tính :</label>
                </td>
                <td>
                    <input class="text" type="text" placeholder="Giới tính (Nam/Nữ)" name="changeinfo-sex">
                </td>
            </tr>-->
            <tr>
                <td>
                    <label>Ngày sinh :</label>
                </td>
                <td>
                    <input class="text" type="date" name="changeinfo-bdate">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Số điên thoại :</label>
                </td>
                <td>
                    <input class="text" type="tel" placeholder="Số điện thoại..." name="changeinfo-phone">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email :</label>
                </td>
                <td>
                    <input class="text" type="email" placeholder="Thư điện tử..." name="changeinfo-email">
                </td>
            </tr>
            <tr>
                <td>
                    <label>địa chỉ :</label>
                </td>
                <td>
                    <input class="text" type="text" placeholder="Địa chỉ..." name="changeinfo-place">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                   
                    <input class="btn" type="submit" value="Đổi thông tin" name="changeinfo-submit">
                </td>
            </tr>
             </form>
        </table>
            <?php
    if (isset($_POST["manv"])) {
     $manv = $_POST["manv"];
      $hoten = $_POST["changeinfo-name"];
     
    $ngaysinh = $_POST["changeinfo-bdate"];
    $sdt = $_POST["changeinfo-phone"];
    $email = $_POST["changeinfo-email"];
    $diachi = $_POST["changeinfo-place"];
    if (!is_numeric($sdt)) {
        echo "Kiểm Tra Lại";
        exit();
    }
    $result =  mysql_query("update nhanvien set hoten='$hoten',ngaysinh ='$ngaysinh',sodt ='$sdt',email ='$email'
            where cmnd ='$manv'");
   
    if ($result) {
       
        echo "<p align = 'center'>Thành Công</p>";
    }
    }
        ?>
    </fieldset>
</div>
