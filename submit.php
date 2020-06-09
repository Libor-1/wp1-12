<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$school = filter_input(INPUT_POST, 'school');
$class = filter_input(INPUT_POST, 'class');
$hobbies = filter_input(INPUT_POST, 'hobbies');
$textarea = filter_input(INPUT_POST, 'textarea');
$birthday = filter_input(INPUT_POST, 'birthday');
$guessage = date('Y') - $birthday;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p> Formulář byl odeslán </p>
<ul>
    <li> Name: <?= $firstname ?></li>
    <li> Surname: <?= $lastname ?></li>
    <li> School: <?= $chool ?></li>
    <li> Class: <?= $class ?></li>
    <li> Hibbies: <?= $hobbies ?></li>
    <li> Birthday: <?= $birthday ?></li>
    <li> Age: <?= $guessage ?></li>
    <li> description: <?= $textarea ?>
</ul>



</body>
</html>