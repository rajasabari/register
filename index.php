<?php

require_once( __DIR__."/../config.php");

		$fdata = array();
		$fdata = optional_param('success',null,PARAM_TEXT);
	
	
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cognizant Digital Experience</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  
	<link href="css/index.css" rel="stylesheet">
</head>

<body>
	<div class="banner">
		<div class="container-fluid banner_img">
	 		
		</div><!-- end main container -->
	</div><!-- banner -->
	<div class="container-fluid">
		
		<div class="row top_40">
			<div class="col-lg-8 col-sm-12">
				<div class="">
					<h3>Hey there, future colleagues!</h3>
				</div><!-- end o top_40 -->
				
				<div class="top_20"><!-- para 1 -->
					We wish you a very happy and productive year ahead and welcome you to Cognizant with <b>Nurture ’22.</b> 
				</div><!-- end of top_20 para 1 -->
				
				<div class="top_20"> <!-- para 2 -->
					As last year graduates, you are minutes away from stepping into the professional world. This first step can be as challenging as it is exciting – from all the promising opportunities, you have to pick the one that launches your career to new heights of growth and success. This is where we come in.
				
				</div> <!-- end of top_20 para 2-->
				
				<div class="top_20"> <!-- para 3 -->
					Cognizant’s Nurture ’22 initiative gives you a sneak preview into how a tech giant works and continues engagement till your final placements. It’s a platform where we address all your queries and concerns and introduce you to niche career opportunities beyond software development as well.
				
				</div> <!-- end of top_20 para 3-->
				
				<div class="top_20"> <!-- para 4 -->
					Today, we are reaching out to you with the non-technical opportunities relevant for the Digital Experience Services Division of Cognizant under of three main categories:
				
				</div> <!-- end of top_20 para 4-->
				
				<div class="top_30">
					<ul>
						<li>Experience Design</li>
						<li>Graphic Design</li>
						<li>User Research and Content Writing at a broader level</li>
					</ul>
				
				</div>
				
				<div class="blue_border_div top_30">
				Nurture is your chance to know how to best apply your education to the industry – how to make the most of your learnings and find the career path that you have been looking for.
				</div><!-- end of blue_border_div -->
				
				<hr>
				<div class="visible_lg_screen">
				<div class="second_sec">
					<h2>Event Plan</h2>
					<p class="sec2_para1">
					Part A- Nurture Event and Part B – Experience Design Competition (applicable only for the students who choose Experience design track)
					</p><!-- sec2_para1 -->
					<p class="sec2_para2">
						<b>Part A – Nurture Event</b> <br>
						Leaders from Cognizant Campus, Cognizant Academy, Head of Digital Experience at Cognizant will speak to the candidates about Cognizant, life at Cognizant and what this organization holds in store for the freshers who join us. Followed by our Subject Matter experts and Alumni, who will provide more insights on the career track, the work experience, career progression and opportunities.
					</p><!-- sec2_para2 -->
					<p class="sec2_para3">
						<b>Part B – Experience Design Competition </b><br>(applicable only for the students who choose Experience design track)
					</p><!-- sec2_para3 -->
					<p class="sec2_para4">
						Please Note: Only Candidates, who attended the Experience design session or 7<sup>th</sup> Jan or 8<sup>th</sup> Jan will be eligible to participate in the Competition.
					</p><!-- sec2_para4 -->
					<p class="sec2_para5">
						<b>For candidates who registered and attended the “Experience design track event”, we have a Deign Challenge to prove your skills. A quick registration link for this competition will be shared on 8<sup>th</sup> January, and the prize would be the Wildcard to Cognizant (Conditions apply).</b>
					</p><!-- sec2_para5 -->
					<p class="sec2_para6">
						<b>Competition registration and process: </b><br>
						1) Competition Registration 8-9<sup>th</sup> January, <br>
						2) Design Challenge will be assigned to the participants of the 10<sup>th</sup> January <br>
						3) The Candidates will have to complete and submit their entries on 12<sup>th</sup> January <br>
						4) The results will be announced on 15<sup>th</sup> January. <br>
					</p><!-- sec2_para6 -->
					<p class="top_10"><b>Top 10 cases would be shortlisted and will have to present the design to the Panel members 
					to select the top 3.</b></p>
					<p class="top_10"><b>Winners would get an advantage during Cognizant’s selection interview process.</b></p>
					<p class="top_20 bottom_30">So, watch out for more details on registration email post the Nurture Intro event.</p>
				</div><!-- end of second_sec -->
				<div class="last_part">Register, Participate, Challenge and Design your Career @Cognizant, with Cognizant. </div>
				</div>
				
			</div><!-- end of col-lg-8 -->
			<div class="col-lg-4 col-sm-12">
				<div class="">
					<h3>Fill the following details to register for the event.</h3>
				</div><!-- end of top_40 -->
				<div class="mr_bottom20">
					<p class="msg">All fields mandatory.</p>
				</div><!-- mr_bottom20 -->
				<div class="form">
					<form action="action_page.php" method="post" >
						
						<div class="form-group">
    						<label for="name">Full Name <spam class="msg"> (First Name followed by Last Name)</spam></label>
    						<input type="name" class="form-control" name="name" id="name" placeholder="Enter Name" required>
  						</div>
						
						<div class="form-group">
    						<label for="college">College Name<spam class="msg"> (Institute Name)</spam></label>
    						<input type="college" class="form-control" name="college" id="college" placeholder="Enter College Name" required>
  						</div>
						<div class="form-group">
    						<label for="Graduation">Graduation<spam class="msg"> (UG/PG)</spam></label>
    						<input type="college" class="form-control"  name="graduation" id="graduation" placeholder="Enter Graduation details" required>
  						</div>

  						<div class="form-group">
    						<label for="name">Email Address <spam class="msg"> (Institute email preferred)</spam></label>
    						<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required>
  						</div>
						<div class="form-group">
							<label for="pNumber">Phone Number</label>
							<div class="input-group">
								<div class="input-group-prepend">
         							 <div class="input-group-text">+91</div>
       							</div>
								<input type="tel" class="form-control" name="phnumber" aria-label="Phone Number" placeholder="Phone number" required>
							</div>
						</div>
						
						
						<div>Skill track interested</div>
						<p class="msg top_10">Please select INFO icon button to get details about each track.</p>
						<div class="form-group top_10">
    						<div class="form-check bottom_5">
  								<label class="form-check-label"><input type="radio" class="form-check-input" value="Experience Design (UX/UI/ANI)" name="skill" checked><b>Track 1 -</b> Experience Design (UX/UI/ANI)&nbsp;<span class="fa fa-info-circle" aria-hidden="true" data-toggle="modal" data-target="#ExperienceDesign"></span></label>
							</div>
							<div class="form-check bottom_5">
  								<label class="form-check-label"><input type="radio" class="form-check-input" value="Graphic Design (GD/ANI)" name="skill"><b>Track 2 -</b> Graphic Design (GD/ANI)&nbsp;<span class="fa fa-info-circle" aria-hidden="true" data-toggle="modal" data-target="#GraphicDesign"></span></label>
							</div>
							<div class="form-check bottom_5">
  								<label class="form-check-label"><input type="radio" class="form-check-input" value="User Research and Content Writing (ID/TW)" name="skill"><b>Track 3 -</b>  User Research and Content Writing (ID/TW)&nbsp;<span class="fa fa-info-circle" aria-hidden="true" data-toggle="modal" data-target="#UserResearch"></span></label>
							</div>
  						</div>
						
						
						<div>Availability date to attend the event</div>
						
						<div class="form-group top_10">
    						<div class="form-check bottom_5">
  								<label class="form-check-label"><input type="radio" class="form-check-input" value="Jan 7th (10AM - 1PM)" name="Availability" checked>Jan 7<sup>th</sup> (10AM - 1PM)</label>
							</div>
							<div class="form-check bottom_5">
  								<label class="form-check-label"><input type="radio" class="form-check-input" value="Jan 8th (10AM - 1PM)" name="Availability">Jan 8<sup>th</sup> (10AM - 1PM)</label>
							</div>
							
  						</div>
						  <div class="form-group top_10">
						  	<div class="g-recaptcha" data-sitekey='<?php global $CFG; $CFG->recaptchapublickey; echo $CFG->recaptchapublickey;?>'></div>						  
						  </div>
						  <div class="form-group">
						<input type="submit" name="Register" class="sub_btn" />
							
						</div>
						
					</form>	
					
					<div class="top_20 ft_12">The registration will be closed on 5<sup>th</sup> January</div>
				
				</div><!-- form -->
				
				<div class="embed-responsive embed-responsive-4by3 top_40">
  					
				
				<iframe width="853" height="480" src="https://www.youtube.com/embed/bsCRwS77m4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			</div><!-- end of col-lg-4 -->
			
		
		</div><!-- end of row -->
		
		<hr class="visible_sm_screen">
		
		<!-- row 2 start -->
		<div class="row visible_sm_screen">
			<div class="col-md-8 col-xs-12">
			
			<div class="second_sec">
					<h2>Event Plan</h2>
					<p class="sec2_para1">
					Part A- Nurture Event and Part B – Experience Design Competition (applicable only for the students who choose Experience design track)
					</p><!-- sec2_para1 -->
					<p class="sec2_para2">
						<b>Part A – Nurture Event</b> <br>
						Leaders from Cognizant Campus, Cognizant Academy, Head of Digital Experience at Cognizant will speak to the candidates about Cognizant, life at Cognizant and what this organization holds in store for the freshers who join us. Followed by our Subject Matter experts and Alumni, who will provide more insights on the career track, the work experience, career progression and opportunities.
					</p><!-- sec2_para2 -->
					<p class="sec2_para3">
						<b>Part B – Experience Design Competition</b><br> (applicable only for the students who choose Experience design track)
					</p><!-- sec2_para3 -->
					<p class="sec2_para4">
						Please Note: Only Candidates, who attended the Experience design session or 7<sup>th</sup> Jan or 8<sup>th</sup> Jan will be eligible to participate in the Competition.
					</p><!-- sec2_para4 -->
					<p class="sec2_para5">
						<b>For candidates who registered and attended the “Experience design track event”, we have a Deign Challenge to prove your skills. A quick registration link for this competition will be shared on 8<sup>th</sup> January, and the prize would be the Wildcard to Cognizant (Conditions apply).</b>
					</p><!-- sec2_para5 -->
					<p class="sec2_para6">
						<b>Competition registration and process: </b><br>
						1) Upon Registration, a small Design Challenge will be assigned to the participants of the competition on 8<sup>th</sup> January. <br>
						2) The Candidates will have to complete and submit their entries on 10<sup>th</sup> January.<br>
						3) The results will be announced on 12<sup>th</sup> or 13<sup>th</sup> January. Top 10 cases would be shortlisted and will have to present the design to the Panel members to select the top<br>
						3.<b> Winners would get direct Offer as a recognition – No further evaluation.</b>
					</p><!-- sec2_para6 -->
					<p class="top_30 bottom_30">So, watch out for more details on registration email post the Nurture Intro event.</p>
				</div><!-- end of second_sec -->
				
				<div class="last_part">Register, Participate, Challenge and Design your Career @Cognizant, with Cognizant. </div>
			
			</div><!-- col-md-8 col-xs-12 -->
			<div class="col-md-4 col-xs-12"></div><!-- col-md-4 col-xs-12 -->
		
		</div><!-- end of row2 -->
		
		
		
		
	
	</div><!-- end of container -->
	
	
	<!-- Modal 1 -->
	<div id="ExperienceDesign" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		  <h4 class="modal-title">Experience Design</h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		
	  </div>
	  <div class="modal-body">
		<h3 class="top_15">Responsibilities</h3>
		  <ul>
		  	<li>Combine UX thinking with design execution, to produce usable and intuitive user interfaces</li>
			<li>Fluent in user center design best practices and methods</li>
			<li>Strong attention to detail and understanding of user needs</li>
			<li>Conduct Heuristic evaluation and help to define user personas, journey maps, IA and task</li>
			<li>flows</li>
			<li>Communicate design solutions to developers, stakeholders</li>
			<li>Ability to present design ideas with clarity and passion and to receive feedback with open mindedness</li>
			<li>Work with brand guidelines to create layouts and reinforce a brand’s style or voice through its visual touchpoints</li>
			<li>Excellent communication skill and teamwork</li>
			<li>Proficiency in industry tools like Sketch, Adobe XD, InVision, Figma, Power Point</li>
		  </ul>
		 
		  <h3 class="top_30">Skills Required</h3>
		  <ul>
		  	<li>Effective written & verbal Communication skills</li>
			<li>Must have excellent analytical & problem-solving skills</li>
			<li>Creative & critical thinking</li>
			<li>Passion to learn new technologies and tools</li>
			<li>Apply the concepts of maintaining good relationship within the team and stakeholders</li>
		  </ul>
	  </div><!-- modal body -->
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

	</div>
	</div> <!-- end of modal 1 -->
	
	<!-- Modal 2 -->
	<div id="GraphicDesign" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title">Graphic Design </h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
	  </div>
	  <div class="modal-body">
		<h3 class="top_15">Responsibilities</h3>
		  <ul>
		  	<li>Should have excellent understanding of graphic and visual design domain and its application in various digital media artifacts like GUI, Animation, Presentation, Digital Graphics and eLearning.</li>
			<li>Should be fundamentally strong having knowledge ofDesigns Principles, Elements of Design, Color Theory and best practices in Graphic or Visual design industry. </li>
			<li>Should have excellent observation and analytical skills from design PoV.</li>
			<li>Ability to visualize the end output (GUI, Icons, metaphors, Character, Scenario) and convert it into digital form. </li>
			<li>Communicate conceptual ideas, detailed design, and design rationale, both verbally and visually to the client </li>
			<li>Ability to switch between media types and technologies based on the requirement. </li>
			<li>Should have good command over tools like Adobe Photoshop, Illustrator, MS Power Point, and Aftereffect. </li>
			<li>Should have connect with latest web sites, online shopping apps, OTT platforms like Netflix, Prime and social media platforms. </li>
			<li>Basic understanding of Game Design, Animation, Video and Audio editing, 3D and Virtual Reality will be plus. </li>
		  </ul>
		 
		  <h3 class="top_30">Skills Required</h3>
		  <ul>
		  	<li>Excellent written and verbal communication (English) </li>
			<li>Ability and willingness to adapt and work in a fast-paced environment and learn different design authoring tools </li>
			<li>Strong visualization and analytical skills</li>
			<li>Ability to work independently as well as with the team members\stakeholders</li>
			<li>Proficiency in Adobe Photoshop, Illustrator, MS Power Point, and Aftereffect etc</li>
		  </ul>
	  </div><!-- modal body -->
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

	</div>
	</div> <!-- end of modal 2 -->
	
	
	<!-- Modal 3 -->
	<div id="UserResearch" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">

	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title">User Research and Content Writing(ID/TW)</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
	  </div>
	  <div class="modal-body">
		 <p class="top_20">
		 	As a catalyst for change and growth, you’ll be at the forefront of the delivery of experience research activities to inform the user experience architects within the product. You will conduct qualitative and quantitative analyses, gather and review insights and identify opportunities within the product to improve user experience and /or accessibility. 
		 </p> 
		  
		<h3 class="top_30">Responsibilities</h3>
		  <ul>
		  	<li>Manages data files/records from data-gathering exercises across methods, in exercises with growing complexity</li>
			<li>Conducts both qualitative and quantitative analyses using methods including, but not limited to, usability testing, heuristic assessments, comparative/competitive analysis, card sorting, contextual observation, interviews, surveys and eye tracking </li>
			<li>Makes significant contributions to brainstorms, critiques, and other collaborative sessions with multidisciplinary teams (product, marketing, designers, copywriters, and developers)</li>
			<li>Performs participant recruitment through creation of screeners and scheduling, in addition to creation of survey questionnaires/discussion guides </li>
			<li>Leads the analysis of existing data in areas such as demographics, technology, socio-economics, and the market to monitor cultural and social trends, and their impact on consumers' attitudes, behaviour and perceptions, leveraging strong knowledge to draw meaningful insights and actionable design solutions</li>
			<li>Reviews research observations, research reports, research briefs, session footage and highlight reels and evaluates the findings and recommendations   </li>
			<li>Provides significant input into proposals and project scopes with recommended design research approaches</li>
			<li>Drives adaptation and innovation efforts regarding research practices to meet team and client needs under tight timeframes, budgetary constraints or when faced with recruiting challenges.</li>
		  </ul>
		 
		  <h3 class="top_30">Skills Required</h3>
		  <ul>
		  	<li>Good English/Language Skills –Written and Articulation Skills</li>
			<li>Good Probing Skills</li>
			<li>Understanding Human Psychology, Human behaviour</li>
			<li>Working knowledge of quantitative, behavioural analysis and statistics</li>
			<li>Critical-thinking and problem-solving skills</li>
			<li>Team player</li>
			<li>Good time-management skills</li> 
			<li>Great interpersonal and communication skills</li>  
			<li>Good Observation, Documentation Skills, Analytical skills</li>
			<li>Data Collection techniques, Interviews, Questionnaire, Surveys, Group Discussion, Observation Techniques</li>
		  </ul>
		  
		  <h3 class="top_30">Good to have</h3>
		  <ul>
		  	<li>Experience with qualitative and user-cantered design methodologies</li>
			<li>Manage and conduct user research and concept development</li>
			<li>Research buyer personas and investigate buyer behaviour</li>
			<li>Lead users throughout the process of proposing, wire framing, and implementing UX improvements</li>
			<li>Work closely with marketing and product management teams to identify research topics</li>
			<li>Work broadly with design, product management, content strategy, engineering, and marketing</li>
			<li>Participate in recruitment activities for user research</li> 
			<li>Plan and implement the overall user research strategy and methods</li>  
			<li>Facilitate and Observe Studies in Designing, conducting, User Research, Analysing and reporting findings, help translate into user-centered design inputs and usability testing. </li>
			<li>identification of user needs and goals, task and workflow modelling as well as unmoderated usability testing, and more formal, in-depth testing. </li>
			<li>Conduct usability research both online and in the field and provide recommendations for improvement</li>
			<li>Quantify data-driven insights to address the needs of these consumers. </li>
			<li>Provide insights into actionable, consumer-centric results.</li>
			
		  </ul>
	  </div><!-- modal body -->
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

	</div>
	</div> <!-- end of modal 3 -->
    
	  
	  
	  
	<!-- Reg success Modal -->
	<div class="modal fade" id="ignismyModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Registration Success</h4>					
			</div>
				<div class="modal-body">
					<div class="thank-you-pop">
						<img src="images/Green-Round-Tick.png" alt="">
						<h1>Your Registration is Successful!</h1>	
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Captcha invalid -->
	<div class="modal fade" id="invalidCaptcha" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Invalid ReCaptcha</h4>					
			</div>
				<div class="modal-body">
					<div class="thank-you-pop">
					<i class="fa fa-times-circle" style="font-size:100px;color:red"></i>
					<h1>Your reCaptcha is invalid try again!</h1>	
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 


	
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
	<script src='https://www.google.com/recaptcha/api.js' async defer ></script>

  </body>
</html>

<?php
	if($fdata == "success"){

?>

<script>
	$("#ignismyModal").modal("show");
	
	$("#ignismyModal").on("hidden.bs.modal", function () {

		window.location = window.location.href.split("?")[0];

	  })
	
</script>

	<?php
		}elseif($fdata == "captchafalse"){
			?>
<script>
	$("#invalidCaptcha").modal("show");
	
	$("#invalidCaptcha").on("hidden.bs.modal", function () {

		window.location = window.location.href.split("?")[0];

	  })
	
</script>

			

			<?php
		}

	?>