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
      <form class="w-50 mx-auto" action="confirm" method="post">
        {{ csrf_field() }}
        <div class="header text-center py-5">
          <h4>システムへのご意見をお聞かせください</h4>
        </div>
        <div class="form-group row">
          <label for="inputName" class="col-sm-4 col-form-lebel">
            名前
            <span class="text-danger pl-2">※</span>
          </label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputName" name="fullname" placeholder="入力してください">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <p>
              性別
              <span class="text-danger pl-2">※</span>
            </p>
          </div>
          <div class="col-sm-8">
            <input type="radio" name="gender" id="radio1" value="1" checked>
            <label for="radio1">男性</label>
            <input type="radio" name="gender" id="radio2" value="2">
            <label for="radio2">女性</label>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <p>
              年代
              <span class="text-danger pl-2">※</span>
            </p>
          </div>
          <div class="col-sm-8">
            <select class="form-control" name="age_id">
              <option disabled selected>選択してください</option>
              @foreach ($ages as $age)
              <option value="{{ $age->id }}">{{ $age->age }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail" class="col-sm-4">
            メールアドレス
            <span class="text-danger pl-2">※</span>
          </label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="入力してください">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">メール送信可否</div>
          <div class="col-sm-8">
            <p>登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？</p>
            <input type="checkbox" id="checkbox" name="is_send_email" checked>
            <label for="checkbox">送信を許可します</label>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputContent" class="col-sm-4">ご意見</label>
          <div class="col-sm-8">
            <textarea type="text" class="form-control" id="inputContent" name="feedback" rows="5"></textarea>
          </div>
        </div>
        <div class="py-5 text-center">
          <input type="submit" class="btn btn-primary" style="width:150px" value="確認">
        </div>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>