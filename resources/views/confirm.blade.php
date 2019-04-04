<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Survey</title>
  </head>
  <body>
    <div class="container">
        <div class="w-50 mx-auto text-center">
            <h4 class="py-5">内容確認</h4>
            <div class="row">
                <p class="col-sm-3">氏名</p>
                <p class="col-sm-9">{{ $fullname }}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">性別</p>
                <p class="col-sm-9">{{ $gender }}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">年代</p>
                <p class="col-sm-9">{{ $age_id }}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">メールアドレス</p>
                <p class="col-sm-9">{{ $email }}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">メール送信可否</p>
                <p class="col-sm-9">{{ $is_send_email }}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">ご意見</p>
                <p class="col-sm-9">{{ $feedback }}</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>