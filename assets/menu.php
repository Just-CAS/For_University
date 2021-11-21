<?php
	require "assets/data/db.php";
?>
<nav class="pushy pushy-left">
<ul class="list-unstyled">
<?php if(isset($_SESSION['logged_user'])) : ?>
Привет, <?php echo $_SESSION['logged_user']->name; ?></br>
<!-- Пользователь может нажать выйти для выхода из системы -->
<a href="modules/logout.php">Выйти</a> <!-- файл logout.php создадим ниже -->
<?php else : ?>
<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="modules/login.php">Авторизоваться</a><br>
<a href="modules/signup.php">Регистрация</a>
<?php endif; ?>

<?php
   $menu_caller = R::getAll( 'select * from menu' );
	foreach($menu_caller as $row){
       echo "<li><a href='".$row["mu_link"]."'>".$row["mu_title"]."</a></li>";
    }
?>
</ul> 
</nav>