$("#regBT").on("click",function(e){

	e.preventDefault();
	var ref = $("#referal").val()!='' ? $("#referal").val() : 'NA'	;
	if(!checkifValid(document.querySelector("#regname"))  || !checkifValid(document.querySelector("#regpassw")) || !checkifValid(document.querySelector("#coll_name")))
		return;
	$.ajax({
		method: 'post',
		url : 'reg.php',
		data: 'name=' + $("#name").val() + '&username='+$("#regname").val()+'&pass='+$("#regpassw").val()+'&coll_name='+$("#coll_name").val()+'&refer='+ref+'&phoneno='+$("#phoneNo").val()
	}).done(function(d){
		if(d==1){
			$(".msg").html("Opening dashboard.");
			$(".msg").siblings().remove();
			$("#pop").children().remove();
			$("#pop").css({"left":"10%","top":"15%"});
			$("#pop").load("/reg/index.php");
		}else if(d==0)
			$(".msg").html("Already registered. Login to continue.");
	}).fail(function(d){
		$(".msg").html("<font color='red'>500 Server error.Try another time.</font>");

	});

});

$(document).on("keyup",function(e){
	if(e.which == 27){
		unpop();
	}
});
function checkifValid(elem){
	if(!elem.checkValidity()){
		return false;
	}else return true;
}
$("#logBT").on("click",function(e){
	e.preventDefault();
	if(!checkifValid(document.querySelector("#username")) || !checkifValid(document.querySelector("#passWord")))
		return;
	$.ajax({
		method: 'post',
		url : 'log.php',
		data: 'username='+$("#username").val()+'&pass='+$("#passWord").val()
	}).done(function(d){
		if(d==1){
			setTimeout(function(){
				$(".msg").siblings().remove();
				$("#pop").children().remove();
				$("#pop").load("reg/index.php");
				$("#pop").css({"left":"10%","top":"15%"});
			}, 2000);
		}else if(d==0){
			$(".msg").html("<font color='red'>Incorrect password.</font>");
		}else if(d==3){
			$(".msg").html("<font color='red'>Incorrect username.</font>");
		}else {

			$(".msg").html("<font color='red'>Error.</font>");
		}
	}).fail(function(d){
		$(".msg").html("<font color='red'>500 Server error.Try another time.</font>");

	});
});
function redify(elem){
	if(!checkifValid(elem)){
		elem.style.border='1px solid red';
	}else {
		elem.style.border='none';
	}
}
$(document).ready(function () {
	var d= [];

	$(document).on("click","#button",function(){
		var toAdd = $("#members").val();
		if(!checkifValid(document.querySelector("#members"))){
			$("#log").html("<font color='red'>Add a member first.</font>")
			return;
		}else 
		$("#log").html("");

		if(d.indexOf(toAdd)==-1){
			$('.list').append('<div class="item">' + toAdd + '</div>');
			$('.list:even').css({"background-color":"#ffffff;"});
			$('.item').filter(':even').css("background-color", "#f1f1f1");
			d.push(toAdd);
		}else {
			$("#log").html("<font color='red'>Member already added.</font>")
		}
	});
	$(document).on("click","#subTeam",function(){

		if(!checkifValid(document.querySelector("#tname")) ){
			$("#log").html("<font color='red'>Give a name to your team.</font>")
			return;	
		}else if( $("#events").val()==""){
			$("#log").html("<font color='red'>Select an event.</font>")
			return;
		}else if(d.length==0){
			$("#log").html("<font color='red'>Add a member.</font>")
			return;
		}
		var ch = $("#checker").is("checked") ? 1 : 0;
		$.ajax({
			method: 'post',
			url : './setTeam.php',
			data: 'event=' + $("#events").val()+'&name='+$("#name").val()+'&members='+JSON.stringify(d)+'&team='+$("#tname").val()+'&hospi='+ch
		}).done(function(d){
			console.log(d);
			if(d==0){
				$("#log").html("<font color='red'>Team already exists.</font>");
				//window.location.href='https://www.thecollegefever.com/events/exodia-59cpkdHsPN';
				return;
			}else if(d==1){
				$("#log").html("");
				$("#log").append("<span>Team name : " + $("#tname").val() + "<a href='https://www.thecollegefever.com/events/exodia-59cpkdHsPN'>Proceed to payment</a></span>");
			}

		}).fail(function(d){
			$("#log").html(d);

		});
	});
	$(document).on('click', '.item', function() {
		var ind = d.indexOf($(this).text());
		if (ind > -1) {
			d.splice(ind, 1);
		}
		$(this).fadeOut(200);
	});

});
window.addEventListener('load', function() {$('body').addClass('loaded');});
function POP(){
	$("#pop").css("display","block");
	$("#det").show();
	$("#login").hide();
	$("#frm").hide();
	$(".background-image,.header,.scroll").css("opacity","0.7");
}

function unpop(){
	$("#pop").hide();
	$(".background-image,.header,.scroll").css("opacity","1");
}