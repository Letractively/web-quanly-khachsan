<?php
	if(!user_can($idtaikhoan, "manage_servicelease")){
		header("location:dashboard.php");
}
?>
<?php 
	if(!$_GET['idthuedichvu']){
		header("location: dashboard.php?type=servicelease&action=all");
	}else{
		$idthuedichvu= (int)$_GET['idthuedichvu'];
		$cnn = DB::StaticConnect();
		$rs = DB::ExecuteQuery("delete from thuedichvu where idthuedichvu = '$idthuedichvu'", $cnn);
		if($rs){
			echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=servicelease&action=all';</script>";
		}else{
			echo "<script>alert('Xóa thất bại!'); location.href='dashboard.php?type=servicelease&action=all';</script>";
		}
	}
?>