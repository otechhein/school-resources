<?php
// Isset return FALSE when value are NULL and undefined
// Other return TRUE
/**
 * Using This Values
    ""
    "John" 
    NULL  (FALSE)
    FALSE
    0 
    undefined (FALSE)
    TRUE
    []
    123
 */

$name; // undefined

echo "For Isset Function";
echo "<br>";
if(isset($name)){ // တန်ဖိုးတစ်ခု ရှိလား?
    echo "Name  exist";
}else{
    echo "Name does not exist";
}