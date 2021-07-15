<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boolean Viaggi</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="container">
            <h1>Parti insieme a Boolean</h1>
            <div class="travel">
            @foreach ($viaggi as $viaggio)
                <div class="travel_container">
                    <h2>{{$viaggio->titolo}}</h2>
                    <h3>{{$viaggio->destinazione}}</h3>
                    <h4>{{$viaggio->prezzo}}€</h4>
                    <h4>n° notti - {{$viaggio->notti}}</h4>
                    {{-- <h4>{{$viaggio->data}}</h4> --}}
                    <p>{{$viaggio->descrizione}}</p>

                </div>
            @endforeach
            </div>
        </div>
    </body>
</html>
