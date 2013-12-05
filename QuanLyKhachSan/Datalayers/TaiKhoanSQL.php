<?php
include('Account.php');

class AccountRepository {
    
    public function getById($id) {
        $account = new Account();
        $account->id = $id;
        $account->name = "Lay tu CSDL ra";
        return $account;
    }
    
}

?>
