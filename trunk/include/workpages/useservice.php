<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="serviceuseform">
    <div id="serviceuseform-addcustomer">
        <?php
            require_once './include/workpages/addcustomer.php';
        ?>
    </div>
    <div id="serviceuseform-form">
        <fieldset id="serviceuseform-form-info">
       <legend>Dùng dịch vụ</legend>
            <form>
                <table>
                    <tr>
                        <td><label>Mã khách hàng :</label></td>
                        <td><input class="text" type="text" name="mkh" placeholder="Mã khách hàng..."></td>
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
                        <td><label>Số lượng :</label></td>
                        <td><input class="num" type="number" placeholder="0" name="sum"></td>
                    </tr>
                    <tr>
                        <td><label>thành tiền :</label></td>
                        <td><input class="num" type="number" placeholder="0" name="cost"> VND</td>
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
        <input type="button" value="In phiếu" class="btn" name="prtserviceuse">
    </div>
</div>
