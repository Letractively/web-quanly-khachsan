<?php
	if(!user_can($idtaikhoan, "manage_service")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Danh sách dịch vụ</div>
	<div class="entry">
		<div class="sep"></div>
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
			$paged = 1; 
			if(isset($_GET['paged'])) $paged = $_GET['paged'];
			$showposts = 6;
			$begin = ($paged - 1) * $showposts;  
			$cnn = DB::StaticConnect();
			$rs = DB::ExecuteQuery("select * from dichvu", $cnn);
			$cnn2 = DB::StaticConnect();
			$rs2 = DB::ExecuteQuery("select * from dichvu", $cnn2);
			while($dichvu = mysql_fetch_assoc($rs)){
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
		?>
	</table>
	<div class="entry">
		<?php dvd_pagging($paged, ceil(mysql_num_rows($rs2)/$showposts), "dashboard.php?type=service&action=all"); ?>
		<div class="sep"></div>		
		<a class="add new" href="dashboard.php?type=service&action=addnew">Thêm mới</a>
	</div>
</div>