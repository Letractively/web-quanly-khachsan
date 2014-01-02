<?php
	if(!user_can($idtaikhoan, "delete_user")){
		header("location:dashboard.php");
}
?>
<?php 
	if(user_can($idtaikhoan, "delete_user")){
		if(!isset($_GET['idtaikhoan'])){header("location: dashboard.php?type=user&action=all");}
	$idtaikhoan = (int)$_GET['idtaikhoan'];
	$cnn = DB::StaticConnect();
	$rs = DB::ExecuteQuery("delete from taikhoan where idtaikhoan ='$idtaikhoan' and vaitro!=1", $cnn);
	if($rs){
		echo "<script>alert('Xóa thành công!'); location.href='dashboard.php?type=user&action=all';</script>";
	}else{
		echo "<script>alert('Xóa thất bại! Vui lòng thử lại.'); location.href='dashboard.php?type=user&action=all';</script>";
	}
	} else {
		header("location:dashboard.php");
	}
			
?>