//javascript functions


jQuery(document).ready(function($){
	$(document).on('click','.open-categories > a', function(e){
		e.preventDefault();
		//console.log('CLICKED ON THE OPEN SEARCH')
		
		$('.my-category').slideToggle(200);
	});
});

$('#left').bind('mousewheel', function (e) {
    if (!(e.originalEvent.wheelDelta == 120)) {
        var top = parseInt($("#child").css("top"));
        $("#child").css("top", (top - 100) + "px");
        top = parseInt($("#child").css("top"));
        if (top <= -1) {
            setTimeout(function () {
                $("#child").css("top", "-100px");
            }, 100);
        }
    } else {
        var top = parseInt($("#child").css("top"));

        $("#child").css("top", (top + 100) + "px");
        top = parseInt($("#child").css("top"));
        if (top > -100) {
            setTimeout(function () {
                $("#child").css("top", "0");
            }, 100);
        }
    }
});




jQuery(document).ready(function($){
	$(document).on('click','.open-search > a', function(e){
		e.preventDefault();
		//console.log('CLICKED ON THE OPEN SEARCH')
		
		$('#child form').animate({width:'toggle'},500);
	});
});










