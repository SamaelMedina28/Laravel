@extends('layouts.app') {{-- El lugar donde quiero poner mis componentes --}}

{{-- ! La diferencia entre PUSH y YIELD es que si escribimos dos veces el mismo yield, se sobreescribira, pero si escribimos dos push, se sumaran  --}}

{{-- la seccion que le incrustaremos en donde diga content --}}
@section('content')

    <div class="max-w-4xl mx-auto px-4 ">
        <h1 class="text-center text-blue-400 font-bold text-3xl my-5">Pagina principal de la aplicacion</h1>

        <x-alert type="dark" class="font-bold">
            Contenido variable de la alerta
            <x-slot name="title">
                Titulo variable
            </x-slot>
            <br>

        </x-alert>
        <br>
    </div>

@endsection
 
{{-- la seccion que le incrustaremos en donde diga titulo --}}
@section('titulo')
    Laravel 12 | Home 
@endsection

{{-- la seccion que le incrustaremos en donde diga taildwindcss --}}
@push('taildwindcss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css">
@endpush