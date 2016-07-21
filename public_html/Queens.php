<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Developers' Foundation - Queen's Chapter</title>

<link rel="stylesheet" type="text/css" href="QueensCSS.css" />

<script src = "jquery-3.0.0.min.js"></script>

<link rel = "icon" type = "image/ico" href = "DFFavicon.ico">
</head>

<body>

<div id = "navigationBar">

<div style = "width:70%; margin-left:auto;margin-right:auto;">


<div id = "devFoundation">
Developer's Foundation
</div>


<div id = "buttons">
<button class = "button" id = "button2">About</button>
<button class = "button" id = "button3">Our Services</button>
<button class = "button" id = "button4">Contact</button>
</div>

<div style="clear: both;"></div>
</div>
</div>


<div class = "Section1">
<h1 id = "title1">Developers' Foundation</h1>
<p id = "message">Queen's Chapter</p>
</div>

<div class = "Section2">
<div style="width: 100%;">
<div id = "content2">
<h1 id = "title2">About</h1>

<div style = "float:left; width:50%;">
<img src="Granthall.jpg" height = "50%" width = "80%" style = "border:2px solid black; border-radius: 5px;">
</div>

<div style = "float:left; width:50%;">
<div style = "padding-top:5vh;">
<p>
We're a team of students and aspiring web designers which serve as a subteam for Developers' Foundation. 
</p>
<p>
In charge of operations at Queen's University and the city of Kingston, we primarily seek out NPOs in the city and assist them in establishing an online presence.
</p>
</div>
</div>

<div style="clear: both;"></div>

</div>
</div>
</div>

<div class = "Section3">
<h1 id = "title3">Our Services</h1>
<div style="width: 100%;">
<div id = "content3">

<div style = "float:left; width:33%;margin-right:0.5%">
<h2 style = "text-align: center;">Contact us</h2>
<br />
<div style="height:10vh; width:30%;display: block; margin-left:auto; margin-right:auto;">

<img src="Contact.png" height = "100%" width = "100%" style = "display: block; margin-left:auto; margin-right:auto;"/>

</div>
<div style = "width:80%;display: block; margin-left:auto; margin-right:auto;">
<p>
Are you an NPO in Kingston or a club with NPO connections looking to get online? 
</p>
<p>
We're here to help you for little to no cost. Contact us and we can get you started. You'll be directed to this team.
</p>
</div>
</div>

<div style = "float:left; width:33%;margin-right: 0.5%;">
<h2 style = "text-align: center;">We'll create your website</h2>
<br />

<div style="height:10vh; width:30%;display: block; margin-left:auto; margin-right:auto;">
<img src="Create.png" height = "100%" width = "100%" style = "display: block; margin-left:auto; margin-right:auto;"/>
</div>

<div style = "width:80%;display: block; margin-left:auto; margin-right:auto;">
<p>
Our team is comprised of four aspiring web developers and business students. 
</p>
<p>
We'll be in constant contact with you to ensure that you have the perfect website for your company. 
</p>
</div>
</div>

<div style = "float:left; width:33%;">
<h2 style = "text-align: center;">Hosting your site</h2>
<br />

<div style="height:10vh; width:30%;display: block; margin-left:auto; margin-right:auto;">
<img src="Host.png" height = "100%" width = "100%" style = "display: block; margin-left:auto; margin-right:auto;"/>
</div>


<div style = "width:80%;display: block; margin-left:auto; margin-right:auto;">
<p>
The website we create for you will be hosted on the Developers' Foundation servers.
</p>
</div>
</div>

<div style="clear: both;"></div>

</div>
</div>
</div>

<div class = "Section4">
<div style="width: 100%;">
<div id = "content4">
<h1 id = "title4">Contact</h1>
<div style = "margin-bottom:5%;">
<p>
Visit the <a href="https://developersfoundation.ca/">main Developers' Foundation website</a> for more information. You will be directed to us if you are situated in the Kingston area.
</p>
</div>
<button class = "button" id = "backToTop">Back to top</button>
</div>
</div>
</div>

<div style = "height: 10vh; width:100%; background-color:#0A0E24; color:white">
<div id = "footer">
Copyright © 2016. Developers' Foundation. All rights reserved.
</div>
</div>


</body>
</html>

<script>
	$(document).ready(function(){
		
		<!-- BUTTONS -->
		$('#buttons').hide();
		
		setTimeout(function(){
			$('#buttons').css({visibility: "visible"}).fadeIn(1500);
		},1000); 
		
		$('#devFoundation').hide();
		
		setTimeout(function(){
			$('#devFoundation').css({visibility: "visible"}).fadeIn(1500);
		},1000); 
		
		
		
		
		
		
		
		$(".button").hover(function(){
			$(this).css("background-color","#D2D6D9");
		},function(){
    		$(this).css("background-color","");
			$(this).css("border","");
  		});
		
		<!-- SCROLL TO -->
		
		$("#button2").click(function() {
			$('html, body').animate({
				scrollTop: $(".Section2").offset().top
			}, 1500);
		});
		
		$("#button3").click(function() {
			$('html, body').animate({
				scrollTop: $(".Section3").offset().top
			}, 1500);
		});
		
		
		$("#button4").click(function() {
			$('html, body').animate({
				scrollTop: $(".Section4").offset().top
			}, 1500);
		});
		
		$("#backToTop").click(function() {
			$('html, body').animate({
				scrollTop: $("#navigationBar").offset().top
			}, 1500);
		});
		
		<!-- ONE -->
		
		$('#title1').hide();
		$('#title1').css({visibility: "visible"}).fadeIn(1500);
		
		$('#message').hide();
		setTimeout(function(){
			$('#message').css({visibility: "visible"}).fadeIn(1500);
		},500); 
		
		
	});
	
</script>
