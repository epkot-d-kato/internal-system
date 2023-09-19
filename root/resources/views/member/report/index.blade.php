<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/home_main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/side_header.css')}}">
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
        <button onclick="location.href='/member/report/create'">打刻</button>
        <table border="1">
            <tr>
                <th>月</th>
                <th>日</th>
                <th>曜日</th>
                <th>出勤時間</th>
                <th>退勤時間</th>
            </tr>

            @foreach ($reports as $report)
            <tr>
                <td>{{$report -> month}}</td>
                <td>{{$report -> day}}</td>
                <td>{{$report -> day_of_week}}</td>
                <td>{{$report -> check_in_time}}</td>
                <td>{{$report -> check_out_time}}</td>
            </tr>
            @endforeach
        </table>

    </section>

</body>

</html>