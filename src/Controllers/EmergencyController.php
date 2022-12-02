<?php

namespace App\Controllers;

use App\Models\Emergency;
use App\Core\View;

class EmergencyController{

  public function __construct(){

    if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
      $this -> create();
      return;
    }

    $this->index();
  }


  public function index(){

    $emergency = new Emergency;
    $emergencies = $emergency->all();
    new View("emergencyList", ["emergency" => $emergencies]); 

  }
}