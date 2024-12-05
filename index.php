<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<section class="wrapper">
    <header>
        <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
        <nav>
            <ul>
                <li><a href="index.php" class="current">Inicio</a></li>
                <li><a href="basicoPhp7.php">Básico Php7</a></li>
            </ul>
        </nav>
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Calcular la densidad de la Tierra</h2>
            <p>Descripción:</p>
            <p>El radio de la Tierra es 6 378 km y su masa es 5.97E24 kg. <br>
            a) ¿Cuál es la densidad promedio de la Tierra?<br>
            b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiará, ¿cuál sería su densidad?<br>
            c) Si el radio de la Tierra y su masa se redujeran a una tercera parte, ¿su densidad sería la misma? ¿Por qué?</p>
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            <p>Densidad = Masa/Volumen</p>
            <p>Volumen = (4/3)πr³</p>
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            <p>Masa: 5.97E24 Kg</p>
            <p>Radio: 6378 Km</p>
            <center>
                <img class="imgProblema" src="images/problema.png" alt="Imagen de la Tierra">
                <img class="imgProblema" src="images/tren.png" alt="Fórmula del volumen">
            </center>
        </section>
        <section class="calculos">
            <h2>Solución</h2>
            <p>a) La densidad de la Tierra es:<br>
            densidad = 5.97E24 Kg/volumen (m³) <br>
            volumen = (4/3)π(6378000)³</p>
        </section>
        <?php
            function calcula_densidad() {
                $PI = 3.141592;
                $masa = 5.97E24;
                $radio = 6378e3;
                $volumen = (4/3) * $PI * pow($radio, 3);
                $densidad = $masa / $volumen;
                return $densidad;
            }
        ?>
        <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA"></div>
            <?php
                echo "<h1>Resultado: Densidad = " . calcula_densidad() . " kg/m³</h1>";
            ?>
        </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2033
    </footer>
</section>
</body>
</html>
