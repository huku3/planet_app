<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet 一覧</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <h1>一覧画面</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="th">名前</th>
                <th class="th">名前（英名）</th>
                <th class="th">半径</th>
                <th class="th">半径</th>
                <th class="th"></th>
                <th class="th"></th>
                <th class="th"></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($planets as $planet)
                <tr>
                    <td class="td">{{ $planet->pla_name }}</td>
                    <td class="td">{{ $planet->pla_eng_name }}</td>
                    <td class="td">{{ $planet->radius }}</td>
                    <td class="td">{{ $planet->weight }}</td>
                    <td class="td"><a href="/planets/{{ $planet->id }}">詳細</a></td>
                    <td class="td"><a href="/planets/{{ $planet->id }}/edit">編集</a></td>
                    <form action="/planets/{{ $planet->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/planets/create">新規登録</a>
</body>

</html>
