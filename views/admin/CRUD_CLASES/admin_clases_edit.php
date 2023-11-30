<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/tailwind.css">
    <link rel="stylesheet" href="/views/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100&display=swap">
    <title>Editar Clase</title>
</head>

<body>
    <form action="/edit/clase" method="post">
        <input type="number" value="<?= $clase["id"] ?>" hidden name="id">

        <div>
            <div class="text-3xl mb-4">Editar clase</div>
        </div>

        <span class="text-xs font-semibold">Nombre de la materia</span>
        <div style="border-color: grey; border-style: solid; border-width: 1px;">
            <input type="text" class="border-solid text-sm border-slate-800 w-full hover:bg-sky-50 text-slate-500 p-1" value="<?= $clase['name'] ?>">
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

        <div class="mt-4 w-full" style="display: flex; justify-content: flex-end; flex-wrap: wrap; gap: 8px;">
            <a href="/CRUD_CLASES" class="bg-blue-500 text-white p-2 rounded text-xs hover:bg-blue-700">Cerrar</a>
            <button class="bg-gray-500 text-white p-2 rounded text-xs hover:bg-gray-700" type="submit">Guardar cambios</button>
        </div>
    </form>
</body>

</html>
