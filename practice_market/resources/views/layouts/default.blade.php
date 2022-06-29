<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>

    <script src="/practice_market/resources/js/app.js"></script>
    <script src="/practice_market/resources/js/bootstrap.js"></script>
</head>
<body>
    {{-- header の部分は logged_in.blade.php, not_logged_in.blade.php --}}
    @yield('header')

    {{-- エラーメッセージ出力 --}}
    @foreach ($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach

    @if (\Session::has('success'))
        <div class="success">
            {{ \Session::get('success') }}
        </div>
    @endif

    {{-- content の部分は各ディレクトリの blade.php に記載 --}}
    @yield('content')
</body>
</html>