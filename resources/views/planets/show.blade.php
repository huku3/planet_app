<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet 詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>詳細画面</h1>
    <table class="table">
        <tr>
            <th class="th">名前</th>
            <td class="td">{{ $planet->pla_name }}</td>
        </tr>
        <tr>
            <th class="th">名前（英名）</th>
            <td class="td">{{ $planet->pla_eng_name }}</td>
        </tr>
        <tr>
            <th class="th">半径</th>
            <td class="td">{{ $planet->radius }}</td>
        </tr>
        <tr>
            <th class="th">重量</th>
            <td class="td">{{ $planet->weight }}</td>
        </tr>
    </table>
    <a class="a" href="/planets">戻る</a>
</body>

</html>
