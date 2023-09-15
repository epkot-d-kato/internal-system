<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/works/time_card.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <section class='main'>

        <p>日付<input type="date" name="date" id="date"></p>
        <p>出勤時刻<input type="time" name="work_start_time" id="work_start_time"></p>
        <p>退勤時刻<input type="time" name="work_end_time" id="work_end_time"></p>
        <p>休憩時間<input type="time" name="break_time" id="break_time"></p>
        <p>業務内容<input type="text" name="work_content" id="work_content"></p>

        <button>登録</button>
    </section>


</body>
</html>