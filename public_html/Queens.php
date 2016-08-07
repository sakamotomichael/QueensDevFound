<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset = "UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Makes sure that it fits the page regardless of screen size-->
<meta name="viewport" content = "width=device-width, initial-scale = 1">
<title>Developers' Foundation - Queen's Chapter</title>

<link rel = "stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CaptionHoverEffects/component.css" />
<link rel="stylesheet" type="text/css" href="HeaderEffect/component.css" />


<link rel="icon" type="image/ico" href="DFFavicon.ico">

<style>

@font-face {
	font-family: 'JosefinSans Regular';
	src: url('JosefinSans-Regular.ttf') format('truetype');
}

.WWDtext{
	font-size:150%;
	font-family: "JosefinSans Regular";
}

.button{
	background-color: #F7F7F7;
	border: none;
	color: #63768D;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size:150%;
	font-family: "JosefinSans Regular";
	border-radius: 2px;
	margin-top:10px;
}


.fade-background{
-moz-transition: all .2s ease-in;
-o-transition: all .2s ease-in;
-webkit-transition: all .2s ease-in;
transition: all .2s ease-in;
}

.fade-background:hover{
background-color: white;
color:black;
border-radius:15px;
}

.mainWrap {
  max-width:900px;
  width:80%;
  margin:0 auto;
  padding-bottom:100px;
}

.name,
.email {
  width:49%;
  border:0;
  background:#fff;
  padding:20px;
  font-size:1.2em;
  font-family:"JosefinSans Regular";
  box-shadow:4px 4px 0px rgba(0,0,0,.1);
  color:#111;
}

::-webkit-input-placeholder {
  color: #696969;
}

:-moz-placeholder {
 color: #696969; 
}

::-moz-placeholder {  
 color: #696969;
}

:-ms-input-placeholder {  
 color: #696969;
}

.name {
  float:left;
}

.email {
  float:right;
}

.mainArea {
  width:100%;
  box-shadow:4px 4px 0px rgba(0,0,0,.1);
  font-size:1.4em;
  margin-top:20px;
  padding:20px;
  font-family:"JosefinSans Regular";
  color:#111;
  height:400px;
  resize:none;
}

.bigBtn {
  width:100%;
  padding:20px;
  text-align:center;
  margin-top:20px;
  font-size:2em;
  font-family:"JosefinSans Regular";
  background:#8AC6D0;
  color:#fff;
  cursor:pointer;
}

/* Landscape mobile & down */
@media (max-width: 30em) {
  .wrap h1 {
    font-size:2.3em;
    letter-spacing:0;
  }
  
  .wrap p {
    font-size:1.1em;
    line-height:1.4em;
  }
  
  .name,.email {
    width:100%;
  }
  
  .email {
    margin-top:20px;
  }
  
  .bigBtn {
    font-size:1em;
  }
}

.formbutton{
    background-color: #8AC6D0;
    border: none;
    color: white;
    padding: 15px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 2em;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:5px;
}

</style>

</head>

