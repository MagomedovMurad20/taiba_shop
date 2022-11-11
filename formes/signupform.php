
<?php
require_once('./db/dbconnect.php');
echo "<br/>";

$querycheck='SELECT * from `users`';
$query_result=$conn->query($querycheck);

if ($query_result !== FALSE)
{
//echo "table exist";
} else
{
    $conn->query('CREATE TABLE users (
        id int(11) AUTO_INCREMENT,
        email varchar(50) NOT NULL,
        pass varchar(50) NOT NULL,
        PRIMARY KEY(id)
    )');}
	echo "<br/>";


if (isset($_POST["email"]) && isset($_POST["password"])) {
    echo 
    '
    <h3>Зарегистрироваться</h3>
    <form method="post">
        <p>Логин:
        <input type="text" name="email" /></p>
        <p>Пароль:
        <input type="password" name="password" /></p>
        <input type="submit" value="Зарегистрироваться">
    </form>
    ';
     
    // $email = $_POST["email"];
    // $password = $_POST["password"];
	// var_dump($email, $password);
	// echo "<br/>";
    // try {
    //     $sql = "INSERT INTO `users` (id, email, pass) VALUES (NULL, '$email', '$password')";
	// 	var_dump($sql);

	// 	$rowsNumber = $conn->exec($sql); 		
	// 	var_dump($rowsNumber);

    //     if($rowsNumber > 0 ){
    //         echo "Data successfully added: id=$id email=$email  pass= $password";  
    //     }
    // }
    // catch (PDOException $e) {
    //     echo "Database error: " . $e->getMessage();
    // }
        //Правильный подход к обраобтке запросов через ПДО
    try {
        $sql = "INSERT INTO `users` (id, email, pass) VALUES (?, ?, ?)";
        // определяем prepared statement
        $stmt = $conn->prepare($sql);
        // привязываем параметры к значениям
        $rowsNumber = $stmt->execute(array(NULL, $_POST["email"], $_POST["password"]));
        // если добавлена как минимум одна строка
        if($rowsNumber > 0 ){
            echo "Пользователь успешно зарегистрирован: email=" . $_POST["email"] ."  password= " . $_POST["password"];  
        }
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

?>

