<?php
	if(!user_can($idtaikhoan, "manage_role")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Cập nhật vai trò</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table class="role">
		<form action="" method="post">
			<tr>
				<td colspan="2">
					<?php
						if(isset($_GET['idvaitro'])){
							$idvaitro = (int)$_GET['idvaitro'];
							$cnn = DB::StaticConnect();
							$rs = DB::ExecuteQuery("select * from vaitro where idvaitro = '$idvaitro'", $cnn);
							$role = mysql_fetch_assoc($rs);
						}else{
							header("location: dashboard.php?type=capability&action=all");
						}
						//=================================================
						if(isset($_POST['update'])){
							//$tenvaitro = $_POST['tenvaitro'];
							$ghichu = $_POST['ghichu'];
							//if($tenvaitro == ""){
								//echo "<span style='color:red;'>Lỗi: Tên vai trò không được trống.</span>";
							//}else{
									//if(role_exists($tenvaitro)){
									//echo "<span style='color:red;'>Lỗi: Tên vai trò đã tồn tại.</span>";}
										{
										if(isset($_POST['cap'])){
									$qr = "update vaitro set quyen = '".serialize($_POST['cap'])."', ghichu = '$ghichu' where idvaitro = '$idvaitro'";
								}else{
									$qr = "update vaitro set tenvaitro = '$tenvaitro', quyen = '".serialize($_POST['cap'])."', ghichu = '$ghichu' where idvaitro = '$idvaitro'";
								}
								$cnn = DB::StaticConnect();
								$rs = DB::ExecuteQuery($qr, $cnn);
								if($rs){
									echo "<script>alert('Cập nhật thành công'); location.href='dashboard.php?type=role&action=all';</script>";
								}
									}
								
							}
						
					?>
				</td>
			</tr>
			<tr>
				<td>
					<label  for="tenvaitro">Tên vai trò</label>
				</td>
				<td>
					<input disabled value="<?php echo $role['tenvaitro']; ?>" type="text" autocomplete="off" name="tenvaitro" id="tenvaitro" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="quyen">Quyền</label>
				</td>
				<td>
					<?php 
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("select idquyen, tenhienthi from quyen", $cnn);
						$caps = unserialize($role['quyen']);
						if(mysql_num_rows($rs) > 0){
							while($cap = mysql_fetch_assoc($rs)){
								?>
								<label class="item" for="<?php echo $cap['idquyen']; ?>"><input <?php if(in_array($cap['idquyen'], $caps)) echo "checked"; ?> type="checkbox" name="cap[]" value="<?php echo $cap['idquyen']; ?>" id="<?php echo $cap['idquyen']; ?>"> <?php echo $cap['tenhienthi']; ?></label>
								<?php
							}
						}else{
							echo "Chưa có quyền. Vui lòng thêm quyền.";
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="ghichu">Ghi chú</label>
				</td>
				<td>
					<textarea name="ghichu" id="ghichu" cols="30" rows="10"><?php echo $role['ghichu']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="update" class="button" value="Cập nhật">
				</td>
			</tr>
		</form>
	</table>
</div>