<body>
<div class="container-fluid">


    <div class="row" style="background-image:url(QueensHeaderBW.jpg);background-repeat: no-repeat;
	background-size:cover;height:100vh;"> <!--Navbar and titleImage row-->
    	<div class="navbar navbar-default navbar-fixed-top" style="background-color:white;padding-top:10px;padding-bottom:10px;">
            	<div class="container">
                	<div class="navbar-header">
                    <a href="#" class="navbar-brand" style="font-family:'JosefinSans Regular';font-size:150%;">
                    Developer's Foundation
                    </a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    </div>
                    
                    <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right" style="font-family:'JosefinSans Regular';font-size:150%">
                   		<li><a href="#" id="button1" >About</a></li>
                        <li><a href="#" id="button2">What we do</a></li>
                        <li><a href="#" id="button3">Portfolio</a></li>
                        <li><a href="#" id="button4">Contact</a></li>
                    </ul>
                        
                    
                    </div>
                </div>
	</div>
    
    	<div class="col-12-lg container-fluid">
        	<div class="row demo-3">
    			<div class="col-lg-12">
                	<div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <h1 class="main-title"><b>Developers' Foundation</b><br />Queen's Chapter</span></h1>
                	</div>
            	</div>           
			</div>
        </div>
	</div>

  
    
    <div class="row About" style="padding-bottom:50px;"> <!--About section-->
		<div class="col-lg-10 col-md-offset-1">
        	<div class="row"><!--About row-->
            	<div class="col-lg-10">
            		<div class="col-lg-8 col-md-offset-2" style="padding-bottom:20px; padding-top:20px;">
            			<h1 style="font-size:400%; font-family:'JosefinSans Regular';">About</h1>	
                	</div>
            	</div>
            </div><!--Close about row-->
            
            <div class="row"> <!--Picture and description row-->
            	<div class="col-lg-6 text-center"> <!--Image column-->
 					<img src="Granthall.JPG" style="border:2px solid black; border-radius: 5px; margin-top: 10px; margin-bottom: 10px;" class="img-responsive center-block">
				</div> <!--Close Image column-->
            
            	<div class="col-lg-6"> <!-- Description column-->
            		<div class="col-lg-10" style="font-size:150%; font-family:'JosefinSans Regular'; text-align:justify;padding-top:20px;padding-bottom:20px;">
            			<h2><b>Every company deserves to be recognized</b></h2>
            			<br />
        				<p> We're a team of students and aspiring web designers which serve as a subteam for Developers' Foundation. 			</p>
						<p> In charge of operations at Queen's University and the city of Kingston, we primarily seek out NPOs in the city and assist them in establishing an online presence.
						</p>	
                        
					</div>
            	</div> <!-- Close Description column-->
            </div>     
        </div>
	</div><!--Close about section-->
    
    <div class="row WhatWeDo" style="padding-bottom:40px; background:url(zwartevilt.png);"> <!--WhatWeDo section-->
    
		<div class="col-lg-10 col-md-offset-1" style="color:white;"> <!--column for centering -->
        
        	<div class="row"> <!--WhatWeDo title-->
        		<div style="text-align:center;">
            		<h1 style="font-size:400%; font-family:'JosefinSans Regular';">What we do</h1>	
            	</div>
            </div><!--Close WhatWeDo title-->
            
            <div class="row" style="padding-bottom:20px"> <!--3 panels section-->
            
      			<div class = "col-lg-10 col-md-offset-1">
                
            	<div class="col-lg-4  col-md-4 col-sm-12 fade-background"><!--EstablishAConnection Section-->
            		<div class="row text-center">
            			<h2 style="font-family:'JosefinSans Regular';">Establish a connection with us</h2>
            		</div>
            			<div class="text-center" style="padding-top:20px;padding-bottom:20px;">
            				<span style="font-size:8em; color:#0000FF;" class="glyphicon glyphicon-link"></span>
            			</div>
  			
  					<div class="WWDtext row">
            			<div class="col-lg-10 col-md-offset-1" style="text-align:justify;">
							<p> If you're an NPO, we're here to help you establish an online presence for little to no cost. </p><p>We would love to help you. Contact us and we can get you started. </p>
						</div>
           			 </div>
				</div> <!-- Close EstablishAConnection Section-->
            
           		<div class="col-lg-4 col-md-4 col-sm-12  fade-background"> <!--WeMakeYourWebsite Section-->
            		<div class="row text-center">
            			<h2 style="font-family:'JosefinSans Regular';">We create your website</h2>
            		</div>
            			<div class="text-center" style="padding-top:20px;padding-bottom:20px;">
            				<span style="font-size:8em; color:#FFFF00" class="glyphicon glyphicon-file"></span>
                            <!--#212A8F dark blue-->
                            <!--#F9FF8C-->
            			</div>
            
            		<div class="WWDtext row">
            			<div class="col-lg-10 col-md-offset-1" style="text-align:justify;">
        					<p> Our development team is comprised of four aspiring web developers.</p>
							<p> We'll be in constant contact with you to ensure that you have the perfect website that your NPO deserves. </p>
						</div>
            		</div>
         		</div><!--Close WeMakeYourWebsite Section-->
            
            
            	<div class="col-lg-4  col-md-4 col-sm-12 fade-background"> <!-- YourSiteWillBeHosted section-->
            		<div class="row text-center">
            			<h2 style="font-family:'JosefinSans Regular';">Your site will be hosted</h2>
            		</div>
            			<div class="text-center" style="padding-top:20px;padding-bottom:20px;">
            				<span style="font-size:8em; color:#FF0000;" class="glyphicon glyphicon-globe"></span>
                            <!--#D60909-->
            			</div>
                        
            		<div class="WWDtext row">
            			<div class="col-lg-10 col-md-offset-1" style="text-align:justify;">
            				<p> The website we create for you will be hosted using Heroku, with no initial or monthly costs.
