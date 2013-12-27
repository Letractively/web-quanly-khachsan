<div class="full_w">
	<div class="h_title">Đổi mật khẩu</div>
	<div class="entry">
		<div class="sep">
			<table>
				<tr>
					<td colspan="2">
						<?php 
							$user_id = $_SESSION['authentication']['user_id'];
							if(isset($_POST['change'])){
								$oldpass = $_POST['oldpass'];
								$newpass1 = $_POST['newpass1'];
								$newpass2 = $_POST['newpass2'];
								$cnn = DB::StaticConnect();
								$rs = DB::ExecuteQuery("select user_name from user where user_id = '$user_id' and password = '".md5($oldpass)."'",$cnn);
								if(mysql_num_rows($rs) > 0){
									if($newpass1 != "" && $newpass2 != "" && $newpass1 == $newpass2){
										$cnn2 = DB::StaticConnect();
										$rs2 = DB::ExecuteQuery("update user set password = '".md5($newpass1)."' where user_id = '$user_id'", $cnn2);
										if($rs2){
											echo "<p style='color:blue;'>Đổi mật khẩu thành công.</p>";
										}else{
											echo "<p style='color:red;'>Đổi mật khẩu thất bại. Vui lòng thử lại.</p>";
										}
									}else{
										echo "<p style='color:red;'>Lỗi: mật khẩu mới không được để trống và phải trùng nhau.</p>";
									}
								}else{	
									echo "<p style='color:red;'>Lỗi: mật khẩu cũ không đúng.</p>";
								}
							}
						?>
					</td>
				</tr>
				<form action="" method="post">
				<tr>
					<td>Mật khẩu cũ</td>
					<td><input type="password"  name="oldpass"></td>
				</tr>
				<tr>
					<td>Mật khẩu mới</td>
					<td><input type="password"  name="newpass1"></td>
				</tr>
				<tr>
					<td>Nhập lại mật khẩu mới</td>
					<td><input type="password"  name="newpass2"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" class="button" name="change" value="Thay đổi"></td>
				</tr>
				</form>
			</table>
		</div>
	</div>
</div>