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

    <form action="/admin/choice/add/{{$big_question_id}}/{{$question_id}}" method="POST">
        @csrf
        <p>選択肢追加</p>
        <input type="text" name="name">
        <p>正解なら1、不正解なら0を記入</p>
        <input type="text" name="valid">
        <input type="hidden" name="question_num" value="{{$question_id}}">
        <input type="hidden" name="id" value="{{$big_question_id}}">
        <input type="hidden" name="question_id" value="{{$questions[$question_id-1]->id}}">
        <input type="submit" value="send">
    </form>


</body>

</html>


