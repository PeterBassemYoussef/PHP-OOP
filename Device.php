<?php

// Parent
class Device {
    public $data = "data from Device class. \n";

    public function __construct(){
        echo "Devise construct called ...\n";
    }

    public function foo (){
        return "foo from Device class. \n";
    }
}

// Chaild
class Mobile extends Device {

    public function __construct(){
        echo "Mobile construct called ...\n";
    }

    public function PrintOut(){
        echo "\nPrintOut from Mobile class. \n";;
        echo $this->data;
        echo $this->foo();
        echo "\n";
    }

    // PHP does not natively support method overloading
    // However, you can achieve similar behavior using the __call() magic method.
    /*
        The __call() magic method is automatically called when
        an undefined or inaccessible method is invoked on an object.
        You can use this method to handle method overloading
        based on the number and types of arguments passed to the method.
    */
    // public function PrintOut( $test )
    // {
    //     return "";
    // }


}

function Test ()
{
    $device = new Device();
    echo $device->data;
    echo $device->foo();

    $mobile = new Mobile();
    echo $mobile->data;
    echo $mobile->foo();

    $mobile->PrintOut();
}

// Test();
