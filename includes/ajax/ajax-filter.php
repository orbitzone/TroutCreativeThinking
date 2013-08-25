<?php

	if ($_POST['category'] == "accessories") {

		$arr = array (
		  array (
		  	'title' => 'Laufen',
		  	'content' => 'At the heart of Swiss bathroom culture since 1892, the LAUFEN name is synonymous with beauty, craftsmanship and perfection of form – qualities that continue to define LAUFEN as one of the world’s most desired bathroom brands. Partnering with outstanding architects and designers.',
			'media' => 'http://placehold.it/165x165'
		  	),
		  array (
		  	'title' => 'Roca',
		  	'content' => 'A new bathroom experience - Inspired by design and driven by the passion of its Spanish heritage, Roca has been shaping bathroom design for over 90 years. A world leader operating in over 135 markets, Roca is always at the forefront of bathroom trends.',
			'media' => 'http://placehold.it/165x165'	
		  	),
		  array (
		  	'title' => 'Caroma',
		  	'content' => 'Caroma\'s two basin ranges can bring their own personalities to your bathroom. The Pearl collection of toilets, baths and basins is beautiful, sophisticated and created to deliver outstanding performance,',
			'media' => 'http://placehold.it/165x165'	
		  	),
		  array (
		  	'title' => 'Whitestone',
		  	'content' => 'White Stone is intensely focused on the challenge of innovation and design. Our answer is the creation of splendidly unique wash-basins.',
			'media' => 'http://placehold.it/165x165'	
		  	),
		  array (
		  	'title' => 'Axa',
		  	'content' => 'Crafted within its Civita Castellana studios in Italy, Axa by Unoceramica takes bathroom product design in a bold new direction - a series of strikingly innovative pieces. Each defined by beautiful forms and stunning lines. Embrace the spirit of Italian design.',
			'media' => 'http://placehold.it/165x165'	
		  	),  		  
		  array (
		  	'title' => 'Kado',
		  	'content' => 'Kado basins set the standard in modern design. Characterised by lines as natural as the water that flows through them, the Kado basin collection continues an outstanding tradition of inspired design. Each individual piece has been effortlessly sculpted, awakening the spirit with each new day.',
			'media' => 'http://placehold.it/165x165'	
		  	),
		  array (
		  	'title' => 'Alape',
		  	'content' => 'Alape brings more than 100 years of manufacturing experience to the creation of each piece of bathroom design. Since pioneering glassed steel enamelling for basins in the 1920s Alape have gone on to become a world leader in the development of this technology.',
			'media' => 'http://placehold.it/165x165'	
		  	)		  
		);

		echo json_encode($arr);
	}
	elseif ($_POST['category'] == "toilets") {

		$arr = array (
		  array (
		  	'title' => 'Roca',
		  	'content' => 'A new bathroom experience - Inspired by design and driven by the passion of its Spanish heritage, Roca has been shaping bathroom design for over 90 years. A world leader operating in over 135 markets, Roca is always at the forefront of bathroom trends.',
			'media' => 'http://placehold.it/165x165'	
		  	),
		  array (
		  	'title' => 'Caroma',
		  	'content' => 'Caroma\'s two basin ranges can bring their own personalities to your bathroom. The Pearl collection of toilets, baths and basins is beautiful, sophisticated and created to deliver outstanding performance,',
			'media' => 'http://placehold.it/165x165'	
		  	),		  
		  array (
		  	'title' => 'Kado',
		  	'content' => 'Kado basins set the standard in modern design. Characterised by lines as natural as the water that flows through them, the Kado basin collection continues an outstanding tradition of inspired design. Each individual piece has been effortlessly sculpted, awakening the spirit with each new day.',
			'media' => 'http://placehold.it/165x165'	
		  	),
		  array (
		  	'title' => 'Alape',
		  	'content' => 'Alape brings more than 100 years of manufacturing experience to the creation of each piece of bathroom design. Since pioneering glassed steel enamelling for basins in the 1920s Alape have gone on to become a world leader in the development of this technology.',
			'media' => 'http://placehold.it/165x165'	
		  	)		  
		);

		echo json_encode($arr);
	}

	else {

		$arr = array (
		  array (
		  	'title' => 'Laufen',
		  	'content' => 'At the heart of Swiss bathroom culture since 1892, the LAUFEN name is synonymous with beauty, craftsmanship and perfection of form – qualities that continue to define LAUFEN as one of the world’s most desired bathroom brands. Partnering with outstanding architects and designers.',
			'media' => 'http://placehold.it/165x165'
		  	),
		  array (
		  	'title' => 'Alape',
		  	'content' => 'Alape brings more than 100 years of manufacturing experience to the creation of each piece of bathroom design. Since pioneering glassed steel enamelling for basins in the 1920s Alape have gone on to become a world leader in the development of this technology.',
			'media' => 'http://placehold.it/165x165'	
		  	)		  
		);

		echo json_encode($arr);
	}

?>