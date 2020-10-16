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
    <link rel="stylesheet" href="style.css">
    <title>Geriausia kiaušrakulo svetainė visame pločiame pasaulyje</title>
</head>
<body>
<header>
    <nav class="nav">
        <div>
            <img class="nav__img" src="https://files.slack.com/files-pri/T01CD3W8943-F01CX5ZT8QL/egg.png" alt="golden egg">
        </div>
        <ul class="nav__list">
            <li class="nav__item">
                <a href="./" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
                <a href="./" class="nav__link">Kiaušrakulas</a>
            </li>
            <li class="nav__item">
                <a href="./" class="nav__link">About</a>
            </li>
            <li class="nav__item">
                <a href="./" class="nav__link">Contact</a>
            </li>
        </ul>
    </nav>
</header>
<section class="main">
    <h1 class="main__header">Our Team-Name is <?php print $team_name ?> </h1>
    <p class="main__paragraph">At the moment available is kiaušrakulas: <?php print $member_name ?></p>
</section>

    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</body>
</html>