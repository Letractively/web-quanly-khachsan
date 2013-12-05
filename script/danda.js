$(document).ready(function () {
    var cache = {};
    $("#searchbox").autocomplete({
        minLength: 1,
        source: function (request, response) {
            var term = request.term;
            if (term in cache) {
                response(cache[ term ]);
                return;
            }
            $.getJSON("./ajax/search.php?type=" + $('.rdcheck:checked').val(), request, function (data, status, xhr) {
                cache[ term ] = data;
                response(data);
            });
        }
    });

    $('#selected').parent().slideDown(300).prev().removeClass('expand').addClass('collapse');

    $('.collapse').click(function () {
        if ($(this).hasClass('collapse')) {
            $('.cont-menu ol').slideUp(200);
            $('.expand').removeClass('expand').addClass('collapse');
            $(this).parent().children('ol').slideDown(500);
            $(this).removeClass('collapse').addClass('expand');
        } else if ($(this).hasClass('expand')) {
            $('.cont-menu ol').slideUp(500);
            $('.expand').removeClass('expand').addClass('collapse');
        }
    });
    $('#topcontrol').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
    $('#cycle').cycle({
        fx: 'scrollLeft',
        timeout: 5000
    });
    $('.item').hover(
        function () {
            $('.itemhover', this).fadeIn();
        },
        function () {
            $('.itemhover', this).fadeOut();
        });
    $('.commenttext').keydown(function () {
        if (event.keyCode == 13) {
            var currentdate = new Date();
            var binhluan = $.trim($(this).val());
            if (binhluan.length > 2) {
                $(this).val('').hide();
                $('#posting').fadeIn();
                var nguoibinhluan = $('#taikhoancomment').val();
                var tennguoibinhluan = $('#tentaikhoancomment').val();
                var tailieu = $('#tailieucomment').val();
                $.post("./ajax/comment.php", {TaiKhoan: nguoibinhluan, NoiDung: encodeURI(binhluan), TaiLieu: tailieu}, function (data) {
                    if (data == 1) {
                        $content = '<div class="subcomment"><div class="commentinfo"><p class="commentuser">' + tennguoibinhluan + '</p><p class="commenttime">' + currentdate.getDate() + "/" + (currentdate.getMonth() + 1) + "/" + currentdate.getFullYear() + " " + currentdate.getHours() + ":" + currentdate.getMinutes() + ":" + currentdate.getSeconds() + '</p></div><p class="commentcontent">' + binhluan + '</p></div>';
                        $('#commentlist').append($content);
                        // $('#commentlist .subcomment:last-child') .css({background: "blanchedalmond"});
                        $('.commenttext').show();
                        $('#posting').hide();
                    } else {
                        $('.commenttext').show();
                        $('#posting').hide();
                    }
                });
            }
            else {
                $(this).val(binhluan);
                alert('Bình luận quá ngắn!');
            }
        }
    });
    $('.content-hrefthem').click(function () {
        var sitem = $('.item:hover').attr("item");
        $.get("./ajax/yeuthich.php", {hanhdong: 'them', item: sitem});
        $('.item:hover .content-hrefthem').hide();
        var clone = $('.item:hover img').clone();
        $(clone).appendTo('#container');
        $(clone).css({
            "top": $('.item:hover img').offset().top,
            "left": $('.item:hover img').offset().left,
            "z-index": "999",
            "position": "absolute"
        }).animate({
                opacity: 0.25,
                left: $('#staticpanel-favorite').offset().left,
                top: $('#staticpanel-favorite').offset().top,
                width: '30px',
                height: '30px'
            }, "slow", function () {
                $(clone).hide();
            });
        return false;
    });
    $('.content-hrefxoa').click(function () {
        var sitem = $('.item:hover').attr("item");
        $.get("./ajax/yeuthich.php", {hanhdong: 'xoa', item: sitem});
        $(this).hide();
        return false;
    });
    tooltip(".item img");
    tooltip(".item-slide img");
    viewpage();
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('#topcontrol').fadeIn(500);
    }
    else {
        $('#topcontrol').fadeOut(500);
    }
});

function DangNhap() {
    $('#frmsignin').hide();
    $('#signing').show();
    var username = $('#user-username').val();
    var pass = $('#user-password').val();
    $.get('./ajax/login.php', {Username: username, Password: pass}, function (data) {
        if (data == 0) {
            alert('Sai thông tin đăng nhập!');
            $('#signing').hide();
            $('#frmsignin').show();
        } else if (data == -1) {
            alert('Tài khỏan của bạn đã bị khóa!');
            $('#signing').hide();
            $('#frmsignin').show();
        }
        else {
            $.get('userprofile.php', function (content) {
                $('#user_login').html(content);
            });
        }
    });
    return false;
}

function KiemTraTimKiem() {
    var tuKhoa = $('#searchbox').val();
    tuKhoa = $.trim(tuKhoa);
    if (tuKhoa.length <= 0) {
        alert('Xin nhập từ khóa tìm kiếm');
        return false;
    }
    return true;
}