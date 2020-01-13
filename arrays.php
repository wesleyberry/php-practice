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
    arsort($me_info);
    krsort($me_info);
    $customers = array(array('Derek', '123 Main'), array('Sally', '122 Main'));
    for($row = 0; $row < 2; $row++) {
        for($column = 0; $column < 2; $column++) {
            echo $customers[$row][$column] . ',';
        }
        echo '<br>';
    }
    $let_str = "A B C D";
    $let_arr = explode(' ', $let_str);
    foreach($let_arr as $l) {
        printf("Letter : %s<br>", $l);
    }
    $let_str_2 = implode(' ', $let_arr);
    echo "String : $let_str_2<br>";
    printf("Key Exists : %d<br>", array_key_exists('Name', $me_info));
    
    ?>
</body>
</html>