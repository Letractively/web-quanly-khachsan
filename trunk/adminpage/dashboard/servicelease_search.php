<?php
	if(!user_can($idtaikhoan, "manage_servicelease")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Tìm kiếm thuê dịch vụ</div>
	<div class="entry">
		<div class="sep">
			<table>
			<form action="" method="post">				
				  <label>Tìm kiếm theo tên:</label><input type="text" name="s" autocomplete="off" /><input class="button" style="margin-left: 50px; height: 30px; border-radius:4px; box-shadow:0 0 0 2pt grey;" type="submit" name="search" value="Tìm Kiếm" id="search"/>
			</form>
			</table>
		</div>
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
				if(isset($_POST['search'])){
					$s = $_POST['s'];
					$cnn = DB::StaticConnect();
					$rs2 = DB::ExecuteQuery("select * from dichvu as dv, thuedichvu as tdv, khachhang as kh where dv.iddichvu=tdv.iddichvu and tdv.cmnd=kh.cmnd and kh.tenkhachhang like '%$s%'", $cnn);
					while($servicelease = mysql_fetch_assoc($rs2)){
						?>
						<tr>
							<td><?php echo $servicelease['idthuedichvu']; ?></td>
							<td><?php echo $servicelease['tendichvu']; ?></td>
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
					
				}
				
			?>
	</table>	
</div>