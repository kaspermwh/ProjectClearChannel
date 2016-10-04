$(document).ready(function() {
	$("#right-panel").hide();
	$(window).load(function() {
		$("#buttons").click(function() {
			$("right-panel").slideToggle(400);
		});
	});
});