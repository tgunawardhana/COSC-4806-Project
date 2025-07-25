<?php

class Movie extends Controller {

    public function index() {

        $results = null;

        if (isset($_SESSION['movie_results'])) {
          $results = $_SESSION['movie_results'];
          unset($_SESSION['movie_results']);
        }
        if (isset($_SESSION['movie_review'])){
            $review = $_SESSION['movie_review'];
            unset($_SESSION['movie_review']);
        }

        $this->view('movie/index', ['results' => $results, 'review' => $review]);
    }
    

    public function search(){
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING);
        $title = "Barbie";
        $omdb = $this->model('Omdb');
        $results = $omdb->search($title, $year);
        $results = json_decode($results, true);
        $results = [$results];
      
        $_SESSION['movie_results'] = $results;      
        header("location: /movie");
        
    }

    public function getReview(){
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $review = $this->model('Gemini');
        $results = $review->getReview($title);

        $results = json_decode($results, true);
        $results = [$results];
        $results = $results[0]['candidates'][0]['content']['parts'][0]['text'];
        
        $_SESSION['movie_review'] = $results;
        header("location: /movie");
    }

    
}
