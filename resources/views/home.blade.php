@extends('layouts.app')

@section('content')
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

                    <!--{{ __('You are logged in!') }}-->
                    ¡Estás logeado {{ Auth::user()->name  }}!</br>
                    Tu email es: {{ Auth::user()->email }}</br>
                    Tu password es: {{ Auth::user()->password }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
