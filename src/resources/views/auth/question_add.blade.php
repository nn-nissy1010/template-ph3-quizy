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
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/admin/question/{{$big_question_id}}" method="POST">
        @csrf
        <p>{{$big_question_id}}</p>
        <p>問題を追加:</p><input type="text" name="place_name"><br>
        <input type="hidden" name="big_question_id" value="{{$big_question_id}}"><br>
        <input type="submit" value="send">
    </form>
</body>

</html>
