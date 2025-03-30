<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <style>
        body {
            background-color: beige;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .conteneur {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 330px;
            text-align: center;
        }
        input {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<form action="{{ url('fournisseur') }}" method="post">
    @csrf
    <div class="conteneur">
        <h2>Formulaire d'inscription</h2>
        <input type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}" required>
        @error('nom')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}" required>
        @error('prenom')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="text" name="adresse" placeholder="Adresse" value="{{ old('adresse') }}" required>
        @error('adresse')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="tel" name="telephone" placeholder="Téléphone" value="{{ old('telephone') }}" required>
        @error('telephone')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">S'inscrire</button>
    </div>
</form>

</body>
</html>
