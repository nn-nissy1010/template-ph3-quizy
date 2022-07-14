<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSSE課題</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        #sortable {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 60%;
        }

        #sortable li {
            margin: 0 3px 3px 3px;
            padding: 0.4em;
            padding-left: 1.5em;
            font-size: 1.4em;
            height: 18px;
        }

        #sortable li span {
            position: absolute;
            margin-left: -1.3em;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#sortable").sortable();
        });
    </script>
</head>

<body>
    <p>{{$items}}</p>

    <form action="/admin/list" method="POST">
    @csrf
    <div id="sortable">
    @foreach($items as $item)
    <p class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="hidden" name="list_ids[]" value="{{$item->id}}">{{$item->name}}<a href="/admin/detail/{{$item->id}}">詳細</a></p>
    @endforeach
    </div>
    <input type="submit" value="send">
    </form>


    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/admin/list" method="POST">
        @csrf
        <p>問題を追加:</p><input type="text" name="name"><br>
        <input type="hidden" name="order_num" value="{{$count+1}}"><br>
        <input type="submit" value="send">
    </form>

</body>

</html>
