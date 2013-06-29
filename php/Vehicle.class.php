<?php

require_once 'SoundInterface.php';

abstract class Vehicle implements SoundInterface
{

    public $color;
    public $x, $y;

    /**
     * from SoundInterface
     *
     * @param string $sound The sound to be made
     *
     * @return none
     */
    abstract public function makeNoise($sound);

    abstract public function move($dir);

    public function getPosition() 
    {
        return array($this->x, $this->y);
    }

}

?>
