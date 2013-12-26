<?php 
	if(!isset($_GET['user_id'])){header("location: dashboard.php?type=user&action=all");}
	$user_id = (int)$_GET['user_id'];
	$cnn = DB::StaticConnect();
	$rs = DB::ExecuteQuery("delete from user where user_id ='$user_id'", $cnn);
	if($rs){
		echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=user&action=all';</script>";
	}else{
		echo "<script>alert('Xóa thất bại! Vui lòng thử lại.'); location.href='dashboard.php?type=user&action=all';</script>";
	}
?>