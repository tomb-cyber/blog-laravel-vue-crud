
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet"/>

    <title>{{ $pageHeading }}</title>
</head>
<body>
    <div id="container">
        <div id="app">
            <x-header :heading="$pageHeading"/>
            <div class="d-flex" id="body">
                @yield('content')
            </div>
        </div>
    </div>
    <x-footer/>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
