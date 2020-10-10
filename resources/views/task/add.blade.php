@extends('parent')

<body>

@section('content')
{{--    データベースの値を$itemsとして受け取って、foreachで表示--}}
    @foreach( $items as $task)

        <table>
            <th>
            <td>{{$task -> id}}</td>
            </th>
            <th>
            <td>{{$task -> comment}}</td>
            </th>

{{--            作業中と表示　$tasksからステータスを撮ってくる。--}}
            <th><button>{{$task->status}}</button></th>
            <form action="/task/del" method="post">
                @csrf
                <th><button type="submit" onclick = "DeleteController@remove" >削除</button></th>

            </form>
        </table>
    @endforeach
@endsection

@section('input')

@if (count($errors) > 0)
    <div>
        <ul>
            @foreach($errors -> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<h2>新規タスクの追加</h2>

<form action="/task/add" method="post">
    @csrf
    <input type="text" name="comment" value="{{old('comment')}}">
    <input type="submit" value="追加">
</form>

@endsection
</body>
