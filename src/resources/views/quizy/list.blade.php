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

    @foreach($items as $item)
    <a href="http://localhost/quizy/{{$loop->iteration}}">{{$item->name}}</a>
    @endforeach


</body>
</html>
