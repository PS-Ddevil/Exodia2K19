$(document).ready(function(){
$("#submit").click(function(){
$("button").html("Details Recorded!");
var name = $("#name").val();
var email = $("#email").val();
var college = $("#college").val();
var phone = $("#phone").val();
var whatsapp = $("#whatsapp").val();
var birthday = $("#birthday").val();
var gender = $("#gender").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&email1='+ email + '&college1='+ college + '&phone1='+ phone + '&whatsapp1=' + whatsapp + '&birthday1='+birthday+'&gender1='+gender;
if(name==''||email==''||college==''||phone==''||whatsapp=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});