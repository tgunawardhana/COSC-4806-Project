<?php

class Gemini {

  public function __construct() {

  }

  public function getReview($title) {

    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=".$_ENV['GEMINI'];

    $data = array(
        "contents" => array(
            array(
                "parts" => array(
                    array(
                        "text" => "'Write a reviw for the movie '.$title.'"
                    )
                )
            )
        )
    );
      
      $json_data = json_encode($data);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $response = curl_exec($ch);
      curl_close($ch);
      if(curl_errno($ch)){
          echo 'Curl error: ' . curl_error($ch);
      }
      return $response;
  }

}