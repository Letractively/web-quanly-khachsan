function tooltip(items) {
    var tip = $('.tooltip');
    $(items).mouseover(function() {
        tip.css({opacity: 0.8, display: "none"}).fadeIn(200);
    });
    $(items).mousemove(function(pos) {
        tip.children().html($(this).attr('tip'));
        tip.css({left: pos.pageX + 15, top: pos.pageY + 15});
    });
    $(items).mouseout(function() {
        tip.fadeOut(200);
    });
}
