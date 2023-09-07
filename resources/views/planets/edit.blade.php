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
            <label for="pla_name">名前</label><br>
            <input type="string" name="pla_name" value="{{ old('pla_name', $planet->pla_name) }}">
        </p>
        <p>
            <label for="pla_eng_name">名前（英名）</label><br>
            <input type="string" name="pla_eng_name" value="{{ old('pla_eng_name', $planet->pla_eng_name) }}">
        </p>
        <p>
            <label for="radius">半径</label><br>
            <input type="number" name="radius" value="{{ old('radius', $planet->radius) }}">
        </p>
        <p>
            <label for="weight">重量</label><br>
            <input type="number" name="weight" value="{{ old('weight', $planet->weight) }}">
        </p>
        <input type="submit" value="更新">
    </form>

</body>

</html>
