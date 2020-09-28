<!DOCTYPE html>
<html>
<head>
	<title>Final year project</title>
</head>
<body>
	
<style >
	body {background-image:url("background.jpg");}
	table,th,td {border:1px solid black; border-collapse:collapse;}
	th,td {padding: 15px;}
	font-size {20px;}
	input{background-color: lightgray;}

	.column
	{
  float: left;
  width: 23.00%;
  padding: 10px;
  height: 200px; 
  border: dotted;
  overflow: hidden;
}
.row:after {
  content: "";
  display: table
  ;
  clear: both;
}
	
</style>
<h1 style="background-color:black; color:white; text-align:center;">Rasbery Pi Based Intelligent Remote Control Car</h1>

<p1 style="background-color:darkblue;  color:white;">
Team Members</p1>
<p>
<table id="table1" style="color:white; background-color:tomato; display:none;">
	<tr>
		<th>NAME</th>
		<th>USN</th>
		<th>BRANCH</th>
		<th>SECTION</th>
	</tr>
	<tr>
		<td>Aditya vaibhav</td>
		<td id="adi">1JS17IS0**</td>
		<td>ISE</td>
		<td>A</td>		
	</tr>
	<tr>
		<td>Alisha Verma</td>
		<td id="ali">1JS17IS0**</td>
		<td>ISE</td>
		<td>A</td>
	</tr>
	<tr>
		<td>Neha UK</td>
		<td id="nuk">1JS17IS0**</td>
		<td>ISE</td>
		<td>A</td>
	</tr>
	<tr>
		<td>Suruchi Patil</td>
		<td id="sp">1JS17IS0**</td>
		<td>ISE</td>
		<td>B</td>
	</tr>

</table><br>
<script >
	function adiChange()
	{
		document.getElementById("adi").innerHTML="1JS17IS007"
		document.getElementById("ali").innerHTML="1JS17IS008"
		document.getElementById("nuk").innerHTML="1JS17IS039"
		document.getElementById("sp").innerHTML="1JS17IS072"
	}

	function hideUSN()
	{
		document.getElementById("adi").innerHTML=" "
		document.getElementById("ali").innerHTML=" "
		document.getElementById("nuk").innerHTML=" "
		document.getElementById("sp").innerHTML=" "
	}

</script>
<button type="button" onclick='document.getElementById("table1").style.display="inline-block"' style="background-color:pink">SEE DETAILS</button>
<button type="button" onclick="adiChange();"> SEE USN</button>
<button type="button" onclick="hideUSN();">HIDE USN</button>
</p>

<p id="date" style="color:blue; font-size:20px;"></p>

<button style="background-color:pink;" onclick="document.getElementById('date').innerHTML=Date();">Todays date</button><br>

<p1 style="background-color:black; color:white; text-align:center;">Things equired for Building the project</p1>

<div class="row">
<div class="column"  style="background-color:powderblue;"><li><a href="https://www.raspberrypi.org/" target="_blank"><u>Rashbery pi<br><img src="rasberry.jpg" width="200" height="200"></a></u></li></div>
<div class="column"  style="background-color:powderblue;"><a href="https://www.amazon.in/s?k=camera+for+raspberry+pi&adgrpid=61642124369&ext_vrnc=hi&gclid=CjwKCAjw5Kv7BRBSEiwAXGDElZBF9MoMBjhdbj0u-l0Y75NgRn3capovxUF4IXywi2t_snXTjX78MhoC9y0QAvD_BwE&hvadid=294143540146&hvdev=c&hvlocphy=9061995&hvnetw=g&hvqmt=e&hvrand=11836517113982922034&hvtargid=kwd-296166622740&hydadcr=21419_1813001&tag=googinhydr1-21&ref=pd_sl_1n3ygsprs_e" target="_blank"><u>Camera upto 2MP<br></u><img src="camera.jpg" width="200" height="200"></a></div>
<div class="column"  style="background-color:powderblue;"><a href="https://www.amazon.in/Techleads-Motor-Shaft-Smart-Arduino/dp/B07SHF1B33/ref=asc_df_B07SHF1B33/?tag=googleshopdes-21&linkCode=df0&hvadid=397009859518&hvpos=&hvnetw=g&hvrand=1270398098593325431&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9061995&hvtargid=pla-839136954177&psc=1&ext_vrnc=hi" target="_blank">4*Cart tyres<br><img src="motor.jpg" width="200" height="200"></a></div>

</div>	


<div style="border: 1px solid black; background-color:white;  text-align: center; padding:15px; font-size:28px; display:inline-block;
"> Faculty Involved in Project</div>

<ul style="font-size:20px;">
	<li><a href="https://scholar.google.co.in/citations?user=FJAfDYsAAAAJ&hl=en" target="_blank"><b>Dr. REKHA PM</b></a></li>
	<li><a href="https://scholar.google.co.in/citations?user=Y6LbBlwAAAAJ&hl=en" target="_blank"><b>Sowmya KN</b></a></li>
</ul>


<style>
	.myStyle{
		border:1px solid black;
		border-collapse: collapse;
		background-color:tomato;
		color: white;
		padding:20px;
		margin: 20px;
		text-align:center;
	}
</style>
<h1><spam style="background-color:white;"><u>Cost Requirement of the project</u></h1>
	<div>
		<ul>
		<li><label  id="cost1"for="cost1">Rasberry pi</label></li>
		<input type="text" name="cost1"><br>
		<li><label id="cost2" for="cost2">camera</label></li>
		<input type="text" name="cost2"><br>
		<li><label  id="cost3"for="cost3">Geared motors</label></li>
		<input type="text" name="cost3"><br>
	</ul>

	</div>>

	
	<h2>Enter the Feature yout want to add</h2>
	<form>
		<label for="instrument">Instrument:</label><br>
		<input type="text" id="instrument" name="instrument" value=""><br>

		<label for="discription">Discription of features:</label><br>
		<input type="text" id="discription" value="">

		<input type="submit" name="submit">
	</form>	
</div>

<form action="<script> if(act1==aditya)
{
	document.getElementsById('act2')='aditya';
}</script>" method="post" id="act1">
  <input type="text" name="fname" required>
  <input type="submit" value="Submit">
  <p1 id="act2"></p1>
</form>
 

</body>
</html>