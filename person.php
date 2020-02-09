<?php

//class
class Student{
    //attributes proreties
    public $name;
    public $id;
    public $level;
    
    
    //methods
    
    function regesiterOnCourse($courseName){
        
        echo "welcom to " . $courseName ."<br>" ;
    }
    
    function leaveCourse($courseName){
        
        echo "bye to" . $courseName ."<br>";
    }
    
    
};


//object

$newStudent=new Student();
$newStudent->name="Hadeer ";
$newStudent->id="2020001";
$newStudent->leve=1;
$newStudent->regesiterOnCourse("Math");
$newStudent->leaveCourse("c++");


echo $newStudent->name;

