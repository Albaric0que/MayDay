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

  public function getName() {
    return $this -> name;
  }

  public function getIssue() {
    return $this -> issue;
  }

  public function getId() {
    return $this -> id;
  }

  public function getClassification() {
    return $this -> classification;
  }

  public function getDateTime() {
    return $this -> dateTime;
  }

  public function save() {
    $this->database->mysql->query("INSERT INTO `{$this->table}` (`name`, `issue`, `classification`) VALUES ('$this->name', '$this->issue', '$this->classification');");
  }
  public function findById($id){
    $query = $this->database->mysql->query("SELECT * FROM `{$this->table}`WHERE `id`={$id}");
    $result = $query->fetchAll();

    return new Emergency($result[0]["id"], $result[0]["name"], $result[0]["issue"], $result[0]["classification"], $result[0]["dateTime"]);
  }
  public function destroy(){
    $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}");
  }

  public function rename($nameNew, $issueNew, $classificationNew){
    $this->name = $nameNew;
    $this->issue = $issueNew;
    $this->classification = $classificationNew;
  }

  public function update(){
    $this->database->mysql->query("UPDATE `{$this->table}` SET `name` = '{$this->name}', `issue` = '{$this->issue}', `classification` = '{$this->classification}' WHERE `ID`= {$this->id}");

  }

}