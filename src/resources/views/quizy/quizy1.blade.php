<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
        <div class="question"><p>1. この地名はなんて読む？</p></div><br>
        <button onclick="Judgment()" class= "before" id="No1Answer+button[0]"><div id="No1button[0]">こうわ</div></button><br>
        <button onclick="Judgment()" class= "before" id="No1Answer+button[1]"><div id="No1button[1]">たかわ</div></button><br>
        <button onclick="Judgment()" class= "before" id="No1Answer+button[2]"><div id="No1button[2]">たかなわ</div></button><br>
        <div class="nothing" id="No1CommentBlue">
            <span class="blue-line">正解！</span><br>
            <div id="No1CommentTrue"></div>
        </div>
        <div class="nothing" id="No1CommentRed">
            <span class="red-line">不正解！</span><br>
            <div id="No1CommentFalse"></div>
        </div><br>
        </div>
</body>
</html>
