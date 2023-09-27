<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/home_main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/side_header.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('/js/member/report/create.js')}}"></script>

    <title>Document</title>
</head>

<body>
    <section class="header_menu">
        <div class="title">
            <p>web日報登録</p>
        </div>
        <div class="menu">
            <ul>
                <li>社員太郎</li>
                <li>ログアウト</li>
            </ul>

        </div>

    </section>

    <section class="side_menu">
        <div class="content">
            <p><a href="/member/home">トップページ</a></p>
            <p><a href="">勤怠一覧</a></p>
            <p><a href="">休日申請</a></p>
            <p><a href="">交通費申請</a></p>
            <p><a href="">備品申請</a></p>
            <p><a href="">交通費整理</a></p>
        </div>

        <div class="blank">
            <p>&nbsp;</p>
        </div>

    </section>

    <section class='main'>
        <p>日報登録</p>
        <form method="POST" action="/member/report/update">
            @csrf
            @method('PUT')

            <label for="month">月</label>
            <input type="number" id="month" name="month" min="1" max="12">

            <label for="day">日</label>
            <input type="number" id="day" name="day" min="1" max="31">

            <label for="check_in_time">出勤</label>
            <input type="time" id="check_in_time" name="check_in_time" >

            <label for="check_out_time">退勤</label>
            <input type="time" id="check_out_time" name="check_out_time" >

            <button type="submit">登録</button>
        </form>
    </section>

</body>

</html>