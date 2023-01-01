@extends('_partials.layout')

@section('title')
    Créer un nouvel étudiant
@endsection

@section('header')
    @include('_partials.header')
@endsection

@section('sidebar')
    @include('_partials.sidebar')
@endsection

@section('content')
    <h1>Créer un nouvel étudiant</h1>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
            </div>
            <div class="card-body">
                {{-- Formulaire --}}
                {!! Form::open(['route' => 'etudiants.store', 'class' => 'row g-3 needs-validation', 'novalidate' => 'novalidate']) !!}
                    <div class="row mb-3 form-group">
                        {!! Form::label('id_registration', 'Numéro matricule', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation">
                            {!! Form::number('id_registration', null, ['class' => 'form-control', 'required']) !!}
                            <div class="invalid-feedback">
                                Choisissez un numéro de matricule
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 form-group">
                        {!! Form::label('lastname', 'Nom', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation">
                            {!! Form::text('lastname', null, ['class' => 'form-control', 'required']) !!}
                            <div class="invalid-feedback">
                                Choisissez un nom pour l'étudiant
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 form-group">
                        {!! Form::label('firstname', 'Prénom(s)', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation">
                            {!! Form::text('firstname', null, ['class' => 'form-control', 'required']) !!}
                            <div class="invalid-feedback">
                                Choisissez un prénom pour l'étudiant
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 form-group">
                        {!! Form::label('birthday', 'Date de naissance', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation">
                            {!! Form::date('birthday', null, ['class' => 'form-control', 'required']) !!}
                            <div class="invalid-feedback">
                                Choisissez une date de naissance
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 form-group">
                        {!! Form::label('place_birth', 'Lieu de naissance', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation">
                            {!! Form::text('place_birth', null, ['class' => 'form-control', 'required']) !!}
                            <div class="invalid-feedback">
                                Choisissez un lieu de naissance
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 form-group">
                        {!! Form::label('sex', 'Sexe', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation">
                            {!! Form::select('sex', $sex, null, ['class' => 'form-control', 'required']) !!}
                            <div class="invalid-feedback">
                                Choisissez le sexe
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-center']) !!}  
                        </div>
                    </div>
                {!! Form::close() !!} 
            </div>
        </div>

    </div>
@endsection
