<?php

function convert_single_quote($string) 
{ 
    $search = array("'");

    $replace = array("`");

    return str_replace($search, $replace, $string); 
}