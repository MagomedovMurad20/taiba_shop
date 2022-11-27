<?php

if ($_POST['email'] == '' || $_POST['password'] == '')  require_once('./includes/formfeedback.php');


else {
    include_once "./includes/formfeedback.php";
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
