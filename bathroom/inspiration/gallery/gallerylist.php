<?php 

$galleryList=array(
		array("place"=>"Malvern","state"=>"Victoria","style"=>"classic","trend"=>"hotel","features"=>"ensuite"),
		array("place"=>"Woodvale","state"=>"Western Australia","style"=>"classic","trend"=>"hotel","features"=>"bathtub"),
		array("place"=>"Brighton","state"=>"Victoria","style"=>"classic","trend"=>"hotel","features"=>"twinBasin"),
		array("place"=>"Malvern","state"=>"Victoria","style"=>"classic","trend"=>"hotel","features"=>"TwinShower"),

		array("place"=>"Balgowlah","state"=>"New South Wales","style"=>"classic","trend"=>"black","features"=>"ensuite"),
		array("place"=>"Thornleigh","state"=>"New South Wales","style"=>"classic","trend"=>"black","features"=>"bathtub"),
		array("place"=>"Tamworth","state"=>"New South Wales","style"=>"classic","trend"=>"black","features"=>"twinBasin"),
		array("place"=>"Windsor","state"=>"Victoria","style"=>"classic","trend"=>"black","features"=>"TwinShower"),

		array("place"=>"Balgowlah","state"=>"New South Wales","style"=>"classic","trend"=>"powder","features"=>"ensuite"),
		array("place"=>"Thornleigh","state"=>"New South Wales","style"=>"classic","trend"=>"powder","features"=>"bathtub"),
		array("place"=>"Tamworth","state"=>"New South Wales","style"=>"classic","trend"=>"powder","features"=>"twinBasin"),
		array("place"=>"Windsor","state"=>"Victoria","style"=>"classic","trend"=>"powder","features"=>"TwinShower"),			

		array("place"=>"Malvern","state"=>"Victoria","style"=>"contemporary","trend"=>"hotel","features"=>"ensuite"),
		array("place"=>"Woodvale","state"=>"Western Australia","style"=>"contemporary","trend"=>"hotel","features"=>"bathtub"),
		array("place"=>"Brighton","state"=>"Victoria","style"=>"contemporary","trend"=>"hotel","features"=>"twinBasin"),
		array("place"=>"Malvern","state"=>"Victoria","style"=>"contemporary","trend"=>"hotel","features"=>"TwinShower"),

		array("place"=>"Balgowlah","state"=>"New South Wales","style"=>"contemporary","trend"=>"black","features"=>"ensuite"),
		array("place"=>"Thornleigh","state"=>"New South Wales","style"=>"contemporary","trend"=>"black","features"=>"bathtub"),
		array("place"=>"Tamworth","state"=>"New South Wales","style"=>"contemporary","trend"=>"black","features"=>"twinBasin"),
		array("place"=>"Windsor","state"=>"Victoria","style"=>"contemporary","trend"=>"black","features"=>"TwinShower"),	

		array("place"=>"Malvern","state"=>"Victoria","style"=>"contemporary","trend"=>"powder","features"=>"ensuite"),
		array("place"=>"Woodvale","state"=>"Western Australia","style"=>"contemporary","trend"=>"powder","features"=>"bathtub"),
		array("place"=>"Brighton","state"=>"Victoria","style"=>"contemporary","trend"=>"powder","features"=>"twinBasin"),
		array("place"=>"Malvern","state"=>"Victoria","style"=>"contemporary","trend"=>"powder","features"=>"TwinShower"),
		);
$styleArray = array();
$trendArray = array();
$featuresrray = array();
$galleryListPopulate = array();


if (isset($_GET['style'])){
	$styleArray = json_decode(stripslashes($_GET['style']));
}

if (isset($_GET['trends'])){
	$trendArray = json_decode(stripslashes($_GET['trends']));
}

if (isset($_GET['features'])){
	$featuresrray = json_decode(stripslashes($_GET['features']));
}


$i = 0;

foreach ($galleryList as $value) {

	if(in_array($value['style'], $styleArray)){
		array_push($galleryListPopulate,$value);
	}
	elseif(in_array($value['trend'], $trendArray)){
		array_push($galleryListPopulate,$value);
	}
	elseif(in_array($value['features'], $featuresrray)){
		array_push($galleryListPopulate,$value);		
	}
$i++;
}


if(! count($galleryListPopulate)){
	$galleryListPopulate = $galleryList;
}


$j = 0;
$output = '';
foreach ($galleryListPopulate as $value) {
    $output = '<li class="galleryThumbItem">';
    $output .= '<figure>';
    $output .= '	<img src="http://placehold.it/750x500.png/ccc/aaa" alt="placeholder">';
    $output .= '	<figcaption>';
    $output .= '		<strong class="galleryThumbPlace">'.$value['place'].'</strong>';
    $output .= '		<span class="galleryThumbState">'.$value['state'].$j.'</span>';
    $output .= '	</figcaption>';
    $output .= '</figure>';
    $output .= '</li>';
    $j++;

    print $output;
}


?>