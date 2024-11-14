<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutbolStats - Partidos en Vivo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="<?= base_url('img/ball.png') ?>" alt="Logo" class="w-12 h-12 mr-2">
                <h1 class="text-2xl font-bold">FutbolStats</h1>
            </div>
            <div class="flex items-center space-x-4">
                <input type="search" placeholder="Buscar equipos, ligas..." class="p-2 rounded text-black">
                <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded">Iniciar Sesión</button>
                <button class="bg-yellow-500 hover:bg-yellow-600 px-4 py-2 rounded">Registrarse</button>
                <button class="text-2xl" aria-label="Notificaciones"><i class="far fa-bell"></i></button>
            </div>
        </div>
    </header>

    <nav class="bg-blue-800 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <a href="#" class="hover:text-yellow-300">En Vivo</a>
            <a href="#" class="hover:text-yellow-300">Próximos Partidos</a>
            <a href="#" class="hover:text-yellow-300">Resultados</a>
            <a href="#" class="hover:text-yellow-300">Clasificaciones</a>
            <a href="#" class="hover:text-yellow-300">Estadísticas</a>
        </div>
    </nav>

    <main class="container mx-auto mt-8">
        <h2 class="text-3xl font-bold mb-6 text-center">Partidos en Vivo</h2>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div id="wg-api-football-games"
                 data-host="v3.football.api-sports.io"
                 data-key="811d7fadae142af18ab7a135b9279ab8"
                 data-date=""
                 data-league=""
                 data-season=""
                 data-theme=""
                 data-refresh="15"
                 data-show-toolbar="true"
                 data-show-errors="false"
                 data-show-logos="true"
                 data-modal-game="true"
                 data-modal-standings="true"
                 data-modal-show-logos="true">
            </div>
        </div>

        <section class="mt-12">
            <h3 class="text-2xl font-bold mb-4">Destacados del Día</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded shadow">
                    <h4 class="font-bold mb-2">Liga Example - Partido Destacado</h4>
                    <div class="flex justify-between items-center">
                        <span>Equipo A</span>
                        <span class="font-bold text-lg">2 - 1</span>
                        <span>Equipo B</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        75' | Goles: Jugador X (A), Jugador Y (B), Jugador Z (A)
                    </div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h4 class="font-bold mb-2">Copa Example - Cuartos de Final</h4>
                    <div class="flex justify-between items-center">
                        <span>Equipo C</span>
                        <span class="font-bold text-lg">0 - 0</span>
                        <span>Equipo D</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        30' | Tarjetas Amarillas: 2 (C), 1 (D)
                    </div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h4 class="font-bold mb-2">Liga Internacional - Clásico</h4>
                    <div class="flex justify-between items-center">
                        <span>Equipo E</span>
                        <span class="font-bold text-lg">1 - 2</span>
                        <span>Equipo F</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        60' | Posesión: 40% (E) - 60% (F)
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-900 text-white p-8 mt-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Enlaces Rápidos</h3>
                <ul>
                    <li><a href="#" class="hover:text-yellow-300">Contacto</a></li>
                    <li><a href="#" class="hover:text-yellow-300">Acerca de</a></li>
                    <li><a href="#" class="hover:text-yellow-300">Términos y Condiciones</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Síguenos</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-2xl hover:text-yellow-300" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-2xl hover:text-yellow-300" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-2xl hover:text-yellow-300" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script
        type="module"
        src="https://widgets.api-sports.io/2.0.3/widgets.js">
    </script>
</body>
</html>