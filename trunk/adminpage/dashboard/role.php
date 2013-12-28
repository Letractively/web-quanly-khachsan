<div class="full_w">
	<div class="h_title">Danh sách vai trò</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Tên vai trò</th>
			<th scope="col">Ghi chú</th>
			<th scope="col" style="width: 65px;"></th>
		</tr>
		<?php
			$paged = 1; 
			if(isset($_GET['paged'])) $paged = $_GET['paged'];
			$showposts = 6;
			$begin = ($paged - 1) * $showposts;  
			$cnn = DB::StaticConnect();
			$rs = DB::ExecuteQuery("select * from vaitro", $cnn);
			$cnn2 = DB::StaticConnect();
			$rs2 = DB::ExecuteQuery("select * from vaitro", $cnn2);
			while($role = mysql_fetch_assoc($rs)){
				?>
				<tr>
					<td><?php echo $role['idvaitro']; ?></td>
					<td><?php echo $role['tenvaitro']; ?></td>
					<td><?php echo $role['ghichu']; ?></td>
					<td style="width:50px;">
						<a title="Sửa" class="table-icon edit" href="dashboard.php?type=role&action=update&idvaitro=<?php echo $role['idvaitro']; ?>"></a>
						<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa vai trò này không?')) location.href='dashboard.php?type=role&action=delete&idvaitro=<?php echo $role['idvaitro']; ?>';"></a>
					</td>
				</tr>
				<?php 
			}
		?>
	</table>
	<div class="entry">
		<?php dvd_pagging($paged, ceil(mysql_num_rows($rs2)/$showposts), "dashboard.php?type=role&action=all"); ?>
		<div class="sep"></div>		
		<a class="add new" href="dashboard.php?type=role&action=addnew">Thêm mới</a>
	</div>
</div>