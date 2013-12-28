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
            $rs = DB::ExecuteQuery("select tentk, vaitro, idtaikhoan, tinhtrang from taikhoan where tentk = '".$_POST['tentk']."' and matkhau = '".md5($_POST['matkhau'])."'", $cnn);
            if(mysql_num_rows($rs) > 0){
                $taikhoan = mysql_fetch_assoc($rs); 
                $cnn2 = DB::StaticConnect();
                $rs2 = DB::ExecuteQuery("select quyen from vaitro where idvaitro = '".$taikhoan['vaitro']."'", $cnn2);
                $role = mysql_fetch_assoc($rs);
                $_SESSION['authentication']['idtaikhoan'] = $taikhoan['idtaikhoan'];
                $_SESSION['authentication']['tentk'] = $taikhoan['tentk'];
                $_SESSION['authentication']['vaitro'] = $role['quyen'];
                
                if($taikhoan['tinhtrang'] == 0){
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
    <input autofocus autocomplete="off" require type="text" name="tentk" id="tentk">
  </p>
  <p>
    <label for="password">Mật khẩu</label>
    <input autocomplete="off" require type="password" name="matkhau" id="matkhau">
  </p>
  </div>
  <p class="p-container">
      <a href="../index.php"><input type="button" name="cancel" class="go" value="Thoát"></a>
      <input type="submit" name="login" class="go" value="Đăng nhập">
  </p>
</form>