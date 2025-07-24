<?php

class Omdb {

  public function __construct() {

  }

  public function search($title, $year){
    $url = "http://www.omdbapi.com/?apikey=". $_ENV['omdb_key'] .
    "&t=$title&y=$year";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    return $data;
  }
  
}