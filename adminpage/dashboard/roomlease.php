<div class="full_w">
	<div class="h_title">Danh sách sách thuê phòng</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<tr>
			<th scope="col">ID Thuê Phòng</th>
			<th scope="col">ID Phòng</th>
			<th scope="col">Tên Phòng</th>
			<th scope="col">Tên Khách Hàng</th>
			<th scope="col">CMND</th>
			<th scope="col">Ngày Đến</th>
			<th scope="col">Ngày Đi</th>
			<th scope="col" style="width: 30px;"></th>
		</tr>
		<?php
			$paged = 1; 
			if(isset($_GET['paged'])) $paged = $_GET['paged'];
			$showposts = 6;
			$begin = ($paged - 1) * $showposts; 
			$cnn = DB::StaticConnect();
			$rs2 = DB::ExecuteQuery("select tp.idthuephong, tp.idphong, p.tenphong, kh.tenkhachhang, tp.cmnd, tp.ngayden, tp.ngaydi from phong as p, thuephong as tp, khachhang as kh where p.idphong=tp.idphong and tp.cmnd=kh.cmnd", $cnn);
			while($roomlease = mysql_fetch_assoc($rs2)){
				?>
				<tr>
					<td><?php echo $roomlease['idthuephong']; ?></td>
					<td><?php echo $roomlease['idphong']; ?></td>
					<td><?php echo $roomlease['tenphong']; ?></td>
					<td><?php echo $roomlease['tenkhachhang']; ?></td>
					<td><?php echo $roomlease['cmnd']; ?></td>
					<td><?php echo $roomlease['ngayden']; ?></td>
					<td><?php echo $roomlease['ngaydi']; ?></td>
					<td style="width:20px;">
						<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa thuê phòng này không?')) location.href='dashboard.php?type=roomlease&action=delete&idthuephong=<?php echo $roomlease['idthuephong']; ?>';"></a>
					</td>
				</tr>
				<?php 
			}
		?>
	</table>
	<div class="entry">
		<?php dvd_pagging($paged, ceil(mysql_num_rows($rs2)/$showposts), "dashboard.php?type=role&action=all"); ?>
		<div class="sep"></div>		
	</div>
</div>