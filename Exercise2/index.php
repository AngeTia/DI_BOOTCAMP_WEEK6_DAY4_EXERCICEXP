<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exerice2</title>
    </head>
    <body>
        <?php
        $deleteMonth = 'march';
        // Month array
        $month = array('jan', 'feb', 'march', 'april', 'may');
        // Iterate array
        foreach (array_keys($month, $deleteMonth) as $key) {
            // unset() delete content
            unset($month[$key]);
        }
        
        var_dump($month);
        ?>
    </body>
</html>