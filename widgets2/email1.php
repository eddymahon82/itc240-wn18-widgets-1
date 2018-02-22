<?php include 'includes/header.php'?>   

<?php
//email2.php

if(isset($_POST['Submit']))
{//send email?
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = "eddy.mahon82@gmail.com";
    
    $subject = "My WebSite Feedback " . date("m/d/y, G:i:s");
    
    //collect and clean post data
    $FirstName = halfcalf_clean_post('FirstName');
    $LastName = halfcalf_clean_post('LastName');
    $Email = halfcalf_clean_post('Email');
    $Comments = halfcalf_clean_post('Comments');
    
    //build body of the email
    $text = '';//initialize variable
    $text .= 'First Name: ' . $FirstName . PHP_EOL . PHP_EOL;
    $text .= 'Last Name: ' . $LastName . PHP_EOL . PHP_EOL;
    $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
    $text .= 'Services: '.implode(",", $_POST['services']). PHP_EOL . PHP_EOL;
    $text .= 'Comments: ' . $Comments . PHP_EOL . PHP_EOL;
    
    $headers = 'From: noreply@designsbyeddy.tech' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    mail($to,$subject,$text,$headers);
    
    echo '<div class="row">
        <div class="col-lg-12">
            <h3>Message Sent</h3>
                <p>Thank you. We will return your message within 1 business day.</p>
        </div>
    </div>';

}else{//show form!
    echo '
    <form action="" method="post">
    
        <div class="row">
            <div class="form-group col-lg-4">
                <label class="text-heading" for="FirstName">First Name</label>
                <input class ="form-control" type="text" name="FirstName" id="FirstName" autofocus required/>
            </div>
            
            <div class="form-group col-lg-4">
                <label class="text-heading" for="LastName">Last Name</label>
                <input class ="form-control" type="text" name="LastName" id="LastName" required/>
            </div>
            
            <div class="form-group col-lg-4">
                <label class="text-heading" for="Email">Email</label>
                <input class ="form-control" type="email" name="Email" id="Email" required/>
            </div>
            
            <tr>
                <td valign="top" align="right">
                    <label for="services">*Current Services<br />
                    (check all that apply)</label>
                </td>
                <td valign="top">
                    <input type="checkbox" name="services[]" value="none" />&nbsp;None<br />

                    <input type="checkbox" name="services[]" value="coffee" />&nbsp;Coffee<br />

                    <input type="checkbox" name="services[]" value="vending" />&nbsp;Vending<br />

                    <input type="checkbox" name="services[]" value="watercoolers" />&nbsp;Water Coolers<br />

                    <input type="checkbox" name="services[]" value="cafeteria" />&nbsp;Cafeteria<br />

                </td>
            </tr>
            
            <div class="clearfix"></div>
            
            <div class="form-group col-lg-12">
                <label class="text-heading" for="Comments">Comments</label>
                <textarea class="form-control" name="Comments" is="Comments"></textarea>
            </div>
            
            <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-secondary" name="Submit">Submit</button>
            </div>
            
        </div>
    
    </form>
    ';
}
?>

<?php include 'includes/footer.php';

function halfcalf_clean_post($key)
{
    if(isset($_POST[$key])){
        return strip_tags(trim($_POST[$key]));
    }else{
        return '';
    }    
}
?>
