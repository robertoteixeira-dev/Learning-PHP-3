<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div>
        @foreach ($products as $product)

            <h1>{{ $product['title'] }}</h1>
            <p>{{ $product['description'] }}</p>

        @endforeach
        </div>
    </body>
</html>
