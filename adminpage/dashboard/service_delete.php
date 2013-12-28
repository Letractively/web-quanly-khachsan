<?php
	if(!user_can($idtaikhoan, "manage_service")){
		header("location:dashboard.php");
}
?>
<?php 
	if(!$_GET['iddichvu']){
		header("location: dashboard.php?type=service&action=all");
	}else{
		$iddichvu= (int)$_GET['iddichvu'];
		$cnn = DB::StaticConnect();
		$rs = DB::ExecuteQuery("delete from dichvu where iddichvu = '$iddichvu'", $cnn);
		if($rs){
			echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=service&action=all';</script>";
		}else{
			echo "<script>alert('Xóa thất bại!'); location.href='dashboard.php?type=service&action=all';</script>";
		}
	}
?>