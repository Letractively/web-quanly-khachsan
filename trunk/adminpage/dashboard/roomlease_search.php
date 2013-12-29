<?php
	if(!user_can($idtaikhoan, "manage_room")){
		header("location:dashboard.php");
	}
?>
<div class="full_w">
	<div class="h_title">Tim kiếm thuê phòng phòng</div>
	<div class="entry">
		<div class="sep">
			<table>
			<form action="" method="post">				
				  <label>TK theo tên phòng:</label><input type="text" name="s" autocomplete="off" /><input class="button" style="margin-left: 50px; height: 30px; border-radius:4px; box-shadow:0 0 0 2pt grey;" type="submit" name="search" value="Tìm Kiếm" id="search"/>
			</form>
			</table>
		</div>
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
				if(isset($_POST['search'])){
					$s = $_POST['s'];
					$cnn2 = DB::StaticConnect();
					$rs2 = DB::ExecuteQuery("select tp.idthuephong, tp.idphong, p.tenphong, kh.tenkhachhang, tp.cmnd, tp.ngayden, tp.ngaydi from phong as p, thuephong as tp, khachhang as kh where p.idphong=tp.idphong and tp.cmnd=kh.cmnd", $cnn);
					while($servicelease = mysql_fetch_assoc($rs2)){
					?>
					<tr>
						<td><?php echo $servicelease['idthuephong']; ?></td>
						<td><?php echo $servicelease['idphong']; ?></td>
						<td><?php echo $servicelease['tenphong']; ?></td>
						<td><?php echo $servicelease['tenkhachhang']; ?></td>
						<td><?php echo $servicelease['cmnd']; ?></td>
						<td><?php echo $servicelease['ngayden']; ?></td>
						<td><?php echo $servicelease['ngaydi']; ?></td>
						<td style="width:20px;">
							<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa thuê phòng này không?')) location.href='dashboard.php?type=servicelease&action=delete&idthuephong=<?php echo $servicelease['idthuephong']; ?>';"></a>
						</td>
					</tr>
					<?php 
				}
					
				}
				
			?>
	</table>
</div>