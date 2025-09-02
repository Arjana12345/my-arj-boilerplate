<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        
    </head>
    <body>
        <h1>My home</h1>

        <table border ="1">
            <tr><th>Name</th><th>Area</th></tr>
            @foreach($people as $this_candidate)
            <tr>
                <td>
                    <a href="/home/people/{{$this_candidate['id']}}">
                    {{$this_candidate['name']}}</a>
                </td>
                <td>{{$this_candidate['area']}}</td>
               
            </tr>
            @endforeach
        </table>
        
    </body>
</html>