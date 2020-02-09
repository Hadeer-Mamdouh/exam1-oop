<?php

class calc{
    
    public $num1;
    public $num;
    public $op;
    
    function calculate(){
        
        $this->num1=$_GET['num1'];
        $this->num2=$_GET['num2'];
        $this->op=$_GET['op'];
        
        if($this->op=="+"){
            
            echo $this->num1+$this->num2;
        }
        else if($this->op=="-"){
            
            echo $this->num1-$this->num2;
        }
        else if($this->op=="*"){
            
            echo $this->num1*$this->num2;
        }
        else if($this->op=="/"){
            
            echo $this->num1/$this->num2;
        }

    }

}

// new object from class

$hadeer=new calc();
$hadeer->calculate();