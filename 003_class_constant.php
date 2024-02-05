<?php

// Class Constants can be defined on a per class basis

class MyClass
{
    const CONSTANT = "constant value";
    // constants attributes are not proceeded with a dollar sign

    function showConstant()
    {
        // use the :: to access constant attributes from a class
        // notice the use line end character after echoing a value
        echo self::CONSTANT . "\n";
    }
}

// when accessing the constant use :: 
echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n";

$class = new MyClass();
echo $class::CONSTANT . "\n";

$class->showConstant();

// there is a special constant for all classes called class
// MyClass::class
// this allows for fully qualified class names at compile time

echo MyClass::class . "\n";


// just like regular variables, the class constant can take expressions that are evaluated to a single value
const ONE = 1 * 1;

class SomeClass
{
    const TWO = ONE + ONE;
    const THREE = self::TWO + ONE;
    const SENTENCE = "this is a " . "simple sentence";
}

echo "This is value of SomeClass::TWO:  " . SomeClass::TWO . "\n";
echo "This is value of SomeClass::THREE: " . SomeClass::THREE . "\n";
echo "This is value of SomeClass::SENTENCE: " . SomeClass::SENTENCE . "\n";

// visiblity modifers can also be applied to constant
class Foo {
    public const BAR = 'bar';
    private const BAZ = 'baz';
}
echo Foo::BAR, PHP_EOL; // notice the use of the PHP_EOL keyword here to replace the . "\n"
// this would fail since it is a private const
// echo Foo::BAZ, PHP_EOL;
?>