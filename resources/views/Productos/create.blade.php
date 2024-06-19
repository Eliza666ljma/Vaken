@extends('layouts.app')
@section('titulo', 'Crear producto')
@section('cabecera', 'crear producto')
@section('contenido')
    <div class="flex justify-center my-6"> 
        <div class="w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                <form action="{{ route('productos.store') }}" method="POST">
                    @csrf
                    <div> 
                        <label for="nombre" class="label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="input input-bordered" placeholder="Nombre del producto" required/>
                    </div>
                    <div>
                        <label for="descripción" class="label">Descripción</label>
                        <input type="text" name="descripción" id="descripción" class="textarea textarea-bordered" placeholder="Descripción del producto"/>
                    </div>
                    <div>
                        <label for="precio" class="label">Precio</label>
                        <input type="number" name="precio" id="precio" class="input input-bordered" placeholder="Precio del producto" required/>
                    </div>
                    <div>
                        <label for="talla" class="label">Talla</label>
                        <input type="number" name="talla" id="talla" class="input input-bordered" placeholder="Talla del producto"/>
                    </div>
                    <div>
                        <label for="stock" class="label">Stock</label>
                        <input type="number" name="stock" id="stock" class="input input-bordered" placeholder="Stock del producto" required/>
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Crear producto</button> 
                        <a href="{{ route('productos.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection