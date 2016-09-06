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
<link rel="stylesheet" href="animator/animate.css">
<link rel="stylesheet" href="animator/component.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatica+SC|Poiret+One" rel="stylesheet">

<link rel="icon" type="image/ico" href="DFFavicon.ico">
<!--
<style>
.loader{
	background:url(light_wool.png);
}

.loadermessage{
	position:absolute;
	margin:0;
	padding:0;
	color:#646968;
	text-align:center;
	top:50%;
	left:50%;
	-webkit-transform:translate3d(-50%,-50%,0);
	transform:translate3d(-50%,-50%,0);
	font-family:"JosefinSans Regular";
	font-size:250%;
	font-weight:bold;
}
</style>
-->
</head>

<body style="overflow-x:hidden;">
<!--
<div class="loader" style="width:100%; height: 100vh;">
	<div class="loadermessage">
		Hey there! Welcome to Developers' Foundation Queen's Chapter!
        <br />
        <div>
        <img src="loader.svg" />
        </div>
	</div>    
</div>
-->
<div class="container-fluid fullpage">

  <div class="row header" style="height:100vh;background:url(header2.png);background-repeat: no-repeat;background-size:cover;"> <!--Navbar and titleImage row-->
    	<div class="navbar navbar-fixed-top" style="padding-top:10px;padding-bottom:10px;">
            	<div class="container">
                	<div class="navbar-header">
                    <div class="navbar-brand" style="font-family: 'Amatica SC', cursive;font-size:220%;"><strong>
                    Developer's Foundation</strong>
                    </div>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" style="background-color:#16071C;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    </div>
                    
                    <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right" style="font-family: 'Amatica SC', cursive;font-size:200%;">
                   		<li><a href="#" class="navbutton" id="button1" >About</a></li>
                        <li><a href="#" class="navbutton" id="button2">What We Do</a></li>
                        <li><a href="#" class="navbutton" id="button3">Portfolio</a></li>
                        <li><a href="#" class="navbutton" id="button4">Apply</a></li>
                    </ul>
                        
                    
                    </div>
                </div>
	</div>
    
    	<div class="col-12-lg container-fluid">
        	<div class="row demo-2">
    			<div class="col-lg-12">
                	<div id="large-header">
                    <canvas id="demo-canvas"></canvas>
                    	<h1 class="main-title animated fadeIn" style="font-family:'Amatica SC', cursive; color:#FFF; font-size: 600%; border: double 8px #FFF; background: #454d5f; padding: 50px;"><b>Developers' Foundation</b><br />Queen's Chapter</span></h1>
                	</div>
            	</div>           
			</div>
        </div>
	</div>

  
    
    <div class="row About" style="background-color:#2d374d; color:white;padding-top:50px;padding-bottom:50px;"> <!--About section-->
		<div class="col-lg-10 col-md-offset-1">
            <div class="row"> <!--Picture and description row-->
            	<div class="col-lg-6 text-center"> <!--Image column-->
 					<img src="aboutimg.jpg" style="border:2px solid #454d5f; border-radius: 2px; margin-top: 10px; margin-bottom: 10px; height:300px;width:500px;" class="img-responsive center-block">
				</div> <!--Close Image column-->
            
            	<div class="col-lg-6"> <!-- Description column-->
            		<div class="col-lg-10" style="text-align:justify;padding-top:20px;padding-bottom:20px;">
            			<h2 style="font-family: 'Amatica SC', cursive; font-size:300%";><b>Every company deserves to be recognized</b></h2>
            			<br />
                        <div style="font-family: 'Poiret One', cursive; font-size: 150%">
        				<p> We're a team of students and aspiring web designers which serve as a subteam for Developers' Foundation. 			</p>
						<p> In charge of operations at Queen's University and the city of Kingston, we primarily seek out NPOs in the city and assist them in establishing an online presence.
						</p>	
                        </div>
					</div>
            	</div> <!-- Close Description column-->
            </div>     
        </div>
	</div><!--Close about section-->
    
    <div class="row WhatWeDo" style="background:url(whatwedobackground.jpg);background-repeat: no-repeat;background-size:cover;background-position:center;height: 100%;
    background-attachment: fixed;
    background-position: center;
	padding-top:60px;padding-bottom:100px;"> 
        <div class="text-center">
        <div class="container">
            <div class="section-title center" style="padding-bottom:50px;">
                <h2 style="font-size:500%;color:white;font-family: 'Amatica SC', cursive;"><b>What We Do</b></h2>
                <div class="line">
                    <hr style="max-width: 1080px; align: center;">
                </div>
               
            </div>
            <div class="row" style="color:white;">
                <div class="col-md-4">
                    <div class="pricing-table pricing pricing--sonam">
                        <div class="panel pricing__item" style="border:none;">
                            <div class="controle-header panel-heading panel-heading-landing">
                                <h2 class="services-title panel-title panel-title-landing" style="font-family:'Amatica SC', cursive;padding-bottom: 30px">
                                    <b>Connect with us</b></h2>
                                <span style="font-size:5em; color:#F55152;" class="glyphicon glyphicon-link"></span>
                            </div>

                            <div class="panel-body panel-body-landing">
                                <p class="intro" style="font-family: 'Poiret One', cursive;">Whether you're an NPO or a student, we can help you establish an online presence for little to no cost.</p>
                            </div>
                            <div class="panel-footer panel-footer-landing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-table pricing pricing--sonam">
                        <div class="panel pricing__item" style="border: none;">
                            <div class="controle-header panel-heading panel-heading-landing">
                                <h2 class="services-title panel-title panel-title-landing" style="font-family:'Amatica SC', cursive;padding-bottom: 30px">
                                    <b>We create your site</b></h2>
                                <span style="font-size:5em; color:#F55152;" class="glyphicon glyphicon-file"></span>
                            </div>

                            <div class="panel-body panel-body-landing">
                                <p class="intro" style="font-family: 'Poiret One', cursive;">We will create an elegant site based on the specifications you provide for us, along with our own ideas.</p>
                            </div>
                            <div class="panel-footer panel-footer-landing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-table pricing pricing--sonam">
                        <div class="panel pricing__item" style="border: none;">
                            <div class="controle-header panel-heading panel-heading-landing">
                                <h2 class="services-title panel-title panel-title-landing" style="font-family:'Amatica SC', cursive;padding-bottom: 30px">
                                    <b>Your site will be hosted</b></h2>
                                <span style="font-size:5em; color:#F55152;" class="glyphicon glyphicon-globe"></span>
                            </div>

                            <div class="panel-body panel-body-landing">
                                <p class="intro" style="font-family: 'Poiret One', cursive;">Your site will be managed & hosted by us where you can request any updates as well as editing the site yourself.</p>
                            </div>
                            <div class="panel-footer panel-footer-landing"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   	</div><!--Close row-->
    
    
    <div class="row Portfolio" style="font-family:'JosefinSans Regular';background-color:#1a202e;"><!--Portfolio section-->       
        <div class="row"> <!--Portfolio title-->
            <div style="text-align:center; margin-top:60px;">
            	<h1 style="font-size:500%; font-family: 'Amatica SC', cursive;color:white;">Portfolio</h1>	
            </div>
		</div><!--Close Portfolio title-->
		<div class="line">
            <hr style="align: center; max-width: 1080px">
        </div>
            
            	
                <ul class="grid cs-style-3">
					<li>
						<figure>
							<img src="blue.jpg" alt="img01">
							<figcaption>
								<h3>Site 1</h3>
								<span>Description</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
					
                    <li>
						<figure>
							<img src="blue.jpg" alt="img02">
							<figcaption>
								<h3>Site 2</h3>
								<span>Description</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="blue.jpg" alt="img03">
							<figcaption>
								<h3>Site 3</h3>
								<span>Description</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="blue.jpg" alt="img04">
							<figcaption>
								<h3>Site 4</h3>
								<span>Description</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="blue.jpg" alt="img05">
							<figcaption>
								<h3>Site 5</h3>
								<span>Description</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>
                    
                    <li>
						<figure>
							<img src="blue.jpg" alt="img06">
							<figcaption>
								<h3>Site 6</h3>
								<span>Description</span>
								<a href="#">Visit</a>
							</figcaption>
						</figure>
					</li>

				</ul>
      
        
    </div> <!--Close portfolio section-->
    
    <div class="row Contact" style="font-family: 'Amatica SC', cursive; padding-bottom:40px;background:url(formbackground.jpg);background-repeat: no-repeat;background-size:cover;
    background-position:center;
    height:100%;
    background-attachment: fixed;"> <!--ContactUS Section-->
    
		<div class="col-lg-10 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
        
        	<div class="row">
            	<div class="col-lg-12 text-center">
        			<h1 style="font-size:450%; padding-top:20px;padding-bottom:20px; color:white;"><b>Need help? Apply now!</b></h1>
            	</div>
            </div>
            
            <div class="row" style="background-color:#F55152;border:0;">
			<div class="col-lg-12">
            
            	<div class="row text-center formTitle" style="padding-bottom:10px;">
                	<h2 style="color:white;">Hey Developers' Foundation Queen's team! I am:</h1>
                </div>

				<div class="row">
                
				
					<div class="col-md-6 col-sm-12 text-center" style="padding-top:50px;padding-bottom:50px;background:url(npobackground.jpg);background-repeat: no-repeat;background-size:cover;background-position:center;">
                		<button type="button" class="formbutton btn btn-lg" id="npobutton" style="font-size: 300%;">An NPO</button>
               		</div>
               
                    
                
					<div class="col-md-6 col-sm-12 text-center" style="padding-top:50px;padding-bottom:50px;background:url(stubackground.jpg);background-repeat: no-repeat;background-size:cover;">
						<button type="button" class="formbutton btn btn-lg" id="studentbutton" style="font-size: 300%;">A Student</button>
					</div>
				
                
                </div>
                
            	<div class="row formOuter">
                <div class="col-lg-12 col-md-12">
                
                <div class="npoForm" style="padding-top:40px;font-family: 'Poiret One', cursive;">
            		<form action="" class="mainWrap form-email" method="post" data-form-type="nob">
  					<input placeholder="Name of the NPO you represent" type="text" class="name form-input-name" />
  					<input placeholder="Email Address" type="email" class="email form-input-email" />
  					<textarea placeholder="Give us a brief explanation of your NPO, your name, and other contact information if necessary." class="mainArea form-input-message"></textarea>
  					<button class="bigBtn"><i class="fa fa-inbox"></i><span class="glyphicon glyphicon-envelope"></span>&nbsp;</button>
					</form>
                </div>
                
                <div class="stuForm" style="padding-top:40px;font-family: 'Poiret One', cursive;">
                	<form action="" class="mainWrap stuForm form-email" method="post" data-form-type="nob">
  					<input placeholder="Name" type="text" class="name form-input-name" />
  					<input placeholder="Email Address" type="email" class="email form-input-email" />
  					<textarea placeholder="Tell us a bit more about yourself and what we can do to help you." class="mainArea form-input-message"></textarea>
  					<button class="bigBtn"><i class="fa fa-inbox"></i><span class="glyphicon glyphicon-envelope"></span>&nbsp;</button>
					</form>
                </div>
                
            	</div>     
                </div>
                
       		</div>
    		</div>
     
        </div>
        
	</div> <!--Close ContactUS Section-->
    
    <div class="row" style="font-family:'JosefinSans Regular';background-color:#0d1017;padding-top:10px;padding-bottom:10px;"> 
		<div class="col-lg-12">
        	<div class="col-md-10 col-md-offset-1 text-center" style="font-size:150%;color:white;">
        		<a href="#Terms&Privacy" style="text-decoration:none;"><div class="link" style="font-family: 'Poiret One', cursive;">Terms & Privacy</div></a>

				<div id="Terms&Privacy" class="modalDialog" style="font-family: 'Poiret One', cursive;">
                	<div>
						<a href="#close" title="Close" class="close">x</a>
						<h2>Terms & Privacy</h2>
						<p>Terms of Service</p>
                            <h1>Terms of Service ("Terms")</h1>
                            <p>Last updated: August 28, 2016</p>
                            <p>Please read these Terms of Service ("Terms", "Terms of Service") carefully before using the https://queens.developersfoundation.ca/ website (the "Service") operated by Queen's Chapter - Developer's Foundation ("us", "we", or "our").</p>
                            <p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
                            <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>
                            <p>This <a href="https://termsfeed.com/terms-service/generator/">Terms of Service</a> was created with the help of TermsFeed.</p>
                            <p><strong>Links To Other Web Sites</strong></p>
                            <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Queen's Chapter - Developer's Foundation.</p>
                            <p>Queen's Chapter - Developer's Foundation has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Queen's Chapter - Developer's Foundation shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
                            <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
                            <p><strong>Termination</strong></p>
                            <p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
                            <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
                            <p><strong>Governing Law</strong></p>
                            <p>These Terms shall be governed and construed in accordance with the laws of Ontario, Canada, without regard to its conflict of law provisions.</p>
                            <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
                            <p><strong>Changes</strong></p>
                            <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
                            <p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
                            <p><strong>Contact Us</strong></p>
                            <p>If you have any questions about these Terms, please contact us.</p>
						<p>Privacy Policy</p>
					</div>	
				</div>
        	</div>
        </div>
        
	</div>
    
    <div class="row" style="font-family:'JosefinSans Regular';background-color:black;"> <!--Footer-->
		<div class="col-lg-12">
        	<div class="col-md-10 col-md-offset-1 text-center" style="font-size:150%; padding-top:20px;padding-bottom:20px;color:white; font-family: 'Poiret One', cursive;">
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
<script src="HeaderEffect/demo-2.js"></script>

