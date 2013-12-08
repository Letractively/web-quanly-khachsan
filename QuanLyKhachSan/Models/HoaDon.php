<?php


class HoaDon {
    var $idHoaDon;
    var $idPhong;
    var $CMND ;
    var $DiaChi;
    var $SoDT;
    var $Email;
    var $TinhTrang;
    var $ThePhong;
    var $ThuePhong_idPhong;
    var $ThuePhong_CMND;
    
    public function getIdHoaDon() {
        return $this->idHoaDon;
    }

    public function setIdHoaDon($idHoaDon) {
        $this->idHoaDon = $idHoaDon;
    }

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

    public function getDiaChi() {
        return $this->DiaChi;
    }

    public function setDiaChi($DiaChi) {
        $this->DiaChi = $DiaChi;
    }

    public function getSoDT() {
        return $this->SoDT;
    }

    public function setSoDT($SoDT) {
        $this->SoDT = $SoDT;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    public function getTinhTrang() {
        return $this->TinhTrang;
    }

    public function setTinhTrang($TinhTrang) {
        $this->TinhTrang = $TinhTrang;
    }

    public function getThePhong() {
        return $this->ThePhong;
    }

    public function setThePhong($ThePhong) {
        $this->ThePhong = $ThePhong;
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

        
    function HoaDon($idHD, $idp, $cmnd, $dc, $sodt, $email, $tinhtrang, $thuep,
            $thuephong_idphong, $thuephong_CMND){
        
        $this->idHoaDon=$idHD;
        $this->idPhong=$idp;
        $this->CMND=$cmnd;
        $this->SoDT =$sodt;
        $this->DiaChi=$dc;
        $this->Email=$email;
        $this->TinhTrang=$tinhtrang;
        $this->ThePhong =$thuep;
        $this->ThuePhong_CMND =$thuephong_CMND;
        $this->ThuePhong_idPhong =$thuephong_idphong;
            }
}

?>
