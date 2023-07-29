<?php
class Computer {

    public $data = "\"data\" from Computer class.\n";

    public static $stData = "\"staic data\" from Computer class.\n";

    const CONSTDTATA = "\"CONSTDTATA\" from Computer class.\n";

    public function __construct()
    {
        echo "\"__construct\" from Computer class.\n";
        $this->data = $this->data . " - construct.\n";
        self::$stData = self::$stData . " - construct.\n";
    }

    public function publicFunction()
    {
        return "\"publicFunction\" from Computer class.\n";
    }

    public static function staticFunction()
    {
        return "\"staticFunction\" from Computer class.\n";
    }
     
}
