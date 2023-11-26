<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PFN3/views/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>MODAL</title>
</head>

<body style="">
    <div>
        <div class="text-3xl mb-4">Agregar Maestro</div>
    </div>

    
    <span class="text-xs font-semibold	">Dni</span>
    <div style="border-color:grey;border-style: solid;border-width: 1px;">
    <input type="number" class="border-solid text-sm border-slate-800 w-full hover:bg-sky-50 text-slate-500"></div>

    <span class="text-xs font-semibold	mt-4"> Correo Electronico</span>
    <div style="border-color:grey;border-style: solid;border-width: 1px;">
    <input type="email" class="border-solid	text-sm border-slate-800 w-full hover:bg-sky-50 text-slate-500"></div>

    <span class="text-xs font-semibold	mt-4">Nombre (s)</span>
    <div style="border-color:grey;border-style: solid;border-width: 1px;">
    <input type="text" class="border-solid	border-slate-800 w-full hover:bg-sky-50 text-slate-500"></div>

    <span class="text-xs font-semibold	mt-4">Apellido (s)</span>
    <div style="border-color:grey;border-style: solid;border-width: 1px;">
    <input type="text" class="border-solid	border-slate-800 w-full hover:bg-sky-50 text-slate-500"></div>

    <span class="text-xs font-semibold	mt-4">Direccion</span>
    <div style="border-color:grey;border-style: solid;border-width: 1px;">
    <input type="text" class="border-solid	border-slate-800 w-full hover:bg-sky-50 text-slate-500"></div>

    <span class="text-xs font-semibold	mt-4"> Fechas </span>
    <div style="border-color:grey;border-style: solid;border-width: 1px;">
    <input type="date" class="border-solid	border-slate-800 w-full hover:bg-sky-50 text-slate-500"></div>

    <div class="mt-4 w-full" style=" display: flex;justify-content: flex-end;flex-wrap: wrap;gap: 8px;">
        <button class="bg-blue-500 text-white p-2 rounded text-xs hover:bg-blue-700"  onclick="closeModal()">Close</button>
        <button class="bg-gray-500 text-white p-2 rounded text-xs hover:bg-gray-700">Crear</button>
    </div>
</body>
</html>