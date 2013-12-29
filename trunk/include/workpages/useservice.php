<?php


//kết nối csdl
$db = mysql_connect("localhost", "root", "");
if (!$db) {
    echo "Không thể kết nối";
    exit();
    
}
mysql_select_db("quanlykhachsan");

?>
<div id="serviceuseform">
    <div id="serviceuseform-addcustomer">
        <?php
            require_once './Views/KhachHangView.php';
        ?>
    </div>
    <div id="serviceuseform-form">
        <fieldset id="serviceuseform-form-info">
       <legend>Dùng dịch vụ</legend>
       <form action="index.php?act=profile&w=useservice" method="post">
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
                        <td><label>Dịch vụ :</label></td>
                        <td>
                            <select class="cbb" name="serv" >
                                <option value="">Chọn dịch vụ</option>
                                <option value="dv01"> SPA</option>
                                <option value="dv02"> Thuê xe</option>
                                <option value="dv03"> Cơm buổi</option>
                                <option value="dv04"> Quà lưu niệm</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Ngày dùng :</label></td>
                        <td><input class="text" type="date" name="usedate"></td>
                    </tr>
                     <tr>
                        <td><label> Đơn Giá:</label></td>
                        <td><input class="num" type="number" placeholder="0" name="dongia"></td>
                    </tr>
                    <tr>
                        <td><label>Số lượng :</label></td>
                        <td><input class="num" type="number" placeholder="0" name="sum"></td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td> 
                            <input class="btn" type="submit" value="Thêm" name="submit" >
                        </td>
                    </tr>
             </table>
      </form>
           <?php
                                   if (isset($_POST["makh"])) {
                                       
                                  
           $makh = $_POST["makh"];
           $tendichvu = $_POST["serv"];
           $ngaydung = $_POST["usedate"];
           $dongia = $_POST["dongia"];
           $soluong = $_POST["sum"];
           $thanhtien =  date($dongia) * date($soluong);
//           echo "<tr>";
//                        echo "<td><label>thành tiền :</label></td>";
//                        echo "<td><input class='num' type='number' placeholder='0' name='cost' values ='$thanhtien'> VND</td>";
//                    echo "</tr>";
           if (!is_numeric($thanhtien) ){
               echo "Kiểm tra thông tin";
               exit();
           }
           
           
            $sql = "insert into thuedichvu values (
               '', '','$tendichvu','$makh','$ngaydung','$dongia','$soluong',$thanhtien)";
            $result = mysql_query($sql,$db);
           
           if ($result) {
              
               echo "<p align ='center'>Thành Công</p>";
           }
          
            else {
                echo "Kiểm tra lại thông tin";
            }
            }
      
  ?>
       
</fieldset>
</fieldset>
        <a href="./Views/printHD.php"><input type="button" value="In phiếu" class="btn" name="prtserviceuse"></a>
        
    </div>
</div>
