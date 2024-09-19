<?php
/*
class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

$simpleClass = new SimpleClass();
$simpleClass->displayVar();
*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
class A
{
    function foo()
    {
        if(isset($this)){
            echo '$this is defines (';
            echo get_class($this);
            echo ")\n";
        }else{
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}


$a = new A();
$a->foo();

A::foo();

$b = new B();
$b->bar();

B::bar();


*/


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//The class Point is declared as readonly. 
//This means all of its properties ($x and $y) are implicitly readonly.

//You can initialize these properties within the constructor,
//but once they are set, their values cannot be changed.
/*
readonly class Point
{
    public int $x;
    public int $y;


    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}


$point  = new Point(10, 20);
echo $point->x;  // Outputs: 10
echo $point->y;  // Outputs: 20

// Trying to modify the value will cause an error
$point->x = 15;  // Error: Cannot modify readonly property Point::$x

*/



/*
#[\AllowDynamicProperties]
readonly class Foo {
}

// Fatal error: Cannot apply #[AllowDynamicProperties] to readonly class Foo
*/





/*
readonly class Foo
{
    public $bar;
}
*/
// Fatal error: Readonly property Foo::$bar must have type



/*
readonly class Foo
{
    public static int $bar;
}

// Fatal error: Readonly class Foo cannot declare static properties
*/


/*
readonly class Animal
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function displayName()
    {
        echo $this->name;
    }

}


class Rabbit extends Animal{

}
$animal = new Animal('Rabbit');
$animal->displayName();

*/
//A readonly class can be extended if, and only if, the child class is also a readonly class.


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






/**
 * Calling an anonymous function stored in a property
 */

/*
 class Foo
 {
    public $bar;

    public function __construct(){
        $this->bar = function(){
            return 42;
        };
    }
 }

$obj = new Foo();
echo ($obj->bar)();

*/


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




/**
 * Fatal error: Declaration of Extend::foo() must be compatible with Base::foo(int $a = 5)
*/

//If the parent method accepts parameters, the child method must also accept parameters.
//If the parent method has a specific type declaration for a parameter (like int $a), 
//the child method must either have the same type declaration or a compatible one

/*
class Base
{
    public function foo(int $a = 5){
        echo "Valid\n";
    }
}

class Extend extends Base
{
    function foo()
    {
        parent::foo(1);
    }
}

$extend  = new Extend();
$extend->foo();
*/


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Error when using named arguments and parameters were renamed in a child class

/*
class A{
    public function test($foo, $bar){
        echo "returned A class";
    }
}


class B extends A{
    public function test($a, $b){
        echo "returned B class";
    }
}

// Pass parameters according to A::test() contract
$obj = new B;
$obj->test(foo: "foo", bar: "bar");
*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






/**
 * The class keyword is also used for class name resolution. 
 * To obtain the *fully qualified name of a class* ClassName use ClassName::class. 
 * This is particularly useful with namespaced classes.
 */
/*
namespace NS{
    class ClassName{

    }

    echo ClassName::class;
}
*/
/*
namespace NS{
    class ClassName{

    }
    
    $c = new ClassName();
    print $c::class;
}
*/
//In PHP, ::class is a class name resolution feature that allows you to get the fully qualified class name (FQCN) as a string at runtime. 




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////