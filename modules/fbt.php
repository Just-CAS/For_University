<?php
$servername = "localhost";
$database = "cas_net";
$username = "cas";
$password = "cas.77.";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . "Не могу подключиться к базе");
}else{
    echo '<div style="display:none;">Подключился к базе</div>';
}

$stmt = $dbh->prepare("INSERT INTO registry (name, value) VALUES (:name, :value)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':value', $value);

// вставим одну строку
$name = 'one';
$value = 1;
$stmt->execute();

// теперь другую строку с другими значениями
$name = 'two';
$value = 2;
$stmt->execute();
?>