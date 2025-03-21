<x-app-layout>
    
    {{-- @if ($categoria)
        <h1 style="text-align: center; color:rgb(118, 164, 248); font-family: sans-serif">De la categoria: {{$categoria}}</h1>
    @endif --}}
    
    <div class="w-150 my-10 mx-auto">
        <a class="text-sm text-white rounded-2xl px-3 py-1 bg-cyan-500" href="{{route('posts.index')}}">Volver</a>
        <br>
        <p class="m-3 text-xl font-bold">{{$posts->titulo}}</p>
        Contenido:
        <p class="m-3 ">{{$posts->contenido}}</p>
        Categoria: 
        <p class="m-3 ">{{$posts->categoria}}</p>
    <a href="{{route('posts.edit',$posts)}}" class="text-sm text-white rounded-2xl px-3 py-1 bg-blue-500">Editar</a>
    <form action="{{route('posts.destroy', $posts)}}" method="POST" class="text-sm text-white rounded-2xl px-3 py-1 bg-red-500 inline cursor-pointer" >
        @csrf
        @method('DELETE')
        <button class="cursor-pointer">
            Borrar
        </button>
    </form>

    
</x-app-layout>
