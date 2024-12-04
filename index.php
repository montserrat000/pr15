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
        <h1 class="logo"><a href="index.html">Cálculos PHP</a></h1>
        <nav>
            <ul>
                <li><a href="index.php" class="current">Inicio</a></li>
                <li><a href="movimiento.php">Movimiento Uniforme</a></li>
                <li><a href="densidad.php">Densidad de la Tierra</a></li>
            </ul>
        </nav>
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Calcular parámetros del movimiento uniformemente acelerado</h2>
            <p>Un tren del metro arranca con una aceleración constante de 8 cm/s².</p>
            <ul>
                <li><strong>a)</strong> ¿Cuál es su velocidad después de 30 segundos?</li>
                <li><strong>b)</strong> ¿Qué espacio recorrió en ese tiempo?</li>
                <li><strong>c)</strong> ¿Cuánto tiempo tarda en recorrer 500 m?</li>
            </ul>
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            <ul>
                <li><strong>Velocidad final:</strong> \( v = v_0 + a \cdot t \)</li>
                <li><strong>Espacio recorrido:</strong> \( x = v_0 \cdot t + \frac{1}{2} \cdot a \cdot t^2 \)</li>
                <li><strong>Tiempo total:</strong> \( t = \sqrt{\frac{2 \cdot x}{a}} \)</li>
            </ul>
        </section>
        <section class="resultado">
            <h2>Resultados:</h2>
            <?php
                $aceleracion = 0.08; // m/s²
                $tiempo = 30; // s
                $espacio_total = 500; // m

                // Cálculos
                $velocidad_final = $aceleracion * $tiempo;
                $espacio_recorrido = 0.5 * $aceleracion * pow($tiempo, 2);
                $tiempo_total = sqrt((2 * $espacio_total) / $aceleracion);

                echo "<p><strong>a)</strong> Velocidad después de 30 segundos: " . number_format($velocidad_final, 2) . " m/s</p>";
                echo "<p><strong>b)</strong> Espacio recorrido: " . number_format($espacio_recorrido, 2) . " m</p>";
                echo "<p><strong>c)</strong> Tiempo para recorrer 500 m: " . number_format($tiempo_total, 2) . " s</p>";
            ?>
        </section>
        <hr>
        <section class="problema">
            <h2>Problema: Cálculo de la densidad de la Tierra</h2>
            <p>El radio de la Tierra es 6,378 km y su masa es 5.97×10<sup>24</sup> kg.</p>
            <ul>
                <li><strong>a)</strong> ¿Cuál es la densidad promedio de la Tierra?</li>
                <li><strong>b)</strong> Si el radio se redujera a un tercio, ¿cuál sería su densidad?</li>
                <li><strong>c)</strong> Si radio y masa se redujeran a un tercio, ¿la densidad sería la misma?</li>
            </ul>
        </section>
                <section class="esquemaProblema">
            <h2>Esquema</h2>
            <center>
                <img class="imgProblema" src="images/tren.png" alt="Esquema del problema">
            </center>
        </section>
        <section class="resultado">
            <h2>Resultados:</h2>
            <?php
                $masa = 5.97e24; // kg
                $radio = 6378e3; // m
                $PI = pi();

                // Volumen original
                $volumen = (4 / 3) * $PI * pow($radio, 3);
                $densidad = $masa / $volumen;

                // Radio reducido
                $radio_reducido = $radio / 3;
                $volumen_reducido = (4 / 3) * $PI * pow($radio_reducido, 3);
                $densidad_reducida = $masa / $volumen_reducido;

                // Masa y radio reducidos
                $masa_reducida = $masa / 3;
                $densidad_reducida_total = $masa_reducida / $volumen_reducido;

                echo "<p><strong>a)</strong> Densidad promedio: " . number_format($densidad, 2) . " kg/m³</p>";
                echo "<p><strong>b)</strong> Densidad con radio reducido: " . number_format($densidad_reducida, 2) . " kg/m³</p>";
                echo "<p><strong>c)</strong> Densidad con masa y radio reducidos: " . number_format($densidad_reducida_total, 2) . " kg/m³</p>";
                echo "<p>¿Es igual la densidad? <strong>No</strong>, porque el volumen cambia al reducir el radio, alterando la relación masa/volumen.</p>";
            ?>
        </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2024
    </footer>
</section>
</body>
</html>
