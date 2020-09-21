@extends('layout')

@section('mainContent')

<h2 class="mb-5 mt-5 text-center">Dashboard</h2>

<div class="card-deck">

    <div class="card">
        <div class="card-body text-center">
            <h3 class="card-title">Productos</h3>
            <h1 class="card-text mb-3 font-weight-bold text-primary">3</h1>
            <a type="button" href="{{ url('products') }}" class="btn btn-primary btn-sm">Ir a productos</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body text-center">
            <h3 class="card-title">Sucursales</h3>
            <h1 class="card-text mb-3 font-weight-bold text-primary">4</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body text-center">
            <h3 class="card-title">Usuarios</h3>
            <h1 class="card-text mb-3 font-weight-bold text-primary">3</h1>
            <a type="button" href="{{ url('users') }}" class="btn btn-primary btn-sm">Ir a usuarios</a>
        </div>
    </div>

</div>
@endsection