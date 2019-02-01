<?php
//config.php

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//reCAPTCHA credentials here

//echo THIS_PAGE;

//die;

$title = THIS_PAGE;

switch(THIS_PAGE){
    case 'index.php':
        $title ="Chelsea's 120 Portal";
    break;
    case 'contactme.php':
        $title ="Chelsea's Contact Page";
    break;
}

?>