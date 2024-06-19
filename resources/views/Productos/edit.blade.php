@extends('layouts.app')
@section('titulo', 'Editar producto')
@section('cabecera', 'editar producto')
@section('contenido')
    <div class="flex justify-center my-6"> 
        <div class="w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div> 
                        <label for="nombre" class="label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value={{ $producto->nombre }} class="input input-bordered" placeholder="Nombre del producto" required/>
                    </div>
                    <div>
                        <label for="descripción" class="label">Descripción</label>
                        <input type="text" name="descripción" id="descripción" value={{ $producto->descripción }} class="textarea textarea-bordered" placeholder="Descripción del producto"/>
                    </div>
                    <div>
                        <label for="precio" class="label">Precio</label>
                        <input type="number" name="precio" id="precio" value={{ $producto->precio }} class="input input-bordered" placeholder="Precio del producto" required/>
                    </div>
                    <div>
                        <label for="talla" class="label">Talla</label>
                        <input type="number" name="talla" id="talla" value={{ $producto->talla }}  class="input input-bordered" placeholder="Talla del producto"/>
                    </div>
                    <div>
                        <label for="stock" class="label">Stock</label>
                        <input type="number" name="stock" id="stock" value={{ $producto->stock }}  class="input input-bordered" placeholder="Stock del producto" required/>
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Actualizar producto</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a> 
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection