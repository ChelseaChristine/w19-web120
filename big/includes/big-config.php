<?php
//config.php for BIG

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE2',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LehW5AUAAAAAO7T9rkI1LlhreIZPTNS6p7tTlcL";
$secretKey = "6LehW5AUAAAAADrPXHndLBqQffgsP0dq7nq_pWEi";

//die;

$title = THIS_PAGE2;

switch(THIS_PAGE2)
{
    case 'index.php':
    $title = "Chelsea's BIG Project";
    break;

    case 'flexbox.php':
    $title = "Flexbox";
    break;
        
    case 'galleries.php':
    $title = "Galleries";
    break;

    case 'map.php':
    $title = "Map";
    break;

    case 'youtube.php':
    $title = "Youtube";
    break;

    case 'calendar.php':
    $title = "Calendar";
    break;

    case 'shippingcarts.php':
    $title = "Shopping Carts";
    break;

    case 'siteapp.php':
    $title = "Site vs App";
    break;

    case 'webcam.php':
    $title = "Web Cam";
    break;
        
    default:    
    $title = THIS_PAGE;    
}


?>