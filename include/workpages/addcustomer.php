<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<fieldset id="addcustomer-add">
       <legend>Thêm khách hàng</legend>
            <form>
                <table>
                    <tr>
                        <td><label>Mã khách hàng :</label></td>
                        <td><input class="text" type="text" name="mkh" placeholder="Mã khách hàng..."></td>
                    </tr>
                    <tr>
                        <td><label>Họ tên khách :</label></td>
                        <td><input class="text" type="text" name="cusname" placeholder="Họ tên khách hàng..."></td>
                    </tr>
                    <tr>
                        <td><label>Dịa chỉ :</label></td>
                        <td><input class="text" type="text" name="place" placeholder="Địa chỉ..."></td>
                    </tr>
                    <tr>
                        <td><label>Số điện thoại :</label></td>
                        <td><input class="text" type="tel" name="sdt" placeholder="Số điện thoại..."></td>
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
