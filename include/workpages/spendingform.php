<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
            <form>
                <table>
                    <tr>
                        <td><label>Mã khách hàng :</label></td>
                        <td><input class="text" type="text" name="mkh" placeholder="Mã khách hàng..."></td>
                    </tr>
                    <tr>
                        <td><label>Phòng :</label></td>
                        <td>
                            <select class="cbb" name="room" >
                                <option value="">Chọn phòng</option>
                                <option value="001"> Phòng 001</option>
                                <option value="002"> Phòng 002</option>
                                <option value="003"> Phòng 003</option>
                                <option value="004"> Phòng 004</option>
                                <option value="005"> Phòng 005</option>
                                <option value="006"> Phòng 006</option>
                                <option value="007"> Phòng 007</option>
                                <option value="008"> Phòng 008</option>
                                <option value="009"> Phòng 009</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Ngày đến :</label></td>
                        <td><input class="text" type="date" name="cdate"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn" type="reset" value="Huỷ" name="reset">
                            <input class="btn" type="submit" value="Thêm" name="submit">
                        </td>
                    </tr>
             </table>
      </form>
</fieldset>
        <input type="button" value="In phiếu thuê" class="btn" name="printspend">
    </div>
</div>
