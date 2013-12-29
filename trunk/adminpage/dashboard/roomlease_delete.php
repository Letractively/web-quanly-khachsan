<?php
	if(!user_can($idtaikhoan, "manage_roomlease")){
		header("location:dashboard.php");
	}
?>

<?php 
	if(!$_GET['idthuephong']){
		header("location: dashboard.php?type=roomlease&action=all");
	}else{
		$idthuephong = (int)$_GET['idthuephong'];
		$cnn = DB::StaticConnect();
		$rs = DB::ExecuteQuery("delete from thuephong where idthuephong = '$idthuephong'", $cnn);
		if($rs){
			echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=roomlease&action=all';</script>";
		}else{
			echo "<script>alert('Xóa thất bại!'); location.href='dashboard.php?type=roomlease&action=all';</script>";
		}
	}
?>