<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <a href="/planets">戻る</a>
    <h1>更新</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="名前">名前</label><br>
            <input type="string" name="名前" value="{{ old('名前', $planet->名前) }}">
        </p>
        <p>
            <label for="英名">英名</label><br>
            <input type="string" name="英名" value="{{ old('英名', $planet->英名) }}">
        </p>
        <p>
            <label for="半径">半径</label><br>
            <input type="number" name="半径" value="{{ old('半径', $planet->半径) }}">
        </p>
        <p>
            <label for="重量">重量</label><br>
            <input type="number" name="重量" value="{{ old('重量', $planet->重量) }}">
        </p>
        <input type="submit" value="更新">
    </form>

</body>

</html>
