<?php include_once 'init.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta author="nhom9">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jqueryEasing.js"></script>
        <script type="text/javascript" src="js/jqueryUI.js"></script>
</head>
<body>

<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<?php 
					if(!isset($_SESSION['authentication'])){
						header('location: index.php');
					}

					//kiem tra 
					
				?>
				<p>Xin chào, <strong style="font-weight:bold; font-size:larger;"><?php echo $_SESSION['authentication']['tentk']; ?></strong> [ <a href="logout.php">Thoát</a> ][ <a href="dashboard.php?type=change_password">Đổi mật khẩu</a> ]</p>
				<?php $idtaikhoan = $_SESSION['authentication']['idtaikhoan']; 
					user_can($idtaikhoan, "addnew_user");
				?>
			</div>
		</div>
		<div id="nav">
			<ul>
				<li class="upp"> <a href="#">Trang Chủ</a>
				</li>
				<li class="upp"><a href="#">Quản lý thành viên</a>
					<ul>
						
						<?php 
							if(user_can($idtaikhoan, "update_user")&&user_can($idtaikhoan, "delete_user")){
								?>
								<li> <a href="dashboard.php?type=user&action=all">Tất cả thành viên</a></li>
								<li> <a href="dashboard.php?type=user&action=search">Tìm kiếm thành viên</a></li>
								<?php
							}
						?>
						<?php 
							if(user_can($idtaikhoan, "addnew_user")){
								?>
								<li> <a href="dashboard.php?type=user&action=addnew">Thêm mới thành viên</a></li>
								<?php
							}
						?>
					</ul>
				</li>
						<?php 
							if(user_can($idtaikhoan, "manage_capability")){
								?>
								<li class="upp"><a href="dashboard.php?type=user">Quản lý quyền</a>
					<ul>
						<li> <a href="dashboard.php?type=capability&action=all">Tất cả các quyền</a></li>
						<li> <a href="dashboard.php?type=capability&action=search">Tìm kiếm quyền</a></li>
						<li> <a href="dashboard.php?type=capability&action=addnew">Thêm mới quyền</a></li>
					</ul>
				</li>
								<?php
							}
						?>
				
				<?php 
							if(user_can($idtaikhoan, "manage_role")){
								?>
				<li class="upp"><a href="dashboard.php?type=role">Quản lý vai trò</a>
					<ul>
						<li> <a href="dashboard.php?type=role&action=all">Tất cả vai trò</a></li>
						<li> <a href="dashboard.php?type=role&action=search">Tìm kiếm vai trò</a></li>
						<li> <a href="dashboard.php?type=role&action=addnew">Thêm mới vai trò</a></li>
					</ul>
				</li>
								<?php
							}
						?>
				<?php 
							if(user_can($idtaikhoan, "manage_room")){
								?>
				<li class="upp"><a href="dashboard.php?type=room">Quản lý phòng</a>
					<ul>
						<li> <a href="dashboard.php?type=room&action=all">Tất cả phòng</a></li>
						<li> <a href="dashboard.php?type=room&action=search">Tìm kiếm phòng</a></li>
						<li> <a href="dashboard.php?type=room&action=addnew">Thêm mới phòng</a></li>
					</ul>
				</li>
								<?php
							}
						?>
				<?php 
							if(user_can($idtaikhoan, "manage_roomtype")){
								?>
				<li class="upp"><a href="dashboard.php?type=roomtype">Quản lý loại phòng</a>
					<ul>
						<li> <a href="dashboard.php?type=roomtype&action=all">Tất cả loại phòng</a></li>
						<li> <a href="dashboard.php?type=roomtype&action=search">Tìm kiếm loại phòng</a></li>
						<li> <a href="dashboard.php?type=roomtype&action=addnew">Thêm mới loại phòng</a></li>
					</ul>
				</li>
								<?php
							}
						?>
				<?php 
							if(user_can($idtaikhoan, "manage_service")){
								?>
				<li class="upp"><a href="dashboard.php?type=service">Quản lý dịch vụ</a>
					<ul>
						<li> <a href="dashboard.php?type=service&action=all">Tất cả dịch vụ</a></li>
						<li> <a href="dashboard.php?type=service&action=search">Tìm kiếm dịch vụ</a></li>
						<li> <a href="dashboard.php?type=service&action=addnew">Thêm mới dịch vụ</a></li>
					</ul>
				</li>
								<?php
							}
						?>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<ul class="box">
                            <li > <a href="#">Quản lý thành viên</a>				
				<ul>
					<?php 
							if(user_can($idtaikhoan, "update_user")&&user_can($idtaikhoan, "delete_user")){
								?>
								<li ><a class="icon users" href="dashboard.php?type=user&action=all">Tất cả thành viên</a></li>
								<li ><a class="icon users" href="dashboard.php?type=user&action=search">Tìm kiếm thành viên</a></li>
								<?php
							}
						?>
						<?php 
							if(user_can($idtaikhoan, "addnew_user")){
								?>
								<li ><a class="icon add_user" href="dashboard.php?type=user&action=addnew">Thêm mới thành viên</a></li>
								<?php
							}
						?>					
					
				</ul>
                            </li>
				
			
                            <li > <a href="#">Quản lý quyền</a>
				<ul>
					<?php 
							if(user_can($idtaikhoan, "manage_capability")){
								?>
								<li ><a class="icon category" href="dashboard.php?type=capability&action=all">Tất cả các quyền</a></li>
								<li ><a class="icon category" href="dashboard.php?type=capability&action=search">Tìm kiếm quyên</a></li>
								<li ><a class="icon add_page" href="dashboard.php?type=capability&action=addnew">Thêm mới quyền</a></li>
								
								<?php
							}
						?>
					
				</ul>
                            </li>
                            <li ><a href="#">Quản lý vai trò</a>
				
				<ul>
						<?php 
							if(user_can($idtaikhoan, "manage_role")){
								?>
								<li ><a class="icon category" href="dashboard.php?type=role&action=all">Tất cả vai trò</a></li>
								<li ><a class="icon category" href="dashboard.php?type=role&action=search">Tìm kiếm vai trò</a></li>
								<li ><a class="icon add_page" href="dashboard.php?type=role&action=addnew">Thêm mới vai trò</a></li>
								
								<?php
							}
						?>
					
				</ul>
                            </li>
                            <li > <a href="#">Quản lý phòng</a>
				<ul>
					<?php 
							if(user_can($idtaikhoan, "manage_room")){
								?>
								<li ><a class="icon category" href="dashboard.php?type=room&action=all">Tất cả các phòng</a></li>
								<li ><a class="icon category" href="dashboard.php?type=room&action=search">Tìm kiếm phòng</a></li>
								<li ><a class="icon add_page" href="dashboard.php?type=room&action=addnew">Thêm mới phòng</a></li>
								
								<?php
							}
						?>
					
				</ul>
                            </li>
                            <li > <a href="#">Quản lý loại phòng</a>
				<ul>
					<?php 
							if(user_can($idtaikhoan, "manage_roomtype")){
								?>
								<li ><a class="icon category" href="dashboard.php?type=roomtype&action=all">Tất cả loại phòng</a></li>
								<li ><a class="icon category" href="dashboard.php?type=roomtype&action=search">Tìm kiếm loại phòng</a></li>
								<li ><a class="icon add_page" href="dashboard.php?type=roomtype&action=addnew">Thêm mới loại phòng</a></li>
								
								<?php
							}
						?>
					
				</ul>
                            </li>
				<li> <a href="#">Quản lý dịch vụ</a>
				<ul>
					<?php 
							if(user_can($idtaikhoan, "manage_service")){
								?>
								<li><a class="icon category" href="dashboard.php?type=service&action=all">Tất cả dịch vụ</a></li>
								<li><a class="icon category" href="dashboard.php?type=service&action=search">Tìm kiếm dịch vụ</a></li>
								<li><a class="icon add_page" href="dashboard.php?type=service&action=addnew">Thêm mới dịch vụ</a></li>
								
								<?php
							}
						?>
					
				</ul>
                                </li>
                        </ul>
                    <script>

