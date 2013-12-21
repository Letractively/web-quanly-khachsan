<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="changeprofile">
    <fieldset>
        <legend>ĐỔI THÔNG TIN CÁ NHÂN</legend>
        <table id="changeprofile-info">
            <tr>
                <td>
                    <label>Mã số nhân viên :</label>
                </td>
                <td>
                    <input class="text" type="text" placeholder="Mã số nhân viên..." name="changeinfo-msnv">
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
            <tr>
                <td>
                    <label>Giới tính :</label>
                </td>
                <td>
                    <input class="text" type="text" placeholder="Giới tính (Nam/Nữ)" name="changeinfo-sex">
                </td>
            </tr>
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
                    <input class="btn" type="reset" value="Huỷ" name="changeinfo-reset">
                    <input class="btn" type="submit" value="Đổi thông tin" name="changeinfo-submit">
                </td>
            </tr>
        </table>
            
    </fieldset>
</div>
