<?php 

session_start();
include("../vendor/mail.php");

if(isset($_POST['send']) == "submit"){ 
    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message']; 
    $replyEmailid = 'chotikumaripandey@gmail.com';
    $websitLink = 'https://navix.com/'; 
    $message = '<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!--100% body table-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                          <a href="https//google.com" title="logo" target="_blank">
                            <img width="180" src="https://navix.in/images/navipng.png" title="logo" alt="logo">
                          </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:20px;font-family:sans-serif;">
                                        Contact Us Page Message <br></h1>
                                       
                                        <span
                                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                       
                                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0; text-align:left;">
                                            <b>Name:</b> ' . $fullName . '<br>
                                            <b>EmailId:</b>  ' . $email . '<br>
                                            <b>Message:</b>  ' . $message . '<br> 
                                           
                                           
                                            </p>
                                         
                                            <p style="font-size:11px !important; color:grey !important; font-weight:300 !important; margin-top:20px;">
                                              <b>Note: </b> This is an auto generated mail. do not reply this. if you find something incorrect then forward this at ' . $replyEmailid . '.
                                           </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>' . $websitLink . '</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!--/100% body table-->
</body> ';
    $mailsend = sendmail("", $subject, $message, $name, "", ""); 
    if ($mailsend == 1) {
        $contactUsMesg[] = "We appreciate you contacting us. One of our colleagues will get back in touch with you soon!Have a great day!";
        $_SESSION['contactUsSuccessMesg'] =  $contactUsMesg; 
        header("Location: ../index.php");
    } else {
        $contactUsMesg[] = "We appreciate you contacting us. One of our colleagues will get back in touch with you soon!Have a great day!";
        $_SESSION['contactUsErrorMesg'] =  $contactUsMesg;
        header("Location: ../index.php");
    }

}else{
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instant Assignments Help : 404</title>
    <link rel="icon" href="assets/front/images/favicon-32x32.png" type="image/gif" sizes="16x16">
</head>
<body>
    <img src="../assets/front/images/20602744_6333070.jpg" alt="" style="width: 100%; height: 100vh;">
</body>
</html>';
}
