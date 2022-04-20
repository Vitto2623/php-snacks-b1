<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>
    
    <div style="background-color: grey">
        <?php
            for ($i = 0; $i < count($db['teachers']); $i++){?>
            <li><?php echo $db['teachers'][$i]['name'] ?> <?php echo $db['teachers'][$i]['lastname'] ?></li>
            <?php } ?>
    </div>
    <div style="background-color: green; margin-top: 50px;">
        <?php
            for ($i = 0; $i < count($db['pm']); $i++){?>
            <li><?php echo $db['pm'][$i]['name'] ?> <?php echo $db['pm'][$i]['lastname'] ?></li>
            <?php } ?>
    </div>
</body>
</html>