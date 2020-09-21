@extends('layoutNoMenu')

@section('mainContent')

    <form>
        <h2 class="mb-5 mt-5 text-center">Inicio de sesión</h2>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
        </div>
        <a type="button" href="{{ url('dashboard') }}" class="btn btn-primary btn-lg btn-block">Submit</a>
        <a type="button" href="{{ url('register') }}" class="btn btn-link btn-lg btn-block text-danger">Register</a>
    </form>

@endsection