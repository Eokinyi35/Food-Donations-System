$("#sub").click( function(){
	$.post( $("ContactForm").attr("action"), $("#ContactForm :input").serializeArray(), function(info) {$("$result").html(info);} );
	clearInput();
});

$("#ContactForm").submit(function(){
	return false;
});

function clearInput(){
	$("#ContactForm :Input").each(function(){
		$(this).val('');
	});
}