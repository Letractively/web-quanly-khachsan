<?php


class Phong {
    var $idPhong;
    var $TenPhong;
    var  $LoaiPhong;
    var $TinhTrang;
    var $LoaiPhong_idLoaiPhong;
    var $ThuePhong_idPhong;
    var $ThuePhong_CMND;
    var $HinhAnh;
    public function getIdPhong() {
        return $this->idPhong;
    }

    public function setIdPhong($idPhong) {
        $this->idPhong = $idPhong;
    }

    public function getTenPhong() {
        return $this->TenPhong;
    }

    public function setTenPhong($TenPhong) {
        $this->TenPhong = $TenPhong;
    }

    public function getLoaiPhong() {
        return $this->LoaiPhong;
    }

    public function setLoaiPhong($LoaiPhong) {
        $this->LoaiPhong = $LoaiPhong;
    }

    public function getTinhTrang() {
        return $this->TinhTrang;
    }

    public function setTinhTrang($TinhTrang) {
        $this->TinhTrang = $TinhTrang;
    }

    public function getLoaiPhong_idLoaiPhong() {
        return $this->LoaiPhong_idLoaiPhong;
    }

    public function setLoaiPhong_idLoaiPhong($LoaiPhong_idLoaiPhong) {
        $this->LoaiPhong_idLoaiPhong = $LoaiPhong_idLoaiPhong;
    }

    public function getThuePhong_idPhong() {
        return $this->ThuePhong_idPhong;
    }

    public function setThuePhong_idPhong($ThuePhong_idPhong) {
        $this->ThuePhong_idPhong = $ThuePhong_idPhong;
    }

    public function getThuePhong_CMND() {
        return $this->ThuePhong_CMND;
    }

    public function setThuePhong_CMND($ThuePhong_CMND) {
        $this->ThuePhong_CMND = $ThuePhong_CMND;
    }

    public function getHinhAnh() {
        return $this->HinhAnh;
    }

    public function setHinhAnh($HinhAnh) {
        $this->HinhAnh = $HinhAnh;
    }

    function __construct($idPhong, $TenPhong, $LoaiPhong, $TinhTrang, $LoaiPhong_idLoaiPhong, $ThuePhong_idPhong, $ThuePhong_CMND, $HinhAnh) {
        $this->idPhong = $idPhong;
        $this->TenPhong = $TenPhong;
        $this->LoaiPhong = $LoaiPhong;
        $this->TinhTrang = $TinhTrang;
        $this->LoaiPhong_idLoaiPhong = $LoaiPhong_idLoaiPhong;
        $this->ThuePhong_idPhong = $ThuePhong_idPhong;
        $this->ThuePhong_CMND = $ThuePhong_CMND;
        $this->HinhAnh = $HinhAnh;
    }

}

?>
