<?php

require_once 'Vehicle.class.php';

class Boat extends Vehicle
{

    public function makeNoise($noise) 
    {
        print "This boat says: $noise!!!!!!\n";
    }

    function move($dir) 
    {
    
        $uDir = strtoupper($dir);
    
        switch ($dir) {

        case 'N':
            $this->y -= 1;
            break;
        case 'S':
            $this->y += 1;
            break;
        case 'E':
            $this->x += 1;
            break;
        case 'W':
            $this->x -= 1;
            break;
        }
    }

}

?>
