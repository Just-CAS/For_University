<?php
	require_once "assets/data/db.php";
?>

<nav class="pushy pushy-left">
  <div class="entrace-buttonz">
    <?php if(isset($_SESSION['logged_user'])) : ?>
        <a style="font-size: 12px;" href="modules/logout.php" class="btn btn-lg btn-danger" role="button">Привет, <?php echo $_SESSION['logged_user']->name; ?> <i style="font-size: 12px;" class="typcn typcn-heart-full-outline"></i> -
        <!-- Пользователь может нажать выйти для выхода из системы -->
        Выйти?</a> <!-- файл logout.php создадим ниже -->
    <?php else : ?>
        <!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
        <a class="btn btn-primary btn-lg" role="button" href="modules/login.php">Вход</a>
        <a href="modules/signup.php" class="btn btn-lg btn-danger" role="button">Регистрация</a>
    <?php endif; ?>
    </div>
<ul class="list-unstyled">
<?php
   $menu_caller = R::getAll( 'select * from menu' );
	foreach($menu_caller as $row){
       echo "<li><a href='".$row["mu_link"]."'>".$row["mu_title"]."</a></li>";
    }
?>
</ul> 
</nav>