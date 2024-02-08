<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/public/css/tailwind.css">
    <link rel="stylesheet" href="/views/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>MODAL</title>
</head>

<body >
    <div>
        <div class="text-3xl mb-4">Agregar clase</div>
    </div>

    <form action="/adClase" method="post">
        <div class="mb-4">
            <span class="text-xs font-semibold">Nombre de la materia</span>
            <div class="border border-gray-300 p-1">
                <input type="text" class="w-full p-1" name="Nombre">
            </div>
        </div>

        <div class="mb-4">
            <span class="text-xs font-semibold">Maestros disponibles para la clase</span>
            <div class="border border-gray-300 p-1">
                <select id="usuarios" name="maestro" class="w-full">
                    <?php
                        $conexion = new mysqli("localhost", "root", "", "pf");

                        if ($conexion->connect_error) {
                            die("Error de conexión a la base de datos: " . $conexion->connect_error);
                        }

                        $result = $conexion->query("SELECT name FROM usuarios WHERE permiso = 'maestro'");

                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='{$row['name']}'>{$row['name']}</option>";
                        }

                        $conexion->close();
                    ?>
                </select>
            </div>
        </div>

        <div class="flex justify-end flex-wrap gap-2" style="">
        <button class="bg-gray-500 text-white p-2 rounded text-xs hover:bg-gray-700" type="submit" style="background-color:#3B82F6 ;">Crear</button>
       
            <button type="button" class="bg-blue-500 text-white p-2 rounded text-xs hover:bg-blue-700" onclick="closeModal()"style="background-color:#6B7280;" >Close</button>
        </div>
    </form>    
</body>

</html>