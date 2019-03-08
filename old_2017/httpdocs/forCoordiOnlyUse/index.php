<html>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
$('document').ready(function(){
$('#subTeam').click(function(){
var temp = $('a').attr('myval');
var choice = $('#events').find(":selected").attr("value");
$.post('api.php', {id:choice}, function(data){

$('#display').html(data);

});

});

});

</script>

<body>
<form name="checkListForm" action="#" style="margin-left: -9px !important ;background: transparent;">
		<select id="events" >
			<option value="">Choose an event:</option>

			<option value="all">All</option>
<!--			<option value="pay">Payment</option>-->
			<optgroup label="Technical">
				<option value="junk">Junkyard Wars</option>
				<option value="robo">RoboWars</option>
				<option value="IOT">IOT(Internet of things)</option>
				<option value="hurdle">Hurdle Rush</option>
				<option value="dump">Dump It</option>
				<option value="laser">LaserTag</option>
				<option value="line">Line follower</option>
				<option value="nirman">Nirman</option>
				<option value="biotech">Biotech</option>
			</optgroup>
			<optgroup label="Workshops">
				<option value="cloud">Cloud Computing</option>
				<option value="hacking">Hacking</option>
				<option value="3d">3D Animation</option>
			</optgroup>
			<optgroup label="Cultural">
				<option value="idol">Exodia Idol</option>
				<option value="sync">Synchronians</option>
				<option value="seno">Senorita</option>
				<option value="band">Band Slam</option>
				<option value="groove">Groove Fanatics</option>
				<option value="cotoure">Couture</option>
				<option value="street">Street Soul</option>
				<option value="canvas">Canvas</option>
				<option value="surv">Survivor</option>
				<option value="liar">Biggest Liar</option>
			</optgroup>
			<optgroup label="Fray">
				<option value="csgo">CS</option>
				<option value="nfs">NFS</option>
				<option value="fifa">Fifa</option>
			</optgroup>
		</select><br><br>
		<input type="button" id="subTeam" value="Submit" />			
	</form>
<div id="display"></div>
</body>
</html>
