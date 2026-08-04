<?php
class person{
    protected  $name;
    protected  $email;

    public function set($name,$email){
        $this->name=$name;
        $this->email=$email;
    }
    public function get(){
        echo "Name:".$this->name."<br>";
        echo "Email:".$this->email."<br>";
    }
}
class student  extends person{
    protected $studentID;
    protected $course;

    public function setstudent($studentID,$course){
        $this->studentID=$studentID;
        $this->course=$course;
    }
   public function getstudent(){
    echo "Student ID:".$this->studentID."<br>";
    echo "Course:".$this->course."<br>";
   }
}
 class staff extends person{
    protected $employeeID;
    protected $department;

    public function setstaff($employeeID,$department){
        $this->employeeID=$employeeID;
        $this->department=$department;
    }
    public function getstaff(){
        echo "EmpoloyeeID:".$this->employeeID."<br>";
        echo "Department:".$this->department."<br>";
    }
} 
$stu=new student();
echo "===Student Detail==="."<br>";
$stu->set("Anushka","anushka123@gmail.com");
$stu->get();

$stu->setstudent(101,"IT239");
$stu->getstudent();

$staf=new staff();
echo "<br><br>"."===Employee Detail==="."<br>";
$staf->set("Prabin","prabin123@gmail.com");
$staf->get();

$staf->setstaff(102,"Management");
$staf->getstaff();
?>