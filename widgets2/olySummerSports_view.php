<?php
//olySummerSports_view.php - shows details of a single sport
?>
<?php include 'includes/config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:olySummerSports_list.php');
}


$sql = "select * from olySummerSports where olySummerSportID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $SportName = stripslashes($row['olySummerSportName']);
        $OlympicDebut = stripslashes($row['olySummerSportFirstPlayed']);
        $NumVariations = stripslashes($row['olySummerSportVariations']);
        $MostMedals = stripslashes($row['olySummerSportMostMedals']);
        $Description = stripslashes($row['olySummerSportDescription']);
        $title = "Title Page for " . $SportName;
        $pageID = $SportName;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>That sport is not part of this list</p>';
}

?>
<?php get_header()?>
<h1><?=$pageID?></h1>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<p>';
    echo 'Sport:<br /> <b>' . $SportName . '</b> <br /><br />';
    echo 'Olympic Debut:<br /> <b>' . $OlympicDebut . '</b> <br /><br />';
    echo '# of Variations:<br /> <b>' . $NumVariations . '</b> <br /><br />';
    echo 'Athlete with Most Medals:<br /> <b>' . $MostMedals . '</b> <br /><br />';
    echo 'IOC Description of Sport:<br /> ' . $Description . ' <br /><br />';
    
    echo '<img src="uploads/olysport' . $id . '.png" />';
    
    echo '</p>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="olySummerSports_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>