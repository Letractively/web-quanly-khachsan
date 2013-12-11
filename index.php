<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
session_start();
require_once './include/functions.php';
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php ShowTitle(); ?></title>
        <link type="text/css" href="style/indexstyle.css" rel="stylesheet">
        <link type="text/css" href="style/toppagestyle.css" rel="stylesheet">
        <link type="text/css" href="style/midpagestyle.css" rel="stylesheet">
        <link type="text/css" href="style/botpagestyle.css" rel="stylesheet">
        <link type="text/css" href="style/staticpanel.css" rel="stylesheet">
        <link type="text/css" href="style/loginstyle.css" rel="stylesheet">
        <script type="text/javascript" lang="javascript" src="script/jquery.js"></script>
    <script type="text/javascript" lang="javascript" src="script/jquery-ui.js"></script>
    <script type="text/javascript" lang="javascript" src="script/jquery.cycle.all.js"></script>
    <script type="text/javascript" lang="javascript" src="script/tooltip.js"></script>
    <script type="text/javascript" lang="javascript" src="script/viewpage.js"></script>
    <script type="text/javascript" lang="javascript" src="cript/jqueryEasing.js"></script>
    <script type="text/javascript" lang="javascript" src="cript/scroll.js"></script>
    <script type="text/javascript" lang="javascript" src="cript/login.js"></script>
    </head>
    <body>
        <div class="login-bar">
		<a href="#" class="login-button">Đăng Nhập</a>
	</div>
        <div class="overlay"></div>
	<form class="login">
		<div class="login-header">
			<span>ĐĂNG NHẬP</span>
			<a href="#" class="close">x</a>
		</div>
		<div class="login-content">
			<label for="name">Tên đăng nhập:</label>
			<input type="text" placeholder="Username" id="name" class="name"/>
			<label for="pass">Mật khẩu:</label>
			<input type="password" placeholder="password" id="pass" class="pass"/>
			<input type="submit" value="Xác nhận" class="loginsubmit"/>
		</div>
	</form>
<script>

(function($){

	var overlay = $('.overlay');
	var login = $('.login');
	var body = $('body');
	$('.login-button').click(function(e){
		e.preventDefault();
		body.css({'overflow':'hidden'});
		overlay.fadeIn(500,function(){
			login.fadeIn(500);
		})
	});

	$('.close').click(function(e){
		e.preventDefault();
		login.fadeOut(500,function(){
			overlay.fadeOut(500);
			body.css({'overflow':'visible'});
		})
	})
})(jQuery);

</script>
        
        <div id="container"><!--div bao ngoai-->
            <div id="toppage"><!--div phan tren trang web-->
                <?php
                    require_once './include/toppage.php';
                ?>
            </div>
            <div id="midpage"><!--div phan noi dung trang web-->
                <?php
                    require_once './include/midpage.php';
                ?>
            </div>
            <div id="botpage"><!--div phan footer trang web-->
                <?php
                    require_once './include/botpage.php';
                ?>
            </div>
        </div>
        <?php
        // put your code here
        ?>
        <div id="staticpanel">
    <?php
    include_once './include/staticpanel.php';
    ?>
</div>
        
        
        
	
    </body>
</html>
