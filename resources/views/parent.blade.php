<html>
<head>
</head>

<body>


<h1>Todoリスト</h1>
<form action="">
    <input type="radio" value="all">すべて
    <input type="radio" name="status" value="working">作業中
    <input type="radio" name="status" value='done'>完了
</form>
<td><th>ID</th> <th>コメント</th><th>状態</th></td>
@yield('content')

@yield('input')
</body>


</html>
