<?php

use Tracy\Debugger;

class Boot
{
    public static function Run()
    {
        Debugger::enable(Debugger::DEVELOPMENT);
        echo 'It works!';
    }
}