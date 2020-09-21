@extends('layoutNoMenu')

@section('mainContent')

    <form>
        <h2 class="mb-5 mt-5 text-center">Registro</h2>
        
        <div class="mb-5">
            <div class="form-group">
                <label for="firstname">Nombre</label>
                <input type="text" name="firstname" class="form-control" placeholder="Nombre">
            </div>

            <div class="form-group">
                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" class="form-control" placeholder="Apellidos">    
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Contraseña">
            </div>
        </div>
        
        <a type="button" href="{{ url('login') }}" class="btn btn-primary btn-lg btn-block">Submit</a>
    </form>

@endsection