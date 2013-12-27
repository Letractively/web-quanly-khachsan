<?php 
ob_start();
session_start();
class DB
{  
    static function Connect($server, $username, $pass, $database)
    {
        $cnn = mysql_connect($server,$username,$pass) or die ('Không kết nối được tới server: ').$server;
        mysql_select_db($database, $cnn) or die('Không kết nối được đến database: ').$database;
        mysql_query("set names 'utf8'");
        return $cnn;
    }
    static function StaticConnect()
    {
        $cnn = mysql_connect('localhost','root','') or die ('Không kết nối được tới server: localhost ');
        mysql_select_db('QLKS', $cnn) or die('Không kết nối được đến database: quanlykhachsan');
        mysql_query("set names 'utf8'");
        return $cnn;
    }
    static function StaticConnect2()
    {
        $mysqli = new mysqli("localhost","root","","quanlykhachsan");
        $mysqli->set_charset("utf8");
        if($mysqli->connect_errno){
            die("Lỗi: ".$mysqli->connect_errno);
        }
        return $mysqli;
    }    
    static function ExecuteQuery($query, $connect)
    {
        $rs = mysql_query($query, $connect) or die('Không thể thực thi truy vấn!');
        mysql_close($connect);
        return $rs;
    }
    
}
//kiem tra quyen da ton tai chua
function capability_exists($capability_name){
    $cnn = DB::StaticConnect();
    $rs = DB::ExecuteQuery("select capability_id from capability where capability_name = '$capability_name'", $cnn);
    if(mysql_num_rows($rs) > 0){
        return true;
    }
    return false;
}
//kiem tra ten dang nhap ton tai chua
function username_exists($username){
    $cnn = DB::StaticConnect();
    $rs = DB::ExecuteQuery("select user_name from user where user_name = '$username'", $cnn);
    if(mysql_num_rows($rs) > 0) return true;
    return false;
} 
//kiem tra user co quyen gi??
function user_can($user_id, $cap){
    $cnn = DB::StaticConnect();
    $rs = DB::ExecuteQuery("select role from user where user_id = '$user_id'", $cnn);
    $urole = mysql_fetch_assoc($rs); 
    $cnn2 = DB::StaticConnect();
    $rs2 = DB::ExecuteQuery("select capability from role where role_id = '".$urole['role']."'", $cnn2);
    $role = mysql_fetch_assoc($rs2); 
    if($role['capability'] == "") return false;
    $caps = unserialize($role['capability']);
    //====
    $cnn3 = DB::StaticConnect();
    $rs3 = DB::ExecuteQuery("select capability_id from capability where capability_name = '$cap'",$cnn3);
    $c = mysql_fetch_assoc($rs3); $ucap = $c['capability_id'];
    if(in_array($ucap, $caps)) return true;
    return false;
}
//kiem tra ten phong ton tai
function room_exists($room_name){
	$cnn = DB::StaticConnect();
    $rs = DB::ExecuteQuery("select tenphong from phong where tenphong = '$room_name'", $cnn);
    if(mysql_num_rows($rs) > 0) return true;
    return false;
}

//kiem tra vai tro ton tai hay chua
function role_exists($role_name){
	$cnn = DB::StaticConnect();
    $rs = DB::ExecuteQuery("select role_name from role where role_name = '$role_name'", $cnn);
    if(mysql_num_rows($rs) > 0) return true;
    return false;
}
//kiem tra loai phong da ton tai hay chua
function roomtype_exists($roomtype_name){
	$cnn = DB::StaticConnect();
    $rs = DB::ExecuteQuery("select loaiphong from loaiphong where loaiphong = '$roomtype_name'", $cnn);
    if(mysql_num_rows($rs) > 0) return true;
    return false;
}
//kiem tra dich vu da ton tai hay chua
function service_exists($service_name){
	$cnn = DB::StaticConnect();
    $rs = DB::ExecuteQuery("select tendv from dichvu where tendv = '$service_name'", $cnn);
    if(mysql_num_rows($rs) > 0) return true;
    return false;
}







//phan trang
function dvd_pagging($pag, $total, $current_url) {
    $output = "";
    if ($total >= 2)
        $output .= "<a href='" . $current_url . "' >Đầu</a>"; 
    if ($pag >= 2)
        $output .= "<a href='" . $current_url. "&paged=". ($pag - 1) . "' ><<</a>";
        
    if ($pag - 4 >= 1) {
        for ($i = $pag - 4; $i <= $pag; $i++) {
            if ($pag == $i)
                $output .= "<span class='current_page'> $i </span>";
            else
                $output .= "<a href='" . $current_url. "&paged=". $i . "' >$i </a>";
        }
    }
    else {
        for ($i = 1; $i <= $pag; $i++) {
            if ($pag == $i)
                $output .= "<span class='current_page'> $i </span>";
            else
                $output .= "<a href='" . $current_url. "&paged=". $i . "' >$i </a>";
        }
    }
    if ($pag + 4 <= $total) {
        for ($i = $pag + 1; $i <= $pag + 4; $i++) {
            if ($pag == $i)
                $output .= "<span class='current_page'> $i </span>";
            else
                $output .= "<a href='" . $current_url. "&paged=". $i . "' >$i </a>";
        }
    }else {
        for ($i = $pag + 1; $i <= $total; $i++) {
            if ($pag == $i)
                $output .= "<span class='current_page'> $i </span>";
            else
                $output .= "<a href='" . $current_url. "&paged=". $i . "' >$i </a>";
        }
    }
    if ($pag < $total)
        $output .= "<a href='" . $current_url. "&paged=". ($pag + 1) . "'>>></a>";
    if ($total >= 2)
        $output .= "<a href='" .  $current_url. "&paged=". $total . "' >Cuối</a>";
    echo "<div style='clear:both;'></div><br/><div class='pagination'>Trang: " . $output . '</div>';
}
?>