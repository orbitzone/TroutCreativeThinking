<?php
	include('config.php');
	$i = 0;
	$section = 0;
	$split = 8;
	echo '<div class="history-section-nav">';
	echo '<a href="#" class="nav previous">▲<span>Previous</span></a>';
	echo '<a href="#" class="nav next">▼<span>Next</span></a>';
	echo '<div class="slider-wrap">';
	echo '<div class="slider">';
	echo '<div class="count-'.$section.'">';
	echo '<ul>';
	foreach ($panels as $year => $attr) {
		if ($i%$split == 0 && $i != 0) {
			$section++;
			echo '</ul></div>'; // close prev
			echo '<div class="count-'.($section).'"><ul>'; // open next

		}
		echo '<li><a href="#slide'.$year.'" data-count="'.$i.'">'.(explode('-', $year)[0]).'</a></li>';
		$i++;
	}
	echo '</ul>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
?>
