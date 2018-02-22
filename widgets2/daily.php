<?php include 'includes/config.php';?>
<?php
//daily logic goes here

if (isset($_GET['day'])){//data is querystring, use it!!!
    $day = $_GET['day'];
}else{//use current date
    $day = date('l');
}

switch($day)
{
    case 'Sunday':
        $myCoffee = "Cappuccino";
        $myPic = "img/cappuccino.jpg";
        $myAlt = "Amazing handmade cappuccinos!!!";
        $dailyQuote ="Coffee is a beverage that puts one to sleep when not drank.";
    break;
        
    case 'Monday':
        $myCoffee = "Flat White";
        $myPic = "img/flat_white.jpeg";
        $myAlt = "Amazing handmade flat whites!!!";
        $dailyQuote ="I have measured out my life with coffee spoons.";
    break;
        
    case 'Tuesday':
        $myCoffee = "Frappuccino";
        $myPic = "img/frappuccino.jpg";
        $myAlt = "Ice cold frappuccinos!!!";
        $dailyQuote ="Good communication is just as stimulating as black coffee, and just as hard to sleep after.";
    break;
        
    case 'Wednesday':
        $myCoffee = "Latte";
        $myPic = "img/latte.jpg";
        $myAlt = "Amazing handmade lattes!!!";
        $dailyQuote ="Way too much coffee. But if it weren't for the coffee, I'd have no identifiable personality whatsoever.";
    break;
        
    case 'Thursday':
        $myCoffee = "Pour Over";
        $myPic = "img/pour_over.jpg";
        $myAlt = "Roubust pour overs!!!";
        $dailyQuote ="I never drink coffee at lunch. I find it keeps me awake for the afternoon.";
    break;
        
    case 'Friday':
        $myCoffee = "Hot Tea";
        $myPic = "img/tea.jpg";
        $myAlt = "Flavorful hot teas!!!";
        $dailyQuote ="If this is coffee, please bring me some tea; but if this is tea, please bring me some coffee.";
    break;
        
    case 'Saturday':
        $myCoffee = "Mocha Latte";
        $myPic = "img/mocha.jpg";
        $myAlt = "Amazing mochas!!!";
        $dailyQuote ="A mathematician is a device for turning coffee into theorems.";
    break;
}


?>
<style>
		#coffee {
			float:none;
			display:inline-block;
			padding:20px;
			max-width:300px; /* best if actual size of image */
			width:33%; /* approximate size taken on screen in maximum view */
		}
</style>

<?php include 'includes/header.php';?>
    <h2> Daily Specials </h2>
    
    <img src="<?=$myPic?>" alt="<?=$myAlt?>" id="coffee" />
    <p><strong><?=$day?>'s Coffee Special:</strong> <?=$day?>'s daily coffee special is <strong><?=$myCoffee?></strong></p>
    <p><?=$dailyQuote?></p>

    <p><a href="daily.php?day=Monday">Monday</a></p>
    <p><a href="daily.php?day=Tuesday">Tuesday</a></p>
    <p><a href="daily.php?day=Wednesday">Wednesday</a></p>
    <p><a href="daily.php?day=Thursday">Thursday</a></p>
    <p><a href="daily.php?day=Friday">Friday</a></p>
    <p><a href="daily.php?day=Saturday">Saturday</a></p>
    <p><a href="daily.php?day=Sunday">Sunday</a></p>

<?php include 'includes/footer.php';?>