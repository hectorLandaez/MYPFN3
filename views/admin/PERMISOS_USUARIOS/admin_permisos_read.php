

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="/public/css/tailwind.css">
        <link rel="stylesheet" href="/views/style.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>

    <body class="flex flex-row" style="background-color: #f5f6fa;">
        <nav class="flex-none w-2/12 h-screen p-2 shadow-2xl font-medium">
            <div class="text-lg"><img src="" alt="">Universidad</div>
            <hr style="background-color: while;">
            <div class="text-xs">
                <p class="text-lg">Admin</p>
                <p class="text-xs">administrador</p>
            </div>
            <hr>
            <div>
                <div class="text-xs m-3" style="display: flex;justify-content: center;"> MENU ADMINISTRADOR</div>
                <div class="text-base">
                    <div class="text-base">
                        <a href="/PERMISOS">
                            <div>
                                <div class="flex flex-row items-center h-10"> <span style=" font-size: 20px;
                                   margin-right: 10px;margin-left: 10px;" class="material-symbols-outlined">
                                        person_alert
                                    </span>Permisos</div>
                            </div>
                        </a>
                        <a href="/CRUD_MAESTROS">
                            <div class="flex flex-row items-center h-10"> <span style=" font-size: 20px;
                                   margin-right: 10px;margin-left: 10px;" class="material-symbols-outlined">
                                    supervisor_account
                                </span> Maestros</div>
                        </a>
                        <a href="/CRUD_ALUMNOS">
                            <div class="flex flex-row items-center h-10"> <span style=" font-size: 20px;
                                   margin-right: 10px;margin-left: 10px;" class=" material-symbols-outlined">
                                    school
                                </span> Alumnos</div>
                        </a>
                        <a href="/CRUD_CLASES">
                            <div class="flex flex-row items-center h-10"> <span style=" font-size: 20px;
                                   margin-right: 10px;margin-left: 10px;" class="material-symbols-outlined">
                                    tv_gen
                                </span>Clases</div>
                    </div>
                    </a>
        </nav>
        <div class="w-full font-medium">
            <div class="flex flex-row bg-white shadow p-2 ml-1.5 mr-1.5 " style="justify-content: space-between;">
                <h1 class="text-xs flex flex-row items-center" style="color:#9c9da2;"> <span class="material-symbols-outlined mr-5">
                        menu
                    </span>Home</h1>
                <div class="dropdown">
                    <button class="flex items-center">
                        Administrador
                        <span class="material-symbols-outlined ml-2">expand_more</span>
                    </button>
                    <div class="dropdown-content">
                        <div class="flex flex-row items-center">
                            <a href="#"> <span class="material-symbols-outlined">
                                    account_circle
                                </span> Perfil</a>
                        </div>
                        <a href="/logout">
                            <div class="text-red-700 flex flex-row items-center"> <span class="material-symbols-outlined">
                                    logout
                                </span>Log Out</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-row" style="justify-content: space-between;align-items: center;">
                <h1 class="text-2xl ml-6 mt-6 mb-6 font-medium" style="color:#2a2a2a;">Lista de Permisos</h1>
            </div>
            <div class="shadow p-4 w-11/12  ml-6 bg-white">
                <div class="flex flex row justify-between items-center">
                    <p>Informacion de permisos</p>
                </div>
                <hr>
                <div class="flex flex row justify-between items-center">
                    <table class="w-1/4 bg-gray-700 text-xs mt-2 mb-2 rounded-md p-4 ">
                        <thead style="color: #576787; color:white; ">
                            <tr>
                                <th class="py-1 px-1 border-b ">Copy</th>
                                <th class="py-1 px-1 border-b">Excel</th>
                                <th class="py-1 px-1 border-b">PDF</th>
                                <th class="py-1 px-1 border-b  flex  items-center">column Visibilty <span class="material-symbols-outlined">
                                        expand_more
                                    </span></th>
                            </tr>
                        </thead>
                    </table>
                    <div class="flex flex-row allign-center "> search : <div class="ml-4" style="border-color:grey;border-style: solid;border-width: 1px;"><input type="text" class="w-full"></div>
                    </div>
                </div>

                <table class="min-w-full bg-white border border-gray-300 text-xs">
                    <thead style="color: #576787;">
                        <tr class="">
                            <th class="py-2 px-4 border-gray-300">#<div>
                            </th>
                            <th class="py-2 px-4 border-l border-gray-300">EMAIL/USUARIO </th>
                            <th class="py-2 px-4 border-l border-gray-300">Permiso </th>
                            <th class="py-2 px-4 border-l border-gray-300">Estado</th>
                            <th class="py-2 px-4 border-l border-gray-300">Acciones<div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($usuarios as $usuario) {
                        ?>
                            <tr>
                            <td class="py-2 px-4 border-b  border-l border-gray-300"><?= $usuario["id"] ?></td>
                            <td class="py-2 px-4 border-b  border-l border-gray-300"><?= $usuario["email"] ?></td>
                            <td class="py-2 px-4 border-b  border-l border-gray-300"><?= $usuario["permiso"] ?></td>
                            <td class="py-2 px-4 border-b  border-l border-gray-300"><?= $usuario["permiso"] ?></td>
                                <td class="py-2 px-4 border-b  border-l border-gray-300">Hector</td>
                                <td class="py-2 px-4 border-b  border-l border-gray-300 flex items-center justify-center ">
                                    <button onclick="openModal('admin_permisos_edit.php')"><span class="material-symbols-outlined text-blue-500 text-xl	">
                                            edit
                                        </span></button>
                                    <button>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>

            </div>
        </div>


        <!-- Modal -->
        <div id="myModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden">
            <div class="flex flex-col items-center mt-8 h-full">
                <div id="modalContent" class=" flex flex-col bg-white p-6 rounded shadow-lg w-3/12">
                </div>
            </div>
        </div>
    </body>

    </html>
    <script src="/scripts/modales.js"></script>