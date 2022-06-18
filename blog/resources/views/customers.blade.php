<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div>
        @foreach ($customers as $customer)

            <h1>{{ $customer['first_name'] }}</h1>
            
        @endforeach
        </div>
    </body>
</html>
