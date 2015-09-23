<?php

  $results = array(
    array(
      "title"=>"Hydrozoning - Positioning Plants Wisely",
      "link"=>"smart-thinking-article1.html",
        "text"=>"Many irrigation systems are not designed and set up according to the type of plant and its requirements. Unfortunately, a lot of irrigation systems tend to water turf and every type of plant in the landscape at the same time and rate. This method is inefficient and can cause waster wastage.",
      "thumbnail"=>"images/smart-thinking/article1.png"
    ),
    array(
      "title"=>"Why Irrigate?",
      "link"=>"smart-thinking-article2.html",
      "text"=>"Irrigation systems are an efficient, easy and cost effective way to beautify homes and landscapes. Irrigation systems can contribute to increasing a property’s value and save time and money while helping to maintain the initial investment of landscapes.",
      "thumbnail"=>"images/smart-thinking/article2.png"
    ),
    array(
      "title"=>"Why to use smart irrigation systems.",
      "link"=>"smart-thinking-article3.html",
      "text"=>"Being smart about irrigation is a good idea, both for the environment and your back pocket. Up to 50% of all water used in the home is for watering landscapes with the average property owner over-watering by 38%.",
      "thumbnail"=>"images/smart-thinking/article3.png"
    ),
    array(
      "title"=>"The benefits of Dripline",
      "link"=>"smart-thinking-article4.html",
      "text"=>"Drip irrigation is an efficient and economical method of watering. Drip irrigation involves placing tubes with emitters in the garden bed or ground alongside the plants. Water is slowly dripped through the emitters directly into the soil at the root zone. ",
      "thumbnail"=>"images/smart-thinking/article4.png"
    ),
    array(
      "title"=>"Lorem ipsum dolor sit amet, consectetur.",
      "link"=>"#",
      "text"=>"Lorem ipsum dolor sit amet, voluptatum iure vero odit sunt sequi!",
      "thumbnail"=>"images/smart-thinking/article2.png"
    ),
    array(
      "title"=>"Lorem ipsum dolor sit amet, consectetur.",
      "link"=>"#",
      "text"=>"Lorem ipsum dolor sit amet, consectsicing, debitis repellat? Dolorum nobis harum quam veritatis, voluptatum iure vero odit sunt sequi!",
      "thumbnail"=>"images/smart-thinking/article3.png"
    ),
  );
  shuffle($results);
  (isset($_REQUEST['start']))?$start = $_REQUEST['start'] : $start = 0;
  $remaining = ',"remaining":"10"';
  if($start >= 10){
    $rand = rand(0,10);
    if($rand >= 3){
      $remaining = ',"remaining":"0"';
    }
  }
  echo '{"results":'.json_encode($results).$remaining.'}';
  
  //echo(rand(0,1));
?>



