<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
</head>

<body>
    <p>@yield('title')</p>
    @foreach($items as $item)
    <div class="content">
        <div class="question">
            <p>{{$loop->iteration}}. この地名はなんて読む？ : {{$item->place_name}}</p>
        </div><br>
        <ul>
            @foreach($choices->where('question_num', $loop->iteration) as $choice)
            <li id="answerlist_{{$loop->parent->iteration}}_{{$loop->iteration}}" class="answerlist" onclick="check(
                {{$loop->parent->iteration}},
                {{$loop->iteration}},
                {{$choice->valid}}
            )">
            {{$choice->name}}
        </li>
            @endforeach
        <li id="answerbox_{{$loop->iteration}}" class="answerbox">
        <span id="answertext_{{$loop->iteration}}"></span><br>
        <span>
            正解は「
            {{$valid[$loop->index]->name}}
            」です！
        </span>
        </li>
        </ul>
    </div>
    @endforeach

    <script src="{{asset('/assets/js/script.js')}}"></script>
</body>
</html>





