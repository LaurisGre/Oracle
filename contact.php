<?php 
    $rand_phone_num_0 = rand(100, 999) . ' ' . rand(10000, 99999);
    $rand_phone_num_1 = rand(100, 999) . ' ' . rand(10000, 99999);
    $rand_phone_num_2 = rand(100, 999) . ' ' . rand(10000, 99999);
    $rand_phone_num_3 = rand(100, 999) . ' ' . rand(10000, 99999);
    $rand_phone_num_4 = rand(100, 999) . ' ' . rand(10000, 99999);
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
    </style>
</head>
<body>
    <section>
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
