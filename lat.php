<?php

include "index.php";
include "classes/transliteracija.php";

$html = ob_get_clean(); 
echo konverzija($html);