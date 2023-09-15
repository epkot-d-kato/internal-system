<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/works/create.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>

    @include('works.menu')

    <section class="main">
        <button onclick="location.href='/works/index'">戻る</button>
        <form action="/works/store" method="POST">

            <p>日付<input type="date" name="date" id="date"></p>

            <table border="1">
                @csrf
                <tr>
                    <td>出社時間</td>
                    <td><input type="time" name="work_start_time" id="work_start_time"></td>
                </tr>
                <tr>
                    <td>退社時間</td>
                    <td><input type="time" name="work_end_time" id="work_end_time"></td>
                </tr>
                <tr>
                    <td>休憩時間</td>
                    <td><input type="time" name="break_time" id="break_time"></td>
                </tr>
                <tr>
                    <td>区間（行き）</td>
                    <td><input type="text" name="" id="" placeholder="新宿"></td>
                </tr>
                <tr>
                    <td>区間（帰り）</td>
                    <td><input type="text" name="" id="" placeholder="池袋"></td>
                </tr>
                <tr>
                    <td>臨時区間1（行き）</td>
                    <td><input type="text" name="" id="" placeholder="池袋"></td>
                </tr>
                <tr>
                    <td>臨時区間（帰り）</td>
                    <td><input type="text" name="" id="" placeholder="大塚"></td>
                </tr>
                <tr>
                    <td>金額</td>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>業務内容</td>
                    <td><input type="text" name="work_content" id="work_content"></td>
                </tr>
                <tr>
                    <td>総務コメント</td>
                    <td><input type="text" name="comment" id="comment"></td>
                </tr>
            </table>

            <input type="submit" value="登録">
            <button onclick="location.href='/works/index'">戻る</button>

        </form>
    </section>

</body>

</html>