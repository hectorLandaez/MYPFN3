<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>LOG IN</title>
</head>

<body style="background-color:#fff5d2;" class="flex flex-col items-center">
    <div>
        <img src="../assets/logo.jpg" alt="" style="height: 40vh;">
    </div>
    <div class="rounded-md bg-white p-8 shadow-lg w-96 flex flex-col ">
        <span class="mb-6 font-medium w-full" style="color:#8f8f8f; display: flex;justify-content: center;">
            Bienvenido Ingresa con tu cuenta</span>


        <form action="/LOGIN" method="post">
            <label for="Email" class="sr-only">Email</label>
            <input type="text" name="email" id="Email" placeholder="Email" class="mb-4 h-8 w-full rounded-md border-gray-400 border-solid rounded-md border border-gray-600 focus:outline-none focus:border-blue-500 px-3">

            <label for="Password" class="sr-only">Password</label>
            <input type="password" name="password" id="Password" placeholder="Password" class=" mb-4 h-8 w-full rounded-md border-gray-400 border-solid rounded-md border border-gray-600 focus:outline-none focus:border-blue-500 px-3">

            <div class="w-full" style="display: flex;justify-content: flex-end; align-items: center;">
                <button type="submit" class="w-1/3 bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 transition duration-300 shadow-lg">Ingresar</button>
            </div>
        </form>
    </div>
</body>

</html>
