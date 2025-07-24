<?php

class Reports extends Controller {

  public function index() {
    $this->view('reports/index');  
  }

  public function all_reminders(){
    $report = $this->model('Report');
    $list_of_reminders = $report->get_all_reminders();
    $this->view('reports/all_reminders', ['reminders' => $list_of_reminders]);
  }

  public function max_reminders(){
    $report = $this->model('Report');
    $max_reminders = $report->get_max_reminders();
    $this->view('reports/index', ['max_reminders' => $max_reminders]);
  }

  public function all_logins(){
    $report = $this->model('Report');
    $list_of_logins = $report->get_all_logins();
    $this->view('reports/all_logins', ['logins' => $list_of_logins]);
  }
  
}
