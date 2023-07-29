<?php

// PHP - Interfaces vs. Abstract Classes

/**
 * Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
 * 
 * Interfaces cannot have properties, while abstract classes can
 * All interface methods must be public, while abstract class methods is public or protected
 * All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
 * Classes can implement an interface while inheriting from another class at the same time
 * Interface does not tell the classes how to implement the method, each Class can make a implementation in its own way.
 * 
*/

// Interface definition
interface Animal
{
    public function makeSound();
}

// Interface definition
interface Creature
{
    public function live();
}

// Class definition
class Cat implements Animal, Creature
{
    public function makeSound()
    {
        echo " Meow \n";
    }

    // Class definition
    public function live()
    {
        echo "  Cat live \n";
    }
}

// Class definition
class Dog implements Animal, Creature
{
    /**
     * Summary of makeSound
     * @return void
     */
    public function makeSound()
    {
        echo " Bark \n";
    }

    public function live()
    {
        echo "  Dog live \n";
    }
}

class Mouse implements Animal, Creature
{
    public function makeSound()
    {
        echo " Squeak \n";
    }

    public function live()
    {
        echo "  Mouse live \n";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach ($animals as $animal) {
    $animal->makeSound();
    $animal->live();
}
