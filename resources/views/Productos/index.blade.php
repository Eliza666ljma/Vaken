@extends('layouts.app')
@section('titulo', 'Consultar productos')
@section('contenido')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($productos as $producto)
            <div class="card w-96 bg-base-100 shadow-xl"> 
                <figure><img src="https://source.unsplash.com/random/800*600/?technology&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $producto->nombre }}
                        <div class="badge badge-secondary">${{$producto->precio}}</div>
                    </h2>
                    <p>Descripción:{{$producto->descripción}}</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Talla:{{$producto->talla}}</div>
                        <a href="{{ route('productos.edit', $producto->id)}}" class="btn btn-s btn-secondary">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id)}}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-s btn-error">Eliminar</button>               
                        </form>
                    </div>
                </div>
            </div>            
        @endforeach
    </div>
@endsection