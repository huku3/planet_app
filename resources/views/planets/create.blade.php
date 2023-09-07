<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="/planets">戻る</a>
    <h1>惑星情報登録</h1>
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
    <form action="/planets" method="post">
        @csrf
        <p>
            <label for="pla_name">名前</label><br>
            <input type="string" name="pla_name" value="{{ old('pla_name') }}">
        </p>
        <p>
            <label for="pla_name(英語)">名前（英名）</label><br>
            <input type="string" name="pla_eng_name" value="{{ old('pla_eng_name') }}">
        </p>
        <p>
            <label for="radius">半径</label><br>
            <input type="number" name="radius" value="{{ old('radius') }}">
        </p>
        <p>
            <label for="weight">重量</label><br>
            <input type="number" name="weight" value="{{ old('weight') }}">
        </p>

        <input type="submit" value="登録">
    </form>
</body>

</html>
