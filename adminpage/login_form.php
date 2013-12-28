<?php if(!DVD) die("Bạn không có quyền truy cập vào trang này.");  ?>
<form action="" method="post">
  <h1>Đăng Nhập</h1>
  <div class="inset">
  <p>
    <?php
        if(isset($_SESSION['authentication'])){
            header("location: dashboard.php");
        }
        if(isset($_POST['login'])){
            $cnn = DB::StaticConnect();
            $rs = DB::ExecuteQuery("select user_name, role, user_id, status from user where user_name = '".$_POST['username']."' and password = '".md5($_POST['password'])."'", $cnn);
            if(mysql_num_rows($rs) > 0){
                $user = mysql_fetch_assoc($rs); 
                $cnn2 = DB::StaticConnect();
                $rs2 = DB::ExecuteQuery("select capability from role where role_id = '".$user['role']."'", $cnn2);
                $role = mysql_fetch_assoc($rs);
                $_SESSION['authentication']['user_id'] = $user['user_id'];
                $_SESSION['authentication']['user_name'] = $user['user_name'];
                $_SESSION['authentication']['role'] = $role['capability'];
                
                if($user['status'] == 0){
                    echo "Tài khoản của bạn đã bị khóa.";
						
                }
                else{
                    header("location: dashboard.php");
                }
            }else{
                echo "Tên đăng nhập hoặc mật khẩu không hợp lệ.";
            }
        }
    ?>
  </p><br/></br/>
  <p>
    <label for="email">Tên đăng nhập</label>
    <input autofocus autocomplete="off" require type="text" name="username" id="username">
  </p>
  <p>
    <label for="password">Mật khẩu</label>
    <input autocomplete="off" require type="password" name="password" id="password">
  </p>
  </div>
  <p class="p-container">
      <a href="../index.php"><input type="button" name="cancel" class="go" value="Thoát"></a>
      <input type="submit" name="login" class="go" value="Đăng nhập">
  </p>
</form>