// $('.message a').click(function(){
//    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
// });
$(document).ready(function(){


$('#c_password').change(function()
{
var pass=$('#password').val();
var cpass=$(this).val();
if(pass!=cpass)
{
$(this)[0].setCustomValidity('password not confirmed.');
}
else{
	$(this)[0].setCustomValidity('');

}
});
		$('#email').keyup(function(){
          value=$('#email').val();

$.ajax({
	url:'load.php',
	method:'GET',
	data:{ value:value	 
	}


}).done(function(res){//for sucesses response 
	$("label[for='error-mgs']").html(res).css("color","green");


}).fail(function(res){//for fail response for fail passing value is slightly differently

$("label[for='error-mgs']").html(res.responseText).css("color", "red");
//this is called function chaining

});
});
});