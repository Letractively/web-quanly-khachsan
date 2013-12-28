<?php
	if(!user_can($idtaikhoan, "manage_service")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Tìm kiếm dịch vụ</div>
	<div class="entry">
		<div class="sep">
			<table>
			<form action="" method="post">				
				  <label style="color: blue;"><b>Tìm kiếm theo tên dịch vụ:</b></label><input type="text" name="s" autocomplete="off" /><input type="submit" name="search" value="Tìm Kiếm" id="search"/>
			</form>
			</table>
		</div>
	</div>
	<table>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Tên dịch vụ</th>
			<th scope="col">Đơn giá</th>
			<th scope="col">Đơn vị</th>
			<th scope="col">Trạng thái</th>
			<th scope="col" style="width: 65px;"></th>			
		</tr>
		<?php
				if(isset($_POST['search'])){
					$s = $_POST['s'];
					$cnn2 = DB::StaticConnect();
					$rs2 = DB::ExecuteQuery("select * from dichvu where tendv like '%$s%'", $cnn2);
					while($dichvu = mysql_fetch_assoc($rs2)){
						?>
						<tr>
							<td><?php echo $dichvu['iddichvu']; ?></td>
							<td><?php echo $dichvu['tendv']; ?></td>
							<td><?php echo $dichvu['gia']; ?></td>
							<td><?php echo $dichvu['donvi']; ?></td>
							<td><?php echo $dichvu['tinhtrang']; ?></td>
							<td style="width:50px;">
								<a title="Sửa" class="table-icon edit" href="dashboard.php?type=service&action=update&iddichvu=<?php echo $dichvu['iddichvu']; ?>"></a>
								<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa dịch vụ này không?')) location.href='dashboard.php?type=service&action=delete&iddichvu=<?php echo $dichvu['iddichvu']; ?>';"></a>
							</td>
						</tr>
						<?php 
					}
					
				}
				
			?>
	</table>	
</div>