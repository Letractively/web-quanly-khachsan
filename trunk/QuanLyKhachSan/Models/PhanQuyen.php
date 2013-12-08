<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PhanQuyen
 *
 * @author Admin
 */
class PhanQuyen {
    
    var $idPhanQuyen;
    var $idTaiKhoan;
    var $Quyen;
    var $Ngay;
    
    function __construct($idPhanQuyen, $idTaiKhoan, $Quyen, $Ngay) {
        $this->idPhanQuyen = $idPhanQuyen;
        $this->idTaiKhoan = $idTaiKhoan;
        $this->Quyen = $Quyen;
        $this->Ngay = $Ngay;
    }
    
    public function getIdPhanQuyen() {
        return $this->idPhanQuyen;
    }

    public function getIdTaiKhoan() {
        return $this->idTaiKhoan;
    }

    public function getQuyen() {
        return $this->Quyen;
    }

    public function getNgay() {
        return $this->Ngay;
    }

    public function setIdPhanQuyen($idPhanQuyen) {
        $this->idPhanQuyen = $idPhanQuyen;
    }

    public function setIdTaiKhoan($idTaiKhoan) {
        $this->idTaiKhoan = $idTaiKhoan;
    }

    public function setQuyen($Quyen) {
        $this->Quyen = $Quyen;
    }

    public function setNgay($Ngay) {
        $this->Ngay = $Ngay;
    }



}

?>
