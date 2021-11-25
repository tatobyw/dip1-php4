<?php
    function welcome(){
        echo "Hi, welcome to thailand ";
    }

    function sayD1($name,$age){
        //echo "Hello week4  <br /> ";
        echo "$name $age";
 
    }
    //Call By Reference
    function adder(&$str,&$std1){
        $str = "Call By Reference";
        $std1= "James";
    }
    //Default argument Value
    function lastName($name="Sakaberg"){
        echo "Hello $name <br />";

    }

    welcome();           //calling a Functuon
    echo "<br />";
    sayD1("Mark",25);    //calling by value
    echo "<br />";
    sayD1("Jhon",30);    //calling by value
    echo "<br />";
    adder($str,$std1);
    echo $str," ",$std1;
    echo "<br />";
    echo lastName();


?>
