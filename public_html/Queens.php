<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset = "UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Makes sure that it fits the page regardless of screen size-->
<meta name="viewport" content = "width=device-width, initial-scale = 1">
<title>Developers' Foundation - Queen's Chapter</title>

<link rel = "stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Queens.css" />
<link rel="stylesheet" type="text/css" href="CaptionHoverEffects/component.css" />
<link rel="stylesheet" type="text/css" href="HeaderEffect/component.css" />

<link rel="icon" type="image/ico" href="DFFavicon.ico">

</head>

<body style="overflow-x:hidden;">

<div class="loader" style="width:100%; height: 100vh;">
	<div class="loadermessage">
		Hey there! Welcome to Developers' Foundation Queen's Chapter!
        <br />
        <div>
        <img src="loader.svg" />
        
        </div>
	</div>    
</div>

<div class="container-fluid fullpage" style="display:none;">

  <div class="row" style="background-image:url(QueensHeader.jpg);background-repeat: no-repeat;
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
                    <h1 class="main-title" style="background:rgba(0,0,150,0.3);"><b>Developers' Foundation</b><br />Queen's Chapter</span></h1>
                	</div>
            	</div>           
			</div>
        </div>
	</div>

  
    
    <div class="row About" style="padding-top:50px;padding-bottom:50px;"> <!--About section-->
		<div class="col-lg-10 col-md-offset-1">
        <!--About us title
        	<div class="row">
            	<div class="col-lg-10">
            		<div class="col-lg-8 col-md-offset-2" style="padding-bottom:20px; padding-top:20px;">
            			<h1 style="font-size:400%; font-family:'JosefinSans Regular';">About Us</h1>	
                	</div>
            	</div>
            </div>
            -->
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
    
    <div class="row WhatWeDo" style="padding-bottom:40px;background:url(wwdbackground2.jpg);background-repeat: no-repeat; background-size:cover;background-position:center;"> 
        <div class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2 style="font-size:400%;color:white;font-family:'JosefinSans Regular';">What We Do</h2>
                <div class="line">
                    <hr>
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="pricing-table">
                        <div class="panel" style="border:none;">
                            <div class="controle-header panel-heading panel-heading-landing">
                                <h2 class="services-title panel-title panel-title-landing" style="padding-bottom: 30px">
                                    <b>Connect with us</b></h2>
                                <span style="font-size:6em; color:#0000FF;" class="glyphicon glyphicon-link"></span>
                            </div>

                            <div class="panel-body panel-body-landing">
                                <p class="intro">Whether you're an NPO or a student, we can help you establish an online presence for little to no cost.</p>
                            </div>
                            <div class="panel-footer panel-footer-landing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-table">
                        <div class="panel" style="border: none;">
                            <div class="controle-header panel-heading panel-heading-landing">
                                <h2 class="services-title panel-title panel-title-landing" style="padding-bottom: 30px">
                                    <b>We create your site</b></h2>
                                <span style="font-size:6em; color:#FFFF00" class="glyphicon glyphicon-file"></span>
                            </div>

                            <div class="panel-body panel-body-landing">
                                <p class="intro">We'll create an elegant site based on the specifications you provide for us, along with our own ideas.</p>
                            </div>
                            <div class="panel-footer panel-footer-landing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-table">
                        <div class="panel" style="border: none;">
                            <div class="controle-header panel-heading panel-heading-landing">
                                <h2 class="services-title panel-title panel-title-landing" style="padding-bottom: 30px">
                                    <b>Your site will be hosted</b></h2>
                                <span style="font-size:6em; color:#FF0000;" class="glyphicon glyphicon-globe"></span>
                            </div>

                            <div class="panel-body panel-body-landing">
                                <p class="intro">Your site will be managed and hosted by us where you can request any updates as well as editing the site yourself.</p>
                            </div>
                            <div class="panel-footer panel-footer-landing"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   	</div><!--Close row-->
    
    
    <div class="row Portfolio" style="font-family:'JosefinSans Regular'; background:url(light_wool.png);"><!--Portfolio section-->
    	<div class="col-lg-8 col-md-8 col-md-offset-2">
        
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
    
    <div class="row Contact" style="font-family:'JosefinSans Regular'; padding-bottom:40px;background:url(formbackground4.jpg);background-repeat: no-repeat;background-size:cover;"> <!--ContactUS Section-->
    
		<div class="col-lg-8 col-md-8 col-md-offset-2">
        
        	<div class="row">
            <div class="col-lg-12 text-center">
        	<h1 style="font-size:350%; padding-bottom:20px; color:white;text-shadow: 1px 0 0 #CCC, 0 -1px 0 #CCC, 0 1px 0 #CCC, -1px 0 0 #CCC;"><b>Send us a message - let's initiate a connection.</b></h1>
            </div>
            </div>
            
            <div class="row" style="background:url(cream_dust.png);border-radius:25px;">
			<div class="col-lg-12">
            	<div class="row text-center formTitle">
                <h1>Hey Developers' Foundation Queen's team! I am:</h1>
                </div>
				<div class="row">
                	<div class="col-lg-8  col-md-8 col-md-offset-2">
                    <div class="row">
                    
            		<div class="col-lg-6 col-md-12 col-sm-12 text-center" style="padding-top:10px;padding-bottom:10px;">
                	<button type="button" class="formbutton btn btn-lg" id="npobutton">An NPO</button>
               	 	</div>
                
               		<div class="col-lg-6 col-md-12 col-sm-12 text-center" style="padding-top:10px;padding-bottom:10px;">
                	<button type="button" class="formbutton btn btn-lg" id="studentbutton">A Student</button>
                	</div>
                    
                    </div>
                    </div>
           		</div>
            
            	<div class="row">
                <div class="col-lg-12">
                
            	<form action="" class="mainWrap npoForm form-email" method="post" data-form-type="nob">
  				<input placeholder="Name of the NPO you represent" type="text" class="name form-input-name" />
  				<input placeholder="Email Address" type="email" class="email form-input-email" />
  				<textarea placeholder="Enter your message" class="mainArea form-input-message"></textarea>
  				<button class="bigBtn"><i class="fa fa-inbox"></i> Send your Message</button>
				</form>
                
                <form action="" class="mainWrap stuForm form-email" method="post" data-form-type="nob">
  				<input placeholder="Student name" type="text" class="name form-input-name" />
  				<input placeholder="Email Address" type="email" class="email form-input-email" />
  				<textarea placeholder="Enter your message" class="mainArea form-input-message"></textarea>
  				<button class="bigBtn"><i class="fa fa-inbox"></i> Send your Message</button>
				</form>
            	</div>     
                </div>
                
                <div class="row" style="padding-bottom:40px;">
            	<div class="col-lg-12 text-center">
                <p class="moreInfo" style="font-size:150%;color:black;">You can also visit the <a href="https://developersfoundation.ca" target="_blank">main Developers' Foundation website</a> for more information about Developers' Foundation in general.</p>  
                </div>
                </div>  
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
		
		setTimeout(function(){
    	$('.loader').hide();
		$('.fullpage').fadeIn(1500);
		}, 4000);
		
		

		<!-- SCROLL TO -->
		
		$("#button1").click(function() {
			$('html, body').animate({
				scrollTop: $(".About").offset().top -70
			}, 1500);
		});
		
		$("#button2").click(function() {
			$('html, body').animate({
				scrollTop: $(".WhatWeDo").offset().top -70
			}, 1500);
		});
		
		
		$("#button3").click(function() {
			$('html, body').animate({
				scrollTop: $(".Portfolio").offset().top -70
			}, 1500);
		});
		
		$("#button4").click(function() {
			$('html, body').animate({
				scrollTop: $(".Contact").offset().top -70
			}, 1500);
		});
		
		<!--Form hide/show-->
		
		$('.npoForm').hide();
		$('.stuForm').hide();
	
	
		$( "#npobutton" ).click(function() {
			$('.stuForm').hide();
			$('.npoForm').fadeIn(1000);

			$('html, body').animate({
				scrollTop: $(".npoForm").offset().top -70
			}, 1000);
		});
	
		$( "#studentbutton" ).click(function() {
			$('.npoForm').hide();
			$('.stuForm').fadeIn(1000);

			$('html, body').animate({
				scrollTop: $(".stuForm").offset().top -70
			}, 1000);
		});
		
	});
	
</script>
