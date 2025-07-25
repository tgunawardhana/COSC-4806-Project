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


        header('Content-Type: application/json');

            if (isset($results['candidates'][0]['content']['parts'][0]['text'])) {
                echo json_encode([
                    'success' => true,
                    'review' => $results['candidates'][0]['content']['parts'][0]['text']
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'error' => 'Could not get review'
                ]);
            }
        
    
    }

    
}
