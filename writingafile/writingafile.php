<?php

$handle = fopen('names.txt','w');

fwrite($handle,'alex'."\n");
fwrite($handle,'Billy');

fclose($handle);
echo "Written";


?>