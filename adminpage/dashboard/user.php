<div class="full_w">
	<div class="h_title">Tất cả thành viên</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Tên đăng nhập</th>
				<th scope="col">Ngày khởi tạo</th>
				<th scope="col">Ghi chú</th>
				<th scope="col" style="width: 65px;"></th>
			</tr>
		</thead>
		<tbody>
			<?php
				$paged = 1; 
				if(isset($_GET['paged'])) $paged = $_GET['paged'];
				$showposts = 6;
				$begin = ($paged - 1) * $showposts;
				$cnn = DB::StaticConnect();
				$rs = DB::ExecuteQuery("select * from taikhoan limit $begin, $showposts", $cnn);
				$cnn2 = DB::StaticConnect();
				$rs2 = DB::ExecuteQuery("select * from taikhoan", $cnn2);
				while($row = mysql_fetch_assoc($rs)){
					?>
					<tr>
						<td class="align-center"><?php echo $row['idtaikhoan']; ?></td>
						<td><?php echo $row['tentk']; ?></td>
						<td><?php echo date("d/m/Y H:i:s", strtotime($row['ngaytao'])); ?></td>
						<td><?php echo $row['ghichu'] ?></td>
						<td>
							<a href="dashboard.php?type=user&action=update&idtaikhoan=<?php echo $row['idtaikhoan']; ?>" class="table-icon edit" title="Sửa"></a>
							<a href="javascript:void(0);" onclick="if(confirm('Bạn có chắc xóa thành viên này?')) location.href='dashboard.php?type=user&action=delete&idtaikhoan=<?php echo $row['idtaikhoan']; ?>';" class="table-icon delete" title="Xóa"></a>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
	<div class="entry">
		<?php dvd_pagging($paged, ceil(mysql_num_rows($rs2)/$showposts), "dashboard.php?type=user&action=all"); ?>
		<div class="sep"></div>		
		<a class="button add" href="dashboard.php?type=user&action=addnew">Thêm mới</a>
	</div>
</div>