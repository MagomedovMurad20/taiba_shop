<?php
$user='root';
$pass='root';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=taiba', $user, $pass);
    {
        print "всё четко бро!";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
