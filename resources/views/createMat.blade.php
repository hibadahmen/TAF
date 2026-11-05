
@extends('tamplate')

@section('titrepage', 'Ajouter une matière')

@section('contenu')
  <tr>
    <td>
        <form action="{{ route('matieres.store') }}" method="POST">
        @csrf
        <label for="codemat">Code:</label>
        <input type="text" id="codemat" name="codemat" required><br><br>
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" required><br><br>
        <label for="coef">Coefficient:</label>
        <input type="number" id="coef" name="coef" required min="1" max="5"><br><br>
        <button type="submit">Ajouter</button>
        </form>
     </td>
  </tr>

@endsection
