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
    <title>KIAUŠRAKULAS</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #ball_section {
            height: 550px;
            width: 500px;
            border: 10px solid black;
            border-radius: 20px;
            padding: 20px;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #ball {
            height: 100%;
            width: 100%;

            background-image: url('https://spaces.profoundjs.com/ide/bernice/magic-8-ball-app/public/8-Ball.png');
            background-repeat: no-repeat;
            background-size: cover;

            position: relative;
        }

        #ball_result {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            color: white;
            font-size: 30px;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <section id="ball_section">
        <h1>KIAUŠRAKULAS</h1>
        <div id="ball">
            <span id="ball_result"><?php print $result; ?></span>
        </div>
    </section>
</body>
</html>
