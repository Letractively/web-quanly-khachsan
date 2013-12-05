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
    </head>
    <body>
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
    </body>
</html>
