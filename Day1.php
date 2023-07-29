<?php

define('VERSION', '1.0');

// A-Z 1-9 _ >> Capitalize is prefered
// Case insensitive
class SimpleClass
{

    // Proberties (variables + contants)
    // Methods (Functions)
    // Visability public - private - protected
    // Pseudo variable - $this = SimpleClass content

    //  ::                scope resolution operator لطلب الثوابت من الكلاس use with self, static, parent keywords
    // ->               object arrow
    // $this->       pseudo variables

    // Cannot create an object of another class as the initiation value of a variable inside the class. public $var= new m1() !
    // But I can do it inside the class constructor or outside the class
    // Proberties (variables + contants)
    //    self, static, parent::        =  No
    //    $this->                          =  Yes
    public $var; // Null, String, Boolean, Integer, Float and Array
    public $arr = array("BLue", "Green", 'Yellow');
    public $version = VERSION;

    //    self, static, parent::        =  Yes
    //    $this->                          =  No
    public static $st;

    //    self, static, parent::        =  Yes
    //    $this->                          =  No
    const HELLO = "I'm a const ...\n"; // String, integer, float, boolean ---- Case sensitive ---- Can't use an array ! --- Capitalization is preferred

    // Functions - Methods 
    public function __construct()
    {
        $this->var = "I'm a public property ...\n";
        self::$st = "I'm a public static var ...\n";
        self::m2();
    }

    //    self, static, parent::        =  Yes
    //    $this->                          =  Yes
    public function m1()
    {
        return "I'm a public method ...\n";
    }

    //    self, static, parent::        =  Yes
    //    $this->                          =  Yes                 // PHP 5.4.X ^
    public static function m2()
    {
        return "I'm a public static method ...\n";
    }

    // variableName >> camelCase
    public function getSt()
    {
        // :: with $ staticVar
        return self::$st;
    }

    public function getSt2()
    {
        return $this->m2();
    }

    public function getConst()
    {
        return self::HELLO;
    }

    public function printOut()
    {
        return "\n\n" . $this->m1() . self::m1();
    }

    public function printOut2()
    {
        return "\n\n" . $this->m2() . self::m2();
    }

    public function __destruct()
    {
        unset($var);
        unset($arr);
        unset($st);
    }
}


class Foo
{
    public $fooSimple;

    public $data = "I'm Foo Data ...";

    public function __construct()
    {
        $this->fooSimple = new SimpleClass();
    }
}



/**
 * testOOPCode
 *
 * @return void
 */
function testOOPCode()
{
    // $simbleObj = new SimpleClass;
    $simbleObj = new SimpleClass();
    $fooObj = new foo();

    $SimpleClassObjs = array('SimpleClass');
    $simbleObj = new $SimpleClassObjs[0]();

    echo "\n\n------  Proberties & Methods   ------\n";
    echo $simbleObj->var;
    var_dump($simbleObj->arr);
    echo $simbleObj->m1();
    echo $simbleObj->M1(); // case insensitive


    echo "\n\n------  Static   ------\n";

    // :: with $ staticVar
    echo SimpleClass::$st;
    echo $simbleObj->getSt();
    echo SimpleClass::m2();
    echo $simbleObj->m2();
    echo $simbleObj->getSt2();


    echo "\n\n------  Const   ------\n";

    // In PHP 5.2 or older and In PHP 5.3 or newer
    echo SimpleClass::HELLO;
    // In PHP 5.3 or newer
    echo $simbleObj::HELLO;
    echo $simbleObj->getConst();


    echo "\n\n------  2 Classes   ------\n";

    var_dump($fooObj->fooSimple);
    echo $fooObj->fooSimple->var;
    echo $fooObj->fooSimple->m1();
    echo $fooObj->fooSimple->m2();
    echo $fooObj->fooSimple::HELLO;


    echo "\n\n------  Const  ------\n";
    echo VERSION;


    echo $simbleObj->printOut();

    echo $simbleObj->printOut2();
}

testOOPCode();
