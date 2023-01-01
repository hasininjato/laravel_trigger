@extends('_partials.layout')

@section('title')
    Gestion des notes - Liste des étudiants
@endsection

@section('style')
    button{
    margin: 0px 10px;
    }
@endsection

@section('header')
    @include('_partials.header')
@endsection

@section('sidebar')
    @include('_partials.sidebar')
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                Liste des étudiants
                <a href="{{ route('etudiants.create') }}">
                    <button class="btn btn-primary" style="float: right">Créer un nouvel étudiant</button>
                </a>
            </h3>
        </div>
    </div>
@endsection
