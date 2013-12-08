<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChiTietHoaDon
 *
 * @author Admin
 */
class ChiTietHoaDon {
   var $idHoaDon;
   var $idDichVu;
   var $Soluong;
   var $ThanhTien;
   var $HoaDon_idHoaDon;
   var $HoaDon_idPhong;
   var $HoaDon_CMND;
   public function getIdHoaDon() {
       return $this->idHoaDon;
   }

   public function setIdHoaDon($idHoaDon) {
       $this->idHoaDon = $idHoaDon;
   }

   public function getIdDichVu() {
       return $this->idDichVu;
   }

   public function setIdDichVu($idDichVu) {
       $this->idDichVu = $idDichVu;
   }

   public function getSoluong() {
       return $this->Soluong;
   }

   public function setSoluong($Soluong) {
       $this->Soluong = $Soluong;
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

      function __construct($idHoaDon, $idDichVu, $Soluong, $ThanhTien, $HoaDon_idHoaDon, $HoaDon_idPhong, $HoaDon_CMND) {
       $this->idHoaDon = $idHoaDon;
       $this->idDichVu = $idDichVu;
       $this->Soluong = $Soluong;
       $this->ThanhTien = $ThanhTien;
       $this->HoaDon_idHoaDon = $HoaDon_idHoaDon;
       $this->HoaDon_idPhong = $HoaDon_idPhong;
       $this->HoaDon_CMND = $HoaDon_CMND;
   }

}

?>
