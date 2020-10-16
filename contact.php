<?php

$rand_phone_num_0 = rand(10, 99) . ' ' . rand(10000, 99999);
$rand_phone_num_1 = rand(10, 99) . ' ' . rand(10000, 99999);
$rand_phone_num_2 = rand(10, 99) . ' ' . rand(10000, 99999);
$rand_phone_num_3 = rand(10, 99) . ' ' . rand(10000, 99999);
$rand_phone_num_4 = rand(10, 99) . ' ' . rand(10000, 99999);

$background_num = rand(1, 3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Contact</title>
</head>

<body class="page  foreground  background-<?php print $background_num; ?>">
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
    <main>
        <section class="contact">
            <h1 class="contact__title">Contact Us +370 6<?php print $rand_phone_num_0; ?> !</h1>
            <ul class="contact__list">
                <li class="contact__item">Deividas +370 6<?php print $rand_phone_num_1; ?></li>
                <li class="contact__item">Mindaugas +370 6<?php print $rand_phone_num_2; ?></li>
                <li class="contact__item">Lukas +370 6<?php print $rand_phone_num_3; ?></li>
                <li class="contact__item">Laurynas +370 6<?php print $rand_phone_num_4; ?></li>
            </ul>
        </section>
    </main>
</body>
</html>
