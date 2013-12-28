<?php
	if(!user_can($idtaikhoan, "manage_room")){
		header("location:dashboard.php");
	}
?>
<div class="full_w">
	<div class="h_title">Tim kiếm phòng</div>
	<div class="entry">
		<div class="sep">
			<table>
			<form action="" method="post">				
				  <label style="color: blue;"><b>Tìm kiếm theo loại phòng:</b></label><input type="text" name="s" autocomplete="off" /><input type="submit" name="search" value="Tìm Kiếm" id="search"/>
			</form>
			</table>
		</div>
	</div>
	<table>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Tên phòng</th>
			<th scope="col">Loại phòng</th>
			<th scope="col">Hình ảnh</th>
			<th scope="col">Trạng thái</th>
			<th scope="col" style="width: 65px;"></th>
		</tr>
		<?php
				if(isset($_POST['search'])){
					$s = $_POST['s'];
					$cnn2 = DB::StaticConnect();
					$rs2 = DB::ExecuteQuery("select * from phong where loaiphong like '%$s%'", $cnn2);
					while($phong = mysql_fetch_assoc($rs2)){
					?>
					<tr>
						<td><?php echo $phong['idphong']; ?></td>
						<td><?php echo $phong['tenphong']; ?></td>
						<td><?php echo $phong['loaiphong']; ?></td>
						<td><?php echo $phong['hinhanh']; ?></td>
						<td><?php echo $phong['tinhtrang']; ?></td>
						<td style="width:50px;">
							<a title="Sửa" class="table-icon edit" href="dashboard.php?type=room&action=update&idphong=<?php echo $phong['idphong']; ?>"></a>
							<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa phòng này không?')) location.href='dashboard.php?type=room&action=delete&idphong=<?php echo $phong['idphong']; ?>';"></a>
						</td>
					</tr>
					<?php 
				}
					
				}
				
			?>
	</table>
</div>