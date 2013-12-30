<?php
	if(!user_can($idtaikhoan, "update_user")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Cập nhật</div>
	<div class="entry">
		<div class="sep">
			<?php
				if(isset($_GET['idtaikhoan'])){header("dashboard.php?type=user&action=all");}
				$idtaikhoan = $_GET['idtaikhoan'];
				$cnn = DB::StaticConnect();
				$rs = DB::ExecuteQuery("select * from taikhoan where idtaikhoan = '".$idtaikhoan."'", $cnn);
				$taikhoan = mysql_fetch_assoc($rs);
				//==================================
				if(isset($_POST['update'])){
					//$tentk = $_POST['tentk'];
					$vaitro = $_POST['vaitro']; $tinhtrang = $_POST['tinhtrang'];
					$ghichu = $_POST['ghichu'];

					$cnn = DB::StaticConnect();
					$rs = DB::ExecuteQuery("update taikhoan set vaitro = '$vaitro', tinhtrang = '$tinhtrang', ghichu = '$ghichu' where idtaikhoan = '$idtaikhoan'", $cnn);
					if($rs){
						echo "<script>alert('Cập nhật thành công!'); location.href='dashboard.php?type=user&action=all';</script>";
					}else{
						echo "<script>alert('Cập nhật thất bại!'); location.href='dashboard.php?type=user&action=all';</script>";
					}
				}
			?>
		</div>
	</div>
	
	<table>
		<form action="" method="post">
		<tr>
			<td>Tên đăng nhập</td>
			<td><input disabled value="<?php echo $taikhoan['tentk']; ?>" type="text" autocomplete="off" require name="tentk"></td>
		</tr>
		<tr>
			<td>Vai trò</td>
			<td>
				<select name="vaitro" id="vaitro">
					<?php 
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("select idvaitro, tenvaitro from vaitro", $cnn);
						while($role = mysql_fetch_assoc($rs)){
							?><option <?php if($taikhoan['vaitro'] == $role['idvaitro']) echo "selected"; ?> value="<?php echo $role['idvaitro']; ?>"><?php echo $role['tenvaitro']; ?></option><?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tình trạng</td>
			<td>
				<select name="tinhtrang" id="tinhtrang">
					<option <?php if($taikhoan['tinhtrang'] == 1) echo "selected"; ?> value="1">Hoạt động</option>
					<option <?php if($taikhoan['tinhtrang'] == 0) echo "selected"; ?> value="0">Khóa</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Ghi chú</td>
			<td><textarea name="ghichu" cols="40" rows="5"><?php echo $taikhoan['ghichu']; ?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: left;"><input type="submit" name="update" class="go" value="Cập nhật"></td>
		</tr>
		</form>
	</table>
	
</div>