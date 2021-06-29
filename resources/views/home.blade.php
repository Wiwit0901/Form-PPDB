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
                    You are logged in!
                    <a href="{{ url('/logout') }} ">Logout</a>
                    <br >                 
                    <a href="http://127.0.0.1:3232/students/create.blade.php">Menu Daftar Baru</a>
                    <br>
                     <a href="http://127.0.0.1:3232/students">Menu Pendaftar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
