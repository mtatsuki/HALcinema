<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">    
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
                    <div id="app">
                        <schedule-component />
                    </div>
                </div>
            </div>
        </div>
    </div>    
<script src="{{ asset('/js/app.js') }}"></script>        
</body>

</html>