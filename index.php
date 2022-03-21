<?php
$to = "vicente.oliva.monardes@gmail.com";
$subject = "My subject";
$message = "Hello world!";
$headers = "From: vicho.oliva.monardes@gmail.com" . "\r\n" .
"CC: vicente.olivam@mayor.cl";

mail($to,$subject,$txt,$headers);
?>