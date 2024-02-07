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
    <div>
        <div class="text-3xl mb-4">Editar Maestro</div>
    </div>

    <form action="/edit/maestro" method="post">
    <input type="number" value="<?= $maestro["id"] ?>" hidden name="id">

            <div class="mt-4">
                <label for="dni" class="text-xs font-semibold">DNI</label>
                <div class="border-solid border-slate-800 border">
                    <input type="number" id="dni" class="text-sm w-full hover:bg-sky-50 text-slate-500" name="dni" value="">
                </div>
            </div>

            <div class="mt-4">
                <label for="email" class="text-xs font-semibold">Correo Electrónico</label>
                <div class="border-solid text-sm border-slate-800 border">
                    <input type="text" id="email" class="w-full hover:bg-sky-50 text-slate-500" name='email' value="<?=$maestro['email']?>">
                </div>
            </div>

            <div class="mt-4">
                <label for="name" class="text-xs font-semibold">Nombre (s) y Apellido (s)</label>
                <div class="border-solid border-slate-800 border">
                <input type="text" id="name" class="border-slate-800 w-full hover:bg-sky-50 text-slate-500" name='name' value='<?=$maestro['name']?>'>
                </div>
            </div>

            <div class="mt-4">
                <label for="Direccion" class="text-xs font-semibold">Dirección</label>
                <div class="border-solid border-slate-800 border">
                    <input type="text" id="Direccion" class="border-slate-800 w-full hover:bg-sky-50 text-slate-500" name='Direccion' value="<?=$maestro['direccion']?>">
                </div>
            </div>

            <div class="mt-4">
                <label for="fechas" class="text-xs font-semibold">Fechas</label>
                <div class="border-solid border-slate-800 border">
                    <input type="date" id="fechas" class="border-slate-800 w-full hover:bg-sky-50 text-slate-500" name='fechas' value="<?=$maestro['FN']?>">
                </div>
            </div>

            <div class="mt-4 flex justify-end gap-4">
                <a href="/CRUD_MAESTROS" class="bg-blue-500 text-white p-2 rounded text-xs hover:bg-blue-700">Cerrar</a>
                <button class="bg-gray-500 text-white p-2 rounded text-xs hover:bg-gray-700" type="submit" style="background-color:#6B7280;">Actualizar</button>
            </div>

</body>
</html>