<?php
 /* Using This Values
 ""   
 "John"  (FALSE)
 NULL
 FALSE
 0 
 undefined
 TRUE       (FALSE)
 []
 123
*/
$name = "";

echo "For Empty Function";
echo "<br>";
if(empty($name)){ // တန်ဖိုးတစ်ခု မရှိဘူးလား?
    echo "Name does not exist";
}else{
    echo "Name  exist";
}
