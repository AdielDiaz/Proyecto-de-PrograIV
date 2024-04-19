<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('estilo/estilos.css') }}">
    <title>Inicio</title>
</head>
<body>
    <div class="container">
        <div class="home-header">
            <h1>Contaminación del Agua en El Salvador</h1>
        </div>
        <div class="home-content">
            <p>La contaminación del agua es un grave problema en El Salvador, con importantes repercusiones en la salud pública y el medio ambiente. La sobreexplotación de los recursos hídricos, la falta de tratamiento de aguas residuales y la contaminación por pesticidas y desechos industriales son algunas de las principales causas de este problema.</p>
            
            <p>La contaminación del agua afecta a comunidades enteras, causando enfermedades como diarrea, hepatitis, y problemas respiratorios. Además, daña los ecosistemas acuáticos y reduce la disponibilidad de agua limpia para consumo humano, agricultura y otros usos.</p>
            
            <p>Es fundamental que se tomen medidas urgentes para abordar la contaminación del agua en El Salvador. Esto incluye mejorar la infraestructura de tratamiento de aguas residuales, implementar prácticas agrícolas sostenibles y promover la conciencia ambiental entre la población.</p>

            <div class="image-gallery">
                <img src="img/contaminacion_de_el_agua.png" alt="Contaminación del agua en El Salvador">
                <img src="img/Contaminacion2.png" alt="Contaminación del agua en El Salvador">
            </div>
        </div>
    </div>
    <p class="noc">Para saber más sobre nosotros, visita nuestra <a href="about">página de Información de los entegrantes del Grupo</a>.</p>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .home-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .home-header h1 {
        color: #333;
    }

    .home-content {
        margin-top: 20px;
    }

    .home-content p {
        color: #666;
    }

    .image-gallery {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .image-gallery img {
        width: 48%; 
        border-radius: 5px;
    }

    .home-content a {
        color: #007bff;
        text-decoration: none;
    }

    .home-content a:hover {
        text-decoration: underline;
    }

    </style>
</body>
</html>
