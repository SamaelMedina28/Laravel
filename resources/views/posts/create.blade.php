<x-app-layout>
    <h1 class="bg-cyan-500 text-3xl text-center text-white py-3">Crear nuevo post</h1>
    <div class="w-150 my-10 mx-auto">
        <a href="{{route('posts.index')}}" class="text-sm text-white rounded-2xl px-3 py-1 bg-cyan-500">Volver</a>
{{-- ! Formulario --}}
        <form action="{{route('posts.store')}}" method="POST" class="mt-5">
            @csrf
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="w-full border-2 border-gray-300 p-2 rounded-sm mb-3">

            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="w-full border-2 border-gray-300 p-2 rounded-sm mb-3">
            
            <label for="contenido">Contenido</label>
            <textarea name="contenido" id="contenido" class="w-full border-2 border-gray-300 p-2 rounded-lg mb-3"></textarea>

            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" id="categoria" class="w-full border-2 border-gray-300 p-2 rounded-lg mb-3">

            <button type="submit" class="w-full bg-cyan-500 text-white p-3 rounded-lg cursor-pointer hover:bg-cyan-600">Crear post</button>

        </form>
    </div>
</x-app-layout>