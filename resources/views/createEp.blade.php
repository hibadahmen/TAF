@extends('tamplate')

@section('titrepage', 'Ajouter une épreuve')

@section('contenu')
    <tr>
        <td>
            <form action="{{ route('epreuves.store') }}" method="POST">
                @csrf

                <label>Numéro :</label>
                <input type="number" name="numepreuve" required>
                <br><br>

                <label>Date :</label>
                <input type="date" name="datepreuve" required>
                <br><br>

                <label>Lieu :</label>
                <input type="text" name="lieu" required>
                <br><br>

                <label for="matiere_id">Matière :</label>

            <select id="matiere_id" name="matiere_id" required>
            <option value="">-- Choisir une matière --</option>

            @foreach($matieres as $matiere)
                <option
                    value="{{ $matiere->id }}"
                    @selected(old('matiere_id') == $matiere->id)
                >
                    {{ $matiere->codemat }} — {{ $matiere->libelle }}
                </option>
            @endforeach
            </select>

                <button type="submit">Ajouter</button>
            </form>
        </td>
    </tr>


@endsection
