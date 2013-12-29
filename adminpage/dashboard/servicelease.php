<?php
	if(!user_can($idtaikhoan, "manage_servicelease")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Danh sách thuê dịch vụ</div>
	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<tr>
			<th scope="col">ID Thuê DV</th>
			<th scope="col">Tên Dịch Vụ</th>
			<th scope="col">Tên Khách Hàng</th>
			<th scope="col">Ngày Dùng</th>
			<th scope="col">Đơn giá</th>
			<th scope="col">Số Lượng</th>
			<th scope="col" style="width: 30px;"></th>
		</tr>
		<?php
			$paged = 1; 
			if(isset($_GET['paged'])) $paged = $_GET['paged'];
			$showposts = 6;
			$begin = ($paged - 1) * $showposts; 
			$cnn = DB::StaticConnect();
			$rs2 = DB::ExecuteQuery("select * from dichvu as dv, thuedichvu as tdv, khachhang as kh where dv.iddichvu=tdv.iddichvu and tdv.cmnd=kh.cmnd", $cnn);
			while($servicelease = mysql_fetch_assoc($rs2)){
				?>
				<tr>
					<td><?php echo $servicelease['idthuedichvu']; ?></td>
					<td><?php echo $servicelease['tendv']; ?></td>
					<td><?php echo $servicelease['tenkhachhang']; ?></td>
					<td><?php echo $servicelease['ngaydung']; ?></td>
					<td><?php echo $servicelease['dongia']; ?></td>
					<td><?php echo $servicelease['soluong']; ?></td>
					<td style="width:20px;">
						<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa thuê dịch vụ này không này không?')) location.href='dashboard.php?type=servicelease&action=delete&idthuedichvu=<?php echo $servicelease['idthuedichvu']; ?>';"></a>
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