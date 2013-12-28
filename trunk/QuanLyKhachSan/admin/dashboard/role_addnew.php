<div class="full_w">
	<div class="h_title">Thêm vai trò</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table class="role">
		<form action="" method="post">
			<tr>
				<td colspan="2">
					<?php
						if(isset($_POST['addnew'])){
							$role_name = $_POST['role_name'];
							$note = $_POST['note'];
							if($role_name == ""){
								echo "<span style='color:red;'>Lỗi: Tên vai trò không được trống.</span>";
							}else if(role_exists($role_name)){
									echo "<span style='color:red;'>Lỗi: Tên quyền đã tồn tại.</span>";
								} else {
								if(isset($_POST['cap'])){
									$qr = "insert into role(role_name, capability, note) values('$role_name','".serialize($_POST['cap'])."','$note')";
								}else{
									$qr = "insert into role(role_name, capability, note) values('$role_name','','$note')";
								}
								$cnn = DB::StaticConnect();
								$rs = DB::ExecuteQuery($qr, $cnn);
								if($rs){
									echo "<span style='color:blue;'>Thêm vai trò thành công.</span>";
								}
							}
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="role_name">Tên vai trò</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="role_name" id="role_name" size="30">
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
						if(mysql_num_rows($rs) > 0){
							while($cap = mysql_fetch_assoc($rs)){
							?>
							<label class="item" for="<?php echo $cap['capability_id']; ?>"><input type="checkbox" name="cap[]" value="<?php echo $cap['capability_id']; ?>" id="<?php echo $cap['capability_id']; ?>"> <?php echo $cap['capability_label']; ?></label>
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
					<textarea name="note" id="note" cols="30" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="addnew" class="add new" value="Thêm">
				</td>
			</tr>
		</form>
	</table>
</div>