<?php

$string ='This part dont search .This part search';
$string_new= substr_replace($string,'alex',28,4);

echo $string_new;
?>