<div class="full_w">
	<div class="h_title">Tất cả các quyền</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Tên quyền</th>
			<th scope="col">Tên hiển thị</th>
			<th scope="col">Ghi chú</th>
			<th scope="col" style="width: 65px;"></th>
			
		</tr>
		<?php
			$paged = 1; 
			if(isset($_GET['paged'])) $paged = $_GET['paged'];
			$showposts = 5;
			$begin = ($paged - 1) * $showposts; 
			$cnn = DB::StaticConnect();
			$rs = DB::ExecuteQuery("select * from capability limit $begin, $showposts ", $cnn);
			$cnn2 = DB::StaticConnect();
			$rs2 = DB::ExecuteQuery("select * from capability", $cnn2);
			while($cap = mysql_fetch_assoc($rs)){
				?>
				<tr>
					<td><?php echo $cap['capability_id']; ?></td>
					<td><?php echo $cap['capability_name']; ?></td>
					<td><?php echo $cap['capability_label']; ?></td>
					<td><?php echo $cap['note']; ?></td>
					<td style="width:50px;">
						<a title="Sửa" class="table-icon edit" href="dashboard.php?type=capability&action=update&capability_id=<?php echo $cap['capability_id']; ?>"></a>
						<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa quyền này không?')) location.href='dashboard.php?type=capability&action=delete&capability_id=<?php echo $cap['capability_id']; ?>';"></a>
					</td>
				</tr>
				<?php 
			}
		?>
	</table>
	<div class="entry">
		<?php dvd_pagging($paged, ceil(mysql_num_rows($rs2)/$showposts), "dashboard.php?type=capability&action=all"); ?>
		<div class="sep"></div>		
		<a class="button add" href="dashboard.php?type=capability&action=addnew">Thêm mới</a>
	</div>
</div>