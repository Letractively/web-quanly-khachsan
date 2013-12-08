<?php


class HoaDonPhong {
    var $idChiTietHDThuePhong;
    var $idPhong;
    var $idHoaDon;
    var $SoNgayThue;
    var $ThanhTien;
    var $HoaDon_idHoaDon;
    var $HoaDon_idPhong;
    var $HoaDon_CMND;
    public function getIdChiTietHDThuePhong() {
        return $this->idChiTietHDThuePhong;
    }

    public function setIdChiTietHDThuePhong($idChiTietHDThuePhong) {
        $this->idChiTietHDThuePhong = $idChiTietHDThuePhong;
    }

    public function getIdPhong() {
        return $this->idPhong;
    }

    public function setIdPhong($idPhong) {
        $this->idPhong = $idPhong;
    }

    public function getIdHoaDon() {
        return $this->idHoaDon;
    }

    public function setIdHoaDon($idHoaDon) {
        $this->idHoaDon = $idHoaDon;
    }

    public function getSoNgayThue() {
        return $this->SoNgayThue;
    }

    public function setSoNgayThue($SoNgayThue) {
        $this->SoNgayThue = $SoNgayThue;
    }

    public function getThanhTien() {
        return $this->ThanhTien;
    }

    public function setThanhTien($ThanhTien) {
        $this->ThanhTien = $ThanhTien;
    }

    public function getHoaDon_idHoaDon() {
        return $this->HoaDon_idHoaDon;
    }

    public function setHoaDon_idHoaDon($HoaDon_idHoaDon) {
        $this->HoaDon_idHoaDon = $HoaDon_idHoaDon;
    }

    public function getHoaDon_idPhong() {
        return $this->HoaDon_idPhong;
    }

    public function setHoaDon_idPhong($HoaDon_idPhong) {
        $this->HoaDon_idPhong = $HoaDon_idPhong;
    }

    public function getHoaDon_CMND() {
        return $this->HoaDon_CMND;
    }

    public function setHoaDon_CMND($HoaDon_CMND) {
        $this->HoaDon_CMND = $HoaDon_CMND;
    }

        function __construct($idChiTietHDThuePhong, $idPhong, $idHoaDon, $SoNgayThue, $ThanhTien, $HoaDon_idHoaDon, $HoaDon_idPhong, $HoaDon_CMND) {
        $this->idChiTietHDThuePhong = $idChiTietHDThuePhong;
        $this->idPhong = $idPhong;
        $this->idHoaDon = $idHoaDon;
        $this->SoNgayThue = $SoNgayThue;
        $this->ThanhTien = $ThanhTien;
        $this->HoaDon_idHoaDon = $HoaDon_idHoaDon;
        $this->HoaDon_idPhong = $HoaDon_idPhong;
        $this->HoaDon_CMND = $HoaDon_CMND;
    }

}

?>
