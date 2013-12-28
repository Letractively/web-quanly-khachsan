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
							$tenvaitro = $_POST['tenvaitro'];
							$ghichu = $_POST['ghichu'];
							if($tenvaitro == ""){
								echo "<span style='color:red;'>Lỗi: Tên vai trò không được trống.</span>";
							}else if(role_exists($tenvaitro)){
									echo "<span style='color:red;'>Lỗi: Tên quyền đã tồn tại.</span>";
								} else {
								if(isset($_POST['cap'])){
									$qr = "insert into vaitro(tenvaitro, quyen, ghichu) values('$tenvaitro','".serialize($_POST['cap'])."','$ghichu')";
								}else{
									$qr = "insert into vaitro(tenvaitro, quyen, ghichu) values('$tenvaitro','','$ghichu')";
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
					<label for="tenvaitro">Tên vai trò</label>
				</td>
				<td>
					<input type="text" autocomplete="off" name="tenvaitro" id="tenvaitro" size="30">
				</td>
			</tr>
			<tr>
				<td>
					<label for="quyen">Quyền</label>
				</td>
				<td>
					<?php 
						$cnn = DB::StaticConnect();
						$rs = DB::ExecuteQuery("select idquyen, tenhienthi from quyen", $cnn);
						if(mysql_num_rows($rs) > 0){
							while($cap = mysql_fetch_assoc($rs)){
							?>
							<label class="item" for="<?php echo $cap['idquyen']; ?>"><input type="checkbox" name="cap[]" value="<?php echo $cap['idquyen']; ?>" id="<?php echo $cap['idquyen']; ?>"> <?php echo $cap['tenhienthi']; ?></label>
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