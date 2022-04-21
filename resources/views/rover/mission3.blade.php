<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC TV BROADCAST</title>

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset("css/style.css") }}" rel="stylesheet">

  </head>
  <body>
<div class="wrapper-page">
    <div class="container-fluid nopadding">
		<div class="row no-gutters">
			<div class="col-md-12 ">
				<div class="pageContent">
					<div class="page-insid-img">
					<div ><h2> Jr. Mission: Explore the Martian Landscape </h2></div>
					<div class="select-mission">
						<div class="yourMission-ex">							
							<p>Mars is the fourth planet from the sun and has a rocky surface that includes tall volcanoes, deep canyons, and craters all over it.  Mars is called the Red Planet because red dust covers most of it.</p>
							<p>Your Mission is to find some of the most impressive natural structures on Mars. </p>
							<p>Task 1:  Look for Olympus Mons.<br>
							Task 2:  Search for Jezero Crater.<br>
							Task 3:  Drive over the Valles Marineris canyon.<br>
							Task 4:  Find the Gale Crater.</p>
						</div>
						<a href="{{ route('choose') }}" class="btn primary htp-fz-30"> Back </a>
						<a href="{{ route('start', ['mission' => '3']) }}" class="btn primary htp-fz-30 float-right"> Begin Mission </a>
					</div>
					<div class="select-mission">
						
					</div>
					</div>
				</div>
				<footer class="footer-img">
						<img src="img/footer-bg.png" class="img-fluid">
				</footer>
			</div>
		</div>	
	</div>
</div>

  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/scripts.js"></script>
  </body>
</html>