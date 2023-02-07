<?php
class RegisteredStudent extends Student {
    private $registration_date;
  
    public function __construct($id, $created_at, $updated_at, $lname, $fname, $program_id, $level, $image, $registration_date) {
      parent::__construct($id, $created_at, $updated_at, $lname, $fname, $program_id, $level, $image);
      $this->registration_date = $registration_date;
    }
  
    public function getRegistrationDate() {
      return $this->registration_date;
    }
  
    // Override parent class method
    public function getFullName() {
      return $this->fname . " " . $this->lname . " (Registered)";
    }
  }
  
  
?>