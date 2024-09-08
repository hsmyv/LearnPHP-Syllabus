<?php
/*
class MagicMethod
{
    function __call($name, $parameters)
    {
        echo "Metodun adi budur " . $name . "\n";
        echo "Parameters provided\n";
        print_r($parameters);
    }
}

// Instantiating MagicMethod
$obj = new MagicMethod();

$obj->hello("Magic", "Method");
*/


/*
//__toString() Method: This method gets called when an object is treated as a string. This method is also useful to represent an object as a String.

class MagicMethod {
    function __toString(){
        return "You are using MagicMethod object as a String ";
    }
}
 
$obj = new MagicMethod();
 
echo $obj;
*/



/*
//__get($name) Method: This method gets called when an inaccessible (private or protected) variable or non-existing variables are used.
class MagicMethod
{
    function __get($name)
    {
        echo "You are trying to get '" . $name .
            "' which is either inaccessible
           or non existing member";
    }
}

$obj = new MagicMethod();
$obj->value;
*/


/*
//__set($name, $value) Method: This method is called when an inaccessible variable or non-existing variable is tried to modify or alter.
class MagicMethod
{
    function __set($name, $value)
    {
        echo "You are trying to modify '"
            . $name . "' with '" . $value .
            "' which is either inaccessible
          or non-existing member";
    }
}
$obj = new MagicMethod();
$obj->value = "Hello";
*/

/*
//__debugInfo() Method: This method is used when the var_dump() function is called with object as a parameter. 
//This method should return an array containing all the variables which may be useful in debugging.
class MagicMethod
{
    function __debugInfo()
    {
        return array("variable" => "value");
    }
}

$obj = new MagicMethod();
var_dump($obj);
*/