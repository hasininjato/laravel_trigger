@extends('_partials.layout')

@section('title')
    Gestion des notes - Liste des étudiants
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/dataTables.bootstrap.min.css') }}">

    <style>
        table.dataTable tr.odd {
            background-color: #e7e9ee;
        }

        table.dataTable tr.even {
            background-color: white;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: none;
            background-color: #fff;
            color: white !important;
            border-color: white;
            /*change the hover text color*/
        }

        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom(s)</th>
                        <th>Sexe</th>
                    </tr>
                </tfoot>
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
        // Setup - add a text input to each footer cell
        $('.yajra-datatable tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="' + title + '" />');
        });

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('ajax-etudiants') }}",
            language: {
                "lengthMenu": "Afficher _MENU_ résultats par page",
                "zeroRecords": "Aucun résultat",
                "info": "Page _PAGE_ sur _PAGES_",
                "infoEmpty": "Aucun enregistrement disponible",
                "infoFiltered": "(filtered from _MAX_ total records)"
            },
            initComplete: function() {
                // Apply the search
                this.api()
                    .columns()
                    .every(function() {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function() {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
            },
            columns: [{
                    data: 'id_registration',
                    name: 'id_registration',
                    "width": "3%",
                },
                {
                    data: 'lastname',
                    name: 'lastname',
                    "width": "35%",
                },
                {
                    data: 'firstname',
                    name: 'firstname',
                    "width": "35%",
                },
                {
                    data: 'sex',
                    name: 'sex',
                    "width": "7%",
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    "width": "20%",
                },
            ],
        });
    });

    window.onresize = displayWindowSize;
    window.onload = displayWindowSize;

    function displayWindowSize() {
        // your size calculation code here
        $("#DataTables_Table_0").width('100%');
    };
</script>
