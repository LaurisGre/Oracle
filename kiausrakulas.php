<?php

$rand_num_ball = rand(1, 5);

switch ($rand_num_ball) {
    case 1:
        $result = 'Tikrai taip';
        break;
    case 2:
        $result = 'Taip';
        break;
    case 3:
        $result = 'Gal';
        break;
    case 4:
        $result = 'Ne';
        break;
    case 5:
        $result = 'NICHUJA';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Kiaušrakulas</title>
</head>
<body class="page  page__image-1">
    <header>
        <nav class="nav">
            <div class="nav__logo">
                <img class="nav__img" src="./images/egg.png" alt="golden egg">
            </div>
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="./index.php" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="./kiausrakulas.php" class="nav__link">Kiaušrakulas</a>
                </li>
                <li class="nav__item">
                    <a href="./about.php" class="nav__link">About</a>
                </li>
                <li class="nav__item">
                    <a href="./contact.php" class="nav__link">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main--kiausrakulas">
        <section class="ball">
            <div class="ball__image">
                <span class="ball__result"><?php print $result; ?></span>
            </div>
        </section>
    </main>
</body>
</html>
