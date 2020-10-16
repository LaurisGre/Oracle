<?php 
    $rand_phone_num_0 = rand(100, 999) . ' ' . rand(10000, 99999);
    $rand_phone_num_1 = rand(100, 999) . ' ' . rand(10000, 99999);
    $rand_phone_num_2 = rand(100, 999) . ' ' . rand(10000, 99999);
    $rand_phone_num_3 = rand(100, 999) . ' ' . rand(10000, 99999);
    $rand_phone_num_4 = rand(100, 999) . ' ' . rand(10000, 99999);

    $background_num = rand(1, 3);
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

            color: white;
        }

        #back {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .background-1{
            background-image: url('https://cdna.artstation.com/p/assets/images/images/009/019/618/large/amelia-gagne-fortune-teller.jpg?1516674062');
        }

        .background-2{
            background-image: url('https://cdna.artstation.com/p/assets/images/images/005/746/576/large/martin-eisel-ende-fortune-room.jpg?1493472235');
        }

        .background-3{
            background-image: url('https://steamuserimages-a.akamaihd.net/ugc/940558231926880229/F47020874646FCD79B676B5E0B2A9DD417DDEE07/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true');
        }

        #cont_sec {
            background-color: rgba(191, 191, 191, 0.5);
            border-radius: 30px;
            padding: 20px;
            box-shadow: 0px 0px 30px 30px rgba(191, 191, 191, 0.5);
        }

    </style>
</head>
<body id="back" class="background-<?php print $background_num; ?>">
    <section id="cont_sec">
        <h1>Contact Us +370 <?php print $rand_phone_num_0; ?> !</h1>
        <ul>
            <li>Deividas +370 <?php print $rand_phone_num_1; ?></li>
            <li>Mindaugas +370 <?php print $rand_phone_num_2; ?></li>
            <li>Lukas +370 <?php print $rand_phone_num_3; ?></li>
            <li>Laurynas +370 <?php print $rand_phone_num_4; ?></li>
        </ul>
    </section>
</body>
</html>
