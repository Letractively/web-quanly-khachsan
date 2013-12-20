<?php

$work = "";
    if (isset($_GET['w']))
        $work = $_GET['w'];
    {
    /*if($act=="profile")
    {
        include_once 'include/profile.php';
    }
 else {*/
?>
<div id="workmidpage-contain">
    <?php
     
    switch ($work) {
        case "booking":
                    require_once 'include/workpages/bookingform.php';
            break;
        case "paying":
                    require_once 'include/workpages/payform.php';
            break;
        case "spending":
                    require_once 'include/workpages/spendingform.php';
            break;
        default:
                    require_once 'include/workpages/staffprofile.php';
                break;;
    }
    ?>
</div>
 <?php
 }
 ?>
