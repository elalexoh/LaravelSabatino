@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if(session()->has('success'))
                    <div class="alert alert-primary" role="alert">
                        {{session('success')}}
                    </div>
                @elseif(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                @endif
                    <form action ="{{route('save')}}" method="POST">
                        <div class="form-group">
                            <label for="user">Usuario</label>
                            <input name="name" type="text" class="form-control" id="user" placeholder="Usuario">
                            @if($errors->has('name'))
                                <span style="color:red;">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefono">
                            @if($errors->has('phone'))
                                <span style="color:red;">{{$errors->first('phone')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="adress">Dirección</label>
                            <textarea class="form-control" id="adress" name="adress" rows="3"></textarea>
                            @if($errors->has('adress'))
                                <span style="color:red;">{{$errors->first('adress')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@ejemplo.com">
                            @if($errors->has('email'))
                                <span style="color:red;">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="fnac">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fnac" name="fnac" placeholder="mm/dd/aa">
                            @if($errors->has('fnac'))
                                <span style="color:red;">{{$errors->first('fnac')}}</span>
                            @endif
                        </div>
                        @csrf
                        <a href="{{url('home')}}" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
