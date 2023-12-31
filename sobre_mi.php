<!DOCTYPE html>
<html>
<head>
    <title>Sobre Mí</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Sobre Mí</h1>
    </header>
    <nav>
        <ul>
            <li><a href="Principal.php">Inicio</a></li>
            <li><a href="sobre_mi.php">Sobre mí</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
    <section>
    <h2>Información Personal</h2>
    <p>¡Hola! Soy Max, un estudiante de diseño y gestión de software. Me apasiona la creación de soluciones digitales y el diseño de software. Durante mi tiempo como estudiante, he adquirido habilidades en programación, diseño de interfaces de usuario y gestión de proyectos, lo que me ha permitido desarrollar proyectos emocionantes y desafiantes.</p>

    <h3>Intereses</h3>
    <p>En mi tiempo libre, disfruto de una variedad de intereses. Soy un apasionado de los deportes y disfruto jugando fútbol, voleibol, y siguiendo la Fórmula 1. También soy un ávido lector de mangas y libros relacionados con la tecnología y la ciencia. Además, me encanta pasar tiempo jugando videojuegos y explorando mundos virtuales.</p>

    <h3>Contacto</h3>
    <p>Si deseas ponerte en contacto conmigo o colaborar en proyectos relacionados con diseño, software o tecnología, no dudes en escribirme a mi dirección de correo electrónico: max.lopez.22s@utzmg.edu.mx También puedes encontrarme en las redes sociales y conectarte conmigo:</p>
    <ul>
        <li><a href="https://www.linkedin.com/in/max" target="_blank">LinkedIn</a></li>
        <li><a href="https://twitter.com/max" target="_blank">Twitter</a></li>
    </ul>
</section>

    <footer>
        <p>Derechos de autor © 2023 Mi Blog sobre Blue Lock</p>
    </footer>
</body>
</html>
<style>
    body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #000, #1a73e8);
            background-color: #f0f0f0;
            color: white;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1a73e8;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin: 0 20px;
            position: relative;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 18px;
            padding: 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: #0555c8;
            transition: width 0.3s;
        }

        nav a:hover {
            background-color: #0555c8;
            color: #fff;
            border-radius: 5px;
        }

        nav a:hover::before {
            width: 100%;
        }

        nav ul::after {
            content: "";
            clear: both;
            display: table;
        }

        nav li:last-child {
            margin-right: 0;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #000;
        }

        /* Agrega más estilos según tus preferencias */

        footer {
            text-align: center;
            background-color: #1a73e8;
            color: #fff;
            padding: 10px;
        }
</style>