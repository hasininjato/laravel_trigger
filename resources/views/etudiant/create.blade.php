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
    <h1>Créer un nouvel étudiant</h1>
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <br>
                    {{-- Formulaire --}}
                    {!! Form::open(['route' => 'etudiants.store', 'class' => 'needs-validation', 'novalidate' => 'novalidate']) !!}
                    {!! csrf_field() !!}
                    <div class="row mb-3">
                        {!! Form::label('id_registration', 'Matricule', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::number('id_registration', null, [
                                'class' => $errors->has('id_registration') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('id_registration', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('id_registration'))
                                <div class="invalid-feedback">
                                    Choisissez un numéro de matricule valide
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('lastname', 'Nom', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::text('lastname', null, [
                                'class' => $errors->has('lastname') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('lastname', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('lastname'))
                                <div class="invalid-feedback">
                                    Choisissez un nom pour l'étudiant
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('firstname', 'Prénom(s)', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::text('firstname', null, [
                                'class' => $errors->has('firstname') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('firstname', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('firstname'))
                                <div class="invalid-feedback">
                                    Choisissez un prénom pour l'étudiant
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('birthday', 'Date de naissance', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::date('birthday', null, [
                                'class' => $errors->has('birthday') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('birthday', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('birthday'))
                                <div class="invalid-feedback">
                                    Choisissez une date de naissance
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('place_birth', 'Lieu de naissance', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::text('place_birth', null, [
                                'class' => $errors->has('place_birth') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('place_birth', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('place_birth'))
                                <div class="invalid-feedback">
                                    Choisissez un lieu de naissance
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('sex', 'Sexe', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::select('sex', $sex, null, [
                                'class' => $errors->has('sex') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('sex', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('sex'))
                                <div class="invalid-feedback">
                                    Choisissez le sexe
                                </div>
                            @endif
                        </div>
                    </div>
                    <br>

                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-lg btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endsection
