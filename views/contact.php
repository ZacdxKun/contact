<?php include "../partials\header.php";
 
require_once 'mail_config.php';
require_once 'vendor/autoload.php';
 
use PHPMAiler\PHPMailer\PHPMailer;
use PHPMAiler\PHPMailer\Exception;
use PHPMAiler\PHPMailer\SMTP;
 
 
?>
 
<h1>Page de contact</h1>
 
<form method="POST" class="contact-form">
    <h2>Nous contacter</h2>
 
    <p><label>Adresse Mail</label>
    <input style="cursor: pointer;" name="mail" type="email" /></p>
   
    <p><label>Sujet</label>
    <input name="subject" type="text" /></p>
 
    <p><label>Message</label>  
    <textarea name="message"></textarea> </p>
       
    <p><input type="submit" value="Send" name="submit" /></p>
</form>
 
 
 
<?php include "../partials/footer.php"; ?>