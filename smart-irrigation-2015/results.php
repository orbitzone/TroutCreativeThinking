<?php

  $results = array(
    array(
      "title"=>"Lorem ipsum dolor sit amet, consectetur.",
      "link"=>"smart-thinking-article2.html",
      "text"=>"Lorem ipsum dolor sit amet, consectsicing, debitis repellat? Dolorum nobis harum quam veritatis, voluptatum iure vero odit sunt sequi!",
      "thumbnail"=>"images/smart-thinking/article3.png"
    ),
    array(
      "title"=>"Hydrozoning - Positioning Plants Wisely",
      "link"=>"smart-thinking-article1.html",
      "thumbnail"=>"images/smart-thinking/article1.png"
    ),
    array(
      "title"=>"Why Irrigate?",
      "link"=>"smart-thinking-article2.html",
      "thumbnail"=>"images/smart-thinking/article2.png"
    ),
    array(
      "title"=>"Why to use smart irrigation systems.",
      "link"=>"smart-thinking-article3.html",
      "thumbnail"=>"images/smart-thinking/article3.png"
    ),
    array(
      "title"=>"The benefits of Dripline",
      "link"=>"smart-thinking-article4.html",
      "thumbnail"=>"images/smart-thinking/article1.png"
    ),
    array(
      "title"=>"Lorem ipsum dolor sit amet, consectetur.",
      "link"=>"smart-thinking-article1.html",
      "text"=>"Lorem ipsum dolor sit amet, voluptatum iure vero odit sunt sequi!",
      "thumbnail"=>"images/smart-thinking/article2.png"
    ),

  );
  //shuffle($results);
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



