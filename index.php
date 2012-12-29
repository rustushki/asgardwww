<?php

require_once("php/template.php");
require_once("php/simplepie.inc");

head();

?>

<script type="text/javascript">
	$().ready(function(){
		$('#slideshow').cycle({ 
			fx:      'fade', 
			speed:    700, 
			timeout:  5000 
		});
	});
</script>

<div id="title"><img src="images/home.gif" /></div>

<br />

<div class="picsBox">
	<div class="pics" id="slideshow"> 
		<img src="images/screenshots/61512_1.png" width="400" height="300" /> 
		<img src="images/screenshots/61512_2.png" width="400" height="300" /> 
		<img src="images/screenshots/61512_3.png" width="400" height="300" /> 
	</div>

	<br />

	<a href="https://launchpad.net/asgard/thegrandmap/0.3.10/+download/asgard-0.3.10.tar.gz">Download Asgard 0.3.10</a>
</div>

<h2>Welcome to Asgard RPG.</h2>
<p>Asgard (ahs-gahrd) is a project aiming to create a classic computer role-playing game experience complete with epic battles, an expansive world map, towns, cities, and vile lairs all provided through vibrant graphics, compelling music, and an intriguing plot.</p>
<p>The project is still in heavy development with most effort being spent on game engine design and story structuring.  Please use this website to learn more about this exciting and upcoming game.  For more specific information please check out the <a href="http://wiki.asgardrpg.org/">Wiki</a></p>

<h2>Project News</h2>

<?php

$url = "http://feeds.launchpad.net/asgard/announcements.atom";

// Parse it
$feed = new SimplePie();
$feed->set_feed_url($url);
$feed->enable_cache(false);
$feed->init();

$items = $feed->get_items();

// Limit Articles to 3
$articleCount = 3;

foreach ($items as $item) {
	print "<h3>".$item->get_title()."</h3>";
	print "<span class=\"news-timestamp\">".$item->get_date()."</span>";
	print "<p>".$item->get_description()."</p>";
	print "<br />";
	print "<hr />";

	$articleCount--;

	if ($articleCount <= 0) {
		break;
	}
}

?>

<br />
<br />
<br />

<p><a href="https://launchpad.net/asgard/+announcements">View All Announcements</a></p>

<br />
<br />
<br />

<?php

foot();

?>
