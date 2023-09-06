<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet 詳細</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

       

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>詳細画面</h1>

    <table>
        <tr>
            <th>名前</th>
            <td>{{ $planet->名前 }}</td>
        </tr>
        <tr>
            <th>英名</th>
            <td>{{ $planet->英名 }}</td>
        </tr>
        <tr>
            <th>半径</th>
            <td>{{ $planet->半径 }}</td>
        </tr>
        <tr>
            <th>重量</th>
            <td>{{ $planet->重量 }}</td>
        </tr>
    </table>

    <a href="/planets">戻る</a>
</body>

</html>
