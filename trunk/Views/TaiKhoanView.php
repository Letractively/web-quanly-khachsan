<?php
    $date1="2013-12-03";
    $date2="2013-12-05";
    $date1 = explode("-",$date1);
    $date2 = explode("-",$date2);

    $date2=mktime(0,0,0,$date2[2],$date2[0],$date2[1]);
    $date1=mktime(0,0,0,$date1[2],$date1[0],$date1[1]);
    $d=$date2 - $date1;
    $days=abs(floor($d/( 365*24*10)));
    echo $days;
?>