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
						if(isset($_GET['role_id'])){
							$role_id = (int)$_GET['role_id'];
							$cnn = DB::StaticConnect();
							$rs = DB::ExecuteQuery("select * from role where role_id = '$role_id'", $cnn);
							$role = mysql_fetch_assoc($rs);
						}else{
							header("location: dashboard.php?type=capability&action=all");
						}
						//=================================================
						if(isset($_POST['update'])){
							$role_name = $_POST['role_name'];
							$note = $_POST['note'];
							if($role_name == ""){
								echo "<span style='color:red;'>Lỗi: Tên vai trò không được trống.</span>";
							}else{
									if(role_exists($role_name)){
									echo "<span style='color:red;'>Lỗi: Tên vai trò đã tồn tại.</span>";}
									else{
										if(isset($_POST['cap'])){
									$qr = "update role set role_name = '$role_name', capability = '".serialize($_POST['cap'])."', note = '$note' where role_id = '$role_id'";
								}else{
									$qr = "update role set role_name = '$role_name', capability = '".serialize($_POST['cap'])."', note = '$note' where role_id = '$role_id'";
								}
								$cnn = DB::StaticConnect();
								$rs = DB::ExecuteQuery($qr, $cnn);
								if($rs){
									echo "<script>alert('Cập nhật thành công'); location.href='dashboard.php?type=role&action=all';</script>";
								}
									}
								
							}
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<label  for="role_name">Tên vai trò</label>
				</td>
				<td>
					<input value="<?php echo $role['role_name']; ?>" type="text" autocomplete="off" name="role_name" id="role_name" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="capability">Quyền</label>
				</td>
				<td>
					<?php 
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("select capability_id, capability_label from capability", $cnn);
						$caps = unserialize($role['capability']);
						if(mysql_num_rows($rs) > 0){
							while($cap = mysql_fetch_assoc($rs)){
								?>
								<label class="item" for="<?php echo $cap['capability_id']; ?>"><input <?php if(in_array($cap['capability_id'], $caps)) echo "checked"; ?> type="checkbox" name="cap[]" value="<?php echo $cap['capability_id']; ?>" id="<?php echo $cap['capability_id']; ?>"> <?php echo $cap['capability_label']; ?></label>
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
					<label for="note">Ghi chú</label>
				</td>
				<td>
					<textarea name="note" id="note" cols="30" rows="10"><?php echo $role['note']; ?></textarea>
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