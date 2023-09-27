<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/side_header.css')}}">
    <link rel="stylesheet" href="{{asset('css/user_main.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="js/user.js"></script>

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
            <p><a href="/users/index">社員管理</a></p>
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

        <div class="register_button">
            <button>戻る</button>
            <button onclick="location.href='/users/create'">新規登録</button>
        </div>

        <div class="table">
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>社員名</th>
                        <th>入社日</th>
                        <th>詳細</th>
                        <th>編集</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->last_name}}{{$user->first_name}}</td>
                        <td>{{$user->join_date}}</td>
                        <th><button onclick="location.href='/users/show/{{$user->id}}'">詳細</button></th>
                        <th><button onclick="location.href='/users/edit/{{$user->id}}'">編集</button></th>
                    </tr>
                    @endforeach
                </tbody>


            </table>
        </div>

        <div class="main_controller">
            <div class="table_controller">
                <form action="/users/index" method="GET">
                    <select name="perPage" id = "perPage" onchange = "this.form.submit()" >
                        <option value="15" @if($perPage == 15) selected @endif>15</option>
                        <option value="50" @if($perPage == 50) selected @endif>50</option>
                        <option value="100" @if($perPage == 100) selected @endif>100</option>
                    </select>
                </form>
            </div>

            <div class="pagination">
                {{$users -> links()}}
            </div>

            <div class="return_button">
                <button>戻る</button>
            </div>
        </div>


    </section>

</body>

</html>