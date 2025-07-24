<?php

class Movie extends Controller {

    public function index() {

      $results = null;

      if (isset($_SESSION['movie_results'])) {
          $results = $_SESSION['movie_results'];
          unset($_SESSION['movie_results']);
      }

      $this->view('movie/index', ['results' => $results]);
    }
    

    public function search(){
        $title = $_REQUEST['title'];
        $year = $_REQUEST['year'];
        $omdb = $this->model('Omdb');
        $results = $omdb->search($title, $year);
        $results = json_decode($results, true);
        $results = [$results];
      
        $_SESSION['movie_results'] = $results;      
        header("location: /movie");
        
    }
}
