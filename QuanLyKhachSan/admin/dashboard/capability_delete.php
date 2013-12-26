<?php 
	if(!$_GET['capability_id']){
		header("location: dashboard.php?type=capability&action=all");
	}else{
		$capability_id = (int)$_GET['capability_id'];
		$cnn = DB::StaticConnect();
		$rs = DB::ExecuteQuery("delete from capability where capability_id = '$capability_id'", $cnn);
		if($rs){
			echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=capability&action=all';</script>";
		}else{
			echo "<script>alert('Xóa thất bại!'); location.href='dashboard.php?type=capability&action=all';</script>";
		}
	}
?>