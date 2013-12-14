<?php

$act = "";
    if (isset($_GET['act']))
        $act = $_GET['act'];
    {
    /*if($act=="profile")
    {
        include_once 'include/profile.php';
    }
 else {*/
?>
<div id="midpage-slideimage">
<?php
     include 'include/slidermidpage.php';
?>
</div>
<div>
    <img style="margin-top: 3px;" src="image/banner_border_bottom.gif">
</div>
<div id="midpage-post">
    <?php
    include 'include/midleft.php';
     
    switch ($act) {
        case "roomkinds":
    ?>
            <div id="midpage-post-main">
                <?php
                    require_once 'roomkinds.php';
                ?>
            </div>
    <?php
            break;
        case "services":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'services.php';
                ?>
            </div>
    <?php
            break;
        case "images":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'images.php';
                ?>
            </div>
    <?php
            break;
        case "news":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'news.php';
                ?>
            </div>
    <?php
            break;
        case "feedback":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'feedback.php';
                ?>
            </div>
    <?php
            break;
        case "contact":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'contact.php';
                ?>
            </div>
    <?php
            break;
        default:
            ?>
            <div id="midpage-post-main">
                <?php
                    require_once 'homepage.php';
                ?>
            </div>
    <?php
                break;;
    }
    ?>
</div>
 <?php
 }
 ?>