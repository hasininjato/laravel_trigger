<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRquest;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class EtudiantController extends Controller
{
    public function getEtudiants(Request $request)
    {
        $data = Etudiant::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $update_route = route('etudiants.update', $row['id']);
                $delete_route = route('etudiants.destroy', $row['id']);
                $actionBtn = '<a href="' . $update_route . '" class="edit btn btn-success btn-sm">Modifier</a> <a href="' . $delete_route . '" class="delete btn btn-danger btn-sm">Supprimer</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('etudiant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = "active";
        $sex = [
            '' => '-- Choisissez le sexe --',
            'Féminin' => 'Féminin',
            'Masculin' => 'Masculin',
        ];
        return view('etudiant.create', ['active' => $active, 'sex' => $sex]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtudiantRquest $request)
    {
        Etudiant::create($request->all());
        return view('etudiant.created', ['etudiant' => $request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
