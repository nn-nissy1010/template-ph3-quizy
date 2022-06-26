<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSSE課題</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<p>{{$big_question_id}}:{{$question_id}}</p>
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/admin/question/edit/{{$big_question_id}}/{{$question_id}}" method="POST">
        @csrf
        <input type="text" name="place_name" value="{{$question[$question_id-1]->place_name}}">
        <input type="hidden" name="pre_name" value="{{$question[$question_id-1]->place_name}}">
        <input type="hidden" name="big_question_id" value="{{$big_question_id}}">
        <input type="submit" value="send">
    </form>
    <a href="/admin/question/delete/{{$big_question_id}}/{{$question_id}}">削除</a><br>
    <p>{{$question[$question_id-1]}}</p>
</body>

</html>
