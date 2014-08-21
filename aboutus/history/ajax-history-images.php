<?php
	include('config.php');
	$location = 'panels_images/';
	foreach ($panels as $year => $attr) {
		$y = explode('-', $year)[0];
		$img = $location.$year.'.png';
		echo '<section id="slide'.$year.'" class="'.$attr[0].' small">';
		echo '<div class="header">';
		echo '<h2 class="year">'.$y.'</h2>';
		echo '<p class="yearDescription">'.$attr[1].'</p>';
		echo '</div>';
		echo file_exists($img) ? '<img src="history/'.$img.'"/>' : '';
		echo '</section>';
	}
?>
