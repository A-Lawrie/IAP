<?php
class fnc{

    var $fname;
    public $username;
    var $YOB;
    protected $email;
    private $password;



    public function computer_user($fname){
        return $fname;
    }
    public function user_age($name,$YOB){
          $age = date('Y')- $YOB;
          return $name. " is " .$age;

    }
    
}
