{{--@extends('layouts.app')

@section('content')

@auth
    Bienvenido al sistema {{ auth()->user()->name}}
@endauth    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Módulo de post</h5>
                          <p class="card-text">Crear publicaciones</p>
                          <a href="#" class="btn btn-primary">Ir al módulo</a>
                        </div>
                      </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Módulo de Categorías</h5>
                          <p class="card-text">Crear publicaciones</p>
                          <a href="#" class="btn btn-primary">Ir al módulo</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
@endsection
@if (session('status'))
    {{ session('status') }}
@endif