(function($){
	$('.box > li').find('ul').each(function(){
		$(this).parent().addClass('lv2');
	})

	$('.lv2 > a').click(function(e){
		e.preventDefault();
		el = $(this);
		if(!el.hasClass('on')){
			$('.on').removeClass('on').next().stop(false,true).slideUp(400);
			el.addClass('on').next().stop(false,true).slideDown(400);
		}else{
			$('.on').removeClass('on').next().stop(false,true).slideUp(400);
		}
	})

})(jQuery);

</script>
			</div>
		</div>
		<div id="main">
			
			<?php 
				if(isset($_GET['type'])){
					switch($_GET['type']){
						case 'user':
							if(!isset($_GET['action']) || (isset($_GET['action']) && $_GET['action'] == "all")){
								include_once 'dashboard/user.php';
							}else if(isset($_GET['action'])){
								switch($_GET['action']){
									case 'addnew': include_once 'dashboard/user_addnew.php'; break;
									case 'update': include_once 'dashboard/user_update.php'; break;
									case 'delete': include_once 'dashboard/user_delete.php'; break;
									case 'search': include_once 'dashboard/user_search.php'; break;
								}
							}
							break;
						case 'capability':
							if(!isset($_GET['action']) || (isset($_GET['action']) && $_GET['action'] == "all")){
								include_once 'dashboard/capability.php';
							}else if(isset($_GET['action'])){
								switch($_GET['action']){
									case 'addnew': include_once 'dashboard/capability_addnew.php'; break;
									case 'update': include_once 'dashboard/capability_update.php'; break;
									case 'delete': include_once 'dashboard/capability_delete.php'; break;
									case 'search': include_once 'dashboard/capability_search.php'; break;
								}
							}
							break;
						case 'role':
							if(!isset($_GET['action']) || (isset($_GET['action']) && $_GET['action'] == "all")){
								include_once 'dashboard/role.php';
							}else if(isset($_GET['action'])){
								switch($_GET['action']){
									case 'addnew': include_once 'dashboard/role_addnew.php'; break;
									case 'update': include_once 'dashboard/role_update.php'; break;
									case 'delete': include_once 'dashboard/role_delete.php'; break;
									case 'search': include_once 'dashboard/role_search.php'; break;
								}
							}
							break;
						case 'change_password':
							include_once 'change_password.php';
							break;
						case 'service':
							if(!isset($_GET['action']) || (isset($_GET['action']) && $_GET['action'] == "all")){
								include_once 'dashboard/service.php';
							}else if(isset($_GET['action'])){
								switch($_GET['action']){
									case 'addnew': include_once 'dashboard/service_addnew.php'; break;
									case 'update': include_once 'dashboard/service_update.php'; break;
									case 'delete': include_once 'dashboard/service_delete.php'; break;
									case 'search': include_once 'dashboard/service_search.php'; break;
								}
							}
							break;
						case 'room':
							if(!isset($_GET['action']) || (isset($_GET['action']) && $_GET['action'] == "all")){
								include_once 'dashboard/room.php';
							}else if(isset($_GET['action'])){
								switch($_GET['action']){
									case 'addnew': include_once 'dashboard/room_addnew.php'; break;
									case 'update': include_once 'dashboard/room_update.php'; break;
									case 'delete': include_once 'dashboard/room_delete.php'; break;
									case 'search': include_once 'dashboard/room_search.php'; break;
								}
							}
							break;
						case 'roomtype':
							if(!isset($_GET['action']) || (isset($_GET['action']) && $_GET['action'] == "all")){
								include_once 'dashboard/roomtype.php';
							}else if(isset($_GET['action'])){
								switch($_GET['action']){
									case 'addnew': include_once 'dashboard/roomtype_addnew.php'; break;
									case 'update': include_once 'dashboard/roomtype_update.php'; break;
									case 'delete': include_once 'dashboard/roomtype_delete.php'; break;
									case 'search': include_once 'dashboard/roomtype_search.php'; break;
								}
							}
							break;						
					}
				}else{
					?>
					<div class="full_w">
						<div class="h_title">Bảng Quản Trị</div>
						<div class="entry">
							<div class="sep">
							
							</div>
						</div>
					</div>
					<?php
				}
			?>
		</div>
		<div class="clear"></div>
	</div>

    <footer id="footer">
		<div class="left">
			<p>© 2013 XuanHongHotel.com.vn - Khách sạn Xuân Hồng Đà Lạt</p>
		</div>
    </footer>
</div>
</body>
</html>