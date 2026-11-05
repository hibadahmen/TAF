@extends('tamplate')
@section('titre')
    Gestion des matières
@endsection
@section('titrepage')
    Gestion des matières

@endsection
@section('contenu')
    @if(session('error'))
        <tr>
            <td colspan="4" style="color:red">
                {{ session('error') }}
            </td>
        </tr>
    @endif
    <tr>
        <th>code</th>
        <th>libelle</th>
        <th>coefficient</th>
        <th>Actions</th>
    </tr>
    @foreach($matieres as $matiere)
        <tr>
            <td>{{ $matiere->codemat }}</td>
            <td>{{ $matiere->libelle }}</td>
            <td>{{ $matiere->coef }}</td>
            <td>
                <a href="{{ route('matieres.edit', $matiere->id) }}">
                    Modifier
                </a>

               <form action="{{ route('matieres.destroy', $matiere->id) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            onclick="return confirm('Supprimer cette matière ?')">
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
    @endforeach


@endsection

@section('lien')
    <a href="{{ route('epreuves.index') }}">Gestion des épreuves</a>

    <a href="{{ route('matieres.create') }}">Ajouter une matière</a>

@endsection




