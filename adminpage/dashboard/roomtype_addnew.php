
<div class="full_w">
	<div class="h_title">Thêm loại phòng</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<form action="" method="post">
			<tr>
				<td colspan="2">
					<?php
						if(isset($_POST['addnew'])){					
							$loaiphong = $_POST['loaiphong'];
							$dongia = $_POST['dongia'];
							$donvi = $_POST['donvi'];
							$tinhtrang = $_POST['tinhtrang'];
							if($dongia == "" || $loaiphong == ""){
								echo "<span style='color:red;'>Lỗi: loại phòng và đơn giá không được trống.</span>";
							}else{
								if(roomtype_exists($loaiphong)){
									echo "<span style='color:red;'>Lỗi: loại phòng đã tồn tại.</span>";
								}else{
									$cnn = DB::StaticConnect();
									$rs = DB::ExecuteQuery("insert into loaiphong(loaiphong, dongia, donvi, tinhtrang) values('$loaiphong','$dongia','$donvi','$tinhtrang')", $cnn);
									if($rs){
										echo "<span style='color:blue;'>Thêm loại phòng thành công.</span>";
									}									
								}
								
							}
						}
					?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="loaiphong">Loại phòng</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="loaiphong" id="loaiphong" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="dongia">Đơn giá</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="dongia" id="dongia" size="40">
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
					<option value="1">đang sử dụng</option>
					<option value="0">tạm dừng sử dụng</option>
				</select>
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