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
        case "changepro":
                    require_once 'include/workpages/changeprofile.php';
            break;
        case "booking":
                    require_once 'include/workpages/bookingform.php';
            break;
        case "paying":
                    require_once 'include/workpages/payform.php';
            break;
        case "spending":
                    require_once 'include/workpages/spendingform.php';
            break;
        case "useservice":
                    require_once 'include/workpages/useservice.php';
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
