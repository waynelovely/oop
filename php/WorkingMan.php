<?php

require_once 'Person.class.php';

class WorkingMan extends Person
{
    public function makeNoise($noise)
    {
        print "This person says: $noise!!!!!!\n";
    }

    function move($dir)
    {
        $uDir = strtoupper($dir);

        switch ($dir) {
        case 'N':
            $this->x -= 1;
            break;
        case 'S':
            $this->x += 1;
            break;
        case 'E':
            $this->y += 1;
            break;
        case 'W':
            $this->y -= 1;
            break;
        }
    }

}

?>
