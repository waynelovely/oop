php
==

In this example we have the following object hierarchy

  
Vehicle       Person
  |             |
  V             V
Boat        WorkingMan

The base classes also implement a common interface

   SoundInterface
         |
   -------------
   |           |
   V           V
Vehicle      Person


Vehicle and Person are "abstract" classes which we are using as base classes.

Boat and WorkingMan are "derived" class or child classes of the base classes.

The derived classes need to implement all of the "abstract" method in the base class.


The Vehicle class has a default implementation of a getPosition() method that can be inherited by the Boat class.

All of these things can makeNoise(), so an interface is established amongst the otherwise unrelated base classes.

The base classes define an abstract method for makeNoise() and responsibility for implementation is passed off child classes.


main.php puts the pieces in motion so you can see how to instantiate the derived classes and use a common interface method on a collection of unrelated objects.

