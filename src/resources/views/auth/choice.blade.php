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

    <p>{{$questions[$question_id-1]->id}}</p>
    <form action="/admin/choice/{{$big_question_id}}/{{$question_id}}" method="POST">
        @csrf
        @foreach($choices as $choice)
        <input type="text" name="name[]" value="{{$choice->name}}">
        <input type="hidden" name="pre_name[]" value="{{$choice->name}}">
        @endforeach
        <input type="hidden" name="question_id" value="{{$questions[$question_id-1]->id}}">
        <input type="hidden" name="big_question_id" value="{{$big_question_id}}">
        <input type="hidden" name="question_num" value="{{$question_id}}">
        <input type="submit" value="send">
    </form>


            <a href="/admin/choice/add/{{$big_question_id}}/{{$question_id}}">選択肢の追加</a>

</body>

</html>


