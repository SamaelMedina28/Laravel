<x-app-layout>
    <h1 class="bg-green-500 text-3xl text-center text-white py-3">Crear nuevo post</h1>

    @if ($errors->any())
        <div class="w-150 mt-4 mx-auto">
            <h2>Errores: </h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-150 my-10 mt-6 mx-auto">
        <a href="{{ route('posts.index') }}" class="text-sm text-white rounded-2xl px-3 py-1 bg-blue-500">Volver</a>
        {{-- ! Formulario --}}
        <form action="{{ route('posts.store') }}" method="POST" class="mt-5">
            @csrf
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo"
                class="w-full border-2 border-gray-300 p-2 rounded-sm mb-3" value={{old('titulo')}}>

            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug"
                class="w-full border-2 border-gray-300 p-2 rounded-sm mb-3" value={{old('slug')}}>

            <label for="contenido">Contenido</label>
            <textarea name="contenido" id="contenido" class="w-full border-2 border-gray-300 p-2 rounded-lg mb-3">{{old('contenido')}}</textarea>

            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" id="categoria"
                class="w-full border-2 border-gray-300 p-2 rounded-lg mb-3" value={{old('categoria')}}>

            <button type="submit"
                class="w-full bg-green-500 text-white p-3 rounded-lg cursor-pointer hover:bg-green-600">Crear
                post</button>

        </form>
    </div>
</x-app-layout>
