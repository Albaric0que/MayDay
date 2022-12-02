<?php

namespace App\Controllers;

use App\Models\Emergency;
use App\Core\View;

class EmergencyController{

  public function __construct(){
    $this->index();
  }

  public function index(){

    $emergency = new Emergency;
    $emergencies = $emergency->all();
    new View("emergencyList", ["emergency" => $emergencies]); 

  }
}