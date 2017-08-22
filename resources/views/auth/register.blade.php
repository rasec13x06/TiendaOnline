@extends('store.template')

@section('content')
	<div class="container text-center">
        <div class="page-header">
            <h2><i class="fa fa-user"></i>  Iniciar Sesion</h2>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page">

                @include('store.partials.errors')

                	<form method="POST" action="/auth/register">
    					{!! csrf_field() !!}

    					<div class="form-group">
       						<label for="name">Nombres</label>
       						 <input placeholder="Ingresa nombres" class="form-control" type="text" name="name" value="{{ old('name') }}">
    					</div>

    					<div class="form-group">
       						<label for="lastname">Apellidos</label>
       						 <input placeholder="Ingresa apelidos" class="form-control" type="text" name="lastname" value="{{ old('lastname') }}">
    					</div>

					    <div class="form-group">
					        <label for="email">Email</label>
					        <input placeholder="Ingresa Correo Electronico" class="form-control" type="email" name="email" value="{{ old('email') }}">
					    </div>

					    <div class="form-group">
					        <label for="address">Direccion</label>
					        <input placeholder="Ingresa Direccion de habitacion" class="form-control" type="text" name="address" value="{{ old('address') }}">
					    </div>

					    <div class="form-group">
					        <label for="user">Usuario</label>
					        <input placeholder="Ingresa Usuario" class="form-control" type="text" name="user" value="{{ old('user') }}">
					    </div>

					    <div class="form-group">
					        <label for="password">Password</label>
					        <input placeholder="Ingresa Contraseña" class="form-control" type="password" name="password">
					    </div>

					    <div class="form-group">
					        <label for="password_confirmation">Confirm Password</label>
					        <input placeholder="Ingresa de nuevo Contraseña" class="form-control" type="password" name="password_confirmation">
					    </div>

					    <div class="form-group">
					        <button class="btn btn-success btn-block" type="submit">Register</button>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop