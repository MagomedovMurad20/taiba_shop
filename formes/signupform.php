
<?php
require_once('./db/dbconnect.php');
echo "<br/>";

$querycheck='SELECT * from `users`';
$query_result=$dbh->query($querycheck);

if ($query_result !== FALSE)
{
echo "table exist";
} else
{
    $dbh->query('CREATE TABLE users (
        id int(11) AUTO_INCREMENT,
        email varchar(50) NOT NULL,
        pass varchar(50) NOT NULL,
        PRIMARY KEY(id)
    )');}
	echo "<br/>";


if (isset($_POST["email"]) && isset($_POST["password"])) {
     
    $email = $_POST["email"];
    $password = $_POST["password"];
	var_dump($email, $password);
	echo "<br/>";

    try {
        $sql = "INSERT INTO `users` (id, email, pass) VALUES (NULL, '$email', '$password')";
		var_dump($sql);// приходит "INSERT INTO `users` (id, names, pass) VALUES ('1', Jon', 123)"

		$added = $dbh->exec($sql); 		//проверяем добавилась ли хоть одна строка

		var_dump($added);// cюда приходит false
        if($added > 0 ){
            echo "Data successfully added: id=$id email=$email  pass= $password";  
        }
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

?>
<h3>Create a new User</h3>
<form method="post">
    <p>User Name:
    <input type="text" name="email" /></p>
    <p>User pass:
    <input type="password" name="password" /></p>
    <input type="submit" value="Save">
</form>
</body>
</html>