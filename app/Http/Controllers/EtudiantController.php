<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRquest;
use App\Http\Requests\EtudiantUpdateRequest;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EtudiantController extends Controller
{
    public function getEtudiants(Request $request)
    {
        $data = Etudiant::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $update_route = route('etudiants.edit', $row['id']);
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
        return response(view('etudiant.index'));
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
        return response(view('etudiant.create')->with(['active' => $active, 'sex' => $sex]));
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
        return response(view('etudiant.created')->with(['etudiant' => $request->all()]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        return response(view('etudiant.show')->with(['etudiant' => $etudiant]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::find($id);
        return response(view('etudiant.edit')->with(['etudiant' => $etudiant]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EtudiantUpdateRequest $request, $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->lastname = $request->get('lastname');
        $etudiant->firstname = $request->get('firstname');
        $etudiant->birthday = $request->get('birthday');
        $etudiant->place_birth = $request->get('place_birth');
        $etudiant->save();

        return redirect()->route('etudiants.show', ['etudiant' => $id])->with(['etudiant' => $etudiant]);
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
