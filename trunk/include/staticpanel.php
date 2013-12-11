<?php
echo '';
?>
<div class="staticpanel">
    <div id="staticpanel-top" class="staticpanel-line"></div>
    <a href="index.php">
        <div title="Trang Chủ" id="staticpanel-login" class="staticpanel-button" onclick=""><!--Trang chu-->
            <img src="icons/loginico.png" alt="Trang Chủ" class="staticpanel-img">         
        </div>
    </a>
    <a href="index.php?act=thuephong">
        <div title="Cho Thuê Phòng" id="staticpanel-spend" class="staticpanel-button"><!--Cho thue phong-->
            <img src="icons/spend.png" alt="Thuê Phòng" class="staticpanel-img">
        </div>
    </a>
    <a href="index.php?act=datphong">
        <div title="Đặt Phòng" id="staticpanel-booking" class="staticpanel-button"><!--dat phong-->
            <img src="icons/booking.png" alt="Đặt Phòng" class="staticpanel-img">
        </div>
    </a>
    <a href="index.php?act=traphong">
        <div title="Trả Phòng" id="staticpanel-pay" class="staticpanel-button"><!--tra phong-->
            <img src="icons/pay.png" alt="Trả Phòng" class="staticpanel-img">
        </div>
    </a>
</a>
<a href="index.php?act=dangxuat">
    <div title="Đăng Xuất" id="staticpanel-logout" class="staticpanel-button"><!--dang xuat-->
        <img src="icons/logout.png" alt="Đăng Xuất" class="staticpanel-img">
    </div>
</a>
<div id="staticpanel-bot" class="staticpanel-line"></div>
</div>

<script>
    $(window).scroll(function() {
        t = parseInt($(window).scrollTop()) + 40;
        $('.staticpanel').stop().animate({marginTop: t}, 600);
    });



//    $(".staticpanel-img").hover(function() {
//        $(this).height(60);//fadeOut(100);
//        $(this).height(35);//fadeIn(500);
//    });
//    $(".staticpanel-button").hover(function() {
//        $(this).height(65);//fadeOut(100);
//        $(this).height(45);//fadeIn(500);
//    });

    $('.staticpanel-img')
            .mouseenter(function() {
        $(this).parent('.staticpanel-button').width(80);
        $(this).width(75);
        //$(this).fadeOut(1);
        //$(this).;
        $(this).parent('.staticpanel-button').height(75);
        $(this).height(65);
    })
            .mouseleave(function() {
        $(this).parent('.staticpanel-button').width(50);
        $(this).width(45);
        //$(this).fadeOut(500);
        //$(this).fadeIn(100);
        $(this).parent('.staticpanel-button').height(45);
        $(this).height(35);
    });

</script>