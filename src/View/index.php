<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
		<link rel="stylesheet" type="text/css" href="\Webacademie\PiePHP\webroot\css\style.css">
		<title>My Cinema</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-inverse" id="menu">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a href="\Webacademie\PiePHP\film\show"><h1>My Cinema</h1></a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="\Webacademie\PiePHP\film\show">Les films</a></li>
							<li><a href="\Webacademie\PiePHP\user\show">Mon compte</a></li>
							<li><a href="\Webacademie\PiePHP\genre\show">Genres</a></li>
							<li>
								<?php echo $button ?>
								
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<?= $view ?>
		<footer>
		    <div class="container">
				<div class="col-md-4" >
				    <h3>About us</h3>
				    <p>
				        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				    </p>
				</div>
				
				<div class="col-md-4">
				    <h3>Our Location </h3>
				    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.0053653352065!2d2.3582051509853836!3d48.85810807918581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e02341df8f1%3A0xec02f55865746d7!2s28+Rue+des+Francs+Bourgeois%2C+75003+Paris%2C+France!5e0!3m2!1sfr!2sjo!4v1512995689681" width="600" height="450" frameborder="0"  allowfullscreen></iframe>
				</div>
				<div class="col-md-4" >
				    <h3>Contact Us</h3>
				    <ul>
				        <li>Phone : 321 - 211 - 642</li>
				        <li>E-mail : my_cinema@cinema.com</li>
				        <li>Fax : 642 - 211 - 321</li>
				    </ul>
				    <p>
				        Follow us on our social networks to see new movies playing in our cinema !
				    </p>
				    <ul class="social">
				        <li><a href="#" ><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" alt="facebook logo"></a></li>
				        <li><a href="#" ><img src="http://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive" alt="twitter logo"></a></li>
				    </ul>
				</div>
		    </div>
		    <div class="footer-bottom">
	        	<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="copyright">
								<p>CopyRight © 2017 My Cinema</p>
							</div>
						</div>
						<div class="col-sm-6">
						    <div class="copyright pull-right">
								<p><a href="\Webacademie\PiePHP\film\show">Accueil</a> | <a href="\Webacademie\PiePHP\film\show">Films</a></p>
							</div>						
						</div>
					</div>
				</div>
	   		</div>
		</footer>
		<script src="\Webacademie\PiePHP\webroot\js\jquery-3.3.1.js"></script>
		<script src="\Webacademie\PiePHP\webroot\js\script.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
	</body>
</html>