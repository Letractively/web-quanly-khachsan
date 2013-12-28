<?php 
	if(user_can($idtaikhoan, "manage_capability")==FALSE)	
		header("location:dashboard.php");
	} else {
		if(!$_GET['idquyen']){
		header("location: dashboard.php?type=capability&action=all");
	}else{
		$idquyen = (int)$_GET['idquyen'];
		$cnn = DB::StaticConnect();
		$rs = DB::ExecuteQuery("delete from quyen where idquyen = '$idquyen'", $cnn);
		if($rs){
			echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=capability&action=all';</script>";
		}else{
			echo "<script>alert('Xóa thất bại!'); location.href='dashboard.php?type=capability&action=all';</script>";
		}
	}
	}
			
?>
