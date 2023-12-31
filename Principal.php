<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Blog sobre Blue Lock</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Mi Blog sobre Blue Lock</h1>
        <p>Bienvenido a mi blog personal dedicado a "Blue Lock".</p>
    </header>

    <nav>
        <ul>
            <li><a href="Principal.php">Inicio</a></li>
            <li><a href="sobre_mi.php">Sobre mí</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="javascript:void(0);" onclick="showLogin()">Iniciar sesión</a></li>
            <li><a href="javascript:void(0);" onclick="showSignup()">Registrarse</a></li>
        </ul>
    </nav>

    <main>
    <div id="signup-form" style="display: none;">
            <h3>Registrarse</h3>
            <form>
                <label for="signup-username">Nombre de usuario:</label>
                <input type="text" id="signup-username" name="signup-username" required>

                <label for="signup-password">Contraseña:</label>
                <input type="password" id="signup-password" name="signup-password" required>

                <button type="button" onclick="register()">Registrarse</button>
            </form>
        </div>

        <!-- Formulario de login oculto por defecto -->
        <div id="login-form" style="display: none;">
            <h3>Iniciar sesión</h3>
            <form>
                <label for="login-username">Nombre de usuario:</label>
                <input type="text" id="login-username" name="login-username" required>

                <label for="login-password">Contraseña:</label>
                <input type="password" id="login-password" name="login-password" required>

                <button type="button" onclick="authenticate()">Iniciar sesión</button>
            </form>
        </div>
</main>
        <main>
        <article>
            <h2>Reseña de "Blue Lock": El anime de fútbol que emocionará a los fanáticos</h2>
            <p>Fecha: 3 de noviembre de 2023</p>
            <img src="blue-lock-poster.jpg" alt="Blue Lock Poster">
            <p>"Blue Lock" es un emocionante anime que se centra en el mundo del fútbol. La serie sigue la historia de un grupo de jóvenes talentosos que compiten por un lugar en el equipo nacional de Japón. Con una animación impresionante, personajes carismáticos y emocionantes partidos de fútbol, "Blue Lock" se ha convertido en un favorito de los fanáticos en todo el mundo.</p>
            
            <h3>Personajes Principales</h3>

            <h4>Yoichi Isagi</h4>
            <p>Yoichi Isagi es un apasionado delantero que se destaca por su velocidad y capacidad para anotar goles. Su determinación y trabajo en equipo lo convierten en un líder en el campo.</p>

            <h4>Asahi Naruhaya</h4>
            <p>Asahi Naruhaya es un mediocampista versátil que destaca por su agilidad y habilidades de regate. Su visión de juego y precisión en los pases son cruciales para el equipo.</p>

            <h4>Gin Gagamaru</h4>
            <p>Gin Gagamaru es un defensor central robusto y fuerte que impone respeto en la defensa. Su capacidad para anticipar los movimientos del oponente lo convierte en una pieza fundamental en la retaguardia.</p>

            <h4>Gurimu Igarashi</h4>
            <p>Gurimu Igarashi es un talentoso mediocampista con una gran visión de juego y precisión en los pases. Su inteligencia en el campo es un activo invaluable para el equipo.</p>

            <h4>Hyoma Chigiri</h4>
            <p>Hyoma Chigiri es un defensor ágil y rápido que destaca por su habilidad para interceptar y recuperar el balón. Su capacidad para anticipar los movimientos del oponente es impresionante.</p>

            <h4>Jingo Raichi</h4>
            <p>Jingo Raichi es un delantero versátil con una gran habilidad para marcar goles. Su determinación en el área de penalti lo convierte en un goleador destacado.</p>

            <h4>Meguru Bachira</h4>
            <p>Meguru Bachira es un defensor fuerte y resistente con una gran habilidad para marcar enemigos en el campo. Su capacidad para bloquear tiros y cortar pases es esencial para la defensa del equipo.</p>

            <h4>Okuhito Iemon</h4>
            <p>Okuhito Iemon es un mediocampista versátil que destaca por su agilidad y capacidad para romper las líneas defensivas del oponente. Es conocido por su creatividad en el campo.</p>

            <h4>Rensuke Kunigami</h4>
            <p>Rensuke Kunigami es un delantero hábil que se destaca por su velocidad y capacidad para regatear a los defensores. Es un goleador nato y aporta una gran amenaza en el área de penalti.</p>

            <h4>Wataru Kuon</h4>
            <p>Wataru Kuon es un mediocampista con una visión excepcional del juego y una gran capacidad para distribuir el balón. Su habilidad táctica es esencial para mantener el control en el centro del campo.</p>

            <h4>Yudai Imamura</h4>
            <p>Yudai Imamura es un delantero rápido y ágil que destaca por su habilidad para desbordar a los defensores y crear oportunidades de gol. Es un jugador emocionante en el campo.</p>

            <h4>Ryosuke Kira</h4>
            <p>Ryosuke Kira es un defensor central fuerte y experimentado que lidera la línea defensiva con determinación. Su presencia física es crucial para mantener la portería a salvo.</p>

            <h4>Anri Teieri</h4>
            <p>Anri Teieri es un mediocampista versátil que puede desempeñar múltiples roles en el campo. Su capacidad para adaptarse a diversas situaciones lo convierte en un jugador versátil.</p>

            <h4>Hirotoshi Buratsuta</h4>
            <p>Hirotoshi Buratsuta es un delantero talentoso con una habilidad innata para marcar goles. Su instinto en el área de penalti lo convierte en un depredador del gol.</p>

            <h4>Jinpachi Ego</h4>
            <p>Jinpachi Ego es un defensor central robusto y fuerte que impone respeto en la defensa. Su capacidad para anticipar los movimientos del oponente es impresionante.</p>

            <h4>Yasumori Hoichi</h4>
            <p>Yasumori Hoichi es un mediocampista creativo con una gran visión de juego. Su capacidad para crear oportunidades de gol lo convierte en un jugador destacado en el centro del campo.</p>

            <h4>Shoei Barou</h4>
            <p>Shoei Barou es un delantero versátil que puede jugar en diversas posiciones de ataque. Su habilidad para desequilibrar a la defensa y crear oportunidades de gol es invaluable.</p>

            <h4>Zantetsu Tsurugi</h4>
            <p>Zantetsu Tsurugi es un defensor ágil y rápido que destaca por su capacidad para recuperar balones y anticipar los movimientos del oponente. Es un jugador importante en la retaguardia.</p>

            <h4>Reo Mikage</h4>
            <p>Reo Mikage es un mediocampista hábil con una gran precisión en los pases y una visión táctica impresionante. Su capacidad para orquestar el juego es fundamental para el equipo.</p>

            <h4>Seishiro Nagi</h4>
            <p>Seishiro Nagi es un delantero con una habilidad impresionante para regatear y marcar goles. Su capacidad para crear oportunidades de gol es una amenaza constante para los oponentes.</p>

            <h4>Rin Itoshi</h4>
            <p>Rin Itoshi es un mediocampista versátil que se destaca por su habilidad en el regate y la capacidad de crear oportunidades de gol. Su agilidad en el campo es impresionante.</p>

            <h4>Tabito Karasu</h4>
            <p>Tabito Karasu es un defensor central sólido que lidera la línea defensiva con determinación. Su habilidad para bloquear tiros y cortar pases es esencial para la defensa del equipo.</p>

            <h4>Ryusei Shido</h4>
            <p>Ryusei Shido es un delantero rápido y habilidoso que destaca por su capacidad para anotar goles espectaculares. Es un goleador talentoso en el área de penalti.</p>

            <h4>Ikki Niko</h4>
            <p>Ikki Niko es un mediocampista con una gran resistencia y capacidad para recuperar balones en el centro del campo. Su trabajo incansable es fundamental para el equipo.</p>

            <h4>Sae Itoshi</h4>
            <p>Sae Itoshi es un delantero versátil con una gran habilidad para regatear y marcar goles. Su capacidad para desequilibrar a la defensa es una amenaza constante en el área de penalti.</p>

            <h4>Oliver Aiku</h4>
            <p>Oliver Aiku es un mediocampista creativo con una visión excepcional del juego. Su habilidad para crear oportunidades de gol y distribuir el balón es esencial para el equipo.</p>

            <p>En esta reseña, hemos destacado algunos de los personajes principales de "Blue Lock". Cada personaje aporta algo único a la serie y contribuye a la emoción y el drama en el campo de fútbol.</p>
        </article>

        <article>

    <h3>Deja un comentario</h3>
    <form id="comment-form">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="comment">Comentario:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <button type="submit">Publicar comentario</button>
    </form>
