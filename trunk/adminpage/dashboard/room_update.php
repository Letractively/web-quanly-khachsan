<?php
	if(!user_can($idtaikhoan, "manage_room")){
		header("location:dashboard.php");
	}
?>

<div class="full_w">
	<div class="h_title">Cập nhật phòng</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<form action="" method="post">
			<tr>
				<td colspan="2">
					<?php
						if(isset($_GET['idphong'])){
							$idphong = (int)$_GET['idphong'];
							$cnn = DB::StaticConnect();
							$rs = DB::ExecuteQuery("select * from phong where idphong = '$idphong'", $cnn);
							$cap = mysql_fetch_assoc($rs);
						}else{
							header("location: dashboard.php?type=room&action=all");
						}
						//=================================================
						if(isset($_POST['update'])){
							//$tenphong = $_POST['tenphong'];
							$loaiphong = $_POST['loaiphong'];
							$hinhanh = $_POST['hinhanh'];
							$tinhtrang = $_POST['tinhtrang'];
							//if($tenphong == ""||$loaiphong==""){
								//echo "<span style='color:red;'>Lỗi: Tên phòng và loại phòng không được trống.</span>";
							//}else{
								//if(room_exists($tenphong)){
									//echo "<span style='color:red;'>Lỗi: Tên phòng đã tồn tại.</span>";
								//}else{
									$cnn = DB::StaticConnect();
									$rs = DB::ExecuteQuery("update phong set loaiphong = '$loaiphong',hinhanh = '$hinhanh', tinhtrang='$tinhtrang' where idphong = '$idphong'", $cnn);
									if($rs){
										echo "<script>alert('Cập nhật phòng thành công'); location.href='dashboard.php?type=room&action=all';</script>";
									}
								}
								
					?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="tenphong">Tên phòng</label>
				</td>
				<td>
					<input disabled value="<?php echo $cap['tenphong']; ?>" type="text" autocomplete="off" name="tenphong" id="tenphong" size="30">
				</td>
			</tr>
			<tr>
				<td>Loại phòng	</td>
				<td>
					<select name="loaiphong" id="loaiphong">
					<?php 
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("select loaiphong from loaiphong", $cnn);
						while($row = mysql_fetch_assoc($rs)){
							?><option value="<?php echo $row['loaiphong']; ?>"><?php echo $row['loaiphong']; ?></option><?php
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="hinhanh">Hình ảnh</label>
				</td>
				<td>
					<input value="<?php echo $cap['hinhanh']; ?>" type="text" autocomplete="off" name="hinhanh" id="hinhanh" size="50">
				</td>
			</tr>			
			<tr>
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
					<input type="submit" name="update" class="go" value="Cập nhật">
				</td>
			</tr>
		</form>
	</table>
</div>