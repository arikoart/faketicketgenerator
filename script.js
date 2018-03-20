$(document).ready(function() {
	
	$("#airlineselect").change(function(){
		var newaction= this.value + ".php";
		$("#ticket").attr('action', newaction);
		$(".nomandatory").fadeOut();
		var appear= $("."+this.value);
		appear.fadeIn();
	});
	
}); 
