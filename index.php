<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <title>Filmes</title>
</head>
<body>
    <!--Navbar-->
    <header>
        <a href="#" class="logo">
            <i class='bx bxs-movie'></i> Movies
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!--Menu-->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#movies">Movies</a></li>
            <li><a href="#coming">Coming</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>
        
        <!-- SIGN UP / LOG IN FORMS -->
        <div class="forms-container">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="senha" placeholder="Senha">
                <button class="btn">Login</button>
            </form>

            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="senha" placeholder="Senha">
                <input type="text" name="email" placeholder="E-mail">
                <button class="btn">Signup</button>
            </form>

            <?php
            check_signup_errors();
            ?>
            
        </div>

        
    </header>

    <!--Home-->

    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide conatiner">
                <img src="imgs/home1.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Venom: Let There <br> Be Carnage</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <!--Box 2-->
            <div class="swiper-slide conatiner">
                <img src="imgs/home2.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Avangers: <br> Infinity War</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

            <div class="swiper-slide conatiner">
                <img src="imgs/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man: <br> Far from Home</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
    </section>

    <!--Filmes-->

    <section class="movies" id="movies">
        <h2 class="heading">Opening This Week</h2>
        <!--Movies Conatiner-->
        <div class="movies-container">
            <!--BOX 1-->
            <div class="box"></div>
            <div class="box-img">
                <img src="imgs/m1.jpg" alt="">
            </div>
            <h3>Venom</h3>
            <span>120 min | Action</span>
        
            <!--BOX 2-->
            <div class="box"></div>
            <div class="box-img">
            <img src="imgs/m2.jpg" alt="">
            </div>
            <h3>Durkink</h3>
            <span>120 min | Adventure</span>
            </div>
        </div>
    </section>



    <!--Swiper JS-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!--Link to custom js-->
    <script src="js/main.js"></script>

</body>
</html>
