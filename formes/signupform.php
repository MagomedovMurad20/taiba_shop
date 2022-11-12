
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


if ($_POST['email']=='' || $_POST['pass']=='') {
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
    ';} else {
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

