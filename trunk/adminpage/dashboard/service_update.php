<?php
	if(!user_can($idtaikhoan, "manage_service")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Cập nhật dịch vụ</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<form action="" method="post">
			<tr>
				<td colspan="2">
					<?php
						if(isset($_GET['iddichvu'])){
							$iddichvu = (int)$_GET['iddichvu'];
							$cnn = DB::StaticConnect();
							$rs = DB::ExecuteQuery("select * from dichvu where iddichvu = '$iddichvu'", $cnn);
							$cap = mysql_fetch_assoc($rs);
						}else{
							header("location: dashboard.php?type=service&action=all");
						}
						//=================================================
						if(isset($_POST['update'])){
							$tendv = $_POST['tendv'];
							$gia = $_POST['gia'];
							$donvi = $_POST['donvi'];
							$tinhtrang = $_POST['tinhtrang'];
							if($tendv == ""){
								echo "<span style='color:red;'>Lỗi: Tên dịch vụ không được trống.</span>";
							}else{
								if(service_exists($tendv)){
									echo "<span style='color:red;'>Lỗi: Dịch vụ đã tồn tại.</span>";
								}else{
									$cnn = DB::StaticConnect();
									$rs = DB::ExecuteQuery("update dichvu set tendv = '$tendv', gia = '$gia',donvi = '$donvi',tinhtrang = '$tinhtrang' where iddichvu = '$iddichvu'", $cnn);
									if($rs){
										echo "<script>alert('Cập nhật dịch vụ thành công'); location.href='dashboard.php?type=service&action=all';</script>";
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
					<input value="<?php echo $cap['tendv']; ?>" type="text" autocomplete="off" name="tendv" id="tendv" size="40">
				</td>
			</tr>
			<tr>
				<td>
					<label for="gia">Giá</label>
				</td>
				<td>
					<input value="<?php echo $cap['gia']; ?>" type="text" autocomplete="off" name="gia" id="gia" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="donvi">Đơn vị</label>
				</td>
				<td>
					<input value="<?php echo $cap['donvi']; ?>" type="text" autocomplete="off" name="donvi" id="donvi" size="10">
				</td>
			</tr>
			<tr>
			<td>Trạng thái</td>
			<td>
				<select name="tinhtrang" id="tinhtrang">
					<option value="1">đang mở</option>
					<option value="0">Tạm dừng</option>
				</select>
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