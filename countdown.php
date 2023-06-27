<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
    <style> 
        body{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            color: #ff0000;
        }
    </style>
</head>
<body>

    <?php

        // Script that will show todays days date and how many days until Christmas
        echo " <h1> &#127876; &#127878; Christmas Countdown! &#127878; &#127876; </h1><br>";

        // Function that will show todays date
        function todayDate($timestamp){
            $temp = date("l F jS Y", $timestamp);
            return "Today is $temp";
        }

        echo todayDate(time());

        // Function that will show how many days until Christmas
        function countdown() {
            $today = time();
            $christmas = strtotime('December 24, 2023');

            $difference = $christmas - $today;

            $daysLeft = floor((int)$difference/86400);

            echo "<br>";

            return "There are " . $daysLeft . " days until Christmas! &#127877;";
        }

        echo countdown();
    ?>
    
</body>
</html>