<?php namespace App\Controllers;

class Helloworld extends BaseController {

    public function index($name,$npm)
    {
        // echo $this->name;
        echo $name ."<br>";
        echo $npm ."<br>";
        // echo "Hello Arief";
    }

    public function show()
    {
        echo "Arief Islamy";
        echo "1857051010";
    }
}