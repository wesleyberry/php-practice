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
    $num_oranges = 4;
    $num_bananas = 36;
    if(($num_oranges > 25) && ($num_bananas > 30)) {
        echo "25% Discount<br>";
    } elseif(($num_oranges > 30) || ($num_bananas > 35)) {
        echo "15% Discount<br>";
    } elseif(!(($num_oranges < 5)) || ($num_bananas < 5)) {
        echo "5% Discount";
    } else {
        echo "No Discount";
    }

    $request = "";
    switch($request) {
        case "Coke":
            echo "Here is your Coke<br>";
            break;
        case "Pepsi";
            echo "Here is your Pepsi<br>";
            break;
        default:
            echo "Here is your Water<br>";
            break;
    }
    ?>
</body>
</html>