<?php

namespace App\Http\Controllers;

use App\Models\epreuves;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpreuveController extends Controller
{
  /**  public function index()
    {
        $epreuves = [
            [
                'numero' => 1001,
                'date' => '23/09/2019',
                'lieu' => 110
            ],
        [
            'numero' => 1002,
            'date' => '24/09/2019',
            'lieu' => 112
        ]
    ];

    return view('affEp', compact('epreuves'));*/


   /**  $epreuves = DB::select('select * from epreuves');


    return view('affEp', compact('epreuves'));

}
 public function store()
    {
        DB::table('epreuves')->insert([
              [
                'numepreuve' => 1001,
                'datepreuve' => '2026-10-01',
                'lieu' => 110
            ],
            [
                'numepreuve' => 1002,
                'datepreuve' => '2026-10-01',
                'lieu' => 112
            ]
]);


DB::table('epreuves')->insert([
              [
                'numepreuve' => 1001,
                'datepreuve' => '2026-10-01',
                'lieu' => 110,
                'matiere_id' => 2
            ],
            [
                'numepreuve' => 1002,
                'datepreuve' => '2026-10-01',
                'lieu' => 112,
                'matiere_id' => 1
            ]]);
return redirect()->route('epreuves.index');
   }*/
    public function index (){
        $epreuves = DB::table('epreuves')
        ->select('*')
        ->get();

        return view('affEp', compact('epreuves'));


}
/**

    public function store()
    {

    $epreuves = [
              [
                'numepreuve' => 1001,
                'datepreuve' => '2026-10-01',
                'lieu' => 110,
                'matiere_id' => 2
            ],
            [
                'numepreuve' => 1002,
                'datepreuve' => '2026-10-01',
                'lieu' => 112,
                'matiere_id' => 1
            ]
];

    foreach ($epreuves as $epreuve) {
        $epreuve = new epreuves();
        $epreuve->numepreuve = $epreuve['numepreuve'];
        $epreuve->datepreuve = $epreuve['datepreuve'];
        $epreuve->lieu = $epreuve['lieu'];
        $epreuve->matiere_id = $epreuve['matiere_id'];
        $epreuve->save();
    }
    return redirect()->route('epreuves.index');
}*/
public function create()
{
    $matieres = DB::table('matieres')->get();

    return view('createEp', compact('matieres'));
}
    public function store(Request $request)
{
    $request->validate([
        'numepreuve' => 'required|integer',
        'datepreuve' => 'required|date',
        'lieu' => 'required|string',
        'matiere_id' => 'required|exists:matieres,id',
    ]);

    $epreuve = new epreuves();
    $epreuve->numepreuve = $request->numepreuve;
    $epreuve->datepreuve = $request->datepreuve;
    $epreuve->lieu = $request->lieu;
    $epreuve->matiere_id = $request->matiere_id;
    $epreuve->save();

    return redirect()->route('epreuves.index');
}
}

