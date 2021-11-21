<!DOCTYPE html>
<html>
<head>
<title>Админка</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Список пользователей</h2>
<?php

	//include "assets/db_connect.php";

/*$sql = "INSERT INTO `users` (`id`, `name`, `age`) VALUES
('', 'Digy', '22')";
echo "<br>";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
  echo "Error: <br>". $sql."<br>";
  
  CREATE TABLE Menu (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER)
}*/

/*
$value = $_GET['mu_linkz'];
$value2 = $_GET['mu_titlez'];
	$value = stripslashes($value); //stripslashes - режем слеши
    $value = htmlspecialchars($value); //htmlspecialchars - возврат отредактированной строки 
	$value2 = stripslashes($value2);
    $value2 = htmlspecialchars($value2);
    $value = trim($value); //trim удаление пробелов
    $value2 = trim($value2);

echo $value;
echo $value2;
*/

/*$sql = "INSERT INTO `Menu` (`id`, `mu_link`, `mu_title`) VALUES
('', '$value', '$value2')";
echo "<br>";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
  echo "Error: <br>". $sql."<br>";}*/


/*
<?php
$sql = "INSERT INTO `users` (`id`, `login`, `password`, `user_group`, `age`) VALUES
('', 'логин', 'пароль', 'группа 1-админ 2-узер', 'возраст')";
echo "<br>";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
  echo "Error: <br>". $sql."<br>";}
?>
*/






/*$sql = "SELECT * FROM Users";
if($result = mysqli_query($conn, $sql)){
    echo "<table><tr><th>Имя</th><th>Возраст</th><th></th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td><a href='update.php?id=" . $row["id"] . "'>Изменить</a></td>";
        echo "</tr>";
    }
    echo "</table>";
mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);*/

?>
</body>
</html>