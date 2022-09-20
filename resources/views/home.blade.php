<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration Seeder</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    @foreach ($trains as $traininfo)
        <div class="container">
            <div class="row">
                <ul class="list-unstyled">
                    <li>
                        <h1>
                            Azienda: {{ $traininfo['azienda'] }}
                        </h1>
                    </li>
                    <li>
                        Stazione di partenza: {{ $traininfo['stazione_di_partenza'] }}
                    </li>
                    <li>
                        Stazione di arrivo: {{ $traininfo['stazione_di_arrivo'] }}
                    </li>
                    <li>
                        Orario di partenza: {{ $traininfo['orario_di_partenza'] }}
                    </li>
                    <li>
                        Orario di arrivo: {{ $traininfo['orario_di_arrivo'] }}
                    </li>
                    <li>
                        Codice treno: {{ $traininfo['codice_treno'] }}
                    </li>
                    <li>
                        Numero carrozze: {{ $traininfo['numero_carrozze'] }}
                    </li>
                    <li>
                        In orario: {{ $traininfo['in_orario'] }} 
                    </li>
                </ul>
    @endforeach
    </div>
    </div>
</body>

</html>
