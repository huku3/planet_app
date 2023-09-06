<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet 一覧</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>一覧画面</h1>
    <table>
        <thead>
            <tr>
                <th>名前</th>
                <th>英名</th>
                <th>半径</th>
                <th>重量</th>
                <th>アクション</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($planets as $planet)
                <tr>
                    <td>{{ $planet->名前 }}</td>
                    <td>{{ $planet->英名 }}</td>
                    <td>{{ $planet->半径 }}</td>
                    <td>{{ $planet->重量 }}</td>
                    <td>
                        <a href="/planets/{{ $planet->id }}">詳細</a>
                        <a href="/planets/{{ $planet->id }}/edit">編集</a>
                        <form action="/planets/{{ $planet->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/planets/create">新規登録</a>
</body>

</html>
