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

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-secondary vh-100">
                <ul class="nav flex-column m-3">
                    <li class="nav-item">
                        <a class="nav-link link active" href="./admin.html">Top</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./admin_sns.html">SNS管理</a>
                    </li>
                </ul>
            </div>
            <div class="col-9 p-2">
                <h1 class="m-3">スケジュール編集</h1>
                <form class="mx-3" action="./admin.html" method="GET">
                    <div class="form-group mt-2">
                        <label for="formGroupExampleInput">日付</label>
                        <input type="date" min="2019-09-01" class="form-control col-3 rounded-pill"
                            id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:50px;">No</th>
                                <th scope="col" style="width:200px;">上映開始時間</th>
                                <th scope="col" style="width:210px;">上映スクリーン</th>
                                <th scope="col">映画名</th>
                                <th scope="col" style="width:85px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" class="form-control" /></td>
                                <td>
                                    <select name="screen" class="form-control">
                                        <option value="A">Aスクリーン</option>
                                        <option value="B">Bスクリーン</option>
                                    </select>
                                </td>
                                <td>タピオカ</td>
                                <td><a href="" class="btn btn-danger">削除</a></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="text" class="form-control" value="12:00" /></td>
                                <td>
                                    <select name="screen" class="form-control">
                                        <option value="A">Aスクリーン</option>
                                        <option value="B">Bスクリーン</option>
                                    </select>
                                </td>
                                <td>小世界</td>
                                <td><a href="" class="btn btn-danger">削除</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <input type="text" class="form-control is-invalid" value="13:00" />
                                    <div class="invalid-feedback">
                                        上映時間が被っています。
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group has-error">
                                        <select class="custom-select" required>
                                            <option value="A">Aスクリーン</option>
                                            <option value="B">Bスクリーン</option>
                                        </select>
                                        <span style="color: #dc3545; font-size: 0.8rem;">その時間は使用されています。</span>
                                    </div>
                                </td>
                                <td>天気の子</td>
                                <td><a href="" class="btn btn-danger">削除</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="送信">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>