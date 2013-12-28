<?php 
	if(user_can($idtaikhoan, "delete_user")){
		if(!$_GET['idvaitro']){
		header("location: dashboard.php?type=role&action=all");
	}else{
		$idvaitro = (int)$_GET['idvaitro'];
		$cnn = DB::StaticConnect();
		$rs = DB::ExecuteQuery("delete from vaitro where idvaitro = '$idvaitro'", $cnn);
		if($rs){
			echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=role&action=all';</script>";
		}else{
			echo "<script>alert('Xóa thất bại!'); location.href='dashboard.php?type=role&action=all';</script>";
		}
	}
	} else {
		header("location:dashboard.php");
	}
			
?>