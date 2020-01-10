<?php
$f_name = "Wesley";
$l_name = "Berry";
$age = 25;
$height = 6;
$can_vote = true;
$adress = array('street' => '123 Main St', 'city' => 'San Marcos');
$state = NULL;
define('PI', 3.1415);

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
    <p>Name: <?php echo $f_name . ' ' . $l_name ?></p>
    <form action="tut1.php" method="get">
        <label>Your State : </label>
        <input type="text" name="state"/>
        <br>
        <label>Number 1 : </label>
        <input type="text" name="num-1"/>
        <br>
        <label>Number 2 : </label>
        <input type="text" name="num-2"/>
        <br>
        <input type="submit" value="submit"/>
    </form>
    <?php 
    if(isset($_GET) && array_key_exists('state', $_GET)) {
        $state = $_GET['state'];
        if(isset($state) && !empty($state)) {
            echo 'You live in ' . $state . '<br>';
            echo "$f_name lives in $state<br>";
        }
        if(count($_GET) >=3 ) {
            $num_1 = $_GET['num-1'];
            $num_2 = $_GET['num-2'];
            echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . '<br>';
            echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . '<br>';
            echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . '<br>';
            echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . '<br>';
            echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . '<br>';
            echo "$num_1 / $num_2 = " . (intdiv($num_1, $num_2)) . '<br>';
            echo "Increment $num_1 = " . ($num_1++) . '<br>';
            echo "Decrement $num_1 = " . ($num_1--) . '<br>';
            echo number_format(12345.6789, 2) . "<br>";
        }
    } 
    ?>
</body>
</html>