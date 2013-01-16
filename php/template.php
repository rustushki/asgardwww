<?php function head() { ?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

	<head>
	<title>Asgard RPG</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-37734920-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
	</head>

<body>


<div id="container">

	<div id="header">
		</div>

	<div id="links">

		<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="faq.php">FAQ</a></li>
		<li><a href="story.php">Story</a></li>
		<li><a href="roadmap.php">Roadmap</a></li>
		<li><a href="links.php">Links</a></li>
		</ul>

		</div>



	<div id="content">

<?php } ?>

<?php function foot() { ?>
	</div>

	<div id="footer">
	<p>&copy; Copyright <?php print date("Y") ?> The Asgard Team</p>
	</div>

</div>
</body>
</html>
<?php } ?>

