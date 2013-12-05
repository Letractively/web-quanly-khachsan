<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DichVu
 *
 * @author Admin
 */
class DichVu {
    
    var $idDichVu;
    var $TenDV;
    var $DonGia;
    var $TinhTrang;
    var $Khachhang_CMND;
    var $PhieuDichVu_idPhieuDichVu;
    function __construct($idDichVu, $TenDV, $DonGia, $TinhTrang, $Khachhang_CMND, $PhieuDichVu_idPhieuDichVu) {
        $this->idDichVu = $idDichVu;
        $this->TenDV = $TenDV;
        $this->DonGia = $DonGia;
        $this->TinhTrang = $TinhTrang;
        $this->Khachhang_CMND = $Khachhang_CMND;
        $this->PhieuDichVu_idPhieuDichVu = $PhieuDichVu_idPhieuDichVu;
    }
    
    public function getIdDichVu() {
        return $this->idDichVu;
    }

    public function getTenDV() {
        return $this->TenDV;
    }

    public function getDonGia() {
        return $this->DonGia;
    }

    public function getTinhTrang() {
        return $this->TinhTrang;
    }

    public function getKhachhang_CMND() {
        return $this->Khachhang_CMND;
    }

    public function getPhieuDichVu_idPhieuDichVu() {
        return $this->PhieuDichVu_idPhieuDichVu;
    }

    public function setIdDichVu($idDichVu) {
        $this->idDichVu = $idDichVu;
    }

    public function setTenDV($TenDV) {
        $this->TenDV = $TenDV;
    }

    public function setDonGia($DonGia) {
        $this->DonGia = $DonGia;
    }

    public function setTinhTrang($TinhTrang) {
        $this->TinhTrang = $TinhTrang;
    }

    public function setKhachhang_CMND($Khachhang_CMND) {
        $this->Khachhang_CMND = $Khachhang_CMND;
    }

    public function setPhieuDichVu_idPhieuDichVu($PhieuDichVu_idPhieuDichVu) {
        $this->PhieuDichVu_idPhieuDichVu = $PhieuDichVu_idPhieuDichVu;
    }



}

?>
