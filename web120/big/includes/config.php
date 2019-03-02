<?php
//config.php for BIG

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//reCAPTCHA credentials here

//echo THIS_PAGE;

//die;

$title = THIS_PAGE;

switch(THIS_PAGE)
{
    case 'index.php':
    $title = "Chelsea's Home Page";
    $logo = "fa-home";
    break;

    case 'exercises.php':
    $title = "Chelsea's Exercise Page";
    $logo = "fa-universal-access";
    $logo_color = ' style="color:blue"';
    break;
        
    case 'contactme.php':
    $title = "Contact Chelsea";
    $logo = "fa-paper-plane-o";
    $logo_color = ' style="color:blue"';
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default       
}


?>