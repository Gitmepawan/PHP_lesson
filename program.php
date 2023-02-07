<?php
class Program {
    private $id;
    private $created_at;
    private $updated_at;
    private $name;
    private $description;
  
    public function __construct($id, $created_at, $updated_at, $name, $description) {
      $this->id = $id;
      $this->created_at = $created_at;
      $this->updated_at = $updated_at;
      $this->name = $name;
      $this->description = $description;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getCreatedAt() {
      return $this->created_at;
    }
  
    public function getUpdatedAt() {
      return $this->updated_at;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getDescription() {
      return $this->description;
    }
  }
  
?>