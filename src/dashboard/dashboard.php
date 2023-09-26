<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <script src="./dropdown.js" defer></script>
    <title>Horas de servicio</title>
</head>

<body class="bg-slate-200">
    <nav class="w-screen fixed bg-white border-gray-200 flex justify-between">
        <div class="max-w-screen-xl flex items-center gap-8 py-3">
            <!-- logo -->
            <a href="#" class="">
                <img src="/img/logo.png" alt="logo" class="w-[200px] px-4">
            </a>
            <!-- directorios -->
            <ul class="flex gap-5 text-[15px]">
                <li>
                    <a href="">Pagina principal</a>
                </li>
                <li>
                    <a href="">Area personal</a>
                </li>
                <li>
                    <a href="">Mis cursos</a>
                </li>
                <li>
                    <a href=""><strong>Horas de servicio</strong></a>
                </li>
            </ul>
        </div>
        <div class="flex gap-4">
            <!-- iconos campana-mensajes -->
            <div class="h-full flex items-center gap-2">
                <a href=""><img width="20" height="20" src="https://img.icons8.com/sf-ultralight/25/appointment-reminders.png" alt="appointment-reminders" /></a>
                <a href=""><img width="20" height="20" src="https://img.icons8.com/windows/32/speech-bubble--v1.png" alt="speech-bubble--v1" /></a>
            </div>
            <!-- perfil y activador del dropdown -->
            <div id="opendrop" class="h-full flex items-center pr-8 gap-2 cursor-pointer">
                <!-- perfil name -->
                <div class="bg-gray-200 rounded-3xl p-2 px-3">
                    <h4>JC</h4>
                </div>
                <div>
                    <strong>
                        <img width="10" height="10" src="https://img.icons8.com/ios-glyphs/30/expand-arrow--v1.png" alt="expand-arrow--v1" />
                    </strong>
                </div>
            </div>
            <!-- dropdown -->
            <div id="dropdown" class="hidden absolute w-[250px] right-5 top-[75px] font-normal bg-white divide-y divide-gray-100 rounded-lg shadow">
                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-blue-700 hover:text-gray-100">Accesibilidad</a>
                </div>
                <ul class="py-2 text-sm text-gray-800 hover:text-gray-100">
                    <li>
                        <a href="#" class="block px-4 py-[6px] text-sm text-gray-800 hover:bg-blue-700 hover:text-gray-100">Perfil</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-[6px] text-sm text-gray-800 hover:bg-blue-700 hover:text-gray-100">Calificaciones</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-[6px] text-sm text-gray-800 hover:bg-blue-700 hover:text-gray-100">Calendario</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-[6px] text-sm text-gray-800 hover:bg-blue-700 hover:text-gray-100">Aechivos privados</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-[6px] text-sm text-gray-800 hover:bg-blue-700 hover:text-gray-100">Informes</a>
                    </li>
                </ul>
                <div class="py-1 pr-2">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-blue-700 hover:text-gray-100">Preferencias</a>
                    <a href="#" class=" flex justify-between relative px-4 py-2 text-sm text-gray-800 hover:bg-blue-700 hover:text-gray-100">Idioma <img class="absolute right-0" width="15" height="15" src="https://img.icons8.com/material-rounded/24/sort-right.png" alt="sort-right"/></a>
                </div>
                <!-- serrar sesion -->
                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-blue-700 hover:text-gray-100">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-slate-200 pt-[100px] px-[110px]">
        <h2 class="text-3xl font-bold pb-4">Mis Horas de servicio <?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']?> </h2>
        <!-- aqui puedes poner la tabla con la informacion -->

    </div>
</body>

</html>