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

        <label for="permiso" class="text-xs font-semibold mt-4">permiso del usuario</label>
        <div style="border-color: grey; border-style: solid; border-width: 1px;">
            <select id="permiso" name="permiso" class="border-solid text-sm border-slate-800 w-full hover:bg-sky-50 text-slate-500 p-1" name="permiso" value=<?=$usuario['permiso']?>>
                <option value="maestro">maestro</option>
                <option value="alumno">alumno</option>
            </select>
        </div>

        <label for="estado" class="text-xs font-semibold mt-4">estado del usuario</label>
        <div style="border-color: grey; border-style: solid; border-width: 1px;">
            <select id="estado" name="estado" class="border-solid text-sm border-slate-800 w-full hover:bg-sky-50 text-slate-500 p-1" name="estado" value=<?=$usuario['estado']?>>
                <option value="activo">activo</option>
                <option value="inactivo">inactivo</option>
            </select>
        </div>

        <div class="mt-4 w-full" style=" display: flex;justify-content: flex-end;flex-wrap: wrap;gap: 8px;">
            <button onclick="closeModal()" 
            class="bg-blue-500 text-white p-2 rounded text-xs hover:bg-blue-700">
            Close
            </button>
            <button class=" text-white p-2 rounded text-xs hover:bg-gray-900"  style="background-color: #808080; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; transition: background-color 0.3s;">
            Guardar cambios
            </button>
        </div>
    </form>
</body>

<script src="/scripts/modales.js"></script>

</html>