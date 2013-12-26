<?php 
	if(!$_GET['role_id']){
		header("location: dashboard.php?type=role&action=all");
	}else{
		$role_id = (int)$_GET['role_id'];
		$cnn = DB::StaticConnect();
		$rs = DB::ExecuteQuery("delete from role where role_id = '$role_id'", $cnn);
		if($rs){
			echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=role&action=all';</script>";
		}else{
			echo "<script>alert('Xóa thất bại!'); location.href='dashboard.php?type=role&action=all';</script>";
		}
	}
?>