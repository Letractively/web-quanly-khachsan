<?php

//kết nối csdl
$db = mysql_connect("localhost", "root", "");
if (!$db) {
    echo "Không thể kết nối";
    exit();
    
}
mysql_select_db("qlks");

?>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    </head>
    <body>
        <form action="HoaDonView.php" method ="post">
    <table>
        <tr>
            <td> <select name="mkh" id="makh">
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
                <input type="submit" name="submit" value="Tìm">
            </td>
        </tr>
    </table>
</form>
<?php
  if (isset($_POST["mkh"]) && $_POST["mkh"] !="") {
        $makh = $_POST["mkh"]  ;
        $result = mysql_query("select *from khachhang,thuephong where cmnd like '$makh'");
        if (mysql_num_rows($result)<>0) {
              
         echo "<div id='payingform-useroom'>";
        echo "<fieldset id='payingform-useroom-info'>";
       echo "<legend>Phòng</legend>";
           echo " <form>";
        while ($row = mysql_fetch_row($result)) {
            $makh = $row[0];
            $idphong =$row[5];
                echo "<table>";
                    echo "<tr>";
                        echo "<td><label>Mã khách hàng :</label></td>";
                        echo "<td><p>$makh</p></td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td><label>Phòng sử dụng :</label></td>";
                        echo "<td>";
                            echo "<p>$idphong;</p>";
                        echo "</td>";
                    echo "</tr>";
//                    <tr>
//                        <td><label>Ngày đến :</label></td>
//                        <td><p>04/01/2013</p></td>
//                    </tr>
//                    <tr>
//                        <td><label>Ngày trả :</label></td>
//                        <td><p>05/01/2013</p></td>
//                    </tr>
//                    <tr>
//                        <td><label>Thành tiền :</label></td>
//                        <td><p> 0 <span>VND</span></p> </td>
//                    </tr>
//                    <tr>
//                        <td></td>
//                        <td>
//                            <input class="btn" type="button" value="Thanh toán" name="payHDTP">
//                            <input class="btn" type="button" value="In HĐTP" name="prtHDTP">
//                        </td>
//                    </tr>
            echo " </table>";
      echo "</form>";
      echo "</fieldset>";
        }
  }
}
?>
</body>
</html>