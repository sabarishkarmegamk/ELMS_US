<?php
include('includes/config.php');
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php';

$mail = new PHPMailer;
if(isset($_POST['send'])){


$femail=$_POST['femail'];

$row1=mysqli_query($con,"select email,password,fname from users where email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$toemail = $row2['email'];
$fname = $row2['fname'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'your gmail id here';    // SMTP username
$mail->Password = 'your gmail password here'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('your gmail id here','your name here');
$mail->addAddress($toemail);   // Add a recipient
$mail->isHTML(true);  // Set email format to HTML
$bodyContent=$message;
$mail->Subject =$subject;
$bodyContent = 'Dear'." ".$fname;
$bodyContent .='<p>'.$message.'</p>';
$mail->Body = $bodyContent;
if(!$mail->send()) {
echo  "<script>alert('Message could not be sent');</script>";
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo  "<script>alert('Your Password has been sent Successfully');</script>";
}

}
else
{
echo "<script>alert('Email not register with us');</script>";   
}
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Recover Password (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
  <body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">You are only one step a way from your Email, recover your Email now.</p>

<form method="post">
                                           
<div class="input-group mb-3">
<input class="form-control" name="femail" type="email" placeholder="name@example.com" required />
<div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
<a class="small" href="login.php">Return to login</a>
<button class="btn btn-primary" type="submit" name="send">Reset Password</button>
</div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="signup.php">Need an account? Sign up!</a></div>
                        <div class="small"><a href="index.php">Back to Home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
      
<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
