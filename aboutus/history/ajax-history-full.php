<?php
	$backgrounds = array(
		"1919"=>"bgBlue",
		"1920"=>"bgLightBrown",
		"1922"=>"bgBrown",
		"1954"=>"bgTurquoise",
		"1969"=>"bgStripedBrown",
		"1970"=>"bgBlue",
		"1976-1"=>"bgDarkBlue",
		"1976-2"=>"bgDarkBlue",
		"1978-1"=>"bgBlue",
		"1978-2"=>"bgTurquoiseDark",
		"1986"=>"bgBlue",
		"1987-1"=>"bgDarkerBlue",
		"1987-2"=>"",
		"1987-3"=>"bgBlue",
		"1988"=>"bgTurquoiseDark",
		"1990s"=>"bgGreyDark",
		"1993"=>"bgDarkBlue",
		"1994"=>"bgTurquoiseLight",
		"1997"=>"bgDarkBrown",
		"1998-1"=>"bgBlue",
		"1998-2"=>"bgLightBrown",
		"2000-1"=>"bgTurquoiseLight",
		"2000-2"=>"bgLightBrown",
		"2000-3"=>"bgNightBlue",
		"2001"=>"bgDarkBlue",
		"2003"=>"bgBlue",
		"2004"=>"bgBlue",
		"2005-1"=>"bgDarkBrown",
		"2005-2"=>"bgNightBlue",
		"2006"=>"bgBlue",
		"2006-2"=>"bgDarkerBlue",
		"2007-1"=>"bgGreenLight",
		"2007-2"=>"bgBlue",
		"2007-3"=>"bgNightBlue",
		"2008"=>"bgBlue",
		"2009-1"=>"bgDarkBrown",
		"2009-2"=>"bgPurple",
		"2010"=>"bgBrown",
		"2011"=>"bgGreyDark",
		"2012-1"=>"bgBlue",
		"2012-2"=>"bgGreyLight",
		"2012-3"=>"bgBlueLight",
		"2012-4"=>"bgBlue",
		"2014-1"=>"bgGreenLight"
	);
	$location = 'panels/';
	foreach (new DirectoryIterator($location) as $file) {
		$file_name = $file->getFilename();
		if ($file_name[0] == ".") continue;
		if($file->isDot()) continue;
		$year = str_replace('.html', '', $file->getBasename());
		echo '<section id="slide'.$year.'" class="'.$backgrounds[$year].'">';
		include($location.$file_name);
		echo '</section>';
	}
?>
