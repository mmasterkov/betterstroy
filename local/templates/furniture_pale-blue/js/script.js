$(function(){

	var MOBILE = false;
	if($(window).width() <= 768){
		MOBILE = true;
	}

	/*$(".js-bg-image").each(function(){
		$(this).css("background-image", "url("+$(this).attr("href")+")");
	});*/

	$('[data-dspopup-id="callme"]').hover(
		function(){
			$(this).find(".fa").addClass("animated tada");
		},
		function(){
			$(this).find(".fa").removeClass("animated tada");
		}
	);

	setHeight($(".dsrb-item"), 0, 100);

	params = {
		padding: 0,
		helpers : {
		    overlay : {
		        css : {
		            'background' : 'rgba(0, 0, 0, 0.9)'
		        },
		        showEarly : false
		    },
		    title	: {
				type: 'over'
			},
		    thumbs: {
		        width  : 150,
		        height : 100
		    }
		},
		arrows : true,
		afterShow : function() {
		    $(".fancybox-wrap").touchwipe({
			     wipeLeft: function() { $.fancybox.next(); },
			     wipeRight: function() { $.fancybox.prev() },		     
			     min_move_x: 20,
			     min_move_y: 20,
			     preventDefaultEvents: true
			});
		},
		onReady: function(){
			if(!$("html").hasClass("no-scroll")){
				$("html").addClass("no-scroll");
			}
		},
		afterClose: function(){
			$("html").removeClass("no-scroll");
		}
	}

	/*if($(window).width() < 768){
		params.prevEffect = 'none';
		params.nextEffect = 'none';
	}*/

	$(".js-fancybox").fancybox(params);
	$("a.fancyimage").fancybox(params); 

	$(".js-dropdown").click(function(event){
		
		if(!MOBILE) return;
		event.preventDefault();

		$(this).parent().toggleClass("active");
	});

	$(".burger").click(function(){
		$(".nav.sf-menu").toggleClass("open");
		$(this).toggleClass("active");
	});

	$(".dots").click(function(){
		$(".sf-contact").toggleClass("open");
		$(this).toggleClass("active");
	});

	// Disable scrolling.
	document.ontouchmove = function (e) {
		if($("html").hasClass("no-scroll")){
			e.preventDefault();
		}
	}

});

$(window).load(function(){
	$(".ph").addClass("loaded");
})


function setHeight($el, inline, add){
    var h = 0;

    if(inline == 0){
    	inline = 999;
    }

    for(var i=0; i < $el.length; i++){
      if(i>0 && i%inline == 0){
        var begin = i-inline,
            end = i;

        if(add > 0){
          h += add;
        }

        $el.slice(begin, end).css('height', h);
        h=0;
      }
      var $curel = $el.eq(i);
      
      if($curel.outerHeight() > h){
        h = $curel.outerHeight();
      }
    }

    if(inline >= $el.length){
      $el.css('height', h);
    }
}