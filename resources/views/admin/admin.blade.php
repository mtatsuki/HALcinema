<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAL cinema - admin</title>
</head>
<link rel="stylesheet" href="./css/admin_link.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .affix {
        position: fixed;
    }

    .main {
        left: 25%;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-secondary vh-100 affix">
                <ul class="nav flex-column m-3">
                    <li class="nav-item">
                        <a class="nav-link link active" href="/">Top</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./admin_sns.html">SNS管理</a>
                    </li>
                </ul>
            </div>
            <div class="col-9 p-2 main">
                <h1 class="m-3">全体スケジュール</h1>
                <div class="form-group m-3">
                    <label for="formGroupExampleInput">日付</label>
                    <input type="date" min="2019-09-01" class="form-control col-3 rounded-pill"
                        id="formGroupExampleInput" placeholder="Example input">

                    <div class="card my-3">
                        <div class="card-header">
                            上映カレンダー
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-center">日付を選択してください。</p>
                            </blockquote>
                        </div>
                    </div>

                    <div class="card my-3">
                        <div class="card-header">
                            ◯月◯日のスケジュール
                        </div>
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">上映情報</h5>
                                    <div class="list-group">
                                        <a href="./admin_movie_info.html"
                                            class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="media">
                                                    <img src="http://placehold.jp/50x50.png" class="mr-3" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">映画タイトル</h5>
                                                        00:00 ~ 00:00
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="media">
                                                    <img src="http://placehold.jp/50x50.png" class="mr-3" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">映画タイトル</h5>
                                                        00:00 ~ 00:00
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="media">
                                                    <img src="http://placehold.jp/50x50.png" class="mr-3" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">映画タイトル</h5>
                                                        00:00 ~ 00:00
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">お知らせ情報</h5>
                                    <div class="list-group">
                                        @foreach ($news as $item)
                                        <a href="/news/detail/{{$item->id}}"
                                            class="list-group-item list-group-item-action">{{$item->title}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="schedule_add.html" class="btn btn-block btn-success">スケジュールを登録</a>
                            </div>
                            <div class="col">
                                <a href="schedule_edit.html" class="btn btn-block btn-primary">スケジュールを編集</a>
                            </div>
                            <div class="col">
                                <a href="/news/add" class="btn btn-block btn-warning">お知らせ登録</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>