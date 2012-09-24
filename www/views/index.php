<!DOCTYPE html>
<!--[if IE 7 ]><html lang="en" class="ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width" />
	
	<title>Trip Notes</title>
	<meta name="title" content="Trip Notes" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link href="css/boilerplate_top.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/boilerplate_bottom.css" rel="stylesheet" type="text/css" />
	
	<script src="js/Modernizr.js"></script>
	
</head>
<body>

	<div id="loadBlocker">
		<div class="blockerContent">
			Loading...
		</div>
	</div>

	<div id="header">
		<div class="siteTitle">Trip Notes</div>
	</div>

	<div id="body">
		<div class="contentWrapper">
			<div id="landingPage" class="pageContent pageCentre">
				<div class="overview">
				</div>

				<div class="tripForm">
					<label for="txtTripName">Name your trip</label><br />
					<input id="txtTripName" name="txtTripName" type="text" autofocus="autofocus" maxlength="75" placeholder="ex: Thailand" value="" /><br />
					<a class="generalButton" href="javascript:void(0)" onclick="Gate.showInfo();">Make Trip Notes</a>
				</div>
			</div>

			<div id="infoPage" class="pageContent pageRight">
				<div class="overview">
				</div>

				<div class="tripForm">
					<div class="floatLeft">
						<label for="txtName">Name</label><br />
						<input id="txtName" name="txtName" disabled="disabled" type="text" maxlength="75" placeholder="Bob Dobalina" value="" /><br />
					</div>
					<div class="floatLeft">
						<label for="txtEmail">Email</label><br />
						<input id="txtEmail" name="txtEmail" disabled="disabled" type="email" maxlength="255" placeholder="email@example.com" value="" /><br />
					</div>
					<br class="clear" />
					<a class="generalButton" href="javascript:void(0)" onclick="Gate.createTrip();">Create</a>
				</div>
			</div>
		</div>
	</div>
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery/jquery-1.8.1.min.js"><\/script>')</script>

	<script src="/js/Main.js"></script>

	<script type="text/javascript">
	
	$(document).ready(
		function() {
			Main.init({
				userAgent: '<?php echo $userAgent; ?>',
				os: '<?php echo $os; ?>',
				a: '<?php echo $ajaxToken; ?>'
			});
		}
	)
	
	<?php
		switch (ENVIRONMENT) {
			case 'production':
				?>
				
				function analytics(pageLocation, subTopic, details) {
					_gaq.push(['_trackEvent',pageLocation, subTopic, details]);
				}
				
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', '<?php echo GOOGLE_ANALYTICS_UA; ?>' ]);
				_gaq.push(['_trackPageview', location.pathname + location.search + location.hash]);
				
				(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
				
				<?php
				break;
		}
		?>
	</script>
</body>
</html>