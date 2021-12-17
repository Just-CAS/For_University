<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'cas_net';

$email_ch = $_GET['mail_check'];
$name = $email_ch;

if (filter_var($name, FILTER_VALIDATE_EMAIL)) {
	
echo "E-mail адрес '$name' указан верно.\n";
	
$conz = "mysql:host=$dbHost;dbname=$dbName;charset=utf8";
$pdo = new PDO ($conz, $dbUser, $dbPassword);


$query = "INSERT INTO `mailing_sub` (`mail`) VALUES (:name)";
$params = [
    ':name' => $name
];

$stmt = $pdo->prepare($query);
$stmt->execute($params);	
}


else{
	echo "E-mail адрес '$name' указан неверно.\n";
}


?>