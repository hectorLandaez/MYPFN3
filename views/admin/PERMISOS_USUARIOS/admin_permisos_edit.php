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

<body>
    <form action="/edit/permiso" method="post">
    <input type="number" value="<?= $usuario["id"] ?>" hidden name="id">

        <div>
            <div class="text-3xl mb-4">editar permisos</div>
        </div>

        <span class="text-xs font-semibold"> Email del Usuario </span>
        <div style="border-color:grey;border-style: solid;border-width: 1px;">
            <input readonly type="text" class="border-solid text-sm border-slate-800 w-full hover:bg-sky-50 text-slate-500 p-1" name="email" value=<?=$usuario['email']?>>
        </div>

        <label for="rol" class="text-xs font-semibold mt-4">Rol del usuario</label>
        <div style="border-color: grey; border-style: solid; border-width: 1px;">
            <select id="rol" name="rol" class="border-solid text-sm border-slate-800 w-full hover:bg-sky-50 text-slate-500 p-1" name="estado" value=<?=$usuario['estado']?>>
                <option value="activo">activo</option>
                <option value="inactivo">inactivo</option>
            </select>
        </div>

        <div class="mt-4 w-full" style=" display: flex;justify-content: flex-end;flex-wrap: wrap;gap: 8px;">
            <a  href="/PERMISOS" class="bg-blue-500 text-white p-2 rounded text-xs hover:bg-blue-700">Close</a>
            <button class="bg-gray-500 text-white p-2 rounded text-xs hover:bg-gray-700" type="submit">Guardar cambios</button>
        </div>
    </form>
</body>

</html>