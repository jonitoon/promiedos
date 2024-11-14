<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutbolStats - Tu fuente de resultados y partidos de fútbol</title>
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
            <a href="<?php base_url('live') ?>" class="hover:text-yellow-300">En Vivo</a>
            <a href="#" class="hover:text-yellow-300">Próximos Partidos</a>
            <a href="#" class="hover:text-yellow-300">Resultados</a>
            <a href="#" class="hover:text-yellow-300">Clasificaciones</a>
            <a href="#" class="hover:text-yellow-300">Estadísticas</a>
        </div>
    </nav>

    <main class="container mx-auto mt-8">
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Partidos en Vivo</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span>Equipo A</span>
                        <span class="font-bold">2 - 1</span>
                        <span>Equipo B</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        45' | Liga Example
                    </div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span>Equipo C</span>
                        <span class="font-bold">0 - 0</span>
                        <span>Equipo D</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        15' | Copa Example
                    </div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span>Equipo E</span>
                        <span class="font-bold">3 - 2</span>
                        <span>Equipo F</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        80' | Liga Example
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Próximos Partidos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span>Equipo G</span>
                        <span>VS</span>
                        <span>Equipo H</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        Mañana, 20:00 | Copa Example
                    </div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span>Equipo I</span>
                        <span>VS</span>
                        <span>Equipo J</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        Viernes, 18:30 | Liga Example
                    </div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span>Equipo K</span>
                        <span>VS</span>
                        <span>Equipo L</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        Sábado, 16:00 | Copa Example
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Resultados Recientes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span>Equipo M</span>
                        <span class="font-bold">3 - 0</span>
                        <span>Equipo N</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        Ayer | Liga Example
                    </div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span>Equipo O</span>
                        <span class="font-bold">1 - 1</span>
                        <span>Equipo P</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        Ayer | Copa Example
                    </div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <span>Equipo Q</span>
                        <span class="font-bold">2 - 1</span>
                        <span>Equipo R</span>
                    </div>
                    <div class="text-center text-sm text-gray-600 mt-2">
                        Lunes | Liga Example
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Clasificaciones</h2>
            <div class="bg-white p-4 rounded shadow overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="text-left p-2">Pos</th>
                            <th class="text-left p-2">Equipo</th>
                            <th class="text-left p-2">PJ</th>
                            <th class="text-left p-2">PTS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2">1</td>
                            <td class="p-2">Equipo A</td>
                            <td class="p-2">10</td>
                            <td class="p-2">25</td>
                        </tr>
                        <tr>
                            <td class="p-2">2</td>
                            <td class="p-2">Equipo B</td>
                            <td class="p-2">10</td>
                            <td class="p-2">22</td>
                        </tr>
                        <tr>
                            <td class="p-2">3</td>
                            <td class="p-2">Equipo C</td>
                            <td class="p-2">10</td>
                            <td class="p-2">20</td>
                        </tr>
                        <tr>
                            <td class="p-2">4</td>
                            <td class="p-2">Equipo D</td>
                            <td class="p-2">10</td>
                            <td class="p-2">18</td>
                        </tr>
                    </tbody>
                </table>
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
</body>
</html>