</p>
							<p> Your site will be on the internet for as long as it needs to be.</p> </div>
            			</div>
            		</div>
            	</div> <!--Close YourSiteWillBeHosted section-->
                
                 </div>
        	</div> <!--Close column for centering -->
		</div><!--Close WhatWeDo section-->
    
    
    <div class="row Portfolio" style="font-family:'JosefinSans Regular'; background:url(cream_dust.png);"><!--Portfolio section-->
    	<div class="col-lg-8 col-md-offset-2">
        
        	<div class="row"> <!--Portfolio title-->
            	<div style="text-align:center;">
            		<h1 style="font-size:400%; font-family:'JosefinSans Regular';">Portfolio</h1>	
            	</div>
			</div><!--Close Portfolio title-->
            
            <div class="row"> <!--Portfolio info-->
            	This section is under construction, check back soon!
                <ul class="grid cs-style-3">
					<li>
						<figure>
							<img src="blue.jpg" alt="img01">
							<figcaption>
								<h3>Site 1</h3>
								<span>Coming soon!</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
					
                    <li>
						<figure>
							<img src="blue.jpg" alt="img01">
							<figcaption>
								<h3>Site 2</h3>
								<span>Coming soon</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="blue.jpg" alt="img01">
							<figcaption>
								<h3>Site 3</h3>
								<span>Coming soon</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="blue.jpg" alt="img01">
							<figcaption>
								<h3>Site 4</h3>
								<span>Coming soon</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>

				</ul>
                
            </div> <!--Close Portfolio info-->
      
        </div>
    </div> <!--Close portfolio section-->
    
    <div class="row Contact" style="font-family:'JosefinSans Regular'; padding-bottom:40px;background:url(black_lozenge.png);"> <!--ContactUS Section-->
    
		<div class="col-lg-8 col-md-offset-2">
        
        	<div class="row">
            <div class="col-lg-12 text-center">
        	<h1 style="font-size:350%; padding-bottom:20px; color:white;">Let's initiate a connection</h1>
            </div>
            </div>
            
            <div class="row" style="background:url(cream_dust.png)">
			<div class="col-lg-12">
            	<div class="row text-center formTitle">
                <h1>Hey Developers' Foundation Queen's team! I am:</h1>
                </div>
				<div class="row">
                	<div class="col-lg-8 col-md-offset-2">
                    <div class="row">
                    
            		<div class="col-lg-6 text-center" style="padding-top:20px;padding-bottom:20px;">
                	<button type="button" class="formbutton" id="npobutton">An NPO</button>
               	 	</div>
                
               		<div class="col-lg-6 text-center" style="padding-top:20px;padding-bottom:20px;">
                	<button type="button" class="formbutton" id="studentbutton">A Student</button>
                	</div>
                    
                    </div>
                    </div>
           		</div>
            
            	<div class="row">
                <div class="col-lg-12">
                
            	<form action="" class="mainWrap npoForm form-email" method="post" data-form-type="nob">
  				<input placeholder="Name (NPO)" type="text" class="name form-input-name" />
  				<input placeholder="Email Address" type="email" class="email form-input-email" />
  				<textarea placeholder="Enter your message" class="mainArea form-input-message"></textarea>
  				<button class="bigBtn"><i class="fa fa-inbox"></i> Send your Message</button>
				</form>
                
                <form action="" class="mainWrap stuForm form-email" method="post" data-form-type="nob">
  				<input placeholder="Name (Student)" type="text" class="name form-input-name" />
  				<input placeholder="Email Address" type="email" class="email form-input-email" />
  				<textarea placeholder="Enter your message" class="mainArea form-input-message"></textarea>
  				<button class="bigBtn"><i class="fa fa-inbox"></i> Send your Message</button>
				</form>
            	</div>     
                </div>    
       		</div>
    		</div>
            
            
            
         	<div class="row" style="padding-top:40px;">
            <div class="col-lg-12 text-center">
        	<p style="font-size:150%;color:white;"> You can also visit the <a href="https://developersfoundation.ca/">main Developers' Foundation website</a> for more information about Developers' Foundation in general. </p>
            </div>
            </div>
        </div>
        
	</div> <!--Close ContactUS Section-->
    
    <div class="row" style="font-family:'JosefinSans Regular';padding-bottom:20px; background-color:black;"> <!--Footer-->
		<div class="col-lg-12">
        	<div class="col-lg-10 col-md-offset-1" style="font-size:150%; padding-top:20px;color:white;">
        		Copyright © 2016. Developers' Foundation. All rights reserved.
        	</div>
        </div>
	</div><!--Close Footer-->
           
</div> <!-- Close main container-->

<script src="jquery-3.0.0.min.js"></script>
<script src="bootstrap.js"></script>
<script src="MailerFiles/main.js"></script>
<script src="CaptionHoverEffects/toucheffects.js"></script>
<script src="CaptionHoverEffects/modernizr.custom.js"></script>

<script src="HeaderEffect/TweenLite.min.js"></script>
<script src="HeaderEffect/EasePack.min.js"></script>
<script src="HeaderEffect/rAF.js"></script>
<script src="HeaderEffect/demo-3.js"></script>

</body>
</html>

<script>
	$(document).ready(function(){
		

		<!-- SCROLL TO -->
		
		$("#button1").click(function() {
			$('html, body').animate({
				scrollTop: $(".About").offset().top -50
			}, 1500);
		});
		
		$("#button2").click(function() {
			$('html, body').animate({
				scrollTop: $(".WhatWeDo").offset().top -100
			}, 1500);
		});
		
		
		$("#button3").click(function() {
			$('html, body').animate({
				scrollTop: $(".Portfolio").offset().top -100
			}, 1500);
		});
		
		$("#button4").click(function() {
			$('html, body').animate({
				scrollTop: $(".Contact").offset().top -50
			}, 1500);
		});
		
		<!--Form hide/show-->
		
		$('.npoForm').hide();
		$('.stuForm').hide();
	
	
		$( "#npobutton" ).click(function() {
			$('.stuForm').hide();
			$('.npoForm').fadeIn(1000);
			$('html, body').animate({
				scrollTop: $(".formTitle").offset().top -100
			}, 1000);
		});
	
		$( "#studentbutton" ).click(function() {
			$('.npoForm').hide();
			$('.stuForm').fadeIn(1000);
			$('html, body').animate({
				scrollTop: $(".formTitle").offset().top -100
			}, 1000);
		});
		
			
	});
	
</script>
