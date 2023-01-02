@extends('_partials.layout')

@section('title')
    Gestion des notes - Liste des étudiants
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/dataTables.bootstrap.min.css') }}">

    <style>

    </style>
@endsection

@section('header')
    @include('_partials.header')
@endsection

@section('sidebar')
    @include('_partials.sidebar')
@endsection

@section('content')
    <div class="container">
        <h3 class="">
            Liste des étudiants
            <a href="{{ route('etudiants.create') }}">
                <button class="btn btn-primary" style="float: right">Créer un nouvel étudiant</button>
            </a>
        </h3>
        <br>
        <div class="">
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom(s)</th>
                        <th>Sexe</th>
                        <th>Date de naissance</th>
                        <th>Lieu de naissance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

<script src="{{ asset('vendor/jquery.js') }}"></script>
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.js') }}"></script>
<script type="text/javascript">
    $(function() {
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('ajax-etudiants') }}",
            columns: [{
                    data: 'id_registration',
                    name: 'id_registration'
                },
                {
                    data: 'lastname',
                    name: 'lastname'
                },
                {
                    data: 'firstname',
                    name: 'firstname'
                },
                {
                    data: 'sex',
                    name: 'sex'
                },
                {
                    data: 'birthday',
                    name: 'birthday'
                },
                {
                    data: 'place_birth',
                    name: 'place_birth'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
    });

    window.onresize = displayWindowSize;
    window.onload = displayWindowSize;

    function displayWindowSize() {
        // your size calculation code here
        $("#DataTables_Table_0").width('100%');
    };
</script>
