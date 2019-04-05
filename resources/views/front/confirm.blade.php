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
        <div class="w-50 mx-auto text-left">
            <h4 class="py-5 text-center">内容確認</h4>
            <div class="row border-top pt-3">
                <p class="col-sm-5">氏名</p>
                <p class="col-sm-7">{{ $data['fullname'] }}</p>
            </div>
            <div class="row border-top pt-3">
                <p class="col-sm-5">性別</p>
                <p class="col-sm-7">{{ $data['gender'] }}</p>
            </div>
            <div class="row border-top pt-3">
                <p class="col-sm-5">年代</p>
                <p class="col-sm-7">{{ $data['age_id'] }}</p>
            </div>
            <div class="row border-top pt-3">
                <p class="col-sm-5">メールアドレス</p>
                <p class="col-sm-7">{{ $data['email'] }}</p>
            </div>
            <div class="row border-top pt-3">
                <p class="col-sm-5">メール送信可否</p>
                <p class="col-sm-7">{{ $data['is_send_email'] }}</p>
            </div>
            <div class="row border-top pt-3">
                <p class="col-sm-5">ご意見</p>
                <p class="col-sm-7 text-left">{!! nl2br(e($data['feedback']), false) !!}</p>
            </div>
            <div class="py-5 text-center">
                <button class="btn btn-primary w-25 mr-3" onclick="history.back();">再入力</button>
                <button class="btn btn-success w-25">送信</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>