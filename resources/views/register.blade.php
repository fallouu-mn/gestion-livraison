@extends('layouts.app')

@section('title', 'Enregistrer un colis')

@section('content')
    <div class="container mt-5">
        <!-- Titre de la page -->
        <h1 class="text-center mb-1">Enregistrer un colis</h1>
        
        <!-- Formulaire d'enregistrement du colis -->
        <form action="{{ route('register') }}" method="POST" class="shadow-lg p-4 rounded bg-light">
            @csrf

            <!-- Champ pour l'adresse de départ -->
            <div class="mb-3">
                <label for="address_dep" class="form-label">Adresse de départ</label>
                <input type="text" name="address_dep" class="form-control" placeholder="1 rue des papillons" required>
            </div>

            <!-- Champ pour l'adresse d'arrivée -->
            <div class="mb-3">
                <label for="address_arr" class="form-label">Adresse d'arrivée</label>
                <input type="text" name="address_arr" class="form-control" placeholder="22 rue des papillons" required>
            </div>
            
            <!-- Champ pour le poids du colis -->
            <div class="mb-3">
                <label for="weigh" class="form-label">Poids du colis (en gramme)</label>
                <input type="number" name="weigh" class="form-control" placeholder="20" required>
            </div>

            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit" class="btn btn-success w-100">Envoyer</button>
        </form>

        <!-- Message d'information si disponible -->
        @if (isset($message))
            <div class="alert alert-info mt-3">{{ $message }}</div>
        @endif

        <!-- Bouton de retour -->
        <a href="{{ route('welcome') }}" class="btn btn-secondary mt-3 d-block mx-auto">Retour</a>
    </div>
@endsection