<?php 
if(isset($_POST['submit'])){
    $to =    "contact@bidwai.in";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Form submission on website";
    $subject2 = "Copy of your form submission on website";
    $messagetosend = "Name:". $name . "\n\nEmail : ". $email ."\n\nWrote the following:" . "\n\n" . $message . " \n\n Regards Team\nBidwai Technologies";
    $messagetocopy = "Name:". $name . "\n\nEmail : ". $email ."\n\nWrote the following:" . "\n\n" . $message . " \n\n Regards Team\nBidwai Technologies";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if(isset($_POST['email'])){
            mail($to,$subject,$messagetosend,$headers);
            mail($from,$subject2,$messagetocopy,$headers2);
// mail($to1,$subject,$messagetosend,$headers); // sends a copy of the message to the sender
            echo "Mail Sent Sucessfully";
    }
    echo "<center><br>Copy of information is sent via Mail. <br><br> Thank you " . $first_name . ", <br><br>we will contact you shortly.</center>";
    }else{

echo "Did not entered mail module". "Name:". $name . "\n\nEmail : ". $email ."\n\nWrote the following:" . "\n\n" . $message . " \n\n Regards Team\nBidwai Technologies"; ;

    }
?>
<!-- Footer Start-->
<?php include 'thank.php';
?>
<!-- Footer End-->