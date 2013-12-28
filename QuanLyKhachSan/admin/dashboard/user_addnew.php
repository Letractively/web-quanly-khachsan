<div class="full_w">
	<div class="h_title">Thêm mới tài khoản</div>
	<div class="entry">
		<div class="sep">
			<?php
				
				if(isset($_POST['addnew'])){
					$username = $_POST['username'];
					$password = md5($_POST['password']);
					$role = $_POST['role']; $status = $_POST['status'];
					$note = $_POST['note'];
					if(empty($username) || empty($password)){
						echo "<p style='color:red; margin:5px 0;'>Lỗi: vui lòng nhập đầy đủ các trường!</p>";
					}else if(username_exists($username)){
						echo "<p style='color:red; margin:5px 0;'>Lỗi: tên đăng nhập đã tồn tại!</p>";
					}else{
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("insert into user values('','$username','$password', '".gmdate('Y-m-d H:i:s', time()+(7*3600))."', '$role','$status','$note')", $cnn);
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
			<td><input type="text" autocomplete="off" require name="username"></td>
		</tr>
		<tr>
			<td>Mật khẩu</td>
			<td><input type="password" autocomplete="off" require name="password"></td>
		</tr>
		<tr>
			<td>Vai trò</td>
			<td>
				<select name="role" id="role">
					<?php 
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("select role_id, role_name from role", $cnn);
						while($role = mysql_fetch_assoc($rs)){
							?><option value="<?php echo $role['role_id']; ?>"><?php echo $role['role_name']; ?></option><?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tình trạng</td>
			<td>
				<select name="status" id="status">
					<option value="1">Hoạt động</option>
					<option value="0">Khóa</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Ghi chú</td>
			<td><textarea name="note" cols="40" rows="5"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: left;"><input type="submit" name="addnew" class="add new" value="Thêm"></td>
		</tr>
		</form>
	</table>
	
</div>