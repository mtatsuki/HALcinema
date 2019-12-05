<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAL cinema - admin</title>
</head>
<link rel="stylesheet" href="./css/admin_link.css">
<link rel="stylesheet" type="text/css" href="{{ asset('./css/admin_movie_info.css') }}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-secondary vh-100">
                <ul class="nav flex-column m-3">
                    <li class="nav-item">
                        <a class="nav-link link active" href="/">Top</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./admin_sns.html">SNS管理</a>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                <h1 class="m-3">お知らせ詳細</h1>
                <div id="icons" class="mr-3" style="float:right;">
                    <a href="/admin/news/edit/{{$news->id}}"><img src="{{ asset('images/icon_fix.png') }}"></a>
                    <a href="/admin/news/delete/{{$news->id}}"><img src="{{ asset('images/icon_dustbox.png') }}"></a>
                </div>
                <div class="m-5">
                    <h5>日付</h5>
                    <p>{{$news->release_date}}</p>
                    <h5>タイトル</h5>
                    <p>{{$news->title}}</p>
                    <h5>内容</h5>
                    <p>{{$news->content}}</p>
                </div>
                <div class="prev">
                    <form action="/">
                        <input class="btn btn-info" type="submit" name="prev" value="一覧へ戻る" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>