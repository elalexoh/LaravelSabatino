@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <form action ="" method="">
                        <div class="form-group">
                            <label for="user">Usuario</label>
                            <input name="user" type="text" class="form-control" id="user" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono</label>
                            <input type="text" class="form-control" id="phone" placeholder="Telefono">
                        </div>
                        <div class="form-group">
                            <label for="adress">Dirección</label>
                            <textarea class="form-control" id="adress" name="adress" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control" id="email" placeholder="name@ejemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="fnac">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fnac" placeholder="mm/dd/aa">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
