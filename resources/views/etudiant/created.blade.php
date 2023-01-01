@extends('_partials.layout')

@section('title')
    Créer un nouvel étudiant
@endsection

@section('style')
    .center {
    display: inline-block;
    padding: 50px;
    }
@endsection

@section('header')
    @include('_partials.header')
@endsection

@section('sidebar')
    @include('_partials.sidebar')
@endsection

@section('content')
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    Nouvel étudiant créé avec succès
                </div>
                <div class="card-body align-items-center">
                    <br>
                    <p>Matricule: {!! $etudiant['id_registration'] !!}</p>
                    <p>Nom: {!! $etudiant['lastname'] !!}</p>
                    <p>Prénom(s): {!! $etudiant['firstname'] !!}</p>
                    <p>Sexe: {!! $etudiant['sex'] !!}</p>
                    <p>Date de naissance: {!! utf8_encode(\Carbon\Carbon::parse($etudiant['birthday'])->formatLocalized('%d %B %Y')) !!}</p>
                    <p>Lieu de naissance: {!! $etudiant['place_birth'] !!}</p>
                    <br>
                    <a href="{{ route('etudiants.index') }}">Retour à la lliste des étudiants</a>
                </div>
            </div>
        </div>
    @endsection
