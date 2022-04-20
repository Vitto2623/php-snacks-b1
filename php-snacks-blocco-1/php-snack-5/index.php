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
            $paragrafoDiviso = explode('.', $paragrafo, $limit = 3 );
            echo var_dump($paragrafoDiviso);
        ?>
    </div>
</body>
</html>