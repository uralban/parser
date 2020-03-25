$(function(){
	$("#parseForm").on("submit", function(){
		$("#resultDiv").html("<img src=\"/img/loading.gif\">");
		$.ajax({
			url: "parsHandler.php",
			type: "POST",
			data: $("#parseForm").serialize(),
			success: function(msg){
				$("#resultDiv").html(msg);
			}			
		});
		return false;
	});
});