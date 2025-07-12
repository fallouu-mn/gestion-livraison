@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Bienvenue sur Postalven
                </div>
                <div class="card-body">
                    <p class="card-text">Ce site utilise Laravel et Bootstrap pour un design moderne et responsive.</p>
                    <a href="{{ route('tracking') }}" class="btn btn-success">Suivre un colis</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/delivery.jpg') }}" class="img-fluid rounded" alt="Image de colis">
        </div>
    </div>
@endsection