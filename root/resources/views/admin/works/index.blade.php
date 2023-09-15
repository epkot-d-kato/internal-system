<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/works/work.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="{{asset('js/works/time_card.js')}}"></script>
    <title>Document</title>
</head>

<body>

    @include('works.menu')

    <section class="main">

        <div class="time_register">
            <button class="showTimeCard">簡易打刻</button>
        </div>

        <div class="timeCard">

            <div class="timeCard-content">
                @include('works.time_card')
            </div>

        </div>

        <div class="new_register">
            <button onclick="location.href='/works/create'">新規登録</button>
        </div>

        <table border="1">

            <th>>日付</th>
            <th>始業時刻</th>
            <th>終業時刻</th>
            <th>休憩時間</th>
            <th>業務内容</th>
            <th>総務コメント</th>
            <th>削除</th>

            @foreach($works as $work)
            <tr>
                <td>{{$work->date}}</td>
                <td>{{$work->work_start_time}}</td>
                <td>{{$work->work_end_time}}</td>
                <td>{{$work->break_time}}</td>
                <td>{{$work->work_content}}</td>
                <td>{{$work->comment}}</td>

                <form method="POST" action="/works/destroy/{{$work->id}}">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit">削除</button></td>
                </form>
            </tr>
            @endforeach


        </table>
    </section>

</body>

</html>