<?php


class KhachHang {
    
    
    var $CMND;
    var $TenKhachHang;
    var $DiaChi;
    var $SoDT;
    var $Email;
    var $TinhTrang;
    var $ThuePhong_idPhong;
    var $Thuephong_CMND;
    function __construct($CMND, $TenKhachHang, $DiaChi, $SoDT, $Email, $TinhTrang, $ThuePhong_idPhong, $Thuephong_CMND) {
        $this->CMND = $CMND;
        $this->TenKhachHang = $TenKhachHang;
        $this->DiaChi = $DiaChi;
        $this->SoDT = $SoDT;
        $this->Email = $Email;
        $this->TinhTrang = $TinhTrang;
        $this->ThuePhong_idPhong = $ThuePhong_idPhong;
        $this->Thuephong_CMND = $Thuephong_CMND;
    }
    public function getCMND() {
        return $this->CMND;
    }

    public function getTenKhachHang() {
        return $this->TenKhachHang;
    }

    public function getDiaChi() {
        return $this->DiaChi;
    }

    public function getSoDT() {
        return $this->SoDT;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getTinhTrang() {
        return $this->TinhTrang;
    }

    public function getThuePhong_idPhong() {
        return $this->ThuePhong_idPhong;
    }

    public function getThuephong_CMND() {
        return $this->Thuephong_CMND;
    }

    public function setCMND($CMND) {
        $this->CMND = $CMND;
    }

    public function setTenKhachHang($TenKhachHang) {
        $this->TenKhachHang = $TenKhachHang;
    }

    public function setDiaChi($DiaChi) {
        $this->DiaChi = $DiaChi;
    }

    public function setSoDT($SoDT) {
        $this->SoDT = $SoDT;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    public function setTinhTrang($TinhTrang) {
        $this->TinhTrang = $TinhTrang;
    }

    public function setThuePhong_idPhong($ThuePhong_idPhong) {
        $this->ThuePhong_idPhong = $ThuePhong_idPhong;
    }

    public function setThuephong_CMND($Thuephong_CMND) {
        $this->Thuephong_CMND = $Thuephong_CMND;
    }



    
    
}

?>
