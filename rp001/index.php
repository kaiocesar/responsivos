<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title> Modelo Responsive RP0001</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link href="styles/main.css" type="text/css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" href="css/SliderPreview.css">
    	<link rel="stylesheet" href="css/royal-slider-1.0.min.css">
    


	    <style>
	        #simpleGallery {
	            width: 100%;
	            height: 300px;
				/* padding based on thumb size */
				padding-bottom:65px;
	        }
			#simpleGallery .royalLoadingScreen {
				padding-bottom:65px;
			}
			.royalSlider .arrow	{ top:180px; }
			.royalSlider .royalMidText { font-size:1em;	}
			.royalCaptionItem a {
				color:#FFF;
				text-decoration:underline;	
			}
	    </style>

	<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]--> 

		<script type='text/javascript' src='scripts/respond.min.js'></script>
	</head>
	<body>

		<header>
			<div class="wrapper">
				<?php include 'layout/header.php'; ?>
			</div>
		</header>	
		
		<section>
			<div class="wrapper">
				<?php include 'layout/content.php'; ?>
			</div>	
		</section>

		<footer>
			<div class="wrapper">			
				<?php include 'layout/footer.php'; ?>
			</div>	
		</footer>	

	</body>
</html>
