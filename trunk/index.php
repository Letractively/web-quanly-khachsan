<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
session_start();
require_once './include/mainpages/functions.php';
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php ShowTitle(); ?></title>
        <!--mainstyle-->
        <link href="hotelicon.ico" rel="icon" type="image/x-icon"/>
        <link type="text/css" href="style/mainpages/indexstyle.css" rel="stylesheet">
        <link type="text/css" href="style/mainpages/midpagestyle.css" rel="stylesheet">
        <link type="text/css" href="style/mainpages/botpagestyle.css" rel="stylesheet">
        <link type="text/css" href="style/mainpages/staticpanel.css" rel="stylesheet">
        <link type="text/css" href="style/mainpages/loginstyle.css" rel="stylesheet">
        <link type="text/css" href="style/mainpages/slideimagestyle.css" rel="stylesheet">
        <link type="text/css" href="style/mainpages/midleftstyle.css" rel="stylesheet">
        <link type="text/css" href="style/mainpages/toppagestyle.css" rel="stylesheet">
        
        <!--substyle-->
        <link type="text/css" href="style/subpages/homestyle.css" rel="stylesheet">
        <link type="text/css" href="style/subpages/servicesstyle.css" rel="stylesheet">
        <link type="text/css" href="style/subpages/roomkindsstyle.css" rel="stylesheet">
        <link type="text/css" href="style/subpages/newsstyle.css" rel="stylesheet">
        <link type="text/css" href="style/subpages/imagestyle.css" rel="stylesheet">
        <link type="text/css" href="style/subpages/feedbackstyle.css" rel="stylesheet">
        <link type="text/css" href="style/subpages/contactstyle.css" rel="stylesheet">
        
        <!--workstyle-->
        <link type="text/css" href="style/workpages/payformstyle.css" rel="stylesheet">
        <link type="text/css" href="style/workpages/bookingformstyle.css" rel="stylesheet">
        <link type="text/css" href="style/workpages/staffprofilestyle.css" rel="stylesheet">
        <link type="text/css" href="style/workpages/spendingformstyle.css" rel="stylesheet">
        <link type="text/css" href="style/workpages/workmidpagestyle.css" rel="stylesheet">
        <link type="text/css" href="style/workpages/addcustomerstyle.css" rel="stylesheet">
        <link type="text/css" href="style/workpages/changeprofilestyle.css" rel="stylesheet">
        <link type="text/css" href="style/workpages/useservicestyle.css" rel="stylesheet">
        
        <!--adminstyle-->
        
    <script type="text/javascript" lang="javascript" src="script/jquery.js"></script>
    <script type="text/javascript" lang="javascript" src="script/jquery-ui.js"></script>
    <script type="text/javascript" lang="javascript" src="script/jquery.cycle.all.js"></script>
    <script type="text/javascript" lang="javascript" src="script/tooltip.js"></script>
    <script type="text/javascript" lang="javascript" src="script/viewpage.js"></script>
    <script type="text/javascript" lang="javascript" src="cript/jqueryEasing.js"></script>
    <script type="text/javascript" lang="javascript" src="cript/scroll.js"></script>
    <script type="text/javascript" lang="javascript" src="cript/login.js"></script>
    </head>
    <body onload="hide()">
        <div id="login-bar" >
            <a href="adminpage/admin.php" class="login-button">Đăng Nhập</a>
	</div>
     
       
	
        <!--
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
        -->
        <div id="container"><!--div bao ngoai-->
            <div id="toppage"><!--div phan tren trang web-->
                <?php
                    require_once './include/mainpages/toppage.php';
                ?>
            </div>
            <div id="midpage"><!--div phan noi dung trang web-->
                <?php
                    require_once './include/mainpages/midpage.php';
                ?>
            </div>
            <div id="botpage"><!--div phan footer trang web-->
                <?php
                    require_once './include/mainpages/botpage.php';
                ?>
            </div>
        </div>
        <?php
        // put your code here
        ?>
        <div id="staticpanel">
    <?php
            if (isset($_SESSION['authentication']))
            {
                include_once './include/mainpages/staticpanel.php';
                ?>
            
            <script>
     
                    function hide(id) {
			if(document.getElementById(login-bar).style.display != 'none'){
				document.getElementById(login-bar).style.display = 'none';
                            }};
              
                
            </script>
            <?php
            }
            
    ?>
            
</div>

        
        
        
	
    </body>
</html>
