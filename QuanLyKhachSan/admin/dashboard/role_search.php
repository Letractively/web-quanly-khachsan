<div class="full_w">
	<div class="h_title">Danh sách vai trò</div>
	<div class="entry">
		<div class="sep">
			<table>
			<form action="" method="post">				
				  <label style="color: blue;"><b>Tìm kiếm theo tên vai trò:</b></label><input type="text" name="s" autocomplete="off" /><input type="submit" name="search" value="Tìm Kiếm" id="search"/>
			</form>
			</table>
		</div>
	</div>
	<table>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Tên vai trò</th>
			<th scope="col">Ghi chú</th>
			<th scope="col" style="width: 65px;"></th>
		</tr>
		<?php
				if(isset($_POST['search'])){
					$s = $_POST['s'];
					$cnn2 = DB::StaticConnect();
					$rs2 = DB::ExecuteQuery("select * from role where role_name like '%$s%'", $cnn2);
					while($role = mysql_fetch_assoc($rs2)){
					?>
					<tr>
						<td><?php echo $role['role_id']; ?></td>
						<td><?php echo $role['role_name']; ?></td>
						<td><?php echo $role['note']; ?></td>
						<td style="width:50px;">
							<a title="Sửa" class="table-icon edit" href="dashboard.php?type=role&action=update&role_id=<?php echo $role['role_id']; ?>"></a>
							<a title="Xóa" class="table-icon delete" href="javascript:void(0);" onclick="if(confirm('Bạn có chắc chắc xóa vai trò này không?')) location.href='dashboard.php?type=role&action=delete&role_id=<?php echo $role['role_id']; ?>';"></a>
						</td>
					</tr>
					<?php 
					}
					
				}
				
			?>
	</table>
</div>