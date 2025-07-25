<?php

class Omdb {

  public function __construct() {

  }

  public function search($title, $year){
    $query_url = "http://www.omdbapi.com/?apikey=".$_ENV['omdb_key']."&t=". urlencode($title) . "&y=".urlencode($year);
    $json = file_get_contents($query_url);
    return $json;
  }
  
}