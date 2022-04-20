<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    
    <ul>
            <?php
                $array = [];
                for ($i = 0; $i < 15;  $i++ ){
                    $randomNumber = rand (1, 100);
                    if (!in_array($randomNumber, $array)){
                        $array[] = $randomNumber;
                        ?>
                        <li>
                            <?php echo $randomNumber; ?>
                        </li>
                    <?php } else { 
                        $i--;
                    }?>
                <?php } ?>
            <?php echo var_dump($array); ?>
    </ul>

</body>
</html>