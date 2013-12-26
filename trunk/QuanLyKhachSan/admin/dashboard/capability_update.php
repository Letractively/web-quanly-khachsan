<div class="full_w">
	<div class="h_title">Cập nhật quyền</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<form action="" method="post">
			<tr>
				<td colspan="2">
					<?php
						if(isset($_GET['capability_id'])){
							$capability_id = (int)$_GET['capability_id'];
							$cnn = DB::StaticConnect();
							$rs = DB::ExecuteQuery("select * from capability where capability_id = '$capability_id'", $cnn);
							$cap = mysql_fetch_assoc($rs);
						}else{
							header("location: dashboard.php?type=capability&action=all");
						}
						//=================================================
						if(isset($_POST['update'])){
							$capability_name = $_POST['capability_name'];
							$capability_label = $_POST['capability_label'];
							$note = $_POST['note'];
							if($capability_name == ""){
								echo "<span style='color:red;'>Lỗi: Tên quyền không được trống.</span>";
							}else{
								if(capability_exists($capability_name)){
									echo "<span style='color:red;'>Lỗi: Tên quyền đã tồn tại.</span>";
								}else{
									$cnn = DB::StaticConnect();
									$rs = DB::ExecuteQuery("update capability set capability_name = '$capability_name', capability_label = '$capability_label',note = '$note' where capability_id = '$capability_id'", $cnn);
									if($rs){
										echo "<script>alert('Cập nhật quyền thành công'); location.href='dashboard.php?type=capability&action=all';</script>";
									}
								}
								
							}
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="capability_name">Tên quyền</label>
				</td>
				<td>
					<input value="<?php echo $cap['capability_name']; ?>" type="text" autocomplete="off" name="capability_name" id="capability_name" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="capability_label">Tên hiển thị</label>
				</td>
				<td>
					<input value="<?php echo $cap['capability_label']; ?>" type="text" autocomplete="off" name="capability_label" id="capability_label" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="note">Ghi chú</label>
				</td>
				<td>
					<textarea name="note" id="note" cols="30" rows="10"><?php echo $cap['note']; ?></textarea>
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