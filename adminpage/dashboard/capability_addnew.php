<?php
	if(!user_can($idtaikhoan, "manage_capability")){
		header("location:dashboard.php");
	}
	
	?>

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
							$tenquyen = $_POST['tenquyen'];
							$ghichu = $_POST['ghichu'];
							$tenhienthi = $_POST['tenhienthi'];
							if($tenquyen == "" || $tenhienthi == ""){
								echo "<span style='color:red;'>Lỗi: Tên quyền và tên hiển thị không được trống.</span>";
							}else{
								if(capability_exists($tenquyen)){
									echo "<span style='color:red;'>Lỗi: Tên quyền đã tồn tại.</span>";
								}else{
									$cnn = DB::StaticConnect();
									$rs = DB::ExecuteQuery("insert into quyen(tenquyen, tenhienthi, ghichu) values('$tenquyen','$tenhienthi','$ghichu')", $cnn);
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
					<label for="tenquyen">Tên quyền</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="tenquyen" id="tenquyen" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="tenhienthi">Tên hiển thị</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="tenhienthi" id="tenhienthi" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="ghichu">Ghi chú</label>
				</td>
				<td>
					<textarea name="ghichu" id="ghichu" cols="30" rows="10"></textarea>
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