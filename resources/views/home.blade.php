@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Successful</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{ __('You are logged in!') }}<br>
                    <br>
                    Hai {{ Auth::user()->name }}!<br>
                    Welcome to our ordering website!<br>
                    Please enjoy your ordering process!
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
