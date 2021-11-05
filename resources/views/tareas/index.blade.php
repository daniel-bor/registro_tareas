@extends('app')

@section('contenido')
<div class="container mx-auto rounded-md shadow-md p-16 w-1/3 my-4">
    <form class="flex flex-col justify-center">
        <div class="flex flex-col my-4">
            <label for="nombre" class="text-xl font-bold">Tarea:</label>
            <input id="nombre" type="text" placeholder="Ingrese algo que desee recordar" class="px-4 py-2 shadow-lg">
        </div>
        <div>
        </div>
        <button type="submit" class="py-2 px-8 rounded-md bg-blue-100 hover:bg-blue-300 hover:shadow-lg">Crear nueva tarea</button>
    </form>
</div>
@endsection