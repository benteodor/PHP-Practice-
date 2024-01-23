<?php

$age = 17;
$nationality = "Finnish";

if($age >= 18) {
    print "Can vote\n";
} else {
if ($nationality !== "Finnish") {
         print "Can not vote\n";
} else {
        print "Can vote\n";
    }
}

if ($age < 18) {
    print "Child\n";
} elseif ($age < 35) {
    print "Young adult\n";
} elseif ($age < 65) {
    print "Middle aged\n";
} else {
    print "Old\n";
}

