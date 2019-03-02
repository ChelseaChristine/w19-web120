<?php

//config.php

//no index while building a client site in our space
$robots = "noindex,nofollow";
$meta_description = "Web developer seeking employment in Seattle.  Focus on JavaScript, CSS & HTML.";



//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//reCAPTCHA credentials here

//echo THIS_PAGE;

//die;

/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LehW5AUAAAAAO7T9rkI1LlhreIZPTNS6p7tTlcL";
$secretKey = "6LehW5AUAAAAADrPXHndLBqQffgsP0dq7nq_pWEi";

$title = THIS_PAGE;

switch(THIS_PAGE)
{
    case 'index.php':
    $title = "Chelsea's Home Page";
    $logo = "fa-home";
    break;
        
    case 'contactme.php':
    $title = "Contact Chelsea";
    $logo = "fa-paper-plane-o";
    $logo_color = ' style="color:blue"';
    $robots = "noindex,follow";
    $meta_description = "Please contact Chelsea, I'm a " . $meta_description;
    $meta_keywords ="contact, contact me, chelsea, email, chelsey, chelsee, message" .$meta_keywords;
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