<?php

class Movie extends Controller {

    public function index() {
         $this->view('movie/index');
    }

    public function search($title, $year){
        $omdb = $this->model('Omdb');
        $omdb->search($title, $year);
        $this->view('movie/index');
    }
}
