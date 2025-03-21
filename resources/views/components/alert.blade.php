@props(['type'=>'info',])
@php
    switch($type){
        case 'info':
            $color = 'blue';
            break;
        case 'danger':
            $color = 'red';
            break;
        case 'success':
            $color = 'green';
            break;
        case 'warning':
            $color = 'orange';
            break;
        case 'dark':
            $color = 'gray';
            break;
        default:
            $color = 'blue';
            break;
    }
@endphp

<div class="bg-{{$color}}-100 border-l-4 border-{{$color}}-500 text-{{$color}}-700 p-4" role="alert">
    <p  {{$attributes->merge(['class'=>'text-xl'])}}> {{ $title ?? "Info alert" }} </p>
    {{-- El operador ?? (nullish coalescing operator) toma el valor de la izquierda en caso de que no sea nulo, caso contrario toma el de la derecha --}}
    <p>
        {{ $slot }}
    </p>
</div>