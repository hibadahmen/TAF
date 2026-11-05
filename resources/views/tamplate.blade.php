<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titre')</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            min-height: 100vh;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(

                #dff6ff,
                #76c9ea,
                #5b99ae
            );
            padding: 40px 20px;
            color: #1e293b;
        }

        .titre {
            text-align: center;
            color: #087ea4;
            font-size: 32px;
            margin-bottom: 30px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 0 4px 5px rgba(129, 126, 126, 0.42);
        }

        .titre::after {
            content: "";
            display: block;
            width: 70px;
            height: 4px;
            background: #2aade6;
            border-radius: 10px;
            margin: 10px auto;
        }

        .table-container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.29);
            overflow-x: auto;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 12px;
            background: white;
        }


        .table td {
            padding: 15px 18px;
            border-bottom: 1px solid #e2e8f0;
            color: #32297ced;
            font-size: 17px;
        }

        .table tr:hover {
            background-color: #e0f5fc;
            box-shadow: inset 4px 0 0 #2aade6;
        }

        .liens {
            text-align: center;
            margin-top: 25px;
        }

        .liens a {

            display: inline-block;
            padding: 18px 18px;
            margin: 5px;
            background: white;
            color: #087ea4;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.25s ease;
        }

        .liens a:hover {
            background: #087ea4;
            color: white;

        }
        .table th {
    padding: 15px 18px;
    background: #087ea4;
    color: white;
    text-align: left;
}


    </style>
</head>

<body>

    <h1 class="titre">
        @yield('titrepage')
    </h1>

    <div class="table-container">

        <table class="table">

            @yield('contenu')

        </table>

    </div>

    <div class="liens">

        @yield('lien')

    </div>

</body>

</html>

