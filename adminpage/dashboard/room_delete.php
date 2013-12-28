<?php
	if(!user_can($idtaikhoan, "manage_room")){
		header("location:dashboard.php");
	}
?>

<?php 
	if(!$_GET['idphong']){
		header("location: dashboard.php?type=room&action=all");
	}else{
		$idphong = (int)$_GET['idphong'];
		$cnn = DB::StaticConnect();
		$rs = DB::ExecuteQuery("delete from phong where idphong = '$idphong'", $cnn);
		if($rs){
			echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=room&action=all';</script>";
		}else{
			echo "<script>alert('Xóa thất bại!'); location.href='dashboard.php?type=room&action=all';</script>";
		}
	}
?>