<?php
class Book{
    public $title;
    public $author;
    public $ISBN;
    public $status;
    public function print($title,$author,$ISBN,$status)
    {
        $this->title=$title;
        $this->author=$author;
        $this->ISBN=$ISBN;
        $this->status=$status;
        echo "Title:".$this->title."<br>";
        echo "Author:".$this->author."<br>";
        echo "ISBN:".$this->ISBN."<br>";
        echo "Status:".$this->status."<br><br>";
    }
}
$ob =new Book();
$ob->print("PHP","Virat","ISBN001","Available");
$ob->print("Java","Gill","ISBN002","Available");
?>