@extends('front.layouts.app')

@section('title', 'confirm')

@section('content')
    <div class="w-50 mx-auto text-left">
        <h4 class="py-5 text-center">内容確認</h4>
        <div class="row border-top pt-3">
            <p class="col-sm-5">氏名</p>
            <p class="col-sm-7">{{ $fullname }}</p>
        </div>
        <div class="row border-top pt-3">
            <p class="col-sm-5">性別</p>
            <p class="col-sm-7">{{ $gender }}</p>
        </div>
        <div class="row border-top pt-3">
            <p class="col-sm-5">年代</p>
            <p class="col-sm-7">{{ $age_id }}</p>
        </div>
        <div class="row border-top pt-3">
            <p class="col-sm-5">メールアドレス</p>
            <p class="col-sm-7">{{ $email }}</p>
        </div>
        <div class="row border-top pt-3">
            <p class="col-sm-5">メール送信可否</p>
            <p class="col-sm-7">{{ $is_send_email }}</p>
        </div>
        <div class="row border-top pt-3">
            <p class="col-sm-5">ご意見</p>
            <p class="col-sm-7 text-left">{!! nl2br(e($feedback), false) !!}</p>
        </div>
        <div class="py-5 text-center">
            <form action="/" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="fullname" value="{{ $data['fullname'] }}">
                <input type="hidden" name="gender" value="{{ $data['gender'] }}">
                <input type="hidden" name="age_id" value="{{ $data['age_id'] }}">
                <input type="hidden" name="email" value="{{ $data['email'] }}">
                <input type="hidden" name="is_send_email" value="{{ $data['is_send_email'] }}">
                <input type="hidden" name="feedback" value="{{ $data['feedback'] }}">
                <button type="button" class="btn btn-primary w-25 mr-3" onclick="history.back();">再入力</button>
                <input type="submit" class="btn btn-success w-25 mr-3" value="送信">
            </form>
        </div>
    </div>
@endsection