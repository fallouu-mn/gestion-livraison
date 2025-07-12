@extends('layouts.app')

@section('title', 'Suivi de colis')

@section('content')
    <div class="container">

        <h1 class="text-center">Suivi d'un colis</h1>
        <form action="{{ route('tracking') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <input type="text" name="tracking_number" class="form-control" placeholder="Numéro de suivi">
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>

        @if(session('message'))
            <div class="alert alert-danger mt-3">
                <p>{{ session('message') }}</p>
            </div>
        @endif

        @if (isset($parcel))
            <div class="alert alert-success mt-3">
                <p><strong>Colis trouvé !</strong> Poids : {{ $parcel->weigh }} kg</p>
                <p><strong>État du colis :</strong> {{ $parcel->statuts }}</p>
            </div>
        @endif

        <a href="{{ route('welcome') }}" class="btn btn-secondary mt-3">Retour</a>
    </div>
@endsection