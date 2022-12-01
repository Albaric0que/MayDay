<?php

namespace App\Models;

use App\Database;

class Emergency{

  private ?int $id;
  private string $name;
  private string $issue;
  private string $classification;
  private ?string $dateTime;

  private $table = "emergencies";
  private $database;

  public function __construct($id = null, $name = '', $issue = '', $classification = '', $dateTime = null){

      $this->id = $id;
      $this->name = $name;
      $this->issue = $issue;
      $this->classification = $classification;
      $this->dateTime = $dateTime;

    if (!$this->database){
      $this->database = new Database();
    }
  }
  public function all (){
    $query = $this->database->mysql->query("select * from {$this->table}");
    $emergencyArray = $query->fetchAll();

    $emergencyList = [];

    foreach ($emergencyArray as $emergency){
      $emergencyItem = new Emergency($emergency["id"], $emergency["name"], $emergency["issue"], $emergency["classification"], $emergency["dateTime"]);
    
    array_push($emergencyList, $emergencyItem);
    }
    return $emergencyList;
  }
}