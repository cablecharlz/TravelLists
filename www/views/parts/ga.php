<?php
switch (ENVIRONMENT) {
	case 'production':
		?>
		<script>
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
		</script>
		
		<?php
		break;
}
?>