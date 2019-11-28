<!DOCTYPE html>
<html lang="en">
​

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAL cinema - admin</title>
</head>
<link rel="stylesheet" href="./css/admin_link.css">
​
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
                <h1>お知らせ登録</h1>
                <form action="/news/add_next" method="post">
                    {{ csrf_field() }}
                    <div class="form-check form-check-inline">
                        <a href="schedule_add.html">
                            <input class="form-check-input position-static" type="radio" name="blankRadio"
                                id="blankRadio1" value="option1" aria-label="...">上映情報
                        </a>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1"
                            value="option1" aria-label="...">お知らせ情報
                    </div>
                    <input type="date" name="date" min="2019-09-01" class="form-control col-3"><br>
                    <label for="">タイトル
                        <input type="text" name="title" value="" class="form-control">
                    </label><br>
                    <label for="">内容
                        <textarea name="content" id="" cols="80" rows="5" class="form-control"></textarea>
                    </label><br>
                    <input type="submit" name="" value="登録する" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
​

</html>