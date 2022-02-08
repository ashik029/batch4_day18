<?php


namespace App\classes;

class FullName
{
 public $firstName;
 public $lastName;


 public function __construct($data)
 {
//     echo 'Hello';
//     echo '<pre>';
//     print_r($data);
//     exit();
     $this->firstName = $data ['first_name'];
     $this->lastName  = 'Rahman';

 }

    public function index ()
 {
     /*echo $this->firstName;*/

     header('Location: action.php?pages=full-name');
 }
}