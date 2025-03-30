<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des utilisateurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
        }

        .card-link {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin-bottom: 20px;
        }

        .card-link a {
            text-decoration: none;
            font-size: 18px;
            color: blue;
            font-weight: bold;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: blue;
            color: white;
        }

        .card-action {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 10px;
            background: #f4f4f4;
            border-radius: 5px;
        }

        .modifier, .supprimer {
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            border: none;
        }

        .modifier {
            background-color: green;
            color: white;
            border: 1px solid blue;
        }

        .supprimer {
            background-color: red;
            color: white;
            border: 1px solid brown;
        }
    </style>
</head>

<body>
    <div class="card-link">
        <a href="{{ url('fournisseur/create') }}">Ajouter un fournisseur</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($four as $fournisseur)
                <tr>
                    <td>{{ $fournisseur->id }}</td>
                    <td>{{ $fournisseur->nom }}</td>
                    <td>{{ $fournisseur->email }}</td>
                    <td>{{ $fournisseur->telephone }}</td>
                    <td>{{ $fournisseur->adresse }}</td>
                    <td>
                        <div class="card-action">
                            <button class="modifier">Modifier</button>
                            <button class="supprimer">Supprimer</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
