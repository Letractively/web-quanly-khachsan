<?php
echo '';
?>
<div class="staticpanel">
    <div id="staticpanel-top" class="staticpanel-line"></div>
    <a href="index.php?act=profile">
        <div title="Thông Tin Cá Nhân" id="staticpanel-login" class="staticpanel-button" onclick=""><!--Thong tin ca nhan-->
            <img src="pageimages/icons/loginico.png" alt="Thông Tin Cá Nhân" class="staticpanel-img">         
        </div>
    </a>
    <a href="index.php?act=profile&w=spending">
        <div title="Cho Thuê Phòng" id="staticpanel-spend" class="staticpanel-button"><!--Cho thue phong-->
            <img src="pageimages/icons/spend.png" alt="Thuê Phòng" class="staticpanel-img">
        </div>
    </a>
    <a href="index.php?act=profile&w=booking">
        <div title="Đặt Phòng" id="staticpanel-booking" class="staticpanel-button"><!--dat phong-->
            <img src="pageimages/icons/booking.png" alt="Đặt Phòng" class="staticpanel-img">
        </div>
    </a>
    <a href="index.php?act=profile&w=useservice">
    <div title="Dùng dịch vụ" id="staticpanel-logout" class="staticpanel-button"><!--dung dich vu-->
        <img src="pageimages/icons/service.png" alt="Dùng dịch vụ" class="staticpanel-img">
    </div>
</a>
    <a href="index.php?act=profile&w=paying">
        <div title="Trả Phòng" id="staticpanel-pay" class="staticpanel-button"><!--tra phong-->
            <img src="pageimages/icons/pay.png" alt="Trả Phòng" class="staticpanel-img">
        </div>
    </a>
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