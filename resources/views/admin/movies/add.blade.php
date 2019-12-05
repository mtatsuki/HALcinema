<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>add</title>
</head>

<body>
    <h1>追加</h1>
    <form action="/movie" method="POST">
        {{ csrf_field() }}
        <label>映画タイトル</label>
        <input type="text" name="title"/>
        <br>
        <label>上映時間(分)</label>
        <input type="text" name="running_total_time"/>
        <br>
        <label>上映スクリーン</label>
        <input type="text" name="screen_type" />
        <br>
        <label>上映日時</label>
        <input type="date" name="release_date" />
        <br>
        <label>上映開始時間</label>
        <input type="time" name="screening_time" />
        <button type="submit">送信</button>
    </form>
</body>

</html>