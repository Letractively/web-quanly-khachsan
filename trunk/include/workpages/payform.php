<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="payingform">
    <fieldset>
        <legend>Chọn khách hàng</legend>
        <table>
        <tr>
            <td><label>Mã khách hàng :</label></td>
              <td>
                  <select class="cbb" name="mkh">
                      <option value="">Chọn khách hàng</option>
                  </select>
              </td>
        </tr>
        <tr>
            <td><label>Tên khách hàng :</label></td>
              <td>
                  <select class="cbb" name="name">
                      <option value="">Chọn khách hàng</option>
                  </select>
              </td>
        </tr>
    </table>
    </fieldset>
    
    
    <div id="payingform-useroom">
        <fieldset id="payingform-useroom-info">
       <legend>Phòng</legend>
            <form>
                <table>
                    <tr>
                        <td><label>Mã khách hàng :</label></td>
                        <td><p>Nguyễn Văn A</p></td>
                    </tr>
                    <tr>
                        <td><label>Phòng sử dụng :</label></td>
                        <td>
                            <p>Phòng 002</p>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Ngày đến :</label></td>
                        <td><p>04/01/2013</p></td>
                    </tr>
                    <tr>
                        <td><label>Ngày trả :</label></td>
                        <td><p>05/01/2013</p></td>
                    </tr>
                    <tr>
                        <td><label>Thành tiền :</label></td>
                        <td><p> 0 <span>VND</span></p> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn" type="button" value="Thanh toán" name="payHDTP">
                            <input class="btn" type="button" value="In HĐTP" name="prtHDTP">
                        </td>
                    </tr>
             </table>
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
    <input type="button" value="In phiếu" class="btn" name="prtHD">
</div>
