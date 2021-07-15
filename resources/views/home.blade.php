<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boolean Viaggi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Parti insieme a Boolean</h1>

        @foreach ($viaggi as $viaggio)
            <div>
                <h2>{{$viaggio->titolo}}</h2>
                <h3>{{$viaggio->destinazione}}</h3>
                <h4>{{$viaggio->prezzo}}€</h4>
                <h4>{{$viaggio->notti}}</h4>
                <h4>{{$viaggio->data}}</h4>
                <p>{{$viaggio->descrizione}}</p>

            </div>
        @endforeach
    </body>
</html>
