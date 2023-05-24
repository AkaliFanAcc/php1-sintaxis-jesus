<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <title>Bucles en PHP</title>
</head>
<body>
    <?php
        /* while Ejecute un código siempre que la condición sea verdadera */
        /* do while recorre un bloque de código una vez y luego repite el ciclo siempre que la condición sea verdadera */
        /* for Recorre un bloque de código un número específico de veces */
        /* foreach recorre un bloque de código para cada elemento de una matriz */

        $matriz = [["a", "b", "c"],["d", "e", "f"],["g", "h", "i"]];

        for($i = 0; $i < Count($matriz); $i++){
            for($j = 0; $j < Count($matriz); $j++){
                var_dump($matriz[$i][$j]);
                echo "<br>";
            }
        }
        echo "<br>";
        echo "<br>";
        $matriz2 = [
            ["a", "b", "c"],
            ["d", "e", "f"],
            ["g", "h", "i"],
            ["j", "l", "l"],
            ["m", "n", "o"]
        ];
        for($i = 0; $i < Count($matriz2); $i++){
            for($j = 0; $j < Count($matriz2[$i]); $j++){
                var_dump($matriz2[$i][$j]);
                echo "<br>";
            }
        }
        echo "<br>";
        echo "<br>";
        $matriz3 = [
            ["a", "b", "c", "aa"],
            ["d", "e"],
            ["g", "h", "i", "ab", "cd"],
            ["j"],
            ["m", "n", "o"]
        ];

        for($i = 0; $i < Count($matriz3); $i++){
            for($j = 0; $j < Count($matriz3[$i]); $j++){
                var_dump($matriz3[$i][$j]);
                echo "<br>";
            }
        }
        echo "<br>";
        echo "<br>";


        var_dump(array());
        echo "<br>";
        echo "<br>";

    ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> -->
</body>
</html>