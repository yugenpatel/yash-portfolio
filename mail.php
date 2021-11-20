<?php
    $name = $_GET['name'];

    $eml = $_GET['email'];

    $headers = "From: ".$name;

    $m = $_GET['msg'];
    // the message
    $msg = "Hello Yash, $name has ping to you this message:\n $m.\nMessage him by $eml";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("yashlimbad2017@gmail.com","MESSAGING THROUGH SITE",$msg,$headers);
    // the message
?>
