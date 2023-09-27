<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/side_header.css')}}">
    <link rel="stylesheet" href="{{asset('css/register_main.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="{{asset('js/show.js')}}"></script>
    <title>Document</title>
</head>

<body>
    <section class="header_menu">
        <div class="title">
            <p>web日報登録</p>
        </div>
        <div class="menu">
            <ul>
                <li>自分の名前</li>
                <li>ログアウト</li>
            </ul>

        </div>

    </section>

    <section class="side_menu">
        <div class="content">
            <p><a href="/home">トップページ</a></p>
            <p><a href="users/index">申請管理</a></p>
            <p><a href="">社員管理</a></p>
            <p><a href="">休日設定</a></p>
            <p><a href="">勤怠管理</a></p>
            <p><a href="">交通費整理</a></p>
            <p><a href="">備品管理</a></p>
        </div>

        <div class="blank">
            <p></p>
        </div>

    </section>

    <section class="main">
        <table class="registerForm" border="1">
            <tr>
                <td>性</td>
                <td>{{$user->last_name}}</td>
            </tr>
            <tr>
                <td>性（ふりがな）</td>
                <td>{{$user->last_name_kana}}</td>
            </tr>
            <tr>
                <td>名前</td>
                <td>{{$user->first_name}}</td>
            </tr>
            <tr>
                <td>名前（ふりがな）</td>
                <td>{{$user->first_name_kana}}</td>
            </tr>
            <tr>
                <td>都道府県</td>
                <td>{{$user->prefectures}}</td>
            </tr>
            <tr>
                <td>市区町村・番地</td>
                <td>{{$user->address1}}</td>
            </tr>
            <tr>
                <td>建造物名・部屋番号</td>
                <td>{{$user->address2}}</td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td>入社日</td>
                <td>{{$user->join_date}}</td>
            </tr>
            <tr>
                <td>技術</td>
                <td></td>
            </tr>
            <tr>
                <td>備考</td>
                <td></td>
            </tr>
        </table>

        <button onclick="location.href='/users/edit/{{$user->id}}'">編集</button>


        </form>
        <button onclick="location.href='/users/index'">戻る</button>


    </section>

</body>

</html>