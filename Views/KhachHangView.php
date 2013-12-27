<?php 
//kết nối csdl
$db = mysql_connect("localhost", "root", "");
if (!$db) {
    echo "Không thể kết nối";
    exit();
    
}
mysql_select_db("qlks");
?>
<fieldset id="addcustomer-add">
    <legend>Thêm khách hàng</legend>
       <form action ="index.php?act=profile&w=spending" Method ="POST">
                <table>
                    <tr>
                        <td><label>Mã khách hàng :</label></td>
                        <td><input class="text" type="text" name="makh" placeholder="Mã Khách Hàng..."></td>
                    </tr>
                    <tr>
                        <td><label>Họ tên khách :</label></td>
                        <td><input class="text" type="text" name="tenkh" placeholder="Họ tên khách hàng..."></td>
                    </tr>
                    <tr>
                        <td><label>Dịa chỉ :</label></td>
                        <td><input class="text" type="text" name="diachi" placeholder="Địa chỉ..."></td>
                    </tr>
                    <tr>
                        <td><label>Số điện thoại :</label></td>
                        <td><input class="text" type="tel" name="sdt" placeholder="Số điện thoại..."></td>
                    </tr>
                    <tr>
                        <td><label>Email :</label></td>
                        <td><input class="text" type="email" name="email" placeholder="Thư điện tử..."></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn" type="reset" value="Huỷ" name="reset" >
                            <input class="btn" type="submit" value="Thêm" name="submit">
                        </td>
                    </tr>
             </table>
      </form>
       <?php
       if (isset($_POST["makh"]) && isset($_POST["tenkh"])) {
           $makh = $_POST["makh"];
           $tenkh = $_POST["tenkh"];
           $diachi = $_POST["diachi"];
           $sdt = $_POST["sdt"];
           $email =$_POST["email"];
           
           if (!is_numeric($makh) ){
               echo "Kiểm tra thông tin";
               exit();
           }
           $sql = "INSERT INTO khachhang VALUES
               ('$makh','$tenkh','$diachi','$sdt','$email',1)";
           $result = mysql_query($sql,$db);
           if ($result) {
               echo "<p align ='center'>Thành Công</p>";
           }
           else{
               echo "error".mysql_error();
               exit();
           }
       }
  ?>
</fieldset>
