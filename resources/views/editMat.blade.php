@extends('tamplate')

@section('titre', 'Modifier une matière')
@section('titrepage', 'Modifier une matière')

@section('contenu')
<tr>
    <td>
      <form action="{{ route('matieres.update', $matiere->id) }}"
      method="POST">
            @csrf
            @method('PUT')

            <label>Code :</label>
            <input type="text" value="{{ $matiere->codemat }}" readonly>
            <br><br>

            <label>Libellé :</label>
            <input type="text" name="libelle"
                   value="{{ old('libelle', $matiere->libelle) }}" required>
            <br><br>

            <label>Coefficient :</label>
            <input type="number" name="coef"
                   value="{{ old('coef', $matiere->coef) }}"
                   min="1" max="5" required>
            <br><br>

            <button type="submit">Enregistrer</button>
        </form>
    </td>
</tr>
@endsection

@section('lien')
    <a href="{{ route('matieres.index') }}">Retour</a>
@endsection
