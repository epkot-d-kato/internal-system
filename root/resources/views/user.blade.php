<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/side_header.css">
    <link rel="stylesheet" href="css/user_main.css">

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

        <div class="register_button">
            <button>戻る</button>
            <button>新規登録</button>
        </div>

        <div class="table">
            <div class = "last_name">
                @foreach($lastNames as $lastName)
                <p>{{$lastName->last_name}}</p>
                @endforeach
            </div>
            <div class = "first_name">
                @foreach($firstNames as $firstName)
                <p>{{$firstName->first_name}}</p>
                @endforeach
            </div>

            <div class = "join_date">
                @foreach($joinDates as $joinDate)
                <p>{{$joinDate->join_date}}</p>
                @endforeach
            </div>

        </div>

        <div class="main_controller">
            <div class="table_controller">
                <form action="">
                    <select name="user" id="">
                        <option value="">15</option>
                        <option value="">50</option>
                        <option value="">100</option>
                    </select>
                </form>
            </div>

            <div class="pagination">
                <ul>
                    <li><<</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>...</li>
                    <li>13</li>
                    <li>>></li>
                </ul>
            </div>

            <div class="return_button">
                <button>戻る</button>
            </div>
        </div>


    </section>

</body>

</html>