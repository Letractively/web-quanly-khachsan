<div class="full_w">
	<div class="h_title">Danh sách phòng</div>
	<div class="entry">
		<div class="sep"></div>
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
			$paged = 1; 
			if(isset($_GET['paged'])) $paged = $_GET['paged'];
			$showposts = 8;
			$begin = ($paged - 1) * $showposts;  
			$cnn = DB::StaticConnect();
			$rs = DB::ExecuteQuery("select * from phong", $cnn);
			while($phong = mysql_fetch_assoc($rs)){
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
		?>
	</table>
	<div class="entry">
		<?php dvd_pagging($paged, ceil(mysql_num_rows($rs)/$showposts), "dashboard.php?type=room&action=all"); ?>
		<div class="sep"></div>		
		<a class="add new" href="dashboard.php?type=room&action=addnew">Thêm mới</a>
	</div>
</div>