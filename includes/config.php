<?php
//config.php

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
//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Chelsea";
    /*
    makeLinks function will create our dynamic nav when called.
    Call like this:
    echo makeLinks($nav1); #in which $nav1 is an associative array of links
    */
    function makeLinks($linkArray)
    {
        $myReturn = '';

        foreach($linkArray as $url => $text)
        {
            if($url == THIS_PAGE)
            {//selected page - add class reference
                $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
            }else{
                $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
            }    
        }
        
        return $myReturn;
    }


?>