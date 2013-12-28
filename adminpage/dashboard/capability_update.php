<?php
	if(!user_can($idtaikhoan, "manage_capability")){
		header("location:dashboard.php");
}	
?>
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
						if(isset($_GET['idquyen'])){
							$idquyen = (int)$_GET['idquyen'];
							$cnn = DB::StaticConnect();
							$rs = DB::ExecuteQuery("select * from quyen where idquyen = '$idquyen'", $cnn);
							$cap = mysql_fetch_assoc($rs);
						}else{
							header("location: dashboard.php?type=capability&action=all");
						}
						//=================================================
						if(isset($_POST['update'])){
							//$tenquyen = $_POST['tenquyen'];
							$tenhienthi = $_POST['tenhienthi'];
							$ghichu = $_POST['ghichu'];
							//if($tenquyen == ""){
								//echo "<span style='color:red;'>Lỗi: Tên quyền không được trống.</span>";
							//}else{
								//if(capability_exists($tenquyen)){
									//echo "<span style='color:red;'>Lỗi: Tên quyền đã tồn tại.</span>";
								//}else{
									$cnn = DB::StaticConnect();
									$rs = DB::ExecuteQuery("update quyen set tenhienthi = '$tenhienthi',ghichu = '$ghichu' where idquyen = '$idquyen'", $cnn);
									if($rs){
										echo "<script>alert('Cập nhật quyền thành công'); location.href='dashboard.php?type=capability&action=all';</script>";
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
					<input disabled value="<?php echo $cap['tenquyen']; ?>" type="text" autocomplete="off" name="tenquyen" id="tenquyen" size="40">
				</td>
			</tr>
			<tr>
				<td>
					<label for="tenhienthi">Tên hiển thị</label>
				</td>
				<td>
					<input value="<?php echo $cap['tenhienthi']; ?>" type="text" autocomplete="off" name="tenhienthi" id="tenhienthi" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="ghichu">Ghi chú</label>
				</td>
				<td>
					<textarea name="ghichu" id="ghichu" cols="30" rows="10"><?php echo $cap['ghichu']; ?></textarea>
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