<div class="full_w">
	<div class="h_title">Thêm quyền</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<form action="" method="post">
			<tr>
				<td colspan="2">
					<?php
						if(isset($_POST['addnew'])){
							$capability_name = $_POST['capability_name'];
							$note = $_POST['note'];
							$capability_label = $_POST['capability_label'];
							if($capability_name == "" || $capability_label == ""){
								echo "<span style='color:red;'>Lỗi: Tên quyền và tên hiển thị không được trống.</span>";
							}else{
								if(capability_exists($capability_name)){
									echo "<span style='color:red;'>Lỗi: Tên quyền đã tồn tại.</span>";
								}else{
									$cnn = DB::StaticConnect();
									$rs = DB::ExecuteQuery("insert into capability(capability_name, capability_label, note) values('$capability_name','$capability_label','$note')", $cnn);
									if($rs){
										echo "<span style='color:blue;'>Thêm quyền thành công.</span>";
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
					<input type="text" autocomplete="off" name="capability_name" id="capability_name" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="capability_label">Tên hiển thị</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="capability_label" id="capability_label" size="30">
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
					<input type="submit" name="addnew" class="button" value="Thêm">
				</td>
			</tr>
		</form>
	</table>
</div>