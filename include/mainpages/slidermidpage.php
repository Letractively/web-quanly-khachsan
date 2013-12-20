<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

    <div id="midpage-slideimage-big">
        <div id="bigPic">
            <img src="pageimages/hotelimg/1.png" alt="" />
            <img src="pageimages/hotelimg/2.png" alt="" />
            <img src="pageimages/hotelimg/3.png" alt="" />
            <img src="pageimages/hotelimg/4.png" alt="" />
            <img src="pageimages/hotelimg/5.png" alt="" />
            <img src="pageimages/hotelimg/6.png" alt="" />
            <img src="pageimages/hotelimg/7.png" alt="" />
        </div>
        
    </div>
    <div id="midpage-slideimage-thumb">
        <ul id="thumbs">
            <li class='active' rel='1'><img src="pageimages/hotelimg/1_thumb.png" alt="" onclick="showImage(0)" /></li>
            <li rel='2'><img src="pageimages/hotelimg/2_thumb.png" alt="" onclick="showImage(1)" /></li>
            <li rel='3'><img src="pageimages/hotelimg/3_thumb.png" alt="" onclick="showImage(2)" /></li>
            <li rel='4'><img src="pageimages/hotelimg/4_thumb.png" alt="" onclick="showImage(3)" /></li>
            <li rel='5'><img src="pageimages/hotelimg/5_thumb.png" alt="" onclick="showImage(4)" /></li>
            <li rel='6'><img src="pageimages/hotelimg/6_thumb.png" alt="" onclick="showImage(5)" /></li>
            <li rel='7'><img src="pageimages/hotelimg/7_thumb.png" alt="" onclick="showImage(6)" /></li>
        </ul>
        <script type="text/javascript">
	var currentImage;
    var currentIndex = -1;
    var interval;
    function showImage(index){
        if(index < $('#bigPic img').length){
        	var indexImage = $('#bigPic img')[index]
            if(currentImage){   
            	if(currentImage != indexImage ){
                    $(currentImage).css('z-index',2);
                    clearTimeout(myTimer);
                    $(currentImage).fadeOut(400, function() {
					    myTimer = setTimeout("showNext()", 3000);
					    $(this).css({'display':'none','z-index':1})
					});
                }
            }
            $(indexImage).css({'display':'block', 'opacity':1,'border':'solit 1px gray'});
            currentImage = indexImage;
            currentIndex = index;
            $('#thumbs li').removeClass('active');
            $($('#thumbs li')[index]).addClass('active');
        }
    }
    
    function showNext(){
        var len = $('#bigPic img').length;
        var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
        showImage(next);
    }
    
    var myTimer;
    
    $(document).ready(function() {
	    myTimer = setTimeout("showNext()", 3000);
		showNext(); //loads first image
        $('#thumbs li').fade('click',function(e){
        	var count = $(this).attr('rel');
        	showImage(parseInt(count)-1);
        });
	});
    
	</script>
    </div>


