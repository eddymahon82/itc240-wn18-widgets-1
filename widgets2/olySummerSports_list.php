<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php require 'includes/Pager.php';?> 

<!-- LOAD STYLE SHEET FOR FONT AWESOME -->
<?php
//$config->loadhead .= '<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>';
?>

<?php get_header()?>
<h1>Olympic Summer Sports</h1>
<?php
$sql = "select * from olySummerSports";

//font awesome pagination icons
$first = '<i class="fas fa-angle-double-left"></i>';
$prev = '<i class="fas fa-angle-left"></i>';
$next = '<i class="fas fa-angle-right"></i>';
$last = '<i class="fas fa-angle-double-right"></i>';

//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

# Create instance of new 'pager' class
$myPager = new Pager(5,$first,$prev,$next,$last);
$sql = $myPager->loadSQL($sql,$iConn);  #load SQL, pass in existing connection, add offset
//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records
    //echo $myPager->showNAV();//show pager if enough records 
	if($myPager->showTotal()==1){$itemz = "sport";}else{$itemz = "sports";}  //deal with plural
    echo '<p align="center">We have ' . $myPager->showTotal() . ' ' . $itemz . ' to show!</p>';

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo '<a href="olySummerSports_view.php?id=' . $row['olySummerSportID'] . '">' . $row['olySummerSportName'] . '</a>' . '<br />';
        //echo 'Sport: <b>''<a href="olySummerSports_view.php?id=' . $row['olySummerSportID'] '">' . $row['olySummerSportName'] '</a>' '</b> ';
        echo 'Olympic Debut: <b>' . $row['olySummerSportFirstPlayed'] . '</b> ';
        
        echo '<img src="' . $config->virtual_path . '/uploads/olysport' . dbOut($row['olySummerSportID']) . '_thumb.jpg" />';
        
        echo '</p>';
    }   
    
    //the showNAV() method defaults to a div, which blows up in our design
    echo $myPager->showNAV();//show pager if enough records 

}else{//inform there are no records
    echo '<p>There are currently no sports to display!</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>