<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mogitate-form</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    @yield('css')
</head>

<body>

    <div class="app">
        <header class="header">
            <h1>mogitate</h1>
        </header>

        <div class="content">
            @yield('content')
        </div>

    </div>

</body>
</html>