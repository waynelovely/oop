<?php

require_once 'Boat.php';
require_once 'WorkingMan.php';

$boat = new Boat();

$boat->makeNoise('GGRRRRR');

$man = new WorkingMan();

$man->makeNoise('yay!!!');


$boat->move('N');
$boat->move('N');
$boat->move('E');
$boat->move('E');
$boat->move('E');
$boat->move('S');
$boat->move('S');
$boat->move('S');

print "position = " . implode(',', $boat->getPosition()) . "\n";

$objects = array($boat, $man);

foreach ( $objects as $thing ) {
    print $thing->makeNoise("beep") . "\n";
}

?>
