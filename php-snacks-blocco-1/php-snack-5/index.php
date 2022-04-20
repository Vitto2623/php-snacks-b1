<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <div>
        <?php
            $paragrafo = 'Nel pattinaggio artistico su ghiaccio. Nome di alcuni esercizi facenti parte delle 17 figure obbligatorie di scuola, che vengono eseguiti prima su uno e poi sull\'altro piede. Descrivendo un tracciato simile a due cerchi giustapposti.';
            echo $paragrafo;
            $paragrafoDiviso = explode('.', $paragrafo, $limit = 3 );?>
            <h1>Paragrafo suddiviso</h1>
            <?php for ($i = 0; $i < count($paragrafoDiviso); $i++ ){?>
                <li><?php echo $paragrafoDiviso[$i] ?></li>
            <?php } ?>

    </div>
</body>
</html>