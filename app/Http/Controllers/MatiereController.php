<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatiereController extends Controller
{
    public function index()
    {
        $matieres = DB::table('matieres')->get();

        return view('affMat', compact('matieres'));
    }

    public function create()
    {
        return view('createMat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codemat' => 'required|max:5|unique:matieres,codemat',
            'libelle' => 'required',
            'coef' => 'required|integer|between:1,5',
        ]);

        DB::table('matieres')->insert([
            'codemat' => $request->codemat,
            'libelle' => $request->libelle,
            'coef' => $request->coef,
        ]);

        return redirect()->route('matieres.index');
    }

    public function show(string $id)
    {
        $matiere = DB::table('matieres')
            ->where('codemat', $id)->first();

        return view('showMat', compact('matiere'));
    }

   public function edit(string $id)
{
    $matiere = DB::table('matieres')
        ->where('id', $id)
        ->first();
    return view('editMat', compact('matiere'));
}

   public function update(Request $request, string $id)
{
    $request->validate([
        'libelle' => 'required',
        'coef' => 'required|integer|between:1,5',
    ]);

    DB::table('matieres')
        ->where('id', $id)
        ->update([
            'libelle' => $request->libelle,
            'coef' => $request->coef,
        ]);

    return redirect()->route('matieres.index');
}

 public function destroy(string $id)
{
    $matiere = DB::table('matieres')
        ->where('id', $id)
        ->first();


    $utilisee = DB::table('epreuves')
        ->where('matiere_id', $matiere->id)
        ->exists();

    if ($utilisee) {
        return redirect()->route('matieres.index')
            ->with('error', 'Cette matière possède des épreuves.');
    }

    DB::table('matieres')
        ->where('id', $id)
        ->delete();

    return redirect()->route('matieres.index');
}
}
