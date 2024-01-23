<?php

// Task 1
/* Write a function called checkAge, which will return true if the age is equal or over 18. 
Otherwise it returnes false.
*/

// examples:

checkAge(25); // True
checkAge(-2); // False
checkAge(12); // -"- false
checkAge(12345678); // -"- true 


function checkAge($age) {
    if (is_numeric($age) && $age >= 18) {
        return TRUE;
    } 
    return FALSE;
}

print "Age 25 ". checkAge(25) . "\n";
print "Age -2 ". checkAge(-2) . "\n";
print "Age 12 ". checkAge(12) . "\n";
print "Age XL ". checkAge(12345678) . "\n";


// Task 2
/* Write a function called boolToString, which returns string value "true" or "false" based on boolean input. */

function boolToString($bool) {
    if (is_bool($bool) && $bool) {
        if ($bool) {
            return "true";
        }
    } 
    return "false";
}

// examples:


print "Age 25 " . boolToString.(checkAge(25)) . "\n";
print "Age -2 " . boolToString.(checkAge(-2)) . "\n";
print "Age 12 " . boolToString.(checkAge(12)) . "\n";
print "Age XL " . boolToString.(checkAge(12345678)) . "\n";

function canPersonVote($personAge) {
    if (checkAge ($personAge)) {
        print "Person can vote";
    }
else {
    print "Person can not vote";
    }
}