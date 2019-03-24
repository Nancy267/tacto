$("#sub").click( function() {
	 $.post( $("#myForm").attr("action"), 
     $("#myForm :input").serializeArray(), 
         function(info){
          $("#error").html(info); 
           $('#error').delay(3000).show().fadeOut('slow');
            $(".er").css("background", "#d6c1c1");
   });
 clearInput();
});
 
$("#myForm").submit( function() {
  return false; 
});
 
function clearInput() {
    $("#myForm :input").each( function() {
       $(this).val('');
    });
}
$( ".er" ).click(function() {
   $(".er").css("background", "white");
});
$(document).ready(function(){
$("form").attr('autocomplete', 'off');
});