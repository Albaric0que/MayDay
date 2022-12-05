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

    if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
      $this->store($_POST);
      return;
    }

    if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {
      $this->delete($_GET["id"]);
      return;
    }

    $this->index();
  }


  public function index(){

    $emergency = new Emergency;
    $emergencies = $emergency->all();
    new View("emergencyList", ["emergency" => $emergencies]); 

  }

  public function create(){
    new View("createEmergency");
  }

  public function store(array $request){
    $newEmergency = new Emergency(null, $request["name"], $request["issue"], $request["classification"], null);
    
    $newEmergency->save();

    $this->index();
  }
  public function delete($id){
    $emergencyHelper = new Emergency();
    $emergency = $emergencyHelper->findById($id);
    $emergency->destroy();

    $this->index();
  }
}