</article>
<article id="comments">
    <h3>Comentarios</h3>
    <ul id="comment-list">
    </ul>
</article>



    </main>
    

    <footer>
        <p>Derechos de autor © 2023 Mi Blog sobre Blue Lock</p>
    </footer>
    
</body>
</html>
<script>
// Función para agregar un comentario
function addComment() {
    const name = document.getElementById('name').value;
    const commentText = document.getElementById('comment').value;

    if (name && commentText) {
        const commentList = document.getElementById('comment-list');
        const commentItem = document.createElement('li');
        commentItem.innerHTML = `<strong>${name}:</strong> ${commentText}`;
        commentList.appendChild(commentItem);

        // Limpiar los campos después de agregar el comentario
        document.getElementById('name').value = '';
        document.getElementById('comment').value = '';
    }
}
// Asociar la función addComment al botón de "Publicar comentario"
document.getElementById('comment-form').addEventListener('submit', function (e) {
    e.preventDefault();
    addComment();
});
</script>
<script>
        // Funciones para mostrar/ocultar formularios de registro y login
        function showSignup() {
            document.getElementById('signup-form').style.display = 'block';
            document.getElementById('login-form').style.display = 'none';
        }

        function showLogin() {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('signup-form').style.display = 'none';
        }

        // Función para registrar un nuevo usuario
        function register() {
            const signupUsername = document.getElementById('signup-username').value;
            const signupPassword = document.getElementById('signup-password').value;

            // Realiza la lógica de registro, como agregar a la base de datos (simulada) y más.

            // Después de completar el registro, puedes redirigir al usuario o realizar otras acciones.
        }

        // Función para autenticar al usuario
        function authenticate() {
            const loginUsername = document.getElementById('login-username').value;
            const loginPassword = document.getElementById('login-password').value;

            // Realiza la lógica de autenticación, como verificar las credenciales y más.

            // Después de completar la autenticación, puedes redirigir al usuario o realizar otras acciones.
        }
    </script>