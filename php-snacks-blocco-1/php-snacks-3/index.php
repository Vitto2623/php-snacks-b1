<?php
    $array = [
        '10/01/2019' =>[
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' =>[
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ],
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
        ],
        '10/03/2019' =>[
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ],
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks 3</title>
</head>
<body>
    <ul>

        <?php
            $postValues = array_values($array);
            $postKeys = array_keys($array);
            for ($i = 0 ; $i < count($postKeys); $i++){
                var_dump($postValues[$i]);?>
                <h5>Post in data: <?php echo $postKeys[$i] ?></h5>
                <?php for ($postIndex = 0 ; $postIndex < count($postValues[$i]); $postIndex++){ ?>
                    <p><?php echo $postValues[$i][$postIndex]['title']; ?></p>
                    <p><?php echo $postValues[$i][$postIndex]['author']; ?></p>
                    <p><?php echo $postValues[$i][$postIndex]['text']; ?></p>
                <?php } ?>
            <?php } ?>
    </ul>






</body>
</html>