<?php


class TaiKhoan {
    var $idTaiKhoan;
    var $TenTK;
    var $MatKhau;
    var $PhanQuyen_idPhanQuyen;
    var $PhanQuyen_idTaiKhoan;
    
    function __construct($idTaiKhoan, $TenTK, $MatKhau, $PhanQuyen_idPhanQuyen, $PhanQuyen_idTaiKhoan) {
        $this->idTaiKhoan = $idTaiKhoan;
        $this->TenTK = $TenTK;
        $this->MatKhau = $MatKhau;
        $this->PhanQuyen_idPhanQuyen = $PhanQuyen_idPhanQuyen;
        $this->PhanQuyen_idTaiKhoan = $PhanQuyen_idTaiKhoan;
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

    public function getPhanQuyen_idPhanQuyen() {
        return $this->PhanQuyen_idPhanQuyen;
    }

    public function getPhanQuyen_idTaiKhoan() {
        return $this->PhanQuyen_idTaiKhoan;
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

    public function setPhanQuyen_idPhanQuyen($PhanQuyen_idPhanQuyen) {
        $this->PhanQuyen_idPhanQuyen = $PhanQuyen_idPhanQuyen;
    }

    public function setPhanQuyen_idTaiKhoan($PhanQuyen_idTaiKhoan) {
        $this->PhanQuyen_idTaiKhoan = $PhanQuyen_idTaiKhoan;
    }



}

?>
