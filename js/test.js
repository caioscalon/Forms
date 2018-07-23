$('.more-detail').click(function(){
	var row = $(this).parent().parent();
	var data = [];
	$("#result-content").empty();
	$(row).find('td').not(0).each(function(){
		data.push($(this).text());
		$("#result-content").append($(this).clone());
	});
	$('#result-modal').modal();
	console.log(data);
  });