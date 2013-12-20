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
$galleryListPopulate = array();


$style = $_GET['style'];
$trend = $_GET['trend'];
$features = $_GET['features'];
//var_dump($galleryList);

$i = 0;

foreach ($galleryList as $value) {
	//echo $value[place];

	//echo '<br>'.$i.' '.$value['place'];

	if (isset($style)){
		if($value['style'] != $style){
			unset($galleryList[$i]);
		}
	}
	if (isset($trend)){
		if($value['trend'] != $trend){
			unset($galleryList[$i]);
		}
	}
	if (isset($features)){
		if($value['features'] != $features){
			unset($galleryList[$i]);
		}
	}

$i++;

}




$j = 0;
$output = '';
foreach ($galleryList as $value) {
    $output = '<li class="galleryThumbItem">';
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