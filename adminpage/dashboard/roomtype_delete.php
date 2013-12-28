<?php
	if(!user_can($idtaikhoan, "manage_roomtype")){
		header("location:dashboard.php");
}
?>
<?php 
	if(!$_GET['idloaiphong']){
		header("location: dashboard.php?type=roomtype&action=all");
	}else{
		$idloaiphong = (int)$_GET['idloaiphong'];
		$cnn = DB::StaticConnect();
		$rs = DB::ExecuteQuery("delete from loaiphong where idloaiphong = '$idloaiphong'", $cnn);
		if($rs){
			echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=roomtype&action=all';</script>";
		}else{
			echo "<script>alert('Xóa thất bại!'); location.href='dashboard.php?type=roomtype&action=all';</script>";
		}
	}
?>