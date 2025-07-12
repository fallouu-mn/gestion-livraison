@extends('layouts.app')

@section('title', 'Bienvenue chez Postalven')

@section('content')
    <div class="text-center">
        <h1 style="color: rgb(168, 83, 3);">Postalven</h1>
        <img src="{{ asset('images/delivery.jpg') }}" alt="Image de colis" width="300" class="img-fluid">
        <p>Bienvenue chez Postalven, le leader des colis en France.</p>

        @if ($nbParcels > 0)
            <p>Il y a actuellement <strong>{{ $nbParcels }}</strong> colis en traitement.</p>
        @else 
            <p>Aucun colis en traitement.</p>
        @endif

        <a href="{{ route('register') }}" class="btn btn-primary">Enregistrer un nouveau colis</a>
        <a href="{{ route('tracking') }}" class="btn btn-success">Suivre un colis</a>
    </div>
@endsection      