<?php

namespace App\Controllers;

use App\Models\Emergency;

class EmergencyController{

  public function __construct(){
    $this->index();
  }

  public function index(){

    $emergency = new Emergency;
  }
}