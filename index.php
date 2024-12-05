<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema de Movimiento Uniformemente Acelerado</title>
    <style>
        /* Contenedor principal */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }

        /* Secciones principales */
        section {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 0;
            height: 150px; /* Altura uniforme */
        }

        /* Estilo de cada sección */
        .azul {
            background-color: blue;
            flex: 1;
        }

        .amarillo {
            background-color: yellow;
            color: black;
            flex: 1;
        }

        .rojo {
            background-color: red;
        }

        .verde {
            background-color: green;
        }

        .morado {
            background-color: purple;
        }

        .turquesa {
            background-color: teal;
        }

        /* Botón personalizado */
        button {
            font-size: 18px;
            padding: 10px 20px; /* Tamaño más grande */
            border: none;
            background-color: purple;
            color: white;
            cursor: pointer;
            border-radius: 5px; /* Bordes redondeados */
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: darkmagenta; /* Cambia el color al pasar el mouse */
        }

        /* Contenedor para las secciones azul y amarilla */
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px; /* Espaciado entre cuadros */
        }

        .flex-item {
            flex: 1 1 calc(50% - 20px); /* Ocupan el 50% del ancho menos espacio de los márgenes */
            height: 150px;
        }
    </style>
</head>
<body>
    <!-- Sección azul y amarilla (alineadas) -->
    <div class="flex-container">
        <section class="azul flex-item">
            <h2>Problema: Calcular parámetros del movimiento uniformemente acelerado</h2>
        </section>
        <section class="amarillo flex-item">
            <h2>Esquema</h2>
        </section>
    </div>

    <!-- Otras secciones (roja, turquesa, morada, verde) -->
    <section class="rojo">
        <h2>Datos:</h2>
        <p>Aceleración, Tiempo, Velocidad...</p>
    </section>
    <section class="turquesa">
        <h2>Fórmulas:</h2>
        <p>Ecuaciones de movimiento...</p>
    </section>
    <section class="morado">
        <h2>Solución</h2>
        <button>Presiona para calcular</button>
    </section>
    <section class="verde">
        <h2>Resultado:</h2>
    </section>
</body>
</html>
