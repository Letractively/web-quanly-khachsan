<?php

$act = "";
    if (isset($_GET['act']))
        $act = $_GET['act'];
    //{
    if($act=="profile")
    {
        ?>
<div id="midpage-post">
    <?php
        include_once 'include/workpages/workmidpage.php';
        ?>
</div>
<?php
    }
 else {
?>
<div id="midpage-slideimage">
<?php
     include 'include/mainpages/slidermidpage.php';
?>
</div>
<div>
    <img style="margin-top: 3px;" src="pageimages/image/banner_border_bottom.gif">
</div>
<div id="midpage-post">
    <?php
    include 'include/mainpages/midleft.php';
     
    switch ($act) {
        case "roomkinds":
    ?>
            <div id="midpage-post-main">
                <?php
                    require_once 'include/subpages/roomkinds.php';
                ?>
            </div>
    <?php
            break;
        case "services":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'include/subpages/services.php';
                ?>
            </div>
    <?php
            break;
        case "images":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'include/subpages/images.php';
                ?>
            </div>
    <?php
            break;
        case "news":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'include/subpages/news.php';
                ?>
            </div>
    <?php
            break;
        case "feedback":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'include/subpages/feedback.php';
                ?>
            </div>
    <?php
            break;
        case "contact":
    ?>
    <div id="midpage-post-main">
                <?php
                    require_once 'include/subpages/contact.php';
                ?>
            </div>
    <?php
            break;
        default:
            ?>
            <div id="midpage-post-main">
                <?php
                    require_once 'include/subpages/homepage.php';
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