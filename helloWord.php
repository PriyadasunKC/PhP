<?php 

    //Has not return value
    // Fastest way to print
    echo "Hello Wold! \n";

    //Has return value
    print "Hello World! \n";

    echo "It's a great day! \n";

    $name= "John";
    echo "Hello, $name! \n";

    // To change the values of the variable Assign with reference
    $x = 10;
    $y = &$x;
    $x = 20;
    echo"$y";

    // We cannot use '' to use variable
    $myName= "John";
    echo 'Hello, $myName! \n';

    // To use variable in '' we have to use ""
    echo "Hello, $myName! \n";
    echo 'Hello '.$myName.'! \n'; 




?>