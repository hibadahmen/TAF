@extends('tamplate')
@section('titre')
    Gestion des epreuves
@endsection
@section('titrepage')
    Gestion des epreuves
@endsection


@section('contenu')
    <tr>
        <th>Numero</th>
        <th>Date</th>
        <th>Lieu</th>
    </tr>

    @foreach($epreuves as $epreuve)
        <tr>
            <td>{{ $epreuve->numepreuve }}</td>
            <td>{{ $epreuve->datepreuve }}</td>
            <td>{{ $epreuve->lieu }}</td>
        </tr>
    @endforeach
@endsection

@section('lien')

    <a href="{{ route('matieres.index') }}">Gestion des matières</a>
    <a href="{{ route('epreuves.create') }}">Ajouter une epreuve </a>


@endsection

