<?php
	if(!user_can($idtaikhoan, "manage_capability")){
		header("location:dashboard.php");
	}
?>
<div class="full_w">
	<div class="h_title">Thêm quyền</div>
	<div class="entry">
		<div class="sep">
			<table>
			<form action="" method="post">				
				  <label style="color: blue;"><b>Tìm kiếm theo tên quyền:</b></label><input type="text" name="s" autocomplete="off" /><input type="submit" name="search" value="Tìm Kiếm" id="search"/>
			</form>
			</table>
		</div>
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
				if(isset($_POST['search'])){
					$s = $_POST['s'];
					$cnn2 = DB::StaticConnect();
					$rs2 = DB::ExecuteQuery("select * from quyen where tenquyen like '%$s%'", $cnn2);
					while($cap = mysql_fetch_assoc($rs2)){
					?>
						<tr>
							<td><?php echo $cap['idquyen']; ?></td>
							<td><?php echo $cap['tenquyen']; ?></td>
							<td><?php echo $cap['tenhienthi']; ?></td>
							<td><?php echo $cap['ghichu']; ?></td>
							<td style="width:50px;">
								<a title="Sửa" class="table-icon edit" href="dashboard.php?type=capability&action=update&idquyen=<?php echo $cap['idquyen']; ?>"></a>
								<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa quyền này không?')) location.href='dashboard.php?type=capability&action=delete&idquyen=<?php echo $cap['idquyen']; ?>';"></a>
							</td>
						</tr>
				<?php 
				}
					
				}
				
			?>
	</table>
</div>