<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Panel de Control (Dashboard)</h1>
        <p>Bienvenido, {{ Auth::user()->name }}!</p>
    </div>
@endsection
