<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Tareas</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <nav class="font-sans bg-gray-50 flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow-lg sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0">
            <a href="#" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Bienvenido</a>
        </div>
        <div class="px-10">
            <a href="#" class="p-2 hover:bg-gray-600 hover:text-white rounded-md mx-2 text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Tareas</a>
            <a href="#" class="p-2 hover:bg-gray-600 hover:text-white rounded-md mx-2 text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Categorias</a>
        </div>
    </nav>

    @yield('contenido')

</body>

</html>