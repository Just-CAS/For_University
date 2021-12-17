	<header id="home">
            <div class="container-fluid">
                <!-- change the image in style.css to the class header .container-fluid [approximately row 50] -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-10">
                            <a href="#" class="thumbnail logo">
                                <img src="images/your_logo.png" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-1 col-md-offset-8 col-xs-2 text-center">
                            <div class="button-corrextor">


                                <?php if(isset($_SESSION['logged_user'])) : ?>
                                    <a href="modules/logout.php" class="btn btn-lg btn-danger" role="button">Привет, <?php echo $_SESSION['logged_user']->name; ?> <i style="font-size: 12px;" class="typcn typcn-heart-full-outline"></i>-
                                    <!-- Пользователь может нажать выйти для выхода из системы -->
                                    Выйти?</a> <!-- файл logout.php создадим ниже -->
                                <?php else : ?>
                                    <a href="modules/login.php" class="btn btn-primary btn-lg" role="button"> Вход</a>
                                <?php endif; ?>

                            </div>
                          <div class="menu-btn"><span class="hamburger">&#9776;</span></div>
                        </div>
                    </div>
                    <div class="jumbotron">
                        <h1><small>In the hall of the</small></br>
						<strong>Mountain King</strong></h1>
                        <?php echo mb_substr("<p>This is a simple hero unit, a simple jumbotron-style component for<br>
							calling extra attention to featured content or information.</p>", 0, 40);
							//режим все кроме, начиная с нулевого знака до 40 знаков и ставим в конце троеточие
							//mb_strimwidth Получение строки, обрезанной до заданного размера?>
                        <p><a class="btn btn-primary btn-lg" role="button">Learn more</a> <a target="_blank" href="http://www.themeinthebox.com/ourtheme/mountain-king-bootstrap-template/" class="btn btn-lg btn-danger" role="button">Download</a></p>
                    </div>
                </div>
            </div>
    </header>