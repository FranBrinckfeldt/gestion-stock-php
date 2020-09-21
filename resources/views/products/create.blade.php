@extends('layout')

@section('mainContent')

<h2 class="mb-5 mt-5 text-center">Nuevo Producto</h2>

<form>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="id">ID</label>
            <input type="number" class="form-control" id="id">
        </div>
        <div class="form-group col-md-3">
            <label for="code">Código</label>
            <input type="text" class="form-control" id="code">
        </div>
        <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name">
        </div>
    </div>

    <div class="form-group">
        <label for="category">Categoría</label>
        <select id="category" class="form-control">
            <option selected>Choose...</option>
            <option>Galletas</option>
            <option>Chocolate</option>
            <option>Cereal</option>
        </select>
    </div>

    <div class="form-group">
        <label for="subsidiary">Sucursal</label>
        <select multiple class="form-control" id="subsidiary">
            <option>Pudahuel</option>
            <option>Providencia</option>
            <option>Santiago Centro</option>
            <option>Maipú</option>
            <option>Las Condes</option>
        </select>
    </div>

    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" id="cantidad">
        </div>
        <div class="form-group col-md-6">
            <label for="name">Precio</label>
            <input type="number" class="form-control" id="price">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Registrar Producto</button>
</form>

@endsection