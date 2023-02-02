<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exercice3</title>
    </head>
    <body>
        <?php
            // Define two array
            $array1 = array('a','1','2','3','4','5');
            $array2 = array('a','3');
            // intersect/matched values should be equal to first array
            if (array_intersect($array2, $array1) === $array2) {
                echo "It is a subset";
            } else {
                echo "Not a subset";
            }
        ?>
    </body>
</html>