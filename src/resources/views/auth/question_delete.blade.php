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
    <p>{{$question[$question_id-1]->place_name}}</p>
    <p>本当に削除しますか?</p>
    <form action="/admin/question/delete/{{$big_question_id}}/{{$question_id}}" method="POST">
        @csrf
        <input type="hidden" name="name" value="{{$question[$question_id-1]->place_name}}">
        <input type="submit" value="delete">
    </form>
</body>

</html>
