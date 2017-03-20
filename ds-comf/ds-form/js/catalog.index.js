dsC(document).ready(function(){
	dsC(this).on("click","#price-slide-bt",function(){
		slide = dsC(this).next();
		if(slide.css("display") == "none") { dsC("#price-slide #slide").slideUp(300); slide.stop(false,true).slideDown(500); }
		else slide.stop(false,true).slideUp(500);
	});
});