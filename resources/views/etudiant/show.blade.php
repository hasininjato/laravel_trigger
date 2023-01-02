@extends('_partials.layout')

@section('title')
    Information d'un étudiant
@endsection

@section('style')
    .center {
    display: inline-block;
    padding: 50px;
    }

    label {
    float: left;
    }

    div.form-group {
    display: block;
    overflow: hidden;
    padding: 0px 4px 0px 6px;
    }

    input {
    width: 70%;
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
        <h1>Information d'un étudiant</h1>
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-body align-items-center">
                    <br>
                    <p>Matricule: {!! $etudiant['id_registration'] !!}</p>
                    <p>Nom: {!! $etudiant['lastname'] !!}</p>
                    <p>Prénom(s): {!! $etudiant['firstname'] !!}</p>
                    <p>Sexe: {!! $etudiant['sex'] !!}</p>
                    <p>Date de naissance: {!! utf8_encode(\Carbon\Carbon::parse($etudiant['birthday'])->formatLocalized('%d %B %Y')) !!}</p>
                    <p>Lieu de naissance: {!! $etudiant['place_birth'] !!}</p>
                    <br>
                    <a href="{{ route('etudiants.index') }}">Retour à la liste des étudiants</a>
                </div>
            </div>
        </div>
    </div>
@endsection
