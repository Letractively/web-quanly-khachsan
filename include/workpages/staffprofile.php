<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="staffprofile">
    <fieldset>
        <legend>TRANG THÔNG TIN CÁ NHÂN</legend>
        <table id="staffprofile-info">
            <tr>
                <td>
                    <label>mã số nhân viên :</label>
                </td>
                <td>
                    <?php
                                    //$sql = "select * from nhanvien";
                                    //$result = mysql_query($sql,$db);
                                    //$n = mysql_num_rows($result);
                                    //if (mysql_num_rows($result)<>0) {
                                         // while($row = mysql_fetch_row($result)){
                                              $manv =$_SESSION['authentication']['idtaikhoan'];
                                               echo "<p>$manv</p>";
                                  
                                           
                                   ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>họ và tên :</label>
                </td>
                <td>
                    <p>Nguyễn Văn A</p>
                </td>
                </tr>
                <tr>
                <td>
                    <label>giới tính :</label>
                </td>
                <td>
                    <p>Nam</p>
                </td>
                </tr>
                <tr>
                <td>
                    <label>chức vụ :</label>
                </td>
                <td>
                    <p>Lễ tân</p>
                </td>
                </tr>
            <tr>
                <td>
                    <label>Ngày sinh :</label>
                </td>
                <td>
                    <p>30/09/1992</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>số điên thoại :</label>
                </td>
                <td>
                    <p>0123456789</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email :</label>
                </td>
                <td>
                    <p>abc09@gmail.com</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>địa chỉ :</label>
                </td>
                <td>
                    <p>9/6 Hai Bà Tưng</p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input class="btn" type="button" value="Đổi thông tin" name="changeinfo" onclick="window.open('index.php?act=profile&w=changepro','_self')">
                </td>
            </tr>
        </table>
            
    </fieldset>
</div>
