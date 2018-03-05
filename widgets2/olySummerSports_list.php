<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php get_header()?>
<h1>Olympic Summer Sports</h1>
<?php
$sql = "select * from olySummerSports";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo '<a href="olySummerSports_view.php?id=' . $row['olySummerSportID'] . '">' . $row['olySummerSportName'] . '</a>' . '<br />';
        //echo 'Sport: <b>''<a href="olySummerSports_view.php?id=' . $row['olySummerSportID'] '">' . $row['olySummerSportName'] '</a>' '</b> ';
        echo 'Olympic Debut: <b>' . $row['olySummerSportFirstPlayed'] . '</b> ';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no customers</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>