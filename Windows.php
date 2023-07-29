<?php

class Windows extends Computer {

    // Override must be with the same access modifiers
    public function __construct()
    {
        parent::__construct();
        echo "\"__construct\" from Windows class.\n";
    }

    public function publicFunction()
    {
        return "\"publicFunction\" from Windows class.\n";
    }

    public static function staticFunction()
    {
        return "\"staticFunction\" from Windows class.\n";
    }

    public function printOut()
    {
        echo $this->data; 
        echo parent::$stData;
        echo parent::CONSTDTATA;
        echo $this->publicFunction();
        echo $this->staticFunction();
        echo parent::staticFunction();
    }
    
}
