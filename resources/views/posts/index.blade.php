<x-app-layout>


    <h1 class="bg-blue-600 text-3xl text-center text-white py-3">POST</h1>
    <ul class="w-150 my-10 mx-auto list-disc"> 
    <a href="{{route('posts.create')}}" class="text-sm font-medium text-white rounded-2xl px-3 py-1 bg-green-500 hover:shadow-md active:bg-green-600">Crear post</a>
        @foreach ($posts as $post)
            <li class=" my-3">
                <a href="{{route('posts.show',[$post])}}" class="underline hover:font-medium"> 
                    {{-- TODO Si solo le pasamos el parametro, laravel indica que lo que queremos obetener es el id del parametro que le mandamos --}}
                    {{$post->titulo}}
                </a>
            </li>
        @endforeach

    {{$posts->links()}}
    </ul>

</x-app-layout>