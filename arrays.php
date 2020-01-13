<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $friends = array('Joy', 'Willow', 'Ivy');
    echo 'Wife: ' . $friends[0] . '<br>';
    $friends[3] = 'Steve';
    foreach($friends as $f) {
        printf("Friend : %s<br>", $f);
    }
    $me_info = array('Name'=> 'Wesley', 'Street'=> '123 Main');
    foreach($me_info as $k => $v) {
        printf("%s : %s<br>", $k, $v);
    }
    $friends2 = array('Doug');
    $friends = $friends + $friends2;
    sort($friends);
    rsort($friends);
    asort($friends);
    ?>
</body>
</html>