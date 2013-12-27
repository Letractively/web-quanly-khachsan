<div class="full_w">
	<div class="h_title">Danh sách loại phòng</div>
	<div class="entry">
		<div class="sep">
			<table>
			<form action="" method="post">				
				  <label style="color: blue;"><b>Tìm kiếm theo tên loại phòng:</b></label><input type="text" name="s" autocomplete="off" /><input type="submit" name="search" value="Tìm Kiếm" id="search"/>
			</form>
			</table>
		</div>
	</div>
	<table>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Tên loại phòng</th>
			<th scope="col">Đơn giá</th>
			<th scope="col">Đơn vị</th>
			<th scope="col">Trạng thái</th>
			<th scope="col" style="width: 65px;"></th>
		</tr>
		<?php
				if(isset($_POST['search'])){
					$s = $_POST['s'];
					$cnn2 = DB::StaticConnect();
					$rs2 = DB::ExecuteQuery("select * from loaiphong where loaiphong like '%$s%'", $cnn2);
					while($loaiphong = mysql_fetch_assoc($rs2)){
					?>
					<tr>
						<td><?php echo $loaiphong['idloaiphong']; ?></td>
						<td><?php echo $loaiphong['loaiphong']; ?></td>
						<td><?php echo $loaiphong['dongia']; ?></td>
						<td><?php echo $loaiphong['donvi']; ?></td>
						<td><?php echo $loaiphong['tinhtrang']; ?></td>
						<td style="width:50px;">
							<a title="Sửa" class="table-icon edit" href="dashboard.php?type=roomtype&action=update&idloaiphong=<?php echo $loaiphong['idloaiphong']; ?>"></a>
							<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa loại phòng này không?')) location.href='dashboard.php?type=roomtype&action=delete&idloaiphong=<?php echo $loaiphong['idloaiphong']; ?>';"></a>
						</td>
					</tr>
					<?php 
				}
					
				}
				
			?>
	</table>	
</div>