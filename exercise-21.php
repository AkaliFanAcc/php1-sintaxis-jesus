<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP object</title>
</head>
<body>
    <?php
        /* 
            public: Hace que la variable/función se pueda acceder desde cualquier lugar, como por ejemplo otras clases y otras instancias de esa misma clase

            private: Hace que la variable/función se pueda utilizar desde la misma clase que las define

            protected: Hace que la variable/función se pueda acceder desde la clase que las define y también desde cualquier otra clase que herede de ella
         */
        //En otras palabras: "private" = solo tú, "protected" = tú y tus dependientes, "public" = cualquiera
        Class Carro{
            public $color;
            private $anio;
            protected $nombre;

            public function __construct($color, $anio){
                $this -> color = $color;
                $this -> anio = $anio;
            }

            public function mensaje(){
                return 'Mi carro es '.$this->color.' y año '.$this->anio. '!';
            }
        }

        Class Modelo extends Carro{

            public function __construct($color, $nombre, $anio){
                $this->color = $color;
                $this->nombre = $nombre;
                $this->anio = $anio;
            }
            public function mensaje2(){
                return 'Mi carro aparte de ser color '.$this->color.' es modelo '.$this->nombre.' es del año '.$this->anio;
            }
        }

        $miCarro = new Carro("rojo", 2023);
        echo $miCarro->mensaje();

        echo "<br>";

        $miCarro = new Carro("negro", 2007);
        echo $miCarro->mensaje();

        echo "<br>";

        $miModelo = new Modelo("rojo", "Ferrari");
        echo $miModelo->mensaje2();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>