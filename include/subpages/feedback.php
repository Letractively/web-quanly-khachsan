<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="feedback">
    <h2><b>< phản hồi của khách hàng ></b></h2>
    <div id="feedback-info">
        <fieldset>
            <legend>THÔNG TIN</legend>
            <form action="./include/subpages/sendmail.php" method="POST">
                <table style="width: 580px;">
                    <tr>
                        <td><label>Họ tên khách hàng : </label></td>
                        <td><input class="text" type="text" placeholder="Họ tên khách hàng..." name="name"></td>
                    </tr>
                    <tr>
                        <td><label>Email : </label></td>
                        <td><input class="text" type="email" placeholder="Thư điện tử..." name="email"></td>
                    </tr>
                    <tr>
                        <td><label>Số điện thoại : </label></td>
                        <td><input class="text" type="tel" placeholder="Số điện thoại..." name="phone"></td>
                    </tr>
                    <tr>
                        <td><label>Ý kiến phản hồi : </label></td>
                        <td><textarea   class="textarea" placeholder="Ý kiến phản hồi..." cols="1" rows="10" name="msg"></textarea></td>
                    </tr
                    <tr>
                        <td></td>
                        <td>
                            <input type="reset" name="reset" value="Huỷ" class="btn">
                            <input type="submit" name="submit" value="Gửi" class="btn" >
                        </td>
                    
                    </tr>
                </table>
                    
            </form>
        </fieldset>
    </div>
</div>

