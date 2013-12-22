<?php 

$galleryList=array(
		array("place"=>"Malvern","state"=>"Victoria","style"=>"classic","trend"=>"hotel","features"=>"ensuite","url"=>"gallerypage01"),
		array("place"=>"Woodvale","state"=>"Western Australia","style"=>"classic","trend"=>"hotel","features"=>"bathtub","url"=>"gallerypage02"),
		array("place"=>"Brighton","state"=>"Victoria","style"=>"classic","trend"=>"hotel","features"=>"twinBasin","url"=>"gallerypage03"),
		array("place"=>"Malvern","state"=>"Victoria","style"=>"classic","trend"=>"hotel","features"=>"TwinShower","url"=>"gallerypage04"),

		array("place"=>"Balgowlah","state"=>"New South Wales","style"=>"classic","trend"=>"black","features"=>"ensuite","url"=>"gallerypage05"),
		array("place"=>"Thornleigh","state"=>"New South Wales","style"=>"classic","trend"=>"black","features"=>"bathtub","url"=>"gallerypage06"),
		array("place"=>"Tamworth","state"=>"New South Wales","style"=>"classic","trend"=>"black","features"=>"twinBasin","url"=>"gallerypage07"),
		array("place"=>"Windsor","state"=>"Victoria","style"=>"classic","trend"=>"black","features"=>"TwinShower","url"=>"gallerypage08"),

		array("place"=>"Balgowlah","state"=>"New South Wales","style"=>"classic","trend"=>"powder","features"=>"ensuite","url"=>"gallerypage09"),
		array("place"=>"Thornleigh","state"=>"New South Wales","style"=>"classic","trend"=>"powder","features"=>"bathtub","url"=>"gallerypage10"),
		array("place"=>"Tamworth","state"=>"New South Wales","style"=>"classic","trend"=>"powder","features"=>"twinBasin","url"=>"gallerypage11"),
		array("place"=>"Windsor","state"=>"Victoria","style"=>"classic","trend"=>"powder","features"=>"TwinShower","url"=>"gallerypage12"),			

		array("place"=>"Malvern","state"=>"Victoria","style"=>"contemporary","trend"=>"hotel","features"=>"ensuite","url"=>"gallerypage13"),
		array("place"=>"Woodvale","state"=>"Western Australia","style"=>"contemporary","trend"=>"hotel","features"=>"bathtub","url"=>"gallerypage14"),
		array("place"=>"Brighton","state"=>"Victoria","style"=>"contemporary","trend"=>"hotel","features"=>"twinBasin","url"=>"gallerypage15"),
		array("place"=>"Malvern","state"=>"Victoria","style"=>"contemporary","trend"=>"hotel","features"=>"TwinShower","url"=>"gallerypage01"),

		array("place"=>"Balgowlah","state"=>"New South Wales","style"=>"contemporary","trend"=>"black","features"=>"ensuite","url"=>"gallerypage16"),
		array("place"=>"Thornleigh","state"=>"New South Wales","style"=>"contemporary","trend"=>"black","features"=>"bathtub","url"=>"gallerypage17"),
		array("place"=>"Tamworth","state"=>"New South Wales","style"=>"contemporary","trend"=>"black","features"=>"twinBasin","url"=>"gallerypage18"),
		array("place"=>"Windsor","state"=>"Victoria","style"=>"contemporary","trend"=>"black","features"=>"TwinShower","url"=>"gallerypage19"),	

		array("place"=>"Malvern","state"=>"Victoria","style"=>"contemporary","trend"=>"powder","features"=>"ensuite","url"=>"gallerypage20"),
		array("place"=>"Woodvale","state"=>"Western Australia","style"=>"contemporary","trend"=>"powder","features"=>"bathtub","url"=>"gallerypage21"),
		array("place"=>"Brighton","state"=>"Victoria","style"=>"contemporary","trend"=>"powder","features"=>"twinBasin","url"=>"gallerypage22"),
		array("place"=>"Malvern","state"=>"Victoria","style"=>"contemporary","trend"=>"powder","features"=>"TwinShower","url"=>"gallerypage23"),
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
    $output = '<li class="galleryThumbItem" data-ajaxUrl="'.$value['url'].'">';
    $output .= '<figure>';
    $output .= '	<img src="http://placehold.it/750x500.png/ccc/aaa" alt="placeholder">';
    $output .= '	<figcaption>';
    $output .= '		<strong class="galleryThumbPlace">'.$value['place'].'</strong>';
    $output .= '		<span class="galleryThumbState">'.$value['state'].'</span>';
    $output .= '	</figcaption>';
    $output .= '</figure>';
    $output .= '</li>';
    $j++;

    print $output;
}


?>