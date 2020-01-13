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

    $age = 18;
    $can_vote = ($age >= 18) ? "Can Vote" : "Can't Vote";
    echo "Vote? : $can_vote<br>";

    if("10" == 10) {
        echo "They are Equal<br>";
    } else {
        echo "They aren't equal<br>";
    }

    printf("%c %d %.2f %s<br><br>", 65, 65, 1.234, "string");

    $rand_str = "     Random String     ";
    printf("Length : %d<br>", strlen($rand_str));
    printf("Length : %d<br>", strlen(ltrim($rand_str)));
    printf("Length : %d<br><br>", strlen(rtrim($rand_str)));
    $rand_str = trim($rand_str);
    printf("Upper : %s<br>", strtoupper($rand_str));
    printf("Lower : %s<br>", strtolower($rand_str));
    printf("1st Char : %s<br>", ucfirst($rand_str));
    printf("1st 6 : %s<br><br>", substr($rand_str, 0, 6));
    printf("Index : %s<br><br>", strpos($rand_str, "String"));
    $rand_str = str_replace("String", "Characters", $rand_str);
    printf("Replace : %s<br>", $rand_str);
    printf("A === B : %d<br>", strcmp("A", "B"));

    ?>
</body>
</html>