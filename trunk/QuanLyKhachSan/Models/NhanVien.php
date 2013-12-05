<?php


class NhanVien {
   
    
    var $CMND;
    var $HoVaTen;
    var $Sdt;
    var $NgaySinh;
    var $Diachi;
    var $NgayVaoLam;
    var $HeSoLuong;
    var $Luong_cb= 450000;
    var $GioiTinh;
    var $Socon;
    var $ThamNien;
    
   function Lay_ho_ten(){
       return $this->HoVaTen;
       
   }
   function Gan_ho_ten($gia_tri_moi){
       $this->HoVaTen = $gia_tri_moi;
   }
   function Lay_goi_tinh(){
       return $this->GioiTinh;
       
   }
   function Gan_gioi_tinh($gia_tri_moi){
       $this->GioiTinh = $gia_tri_moi;
   }
   function Lay_CMND(){
       return $this->CMND;
       
   }
   function Gan_CMND($gia_tri_moi){
       $this->CMND = $gia_tri_moi;
   }
   function Lay_SDT(){
       return $this->Sdt;
       
   }
   function Gan_SDT($gia_tri_moi){
       $this->Sdt = $gia_tri_moi;
   }
   function Lay_ngay_sinh(){
       return $this->NgaySinh;
       
   }
   function Gan_ngay_sinh($gia_tri_moi){
       $this->NgaySinh = $gia_tri_moi;
   }
   function Lay_ngay_vao_lam(){
       return $this->NgayVaoLam;
       
   }
   function Gan_ngay_vao_lam($gia_tri_moi){
       $this->NgayVaoLam = $gia_tri_moi;
   }
   function Lay_tham_niem(){
       return $this->ThamNien;
       
   }
   function Gan_tham_niem($gia_tri_moi){
       $this->ThamNien = $gia_tri_moi;
   }
   function Lay_so_con(){
       return $this->Socon;
       
   }
   function Gan_so_con($gia_tri_moi){
       $this->Socon = $gia_tri_moi;
   }
   function Lay_luongcd(){
       return $this->Luong_cb;
       
   }
   function Gan_luongcd($gia_tri_moi){
       $this->Luong_cb = $gia_tri_moi;
   }
   
 
  
   function Tro_cap(){
       return $this->Socon *100000;
   }
   function Tien_Thuong(){
       return $this->ThamNien*500000;
   }
   function Tien_Luong(){
       return $this->Luong_cb *$this->HeSoLuong;
   }
    //Ham khoi tao chung de lay gia tri cho cac thuoc tinh
   function NhanVien($cnnd, $ht, $ns, $sdt, $dc, $ngayvaolam, $hesoluong, $luongcd, $thamnien, $gt ,$socon)
        {
       $this->CMND=$cnnd;
       $this->HoVaTen =$ht;
       $this->NgaySinh =$ns;
       $this->Sdt=$sdt;
       $this->Diachi =$dc;
       $this->NgayVaoLam=$ngayvaolam;
       $this->HeSoLuong =$hesoluong;
       $this->Luong_cb=$luongcd;     
       $this->ThamNien=$thamnien;
       $this->GioiTinh =$gt;
       $this->Socon =$socon;
        }
  
   
}
class Nv_vp extends NhanVien{
    
    var $so_ngay_vang;
    var $dn_vang =2;
    var $don_gia_vang  = 250000;
    
    //gan va lay gia tri
    function Lay_so_ngay_vang(){
       return $this->so_ngay_vang;
       
   }
   function Gan_so_ngay_vang($gia_tri_moi){
       $this->so_ngay_vang = $gia_tri_moi;
   }
   function Lay_dm_vang(){
       return $this->dn_vang;
       
   }
   function Gan_dm_vang($gia_tri_moi){
       $this->dn_vang = $gia_tri_moi;
   }
   function Lay_don_gia_phat(){
       return $this->don_gia_vang;
       
   }
   function Gan_don_gia_phat($gia_tri_moi){
       $this->don_gia_vang = $gia_tri_moi;
   }
   
   //cac ham
   //tinh tien phat, tien tro cap, tien luong
   
   function tien_phat(){
       if($this->so_ngay_vang >$this->dn_vang){
           return ($this->so_ngay_vang - $this->dn_vang)* $this->don_gia_vang; 
       }
       else
           return 0;
   }
   function tro_cap(){
       if ($this->GioiTinh ==1) {
           return ($this->Socon *100000 *1.2);
           
       }
       else
           return $this->Socon *100000;
       
   }
   
   //tien luong
   function tien_luong(){
       return ($this->Luong_cb *$this->HeSoLuong) -$this->tien_phat();
   }
}
?>
