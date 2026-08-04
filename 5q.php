<?php
class pet{
    public $name;
    public $type;
    public $age;

    public function  __construct($name,$type,$age){
        $this->name=$name;
        $this->type=$type;
        $this->age=$age;
    }
    public function display(){
        echo "Name:".$this->name."<br>";
        echo "Type:".$this->type."<br>";
        echo "Age:".$this->age."<br>";
    }
    public function __destruct(){
        echo "<br>object has been removed from memory";
    }
}
  $obj=new pet("Anmol","Dog",17);
  $obj->display();
  ?>
  