</body>
</html>

<script>
	$(document).ready(function(){
		var scroll_start = $(window).scrollTop();
   		var startchange = $('.header');
   		var offset = startchange.offset();
		if(scroll_start > offset.top) {
			$('.navbar-fixed-top').css('background-color', 'rgba(0,0,0,1)');
       	} else {
          	$('.navbar-fixed-top').css('background-color', 'transparent');
       	}
	});
	
	$(document).ready(function(){

		var scroll_start = 0;
   		var startchange = $('.header');
   		var offset = startchange.offset();
	
   		$(document).scroll(function() { 
      	scroll_start = $(this).scrollTop();
      	if(scroll_start > offset.top) {
			$('.navbar-fixed-top').css('background-color', 'rgba(0,0,0,1)');
       	} else {
          	$('.navbar-fixed-top').css('background-color', 'transparent');
       	}
   		});
		
		$("modalDialog").bind('clickoutside',function(){
    		$("modalDialog").dialog('close');
		});
		


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
		$('.formOuter').hide();
	
		$( "#npobutton" ).click(function() {
			$('.formOuter').fadeIn(500);
			$('.stuForm').hide();
			$('.npoForm').fadeIn(1000);

			$('html, body').animate({
				scrollTop: $(".npoForm").offset().top -70
			}, 1000);
		});
	
		$( "#studentbutton" ).click(function() {
			$('.formOuter').fadeIn(500);
			$('.npoForm').hide();
			$('.stuForm').fadeIn(1000);

			$('html, body').animate({
				scrollTop: $(".stuForm").offset().top -70
			}, 1000);
		});
		
	});
	
</script>
