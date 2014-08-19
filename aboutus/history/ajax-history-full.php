<?php
	include('config.php');
	$location = 'panels/';
	foreach ($panels as $year => $attr) {
		$y = explode('-', $year)[0];
		echo '<section id="slide'.$year.'" class="'.$attr[0].'">';
		echo '<div class="header">';
		echo '<h2 class="year">'.$y.'</h2>';
		echo '<p class="yearDescription">'.$attr[1].'</p>';
		echo '</div>';
		include($location.$year.'.html');
		echo '</section>';
	}
?>
