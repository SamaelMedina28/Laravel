<x-app-layout>
    <h1 class="bg-blue-500 text-3xl text-center text-white py-3">Editar post</h1>
    <div class="w-150 my-10 mx-auto">
        <a href="{{route('posts.index')}}" class="text-sm text-white rounded-2xl px-3 py-1 bg-blue-500">Volver</a>
{{-- ? Formulario --}}
        <form action="{{route('posts.update',$posts)}}" method="POST" class="mt-5">
            @csrf
            @method('PUT')
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="w-full border-2 border-gray-300 p-2 rounded-sm mb-3" value="{{$posts->titulo}}">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="w-full border-2 border-gray-300 p-2 rounded-sm mb-3" value="{{$posts->slug}}">

            <label for="contenido">Contenido</label>
            <textarea name="contenido" id="contenido" class="w-full border-2 border-gray-300 p-2 rounded-lg mb-3" >{{$posts->contenido}}</textarea>

            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" id="categoria" class="w-full border-2 border-gray-300 p-2 rounded-lg mb-3" value="{{$posts->categoria}}">

            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg cursor-pointer hover:bg-blue-600">Editar post</button>

        </form>
    </div>
</x-app-layout>