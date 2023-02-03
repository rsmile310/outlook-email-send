<?php
$to ="rsmile310@gmail.com";
$subject = 'Michiana Senior Golf Online Inquiry';
$from = 'inquiry@michianasrgolf.org';

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$questions_comments = $_POST['questions_comments'];
$prefer_response = $_POST['prefer_response'];


$message = '
<html>
    <head>
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td><b>First Name: </b>'.$firstName.'</td>
            </tr>
            <tr>
                <td><b>Last Name: </b>'.$lastName.'</td>
            </tr>
            <tr>
                <td><b>Email: </b>'.$email.'</td>
            </tr>
            <tr>
                <td><b>Phone Number: </b>'.$phone.'</td>
            </tr>
            <tr>
                <td><b>Subject: </b>'.$fax.'</td>
            </tr>
            <tr>
                <td><b>Questions or Comments: </b>'.$questions_comments.'</td>
            </tr>
            <tr>
                <td><b>I prefer to be contacted by: </b>'.$prefer_response.'</td>
            </tr>
        </table>
    </body>
</html>
';

# Attempt to send email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: '.$firstName.' '.$lastName.'<'.$from.'>'. "\r\n";
// $headers .= 'Reply-To: inquiry@michianasrgolf.org' . "\r\n";
if(mail($to,$subject,$message,$headers))
  {
  header( "Location: http://www.michianasrgolf.org/contact-confirm.htm");
  }
else
  echo "Mail send failure - message not sent";

?>