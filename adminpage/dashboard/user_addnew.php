<?php 
	if(user_can($idtaikhoan, "addnew_user")&&user_can($idtaikhoan, "delete_user")){
		?>
			<div class="full_w">
	<div class="h_title">Thêm mới tài khoản</div>
	<div class="entry">
		<div class="sep">
			<?php
				if(isset($_POST['addnew'])){
					$tentk = $_POST['tentk'];
					$matkhau = md5($_POST['matkhau']);
					$ghichu = $_POST['ghichu']; $tinhtrang = $_POST['tinhtrang'];
					$ghichu = $_POST['ghichu'];
					if(empty($tentk) || empty($matkhau)){
						echo "<p style='color:red; margin:5px 0;'>Lỗi: vui lòng nhập đầy đủ các trường!</p>";
					}else if(username_exists($tentk)){
						echo "<p style='color:red; margin:5px 0;'>Lỗi: tên đăng nhập đã tồn tại!</p>";
					}else{
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("insert into taikhoan values('','$tentk','$matkhau', '".gmdate('Y-m-d H:i:s', time()+(7*3600))."', '$vaitro','$tinhtrang','$ghichu')", $cnn);
						if($rs){
							echo "<p style='color:blue;'>Thêm thành công!</p>";
						}else{
							echo "<p style='color:red;'>Thêm thất bại! Vui lòng thử lại.</p>";
						}
					}
				}
			?>
		</div>
	</div>
	
	<table>
		<form action="" method="post">
		<tr>
			<td>Tên đăng nhập</td>
			<td><input type="text" autocomplete="off" require name="tentk"></td>
		</tr>
		<tr>
			<td>Mật khẩu</td>
			<td><input type="password" autocomplete="off" require name="matkhau"></td>
		</tr>
		<tr>
			<td>Vai trò</td>
			<td>
				<select name="vaitro" id="vaitro">
					<?php 
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("select idvaitro, tenvaitro from vaitro", $cnn);
						while($role = mysql_fetch_assoc($rs)){
							?><option value="<?php echo $role['idvaitro']; ?>"><?php echo $role['tenvaitro']; ?></option><?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tình trạng</td>
			<td>
				<select name="tinhtrang" id="tinhtrang">
					<option value="1">Hoạt động</option>
					<option value="0">Khóa</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Ghi chú</td>
			<td><textarea name="ghichu" cols="40" rows="5"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" style="margin: auto; text-align: right;"><input type="submit" name="addnew" class="go" value="Thêm"></td>
		</tr>
		</form>
	</table>
	
</div>
		<?php		
		}
	if(user_can($idtaikhoan, "addnew_user")==FALSE){
		header("location:dashboard.php");
	}
			
?>


