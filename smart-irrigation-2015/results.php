<?php

/*
type would be one of 

video
link
data
article
*/
  $results = array(
    array(
      "heading"=>"Healthy Together Community",
      "content"=>"Healthy Together Bendigo",
      "link"=>"resource-content.html",
      "icon"=>"fa-link"
    ),
    array(
      "heading"=>"Healthy Living",
      "content"=>"Healthy Together Victoria aims to improve people's health where they live, learn, work and play.",
      "link"=>"resource-video.html",
      "thumbnail"=>"resource1.jpg",
      "isvideo"=>"true"
    ),
    array(
      "heading"=>"Data & Statistics",
      "content"=>"Victoria Health Population Survey",
      "link"=>"#",
      "thumbnail"=>"resource2.jpg",
      "icon"=>"fa-file"
    ),
    array(
      "heading"=>"Data & Statistics",
      "content"=>"Victoria Health Population Survey",
      "link"=>"#",
      "thumbnail"=>"resource3.jpg",
      "icon"=>"fa-file"
    ),
    array(
      "heading"=>"Healthy Together Community",
      "content"=>"Healthy Together Hume",
      "link"=>"resource-content.html",
      "icon"=>"fa-link"
    ),
    array(
      "heading"=>"Healthy Living",
      "content"=>"Healthy Together Victoria aims to improve people's health where they live, learn, work and play.",
      "link"=>"resource-video.html",
      "thumbnail"=>"resource4.jpg",
      "isvideo"=>"true"
    ),
    array(
      "heading"=>"Other Initiatives",
      "content"=>"Healthy Together Victoria aims to improve people's health where they live, learn, work and play.",
      "link"=>"resource-content.html",
      "icon"=>"fa-link"
    ),
  );
  shuffle($results);
  echo '{"results":'.json_encode($results).'}';
  
  //echo(rand(0,1));
?>
