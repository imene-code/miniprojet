<!DOCTYPE html>
<html>
<head>
    <title>Tableau de bord de l'étudiant</title>
</head>
<body>
<h2>Tableau de bord de l'étudiant</h2>

<div>
    <h3>Mes actions</h3>
    <ul>
        <li>
            <a href="{{ route('etudiant.notes') }}">Consulter mes notes</a>
        </li>
        <li>
            <a href="{{ route('etudiant.pv') }}">Consulter le PV de délibération global</a>
        </li>
        <li>
            <a href="{{ route('etudiant.reclamations') }}">Déposer une réclamation</a>
        </li>
    </ul>
</div>
</body>
</html>
