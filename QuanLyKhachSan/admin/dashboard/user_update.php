<div class="full_w">
	<div class="h_title">Thêm mới</div>
	<div class="entry">
		<div class="sep">
			<?php
				if(isset($_GET['user_id'])){header("dashboard.php?type=user&action=all");}
				$user_id = $_GET['user_id'];
				$cnn = DB::StaticConnect();
				$rs = DB::ExecuteQuery("select * from user where user_id = '".$user_id."'", $cnn);
				$user = mysql_fetch_assoc($rs);
				//==================================
				if(isset($_POST['update'])){
					$username = $_POST['username'];
					$role = $_POST['role']; $status = $_POST['status'];
					$note = $_POST['note'];

					$cnn = DB::StaticConnect();
					$rs = DB::ExecuteQuery("update user set role = '$role', status = '$status', note = '$note' where user_id = '$user_id'", $cnn);
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
			<td><input disabled value="<?php echo $user['user_name']; ?>" type="text" autocomplete="off" require name="username"></td>
		</tr>
		<tr>
			<td>Vai trò</td>
			<td>
				<select name="loaiphong" id="loaiphong">
					<?php 
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("select loaiphong from loaiphong", $cnn);
						while($row = mysql_fetch_assoc($rs)){
							?><option <?php if($phong['loaiphong'] == $row['loaiphong']) echo "selected"; ?> value="<?php echo $row['loaiphong']; ?>"><?php echo $row['loaiphong']; ?></option><?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tình trạng</td>
			<td>
				<select name="status" id="status">
					<option <?php if($user['status'] == 1) echo "selected"; ?> value="1">Hoạt động</option>
					<option <?php if($user['status'] == 0) echo "selected"; ?> value="0">Khóa</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Ghi chú</td>
			<td><textarea name="note" cols="40" rows="5"><?php echo $user['note']; ?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: left;"><input type="submit" name="update" class="button" value="Cập nhật"></td>
		</tr>
		</form>
	</table>
	
</div>