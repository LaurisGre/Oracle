<?php

$image_generator = rand(1, 2);
$story_generator = rand(1, 3);

switch ($story_generator) {
    case 1:
        $headline = 'Our story';
        $story = 'Once we were normal people, with our balls hanging high, higher than the sky I would dare to say. One day we woke up and noticed that our balls are hanging low now. However, it didn\'t destroy us, we still held our heads high and from then decided to call ourselves the team of Kabantys Kiaušai. And we offer to give you guidance, but not related to balls.';
        break;
    case 2:
        $headline = 'Story of our customer Petras';
        $story = '“My dad always went out of his way to make our birthday parties special. One year, he hid the presents from my sister and me, prank-called us and told us they had been stolen, then sent us on a scavenger hunt with our party guests to find them!” — Petras Stanislovas';
        break;
    case 3:
        $headline = 'Story of our customer Kvantinas';
        $story = '“When my mom was at work and my dad was on the night shift, he’d be in charge of doing my (super curly) hair in the morning. I wanted a Topsy Tail so badly, so my dad made one for me, using duct tape and a piece of plastic from a brown hanging basket. It worked perfectly.” — Kvantinas Tarantinas';
        break;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="refresh" content="10">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>About</title>
</head>
<body class="page  page__image-<?php print $image_generator; ?>">
    <header class="header">
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

        <article class="hero">
            <h1 class="hero__heading">We are Kabantys Kiaušai!</h1>
            <h3 class="hero__subheading">How it works...</h3>
        </article>
    </header>

    <main>
        <article class="story">
            <h2 class="story__title"><?php print $headline; ?></h2>
            <p class="story__body"><?php print $story; ?></p>
        </article>
    </main>
</body>
</html>
