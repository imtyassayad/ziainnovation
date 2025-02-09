<?php
        if(isset($_POST["submit"]))
{
 

     
//Checking for blank Fields..
if($_POST["firstname"]==""||$_POST["lastname"]==""||$_POST["email"]==""|| $_POST["phone"]==""|| $_POST["work"]=="")
{
echo "<script>
alert('ALL FIELDS ARE REQUIRED');
document.location='contact.html'
</script>";
}
else
{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email']; 
 
 // Sanitize e-mail address
 $email =filter_var($email, FILTER_SANITIZE_EMAIL);
 
 // Validate e-mail address
 $email= filter_var($email, FILTER_VALIDATE_EMAIL);

 if (!$email){
echo "Invalid Sender's Email";
 }
 else{
 $firstname = $_POST['firstname']; // required
 $lastname = $_POST['lastname']; // required
    $email = $_POST['email']; // required
    $mobile= $_POST['phone']; // required
    // $subject= $_POST['subject']; // required
    $work = $_POST['work']; // not required
    

    $email_message = "Form details below.\n\n";
    
    function clean_string($string) 
    {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $subject ="New message form Way To zia innovation..!";
    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "Last Name: ".clean_string($lastname)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Mobile: ".clean_string($mobile)."\n";
    // $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Work : ".clean_string($work);
    //$email_message .= "Comments: ".clean_string($comments)."\n";
    
    
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail("imtyas.sayad@gmail.com", $subject, $email_message, $headers);
echo "<script>
alert('Your mail has been sent successfuly ! Thank you for your feedback');
document.location='index.html'
</script>";
 }
}
}

?>