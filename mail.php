<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);  
$to = 'yojanapawar00@gmail.com';
$subject = 'job offer';

$message = 'Hi dcmnifvn';

$from = 'pawarnikita0293@gmail.com';

if(mail($to,$subject,$message))
{
echo'Your mail has been sent successfully!';
}
else
{   
echo'Unable to send mail!';
}
?>

