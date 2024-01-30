<?php


function printLine($line) {
    printLine("Hello World");
}


function firstFunction() {
    global $foo;
    print "Hello $name! ($foo)\n";
}

function doubleNumber($number) {
    if (is_numeric($number)) {
    return 2 * $number;
    }
    return 0;
}

firstFunction();

helloPerson("Joonas");
helloPerson("Alex");

printLine doubleNumber(5); 
print doubleNumber("foobar");







