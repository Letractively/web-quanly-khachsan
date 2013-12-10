<?php


class TaiKhoan {
    var $idTaiKhoan;
    var $TenTK;
    var $MatKhau;
    var $Quyen;
    
    function __construct($idTaiKhoan, $TenTK, $MatKhau, $Quyen) {
        $this->idTaiKhoan = $idTaiKhoan;
        $this->TenTK = $TenTK;
        $this->MatKhau = $MatKhau;
        $this->Quyen = $Quyen;
    }
    public function getIdTaiKhoan() {
        return $this->idTaiKhoan;
    }

    public function getTenTK() {
        return $this->TenTK;
    }

    public function getMatKhau() {
        return $this->MatKhau;
    }

    public function getQuyen() {
        return $this->Quyen;
    }

    public function setIdTaiKhoan($idTaiKhoan) {
        $this->idTaiKhoan = $idTaiKhoan;
    }

    public function setTenTK($TenTK) {
        $this->TenTK = $TenTK;
    }

    public function setMatKhau($MatKhau) {
        $this->MatKhau = $MatKhau;
    }

    public function setQuyen($Quyen) {
        $this->Quyen = $Quyen;
    }



}

?>
