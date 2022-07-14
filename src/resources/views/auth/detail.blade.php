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
    <p>{{$big_question}}</p>
    <p>{{$big_question->where('id',$big_question_id)->first()}}</p>
    <p>{{$big_question[$big_question_id-1]->id}}</p>
    <p>{{$items}}</p>
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/admin/detail/{{$big_question_id}}" method="POST">
        @csrf
        <p>問題名</p>
        <input type="text" name="name" value="{{$big_question->where('id',$big_question_id)->first()->name}}">
        <input type="hidden" name="pre_name" value="{{$big_question->where('id',$big_question_id)->first()->name}}">
        <input type="hidden" name="id" value="{{$big_question_id}}">
        <input type="submit" value="send">
    </form>
    <a href="/admin/delete/{{$big_question_id}}">削除</a><br>
    <a href="/admin/question/{{$big_question_id}}">問題追加</a><br>
    @foreach($items->where('big_question_id', $big_question[$big_question_id-1]->order_num ) as $item)
    <div class="content">
        <div class="question">
            <p>{{$loop->iteration}}. この地名はなんて読む？ : {{$item->place_name}}</p>
            <a href="/admin/question/edit/{{$big_question_id}}/{{$loop->iteration}}">問題編集/削除</a><br>
            <a href="/admin/choice/{{$big_question_id}}/{{$loop->iteration}}">選択肢追加/編集</a>
        </div><br>
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




