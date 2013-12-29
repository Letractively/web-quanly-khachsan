<?php

//kết nối csdl
$db = mysql_connect("localhost", "root", "");
if (!$db) {
    echo "Không thể kết nối";
    exit();
    
}
mysql_select_db("quanlykhachsan");

?>
<div id="payingform">
    <fieldset>
        <legend>Chọn khách hàng</legend>
        <table >
        <form action="index.php?act=profile&w=paying" method ="post">
        <tr>
            <td><label>Mã khách hàng :</label></td>
            <td> <select style="margin-left: 10px;" name="mkh" id="makh" class="cbb">
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
            <td>
                <input style="width: 200px;" type="submit" name="submit" value="Tìm Thông Tin" class="btn">
            </td>
        </tr>
        </form>
    </table>
    </fieldset>
    
    
    <div id="payingform-useroom">
        <fieldset id="payingform-useroom-info">
            <legend>Phòng</legend>
            <?php

  if (isset($_POST["mkh"]) && $_POST["mkh"] !="") {
        $makh = $_POST["mkh"]  ;
       
        $result = mysql_query("select *from khachhang,phong,thuephong,loaiphong where khachhang.cmnd =thuephong.cmnd like '$makh' ");
        
        if (mysql_num_rows($result)) {
        $row = mysql_fetch_row($result);
            $makh = $row[0];
            $tenkh = $row[1];
            $tenphong = $row[7];
            $ngayden = $row[13];
            $ngaydi = $row[14];
            $gia = $row[17];
                echo "<table>";
                    echo "<tr>";
                        echo "<td><label>Mã Phòng:</label></td>";
                        echo "<td><p>$makh</p></td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td><label>Tên Khách Hàng :</label></td>";
                        echo "<td>";
                            echo "<p>$tenkh</p>";
                        echo "</td>";
                    echo "</tr>";
                     echo "<tr>";
                        echo "<td><label>Tên Phòng:</label></td>";
                        echo "<td>";
                            echo "<p>$tenphong</p>";
                        echo "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td><label>Ngày Đến:</label></td>";
                        echo "<td>";
                            echo "<p>$ngayden</p>";
                        echo "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td><label>Ngày Đi:</label></td>";
                        echo "<td>";
                            echo "<p>$ngaydi</p>";
                        echo "</td>";
                    echo "</tr>";
//                  
                    echo "<tr>";
                        echo "<td><label>Số Tiền:</label></td>";
                        echo "<td>";
                            $ngayden = explode("-",$ngayden);
                            $ngaydi = explode("-",$ngaydi);

                            $ngaydi=mktime(0,0,0,$ngaydi[2],$ngaydi[0],$ngaydi[1]);
                            $ngayden=mktime(0,0,0,$ngayden[2],$ngayden[0],$ngayden[1]);
                            $d=$ngayden - $ngaydi;
                            $days=abs(floor($d/( 365*24*10)));
                            
                        $gia = $gia*$days;
                            echo "<p>$gia</p>";
                        echo "</td>";
                    echo "</tr>";
//                  
            echo " </table>";
    
        }
        else {
            echo "Chưa thê phòng";
 
            
        }
 
        
}
?>
            
      </form>
</fieldset>
        
        
    </div>
    <div id="payingform-useservice">
        <fieldset id="payingform-useroom-info">
       <legend>Dùng dịch vụ</legend>
            <form>
                <table>
                    <tr>
                        <td><label>Thành tiền : </label></td>
                        <td><p> 0 <span>VND<span></p></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn" type="button" value="Thanh toán" name="payHDDV">
                            <input class="btn" type="button" value="In HĐDV" name="prtHDDV">
                        </td>
                    </tr>
             </table>
      </form>
</fieldset>
        
    </div>
    <input type="button" value="Thanh toán HĐ" class="btn" name="prtpaying" style="width: 150px;">
    <a href="Views/printHD.php"><input type="button" value="In phiếu" class="btn" name="prtHD"></a>
</div>
