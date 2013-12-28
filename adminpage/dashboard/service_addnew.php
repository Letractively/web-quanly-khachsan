<?php
	if(!user_can($idtaikhoan, "manage_service")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Thêm dịch vụ</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<form action="" method="post">
			<tr>
				<td colspan="2">
					<?php
						if(isset($_POST['addnew'])){					
							$tendv = $_POST['tendv'];
							$gia = $_POST['gia'];
							$donvi = $_POST['donvi'];
							$tinhtrang = $_POST['tinhtrang'];
							if($gia == "" || $tendv == ""){
								echo "<span style='color:red;'>Lỗi: Tên dịch vụ và giá không được trống.</span>";
							}else{
								if(service_exists($tendv)){
									echo "<span style='color:red;'>Lỗi: Dịch vụ đã tồn tại.</span>";
								}else{
									$cnn = DB::StaticConnect();
									$rs = DB::ExecuteQuery("insert into dichvu(tendv, gia, donvi, tinhtrang) values('$tendv','$gia','$donvi','$tinhtrang')", $cnn);
									if($rs){
										echo "<span style='color:blue;'>Thêm dịch vụ thành công.</span>";
									}									
								}
								
							}
						}
					?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="tendv">Tên dịch vụ</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="tendv" id="tendv" size="40">
				</td>
			</tr>
			<tr>
				<td>
					<label for="gia">Giá</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="gia" id="gia" size="40">
				</td>
			</tr>
			<tr>
				<td>
					<label for="donvi">Đơn vị</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="donvi" id="donvi" value="VND" size="30">
				</td>
			</tr>
			<tr>
			<td>Tình trạng</td>
			<td>
				<select name="tinhtrang" id="tinhtrang">
					<option value="1">Hoạt động</option>
					<option value="0">Tạm dừng</option>
				</select>
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