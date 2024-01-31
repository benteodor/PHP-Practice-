<?php

$fruits = array("Apple", "Banana", "Poisonous Berry", "Strawberry", "Grapes");

foreach ($fruits as $x) {
 
    print "Today we will eat $x\n";

    if ($x = "Poisonous Berry") {
        print "Hold on a minute! Poisonous Berry is dangerous";
        break;
}
}


