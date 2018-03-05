<?php
/*
config.php
put configuration info here.....
*/

define('DEBUG',TRUE); #we want to see all errors

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "HOME";
$nav1['customers.php'] = "CUSTOMERS";
$nav1['olySummerSports_list.php'] = "OLYMPIC SUMMER SPORTS";
$nav1['email2.php'] = "CONTACT";
$nav1['daily.php'] = "DAILY";


//defaults for header.php
$banner = 'WORLD OF WIDGETS';
$slogan = 'Our widgets are better than yours!!!!';

switch(THIS_PAGE){
        
    case 'template.php':
        $title = 'Template Page';
    break;
        
    default:
        $title = THIS_PAGE;
        
}

//other include files referenced here
include 'credentials.php';

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

function coffee_links($nav1){
    
    foreach($nav1 as $url => $text){
    //echo '<li><a href="' . $url . '">' . $text . '</a></li>';
    
    if (THIS_PAGE==$url){
        echo '<li class="nav-item active px-lg-4">
    <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '
    <span class="sr-only">(current)</span>
    </a>
</li>';
        
    }else{
        
    echo '
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
    </li>';
}

}
}


/*
<li class="nav-item active px-lg-4">
    <a class="nav-link text-uppercase text-expanded" href="template.php">Home
    <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item px-lg-4">
    <a class="nav-link text-uppercase text-expanded" href="#">About</a>
</li>
<li class="nav-item px-lg-4">
    <a class="nav-link text-uppercase text-expanded" href="#">Products</a>
</li>
<li class="nav-item px-lg-4">
    <a class="nav-link text-uppercase text-expanded" href="#">Store</a>
</li>
<li class="nav-item px-lg-4">
    <a class="nav-link text-uppercase text-expanded" href="email1.php">Simple Email Form</a>
</li>
<li class="nav-item px-lg-4">
    <a class="nav-link text-uppercase text-expanded" href="email2.php">Compound Email Form</a>
</li>

*/


?>