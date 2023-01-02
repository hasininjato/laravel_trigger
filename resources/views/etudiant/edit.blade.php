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
    <h1>Modifier un étudiant</h1>
    <div class="container">
        <div class="card-deck mb-3">
            <div class="card mb-4 box-shadow">
                {{-- Formulaire --}}
                {!! Form::open([
                    'route' => ['etudiants.update', $etudiant->id],
                    'class' => 'needs-validation',
                    'novalidate' => 'novalidate',
                ]) !!}
                @csrf
                @method('PUT')
                <div class="card-body">
                    <br>
                    <div class="row mb-3">
                        {!! Form::label('id_registration', 'Matricule', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::number('id_registration', $etudiant->id_registration, [
                                'class' => $errors->has('id_registration') ? 'form-control is-invalid' : 'form-control',
                                'readonly' => 'readonly',
                            ]) !!}
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('lastname', 'Nom', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::text('lastname', $etudiant->lastname, [
                                'class' => $errors->has('lastname') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('lastname', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('lastname'))
                                <div class="invalid-feedback">
                                    Le champ nom est obligatoire
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('firstname', 'Prénom(s)', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::text('firstname', $etudiant->firstname, [
                                'class' => $errors->has('firstname') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('firstname', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('firstname'))
                                <div class="invalid-feedback">
                                    Le champ prénom est obligatoire
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('birthday', 'Date de naissance', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::date('birthday', $etudiant->birthday, [
                                'class' => $errors->has('birthday') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('birthday', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('birthday'))
                                <div class="invalid-feedback">
                                    Le champ date de naissance est obligatoire
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('place_birth', 'Lieu de naissance', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::text('place_birth', $etudiant->place_birth, [
                                'class' => $errors->has('place_birth') ? 'form-control is-invalid' : 'form-control',
                                'required',
                            ]) !!}
                            {!! $errors->first('place_birth', '<small class="help-block text-danger">:message</small>') !!}
                            @if (!$errors->has('place_birth'))
                                <div class="invalid-feedback">
                                    Le champ lieu de naissance est obligatoire
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        {!! Form::label('sex', 'Sexe', ['class' => 'col-sm-2 form-label']) !!}
                        <div class="col-sm-10 has-validation form-group">
                            {!! Form::text('sex', $etudiant->sex, [
                                'class' => $errors->has('sex') ? 'form-control is-invalid' : 'form-control',
                                'readonly' => 'readonly',
                                'value' => $etudiant->sex,
                            ]) !!}
                            {!! $errors->first('sex', '<small class="help-block text-danger">:message</small>') !!}
                        </div>
                    </div>
                    <br>
                </div>
                <div class="card-footer text-center">
                    {!! Form::submit('Modifier', ['class' => 'btn btn-lg btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    @endsection
