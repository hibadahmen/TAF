<?php

namespace App\Http\Controllers;
use App\Models\matieres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatController extends Controller
{   /**
    public function index()
    {
      $matieres = [
            [
                'code' => "Algo",
                'libelle' => "Algorithmique",
                'coefficient' => 3
            ],
            [
                'code' =>"DevWeb",
                'libelle' => "Develpppement Web",
                'coefficient' => 3
            ]
        ];

        return view('affMat', compact('matieres'));

        $matieres = DB::select('select * from matieres');

        return view('affMat', compact('matieres'));

    }
   public function store()
{
    DB::table('matieres')->insert([
        [
            'codemat' => 'Algo',
            'libelle' => 'Algorithmique',
            'coef' => 3,
        ],
        [
            'codemat' => 'DevWeb',
            'libelle' => 'Développement Web',
            'coef' => 3,
        ],
    ]);

    return redirect()->route('matieres.index');

}*/

public function index (){
      $matieres = DB::table('matieres')
        ->select('*')
        ->get();

        return view('affMat', compact('matieres'));

}




/**public function store()
    {

    $matieres = [
              [
                'codemat' => 'Algo',
                'libelle' => 'Algorithmique',
                'coef' => 3
            ],
            [
                'codemat' => 'DevWeb',
                'libelle' => 'Développement Web',
                'coef' => 3
            ]
];

    foreach ($matieres as $matiere) {
        $matiere = new matieres();
        $matiere->codemat = $matiere['codemat'];
        $matiere->libelle = $matiere['libelle'];
        $matiere->coef = $matiere['coef'];
        $matiere->save();
    }
    return redirect()->route('matieres.index');


}*/
public function create()
    {
        return view('createMat');
    }
public function store(Request $request)
    {
        $request->validate([
            'codemat' => 'required|max:5',
            'libelle' => 'required',
            'coef' => 'required|integer|between:1,5',
        ]);
      $matiere = new matieres();
        $matiere->codemat = $request->codemat;
        $matiere->libelle = $request->libelle;
        $matiere->coef = $request->coef;
        $matiere->save();


  return redirect()->route('matieres.index');
    }
}
