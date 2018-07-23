$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  var data = $("table td:first-child").html();
  var status = $("table td:first-child + td").html();
  var obs = $("table td:first-child + td + td").html();
  var actions = $("table td:last-child").html();

  // Append table with add row form on add new button click
  $(".add-new").click(function(){
  $(this).attr("disabled", "disabled");
  var index = $("table tbody tr:last-child").index();
      var row = '<tr>' +
          '<td style="padding-right: 40px; padding-left: 20px">' + data + '</td>' +
          '<td style="padding-right: 25px">' + status + '</td>' +
          '<td style="padding-right: 25px">' + obs + '</td>' +
          '<td>' + actions + '</td>' +
      '</tr>';
    $("table").append(row);		
  $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
      $('[data-toggle="tooltip"]').tooltip();
  });

  // Add row on add button click
  $(document).on("click", ".add", function(){
    var empty = false;
    var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
      if(!$(this).val()){
        $(this).addClass("error");
        empty = true;
      }else{
        $(this).removeClass("error");
      }
  });

  $(this).parents("tr").find(".error").first().focus();
  if(!empty){
    input.each(function(){
      $(this).parent("td").html($(this).val());
    });			
    $(this).parents("tr").find(".add, .edit").toggle();
    $(".add-new").removeAttr("disabled");
  }		
  });
});