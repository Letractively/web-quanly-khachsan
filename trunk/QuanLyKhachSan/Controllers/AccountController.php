<?php
include('AccountRepository.php');
include('AccountView.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountController
 *
 * @author Maxsys
 */
class AccountController {
    
    public $repo;
    public $view;
    
    public function __construct() {
        $this->repo = new AccountRepository();
        $this->view = new AccountView();
    }
    
    public function doAction() {
        $act = $_REQUEST['act'];
        switch($act) {
            case "detail":
                return $this->detail($_REQUEST['id']);
        }
    }
    
    public function detail($id) {
        $acc = $this->repo->getById($id);
        return $this->view->showDetail($acc);
    }
}

?>
