<?php
	require("data/db_connect.php");
	$email_ch = $_GET['mail_check'];
	$text = $email_ch; // эту строку мы получили от пользователя
	
	if (filter_var($text, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail адрес '$text' указан верно.\n";
	
	$check_duplicate = mysqli_query($conn, "select * from mailing_sub where mail='$text' ");
	if(mysqli_num_rows($check_duplicate)>0){
		echo "Вы уже подписаны";
	}else{

	$sql = "INSERT INTO `mailing_sub` (`mail`) VALUES
('$text')";
echo "<br>";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
  echo "Error: <br>";}
	/*echo "Error: <br>". $sql."<br>".mysqli_error($conn)."";}*/
}
	echo "<br><a href='/'>Вернуться на главную страницу</a>";
	
} else {
    echo "E-mail адрес '$text' указан неверно.\n";
}
	
	
?>