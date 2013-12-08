<?php


class ThuePhong {
  var $idPhong;
  var $CMND;
  var $NgayDen;
  var $NgayDi;
  var $ChiTietHDThuePhong_idChiTietHDThuePhong;
  var $ChiTietHDThuePhong_idPhong;
  var $ChiTietHDThuePhong_idHoaDon;
  var $ChiTietHDThuePhong_HoaDon_idHoaDon;
  var $ChiTietHDThuePhong_HoaDon_idPhong;
  var $ChiTietHDThuePhong_HoaDon_CMND;
  
  public function getIdPhong() {
      return $this->idPhong;
  }

  public function setIdPhong($idPhong) {
      $this->idPhong = $idPhong;
  }

  public function getCMND() {
      return $this->CMND;
  }

  public function setCMND($CMND) {
      $this->CMND = $CMND;
  }

  public function getNgayDen() {
      return $this->NgayDen;
  }

  public function setNgayDen($NgayDen) {
      $this->NgayDen = $NgayDen;
  }

  public function getNgayDi() {
      return $this->NgayDi;
  }

  public function setNgayDi($NgayDi) {
      $this->NgayDi = $NgayDi;
  }

  public function getChiTietHDThuePhong_idChiTietHDThuePhong() {
      return $this->ChiTietHDThuePhong_idChiTietHDThuePhong;
  }

  public function setChiTietHDThuePhong_idChiTietHDThuePhong($ChiTietHDThuePhong_idChiTietHDThuePhong) {
      $this->ChiTietHDThuePhong_idChiTietHDThuePhong = $ChiTietHDThuePhong_idChiTietHDThuePhong;
  }

  public function getChiTietHDThuePhong_idPhong() {
      return $this->ChiTietHDThuePhong_idPhong;
  }

  public function setChiTietHDThuePhong_idPhong($ChiTietHDThuePhong_idPhong) {
      $this->ChiTietHDThuePhong_idPhong = $ChiTietHDThuePhong_idPhong;
  }

  public function getChiTietHDThuePhong_idHoaDon() {
      return $this->ChiTietHDThuePhong_idHoaDon;
  }

  public function setChiTietHDThuePhong_idHoaDon($ChiTietHDThuePhong_idHoaDon) {
      $this->ChiTietHDThuePhong_idHoaDon = $ChiTietHDThuePhong_idHoaDon;
  }

  public function getChiTietHDThuePhong_HoaDon_idHoaDon() {
      return $this->ChiTietHDThuePhong_HoaDon_idHoaDon;
  }

  public function setChiTietHDThuePhong_HoaDon_idHoaDon($ChiTietHDThuePhong_HoaDon_idHoaDon) {
      $this->ChiTietHDThuePhong_HoaDon_idHoaDon = $ChiTietHDThuePhong_HoaDon_idHoaDon;
  }

  public function getChiTietHDThuePhong_HoaDon_idPhong() {
      return $this->ChiTietHDThuePhong_HoaDon_idPhong;
  }

  public function setChiTietHDThuePhong_HoaDon_idPhong($ChiTietHDThuePhong_HoaDon_idPhong) {
      $this->ChiTietHDThuePhong_HoaDon_idPhong = $ChiTietHDThuePhong_HoaDon_idPhong;
  }

  public function getChiTietHDThuePhong_HoaDon_CMND() {
      return $this->ChiTietHDThuePhong_HoaDon_CMND;
  }

  public function setChiTietHDThuePhong_HoaDon_CMND($ChiTietHDThuePhong_HoaDon_CMND) {
      $this->ChiTietHDThuePhong_HoaDon_CMND = $ChiTietHDThuePhong_HoaDon_CMND;
  }

    function __construct($idPhong, $CMND, $NgayDen, $NgayDi, $ChiTietHDThuePhong_idChiTietHDThuePhong, $ChiTietHDThuePhong_idPhong, $ChiTietHDThuePhong_idHoaDon, $ChiTietHDThuePhong_HoaDon_idHoaDon, $ChiTietHDThuePhong_HoaDon_idPhong, $ChiTietHDThuePhong_HoaDon_CMND) {
      $this->idPhong = $idPhong;
      $this->CMND = $CMND;
      $this->NgayDen = $NgayDen;
      $this->NgayDi = $NgayDi;
      $this->ChiTietHDThuePhong_idChiTietHDThuePhong = $ChiTietHDThuePhong_idChiTietHDThuePhong;
      $this->ChiTietHDThuePhong_idPhong = $ChiTietHDThuePhong_idPhong;
      $this->ChiTietHDThuePhong_idHoaDon = $ChiTietHDThuePhong_idHoaDon;
      $this->ChiTietHDThuePhong_HoaDon_idHoaDon = $ChiTietHDThuePhong_HoaDon_idHoaDon;
      $this->ChiTietHDThuePhong_HoaDon_idPhong = $ChiTietHDThuePhong_HoaDon_idPhong;
      $this->ChiTietHDThuePhong_HoaDon_CMND = $ChiTietHDThuePhong_HoaDon_CMND;
  }

}

?>
