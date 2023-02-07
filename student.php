<?php


class student {
  //class properties
    //variables and constants of any ttpe
    public $fname;
    public $lname;
    public $age;
    public $program;
    public $course;
    public $created_at;
    public $updated_at;

    public $image;


  //class methods
  //functions that are related directly to the object
    //constructior
    public function __construct($student_id, $created_at, $updated_at, $lname, $fname, $program_id, $level, $image) {
        // put cone that you want to run automatically when you create a new object/instance


//populate my class properties
$this->student_id = $student_id;
$this->created_at = $created_at;
$this->updated_at = $updated_at;
$this->lname = $lname;
$this->fname = $fname;
$this->program_id = $program_id;
$this->level = $level;
$this->image = $image;

}


public function getStudentId() {
    return $this->student_id;
  }
  
  public function getCreatedAt() {
    return $this->created_at;
  }
  
  public function getUpdatedAt() {
    return $this->updated_at;
  }
  
  public function getLname() {
    return $this->lname;
  }
  
  public function getFname() {
    return $this->fname;
  }
  
  public function getProgramId() {
    return $this->program_id;
  }
  
  public function getLevel() {
    return $this->level;
  }
  
  public function getImage() {
    return $this->image;
  }
}



$newt = new Dog  ('Dashshund','13','brown','small','female','shorthair');

$roxy = new Dog  ('German Shepherd','13','brown','small','female','shorthair');


echo $newt->breed;
echo '<br><br>';
echo $newt->sleep();
echo '<br><br>';
echo 'I am a' . $newt->size . ', ' . $newt->colour . ', ' .$newt->gender . ' ' . $newt->breed;




?>