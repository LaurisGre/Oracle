<?php
$team_name = 'Kabanatys Kiaušai';
$random_name = rand(1,4);

switch($random_name) {
    case 1:
        $member_name = 'Deividas';
        break;
    case 2:
        $member_name = 'Mindaugas';
        break;
    case 3:
        $member_name = 'Lukas';
        break;
    case 4:
        $member_name = 'Laurynas';
        break;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Home</title>
</head>
<body>
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
        <section class="main">
            <h1 class="main__header">Our Team-Name is <?php print $team_name ?> </h1>
            <p class="main__paragraph">At the moment available is kiaušrakulas: <?php print $member_name ?></p>
        </section>
    </main>
</body>
</html>
