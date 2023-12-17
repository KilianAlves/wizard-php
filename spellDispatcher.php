<?php

declare (strict_types = 1);
require_once('./autoload.php');

use Wizard\FormMaker\Incantation;

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else { 
    echo "<p>Welcome to PHP</p>";
    echo "Requested URL : " . $_SERVER["REQUEST_URI"];

}
