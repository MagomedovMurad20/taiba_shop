<?php
$user='root';
$pass='root';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=taiba', $user, $pass);
    foreach($dbh->query('SELECT * from `kurtki`') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}