<?php

namespace App\Models;

use App\Database;

class Emergency{

  public function __construct(){
    if (!$this->database){
      $this->database = new Database();
    }
  }
}