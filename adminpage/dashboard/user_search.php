<?php
	if(!user_can($idtaikhoan, "delete_user")||!user_can($idtaikhoan,"update_user")){
		header("location:dashboard.php");
}
?>
<div class="full_w">
	<div class="h_title">Tìm kiếm thành viên</div>
	<div class="entry">
		<div class="sep">
			<table>
			<form action="" method="post">				
				  <label style="color: blue;">Tìm kiếm theo tên:</label><input type="text" name="s" autocomplete="off" /><input type="submit" name="search" value="Tìm Kiếm" id="search"/>
			</form>
			</table>
		</div>
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
				if(isset($_POST['search'])){
					$s = $_POST['s'];
					$cnn2 = DB::StaticConnect();
					$rs2 = DB::ExecuteQuery("select * from taikhoan where tentk like '%$s%'", $cnn2);
					while($row = mysql_fetch_assoc($rs2)){
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
					
				}
				
			?>
		</tbody>
	</table>	
</div>