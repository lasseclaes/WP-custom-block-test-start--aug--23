<?php

$variable1 = 'variable contents2';

function some_function($func_paramter)
{
    //echo $variable1; N/A in this scope
    echo $func_paramter;
}

some_function($variable1);

function some_function2()
{
    global $variable1; //you shouldn't do this - e.g. create own global variables in WP, but is it avaiable here
    echo $variable1;
    // echo $func_paramter;
}
