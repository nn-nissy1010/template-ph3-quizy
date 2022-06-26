<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSSE課題</title>
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
</head>

<body>
    <p>{{$big_question_id}}</p>
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

    <script>
    function check(question_no, selected_no, valid_no) {
    const answerlist = document.getElementsByName("answerlist_" + question_no);
    answerlist.forEach(answer => {
        answer.style.pointerEvents = "none";;
    });

    const answertext = document.getElementById("answertext_" + question_no);
    if (selected_no == valid_no) {
        answertext.innerHTML = "正解！";
        answertext.className = "answerbox_valid";
    } else {
        answertext.innerHTML = "不正解！";
        answertext.className = "answerbox_invalid";
    }

    const answerbox = document.getElementById("answerbox_" + question_no);
    answerbox.style.display = "block";

    const selected = document.getElementById("answerlist_" + question_no + "_" + selected_no);
    selected.className = "answer_invalid";

    const valid = document.getElementById("answerlist_" + question_no + "_" + 1);
    valid.className = "answer_valid";
}

    </script>

    <!-- <script src="{{asset('/assets/js/script.js')}}"></script> -->
</body>
</html>




