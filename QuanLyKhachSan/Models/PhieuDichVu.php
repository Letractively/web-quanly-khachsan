<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PhieuDichVu
 *
 * @author Admin
 */
class PhieuDichVu {
    
   
    var $idPhieuDichVu;
    var $CMND;
    var $DonGia;
    var $ThanhToan;
    var $ChiTietHDDichVu_idHoaDon;
    var $ChiTietHDDichVu_idDichVu;
    var $ChiTietHDDichVu_HoaDon_idHoaDon;
    var $ChiTietHDDichVu_HoaDon_idPhong;
    var $ChiTietHDDichVu_HoaDon_idCMND;
    
    function __construct($idPhieuDichVu, $CMND, $DonGia, $ThanhToan, $ChiTietHDDichVu_idHoaDon, $ChiTietHDDichVu_idDichVu, $ChiTietHDDichVu_HoaDon_idHoaDon, $ChiTietHDDichVu_HoaDon_idPhong, $ChiTietHDDichVu_HoaDon_idCMND) {
        $this->idPhieuDichVu = $idPhieuDichVu;
        $this->CMND = $CMND;
        $this->DonGia = $DonGia;
        $this->ThanhToan = $ThanhToan;
        $this->ChiTietHDDichVu_idHoaDon = $ChiTietHDDichVu_idHoaDon;
        $this->ChiTietHDDichVu_idDichVu = $ChiTietHDDichVu_idDichVu;
        $this->ChiTietHDDichVu_HoaDon_idHoaDon = $ChiTietHDDichVu_HoaDon_idHoaDon;
        $this->ChiTietHDDichVu_HoaDon_idPhong = $ChiTietHDDichVu_HoaDon_idPhong;
        $this->ChiTietHDDichVu_HoaDon_idCMND = $ChiTietHDDichVu_HoaDon_idCMND;
    }

    public function getIdPhieuDichVu() {
        return $this->idPhieuDichVu;
    }

    public function getCMND() {
        return $this->CMND;
    }

    public function getDonGia() {
        return $this->DonGia;
    }

    public function getThanhToan() {
        return $this->ThanhToan;
    }

    public function getChiTietHDDichVu_idHoaDon() {
        return $this->ChiTietHDDichVu_idHoaDon;
    }

    public function getChiTietHDDichVu_idDichVu() {
        return $this->ChiTietHDDichVu_idDichVu;
    }

    public function getChiTietHDDichVu_HoaDon_idHoaDon() {
        return $this->ChiTietHDDichVu_HoaDon_idHoaDon;
    }

    public function getChiTietHDDichVu_HoaDon_idPhong() {
        return $this->ChiTietHDDichVu_HoaDon_idPhong;
    }

    public function getChiTietHDDichVu_HoaDon_idCMND() {
        return $this->ChiTietHDDichVu_HoaDon_idCMND;
    }

    public function setIdPhieuDichVu($idPhieuDichVu) {
        $this->idPhieuDichVu = $idPhieuDichVu;
    }

    public function setCMND($CMND) {
        $this->CMND = $CMND;
    }

    public function setDonGia($DonGia) {
        $this->DonGia = $DonGia;
    }

    public function setThanhToan($ThanhToan) {
        $this->ThanhToan = $ThanhToan;
    }

    public function setChiTietHDDichVu_idHoaDon($ChiTietHDDichVu_idHoaDon) {
        $this->ChiTietHDDichVu_idHoaDon = $ChiTietHDDichVu_idHoaDon;
    }

    public function setChiTietHDDichVu_idDichVu($ChiTietHDDichVu_idDichVu) {
        $this->ChiTietHDDichVu_idDichVu = $ChiTietHDDichVu_idDichVu;
    }

    public function setChiTietHDDichVu_HoaDon_idHoaDon($ChiTietHDDichVu_HoaDon_idHoaDon) {
        $this->ChiTietHDDichVu_HoaDon_idHoaDon = $ChiTietHDDichVu_HoaDon_idHoaDon;
    }

    public function setChiTietHDDichVu_HoaDon_idPhong($ChiTietHDDichVu_HoaDon_idPhong) {
        $this->ChiTietHDDichVu_HoaDon_idPhong = $ChiTietHDDichVu_HoaDon_idPhong;
    }

    public function setChiTietHDDichVu_HoaDon_idCMND($ChiTietHDDichVu_HoaDon_idCMND) {
        $this->ChiTietHDDichVu_HoaDon_idCMND = $ChiTietHDDichVu_HoaDon_idCMND;
    }


}

?>
