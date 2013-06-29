<?php

abstract class Person implements SoundInterface
{

    public $name;
    public $profession;

    abstract public function makeNoise($sound);

}

?>
