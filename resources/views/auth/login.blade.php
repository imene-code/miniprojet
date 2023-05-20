<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
<h2>Connexion</h2>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">Adresse e-mail</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <button type="submit">Connexion</button>
    </div>
</form>
</body>
</html>
