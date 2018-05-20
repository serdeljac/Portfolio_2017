<!DOCTYPE html>
<html lang="en-us">
<head id="top">
	<meta charset="utf-8" />
	<title>Stjepan Erdeljac - Front End Web Designer</title>
	<meta name="description" content="Front end web design and developer looking for
		project work or full time employment within the industry." />
	<link type="image/x-icon" href="logo.png" rel="icon">
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.min.css" title="Default CSS" media="all"/>
	<link rel="stylesheet" href="stj_animations.min.css" title="Default CSS" media="all"/>
	
	<?php
		$mobilemode = false;
		$useragent=$_SERVER['HTTP_USER_AGENT'];
		if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)
			|| preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))
		 ){
			$mobilemode = true;
			echo '<link rel="stylesheet" href="mobile.min.css"  media="all"/>';
		}
	?>
</head>
<body id="sm_device">
	<header>
		<div class="contain">
			<div class="logo stj_boomerang">
				<h1>Stjepan J Erdeljac</h1>
				<hr />
				<h4>Front-End Web Design &amp; Developer</h4>
			</div>
			<div class="social_links">
				<a href="https://www.facebook.com/Stjepan.Erdeljac" target="_blank"><div class="fb"></div></a>
				<a href="https://twitter.com/serdeljac" target="_blank"><div class="tw"></div></a>
				<a href="https://wordpress.com/stats/insights/serdeljac.wordpress.com" target="_blank"><div class="wp"></div></a>
				<a href="https://ca.linkedin.com/in/stjepan-erdeljac-66bba354" target="_blank"><div class="li"></div></a>
			</div>
		</div>
	</header>

	<nav>
		<span></span>
		<div class="border"></div>
		<div class="link_contain">
			<ul>
				<li><a href="#top">Home</a></li>
				<li>//</li>
				<li><a href="#projects">Projects</a></li>
				<li>//</li>
				<li><a href="#skills">Skills</a></li>
				<li>//</li>
				<li><a href="#about">About</a></li>
				<li>//</li>
				<li><a href="">Resume</a></li>
				<li>//</li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
	</nav>

		
		<main>
			<section id="intro">
				<div class="wrapper">
					<h2>Looking to hire?</h2>
					<div class="txtgrp">
						<p>Everyday new web pages are being developed and you may ask yourself: what appeals to my target audience? How will it stand out from other sites? And will it get the same appeal and convenience in mobile and other small devices? As a front-end designer, these are just some of the considerations among many that is focused before and during the process of development.</p>
						<p>
							<img src="img/devices.png" alt="Devices" class="small"/>
							My goals are to create modern websites based on the latest technology and standards, research as to what you want the world to see your business as, and develop/script for all devices, growth, and convenience towards customers and other developers. Overall, it’s understanding the user’s experience/interface and applying this information in an art form of style and information.
						</p>
					</div>
					<img src="img/devices.png" alt="Devices" class="large"/>
				</div>
			</section>

			<section id="projects">
				<div class="wrapper">
					<h2>PROJECTS</h2>
					<div class="intro">
						<p>A web designer isn't a web designer without completing a few projects and I have projects. Each site was developed and designed from scratch and can be veiwed in detail in GitHub.</p>
						<img src="img/mouseover1.png" alt="mouseover Right" />
					</div>
					
					
					<div class="proj_list row">
						<div class="cell">
							<div class="proj_container proj3">
								<div>
									<p>Eyebrows are easily one (or two) of the most important features on our face. Wouldn't it be nice if you can wake up in the morning and have perfect eyebrows every day?<p>
									<a href="#">Visit Site</a>
								</div>
							</div>
						</div>
						<div class="cell">
							<div class="proj_container proj2">
								<div>
									<p>A cartoonist, animator, filmmaker and one of my first clients in designing a web page portal to promote his artwork.<p>
									<a href="http://www.spencersoares.com/">Visit Site</a>
								</div>
							</div>
						</div>
						<div class="cell">
							<div class="proj_container proj1">
								<div>
									<p>A special type of project in creating animated titles that allow users to import into their sites via GitHub.<p>
									<a href="http://www.serdeljac.com/myAnimations/" target="_blank">Visit Site</a>
								</div>
							</div>
						</div>
						
						<div class="cell">
							<div class="proj_container proj0">
								<div>
									<p>My first web page using basic HTML and CSS. This site I kept in hopes to re-develop into a more apealing media site.<p>
									<a href="http://offcampusmedia.serdeljac.com/" target="_blank">Visit Site</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="skills">
				<div class="wrapper">
					<h2>Skill Set</h2>
					
					<div class="skill_list">
						<div class="basic">
							<img src="img/skills/skill0.png" alt="HTML, CSS3 SASS, LESS" />
							<h3>Basic Design</h3>
							<p>All the basic HTML and CSS techniques including proper use of accessibility tags, color contrast, and readability styles. Through I am familiar with LESS with NodeJS, these days I mostly use SASS due to a higher popularity.</p>
						</div>
						<div class="behavior">
							<h3>Behaviours</h3>
							<p>I personally love using jQuery. Not just for responsive designs, but the fact that it's universal to all browsers make behaviours easy to script and test without worry. Most of my scripts involve using jQuery, but no without a strong understanding and usage of javaScript. </p>
							<img src="img/skills/skill1.png" alt="Javascript jQuery" />
						</div>
						<div class="responsive">
							<img src="img/skills/skill2.png" alt="Bootstrap jQueryMobile" />
							<h3>Responsive Designs</h3>
							<p>Responsive sites are not just necessary, but pretty much mandatory for today’s standards. I have familiarized myself with both Bootstrap and jQuery Mobile. However, I am capable of creating appealing sites from scratch.</p>
						</div>
						<div class="design">
							<h3>Photo Optimization</h3>
							<p>Solid understanding on photo manipulation, editing, and optimization for ideal photo quality and size. Also with the ability to create logo's, icons, and buttons.</p>
							<img src="img/skills/skill3.png" alt="Photoshop" />
						</div>
						<div class="server">
							<img src="img/skills/skill4.png" alt="PHP MySql" />
							<h3>Server-side Script</h3>
							<p>Most databasing invloves using PHPmyAdmin and JSON. I have studied managing and creating queries in Microsoft SQL server but most of my focus leans towards front-end scripting.</p>
						</div>
					</div>

					
					<div class="extra">
						<ul>
							<li><img src="img/skills/wordpress.png" alt="wordpress" /><span>Wordpress</span> - Administration and designing custom themes</li>
							<li><img src="img/skills/ubuntu.png" alt="ubuntu" /><span>Ubuntu</span> - Basic server setup (LAMP, SASS, &amp; NodeJS)</li>
							<li><img src="img/skills/office.png" alt="office" /><span>Microsoft Office</span> - Documentation, templating and styling</li>
						</ul>
					</div>
				</div>
			</section>
			
			<section id="about">
				<div class="wrapper">
					<h2>About me</h2>
					<div class="innerwrapper">
						<div class="profile">
							<div class="profile_border"></div>
						</div>
						<div class="info">
							<p>Before I got into web design, I worked as a free-lance IT technician servicing and build custom PC for clients. However, I felt unsatisfied with my career and searched for a position that expressed my urban creativity as well as applied some of my IT skills. That’s when I began my passion in web design and development.</p>
							<p>I consider myself to be dynamic and very open minded to new things, which I consider and excellent trait for coming up with new modern designs, animations, layouts, etc. After spending most of my free time in part-time courses at BCIT and learning online, I am ready to take on greater project work. </p>
							<p>My primary focus is on front-end design and development: designing the appropriate UI that reflects the client while considering the overall UX of both client and user. What I enjoy most is collaborating with others and researching techniques to make unique and appealing websites. </p>
						</div>
					</div>
				</div>
			</section>
			
			<section id="contact">
				<div class="wrapper">
					<!--
					<form action="contact.php" method="post" target="_blank">
						<fieldset>
							<legend>Quick email</legend>
							<ul>
								<li class="form_name">
									<label for="fullname">Name:</label>
									<input type="text" pattern=".{0,}" name="contact_name" id="fullname" required>
									<span>Enter a contact name</span>
									<span></span>
								</li>
								<li class="form_email">
									<label for="email">Email:</label>
									<input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="contact_email" id="email" required>
									<span>Enter an email address</span>
									<span></span>
								</li>
								<li class="form_message">
									<label for="msg">Message:</label>
									<textarea onkeyup="adjust_textarea(this)" name="contact_msg" id="msg"></textarea>
									<span>Please include contact details (time, phone, location, etc.)</span>
								</li>
								<li>
									<input type="submit" value="Submit" id="submit">
								</li>
							</ul>
						</fieldset>
					</form>
					-->
					<div class="secondary">
						<h2>Contact</h2>
						<hr />
						<p>Send me an email or give me a call if you have any project work or would like to get in touch.</p>
						<ul>
							<li>Phone: 778.834.3817</li>
							<li><div class="sendemail"></div></li>
						</ul>
						<div class="social_links2">
							<a href="https://www.facebook.com/Stjepan.Erdeljac" target="_blank"><div class="fb"></div></a>
							<a href="https://twitter.com/serdeljac" target="_blank"><div class="tw"></div></a>
							<a href="https://wordpress.com/stats/insights/serdeljac.wordpress.com" target="_blank"><div class="wp"></div></a>
							<a href="https://ca.linkedin.com/in/stjepan-erdeljac-66bba354" target="_blank"><div class="li"></div></a>
						</div>
					</div>
				</div>
			</section>
		</main>
	<footer>Created by Stjepan Erdeljac 2017</footer>
	
<div class="sendemail2" itemscope itemtype="http://schema.org/Person">
<span itemprop="name">Stjepan Erdeljac</span>
<span itemprop="company">Person</span>
<span itemprop="tel">778-834-3817</span>
</div>
	
	<script type="text/javascript" src="scripts.min.js"></script>
	<script type="text/javascript">
		var msg = document.getElementById('msg');
		adjust_textarea(msg);
		function adjust_textarea(h) {
			h.style.height = "20px";
			h.style.height = (h.scrollHeight) + "px";
			if (h.value.length == 0) {
					h.style.height = "20px";
					h.style.height = (h.scrollHeight) + "px";
			}
		}
	<?php 
		if ($mobilemode == true) {
			echo '$("#projects .cell").addClass("col-xs-12");';
		}else {
			echo '$("#projects .cell").addClass("col-xs-6");';
		}
	?>
	</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-104125329-1', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>