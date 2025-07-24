<?php

class Report {

  public function __construct() {

  }

  public function get_all_reminders() {
    $dbh = db_connect();
    $statement = $dbh->prepare("select users.username as user_name, reminders.* from reminders join users on reminders.user_id = users.id;");
    //$statement = $dbh->prepare("select * from reminders;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
  }

  public function get_max_reminders() {
      $dbh = db_connect();
      $statement = $dbh->prepare("select users.username as user_name, count(reminders.id) as reminder_count from reminders join users on reminders.user_id = users.id group by users.username order by reminder_count desc limit 1;");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
  }

  public function get_all_logins(){
      $dbh = db_connect();
  $statement = $dbh->prepare("select username, count(status) as login_count from login_attempts where status = 'success' group by username;") ;
      
      //$statement = $dbh->prepare("select * from login_attempts where status = 'success' group by username;") ;
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
  }



}