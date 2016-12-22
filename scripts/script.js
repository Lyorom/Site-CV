$(document).ready(function(){

    $(".button-collapse").sideNav();
    
    $('.allsection').hide();

	$('#button4').click(function(){
		$(".allsection").hide();
		$("#contact").fadeIn("slow");
	});
    
    $('#button1').click(function(){
		$(".allsection").hide();
		$("#competences").fadeIn("slow");
	});
    
});