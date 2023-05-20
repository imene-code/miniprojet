@extends('layouts.app')

@section('content')
    <h1>Mes Notes</h1>

    <table>
        <thead>
        <tr>
            <th>Matière</th>
            <th>Note</th>
        </tr>
        </thead>
        <tbody>
        @foreach($notes as $note)
            <tr>
                <td>{{ $note->matiere->nom }}</td>
                <td>{{ $note->note }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('etudiant.pv') }}">Consulter le PV de délibération global</a>
    <a href="{{ route('etudiant.reclamations') }}">Déposer une réclamation</a>
@endsection
