<?php
	if(!user_can($idtaikhoan, "manage_roomtype")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Cập nhật loại phòng</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<form action="" method="post">
			<tr>
				<td colspan="2">
					<?php
						if(isset($_GET['idloadphong'])){
							$idloadphong = (int)$_GET['idloadphong'];
							$cnn = DB::StaticConnect();
							$rs = DB::ExecuteQuery("select * from loaiphong where idloadphong = '$idloadphong'", $cnn);
							$cap = mysql_fetch_assoc($rs);
						}else{
							header("location: dashboard.php?type=roomtype&action=all");
						}
						//=================================================
						if(isset($_POST['update'])){
							$loaiphong = $_POST['loaiphong'];
							$dongia = $_POST['dongia'];
							$donvi = $_POST['donvi'];
							$tinhtrang = $_POST['tinhtrang'];
							if($loaiphong == ""||$dongia==""){
								echo "<span style='color:red;'>Lỗi: Loại phòng và đơn giá không được trống.</span>";
							}else{
								if(capability_exists($loaiphong)){
									echo "<span style='color:red;'>Lỗi: loại phòng đã tồn tại.</span>";
								}else{
									$cnn = DB::StaticConnect();
									$rs = DB::ExecuteQuery("update loaiphong set loaiphong = '$loaiphong', dongia = '$dongia',donvi = '$donvi',tinhtrang='$tinhtrang' where idloaiphong = '$idloaiphong'", $cnn);
									if($rs){
										echo "<script>alert('Cập nhật loại phòng thành công'); location.href='dashboard.php?type=roomtype&action=all';</script>";
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
					<input disabled value="<?php echo $cap['loaiphong']; ?>" type="text" autocomplete="off" name="loaiphong" id="loaiphong" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="dongia">Đơn giá</label>
				</td>
				<td>
					<input value="<?php echo $cap['dongia']; ?>" type="text" autocomplete="off" name="dongia" id="dongia" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="donvi">Đơn vị</label>
				</td>
				<td>
					<input value="<?php echo $cap['donvi']; ?>" type="text" autocomplete="off" name="donvi" id="donvi" size="30">
				</td>
			</tr>
			<tr>
			<td>Tình trạng</td>
			<td>
				<select name="tinhtrang" id="tinhtrang">
					<option <?php if($loaiphong['tinhtrang'] == 1) echo "selected"; ?> value="1">Đang sử dụng</option>
					<option <?php if($loaiphong['tinhtrang'] == 0) echo "selected"; ?> value="0">Tạm nghưng sử dụng</option>
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