<?php


class Dog {
  //class properties
    //variables and constants of any ttpe
    public $breed;
    public $colour;
    public $age;
    public $size;
    public $gender;
    public $coat;


  //class methods
  //functions that are related directly to the object
    //constructior
public function __construct($brd,$age,$col,$size,$gnd,$coat) {
// put cone that you want to run automatically when you create a new object/instance


//populate my class properties
$this->breed = $brd;
$this->age = $age;
$this->colour = $col;
$this->size = $size;
$this->gender = $gnd;
$this->coat = $coat;

}


public function doTrick() {
    echo 'I rolled over.';
}

public function eat() {
    echo 'num num num';

}
public function sleep() {
    echo 'zzzzzzzz';

}
public function move() {
    echo 'running';

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