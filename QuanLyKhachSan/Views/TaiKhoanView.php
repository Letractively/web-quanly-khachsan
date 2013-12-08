<?php


class TaiKhoanView {
    
     public function showList($accounts){
         
     }
     
     public function showDetail($account) {
         return "<div>
             <table>
                <tr>
                    <th colspan='2'>Thong tin tai khoan</th>
                </tr>
                <tr>
                    <td>Ma tai khoan</td>
                    <td>$account->id</td>
                </tr>
                <tr>
                    <td>Ten tai khoan</td>
                    <td>$account->name</td>
                </tr>
             </table>
</div>";
     }
}

?>
