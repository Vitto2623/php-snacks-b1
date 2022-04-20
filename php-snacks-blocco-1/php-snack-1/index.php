<?php
    $matches = [
    [
        'team1' => 'Acqua S.Bernardo Cantù',
        'team2' => 'Oriora Pistoia',
        'point_team_1' => 70,
        'point_team_2' => 45
    ],
    [
        'team1' => 'Fortitudo Pompea Bologna',
        'team2' => 'Dolomiti Energia Trentino',
        'point_team_1' => 82,
        'point_team_2' => 83
    ],
    [
        'team1' => 'Pallacanestro Trieste',
        'team2' => 'Virtus Roma',
        'point_team_1' => 70,
        'point_team_2' => 45
    ],
    [
        'team1' => 'Open Varese',
        'team2' => 'Germani Basket Brescia',
        'point_team_1' => 70,
        'point_team_2' => 45
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks 1</title>
</head>
<body>
    <h1>PHP Snacks b1</h1>
    <ul>
        <?php for ($i = 0 ; $i < count($matches); $i++) {?>
        <li><?php echo $matches[$i]['team1']; ?> - <?php echo $matches[$i]['team2']; ?> | <?php echo $matches[$i]['point_team_1'] . '-' . $matches[$i]['point_team_2']; ?>       
        <?php } ?> </li>
    </ul>
</body>
</html>