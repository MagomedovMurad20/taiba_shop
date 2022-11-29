<?php

if ($_POST['email'] == '' || $_POST['password'] == '')  require_once('./includes/html/formes/formfeedback.php');


else {
    $to = 'kurbtai@gmail.com';
    $name = $_POST['name'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    echo $name;
    echo "<br>";
    echo $number;
    echo $message;
    mail($to, $name, $number, $message);
}
