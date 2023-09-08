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
            <p><a href="">申請管理</a></p>
            <p><a href="users/index">社員管理</a></p>
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
        <form method="post" action="/users/update/{{$user->id}}">
            @csrf
            @method('put')
            <table class="registerForm" border="1">
                <tr>
                    <td>性</td>
                    <td><input type="text" name="last_name" id="last_name_{{$user->id}}" value="{{$user->last_name}}" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>性（ふりがな）</td>
                    <td><input type="text" name="last_name_kana" id="last_name_kana_{{$user->id}}" value="{{$user->last_name_kana}}" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>名前</td>
                    <td><input type="text" name="first_name" id="first_name_{{$user->id}}" value="{{$user->first_name}}" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>名前（ふりがな）</td>
                    <td><input type="text" name="first_name_kana" id="first_name_kana_{{$user->id}}" value="{{$user->first_name_kana}}" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>都道府県</td>
                    <td><input type="text" name="prefecture" id="prefecture_{{$user->id}}" value="{{$user->prefectures}}" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>市区町村・番地</td>
                    <td><input type="text" value="{{$user->address1}}"></td>
                </tr>
                <tr>
                    <td>建造物名・部屋番号</td>
                    <td><input type="text" value="{{$user->address2}}"></td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td><input type="email" name="email" id="email" value="{{$user->email}}"></td>
                </tr>
                <tr>
                    <td>入社日</td>
                    <td><input type="date" name="join_date" id="join_date" value="{{$user->join_date}}"></td>
                </tr>
                <tr>
                    <td>技術</td>
                    <td><input type="text" ></td>
                </tr>
                <tr>
                    <td>備考</td>
                    <td><input type="text"></td>
                </tr>
            </table>

            <button type="submit">更新</button>


        </form>
        <button onclick="location.href='/users/index'">戻る</button>


    </section>

</body>

</html>